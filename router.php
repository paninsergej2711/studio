<?php
/**
 * Router для встроенного PHP-сервера (php -S host:port router.php)
 * ЧПУ без .php, портфолио /portfolio/{slug}.
 * Страницы лежат в pages/ и pages/sites/, точка входа index.php в корне.
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rawurldecode($uri);

// Отдаём существующие статические файлы как есть (css, js, img, submit_*.php)
$fsPath = __DIR__ . $uri;
if ($uri !== '/' && is_file($fsPath)) {
    return false;
}

$route = trim($uri, '/');

// ============================================================
// Redirects: old flat URLs → new nested URLs
// ============================================================

// Old /dev/* URLs → /sites/*
$devRedirects = [
    'landing' => '/sites/landing',
    'catalog' => '/sites/catalog',
    'marketplace' => '/sites/marketplace',
    'internet-magazin' => '/sites/internet-magazin',
    'vizitka' => '/sites/corporate',
];
if (isset($devRedirects[$route])) {
    header('Location: ' . $devRedirects[$route], true, 301);
    return true;
}
if (preg_match('#^dev/([A-Za-z0-9\-]+)$#', $route, $m)) {
    header('Location: /sites/' . $m[1], true, 301);
    return true;
}

// Old promo child pages → /promo/*
$oldPromoRedirects = [
    'promotion' => '/promo/seo',
    'yandex-direct' => '/promo/yandex-direct',
    'smm' => '/promo/smm',
];
if (isset($oldPromoRedirects[$route])) {
    header('Location: ' . $oldPromoRedirects[$route], true, 301);
    return true;
}

// Old content child pages → /content/*
$oldContentRedirects = [
    'parsing' => '/content/parsing',
    'filling' => '/content/filling',
    'site-audit' => '/content/site-audit',
    'site-support' => '/content/site-support',
];
if (isset($oldContentRedirects[$route])) {
    header('Location: ' . $oldContentRedirects[$route], true, 301);
    return true;
}

// ============================================================
// Nested routes
// ============================================================

// /sites → pages/sites/dev.php
if ($route === 'sites') {
    $_GET['dev_sub'] = '';
    define('DEV_SUBPAGE', '');
    require __DIR__ . '/pages/sites/dev.php';
    return true;
}
// /sites/{slug}
$sitesMap = ['corporate' => 'vizitka.php'];
if (preg_match('#^sites/([A-Za-z0-9\-]+)$#', $route, $m)) {
    $sub = $m[1];
    $fileName = $sitesMap[$sub] ?? ($sub . '.php');
    $pagePath = __DIR__ . '/pages/sites/' . $fileName;
    if (is_file($pagePath)) {
        $_GET['dev_sub'] = $sub;
        define('DEV_SUBPAGE', $sub);
        require $pagePath;
        return true;
    }
    http_response_code(404);
    require __DIR__ . '/index.php';
    return true;
}

// /promo/{slug} → pages/sites/{slug}.php
// /promo → pages/sites/promo.php (родительская)
// Redirect old /promo/promotion to /promo/seo
if ($route === 'promo/promotion') {
    header('Location: /promo/seo', true, 301);
    return true;
}
if ($route === 'promo') {
    require __DIR__ . '/pages/sites/promo.php';
    return true;
}
if (preg_match('#^promo/([A-Za-z0-9\-]+)$#', $route, $m)) {
    $sub = $m[1];
    // yandex-direct.php lives as yandex-direct.php in pages/sites/
    $fileName = $sub . '.php';
    $pagePath = __DIR__ . '/pages/sites/' . $fileName;
    if (is_file($pagePath)) {
        require $pagePath;
        return true;
    }
    http_response_code(404);
    require __DIR__ . '/index.php';
    return true;
}

// /content/{slug} → pages/sites/{slug}.php
// /content → pages/content.php (родительская)
if ($route === 'content') {
    require __DIR__ . '/pages/content.php';
    return true;
}
if (preg_match('#^content/([A-Za-z0-9\-]+)$#', $route, $m)) {
    $sub = $m[1];
    $fileName = $sub . '.php';
    $pagePath = __DIR__ . '/pages/sites/' . $fileName;
    if (is_file($pagePath)) {
        require $pagePath;
        return true;
    }
    http_response_code(404);
    require __DIR__ . '/index.php';
    return true;
}

// Sitemap
if ($route === 'sitemap.xml') {
    require __DIR__ . '/sitemap.php';
    return true;
}

// Главная
if ($route === '') {
    require __DIR__ . '/index.php';
    return true;
}

// Портфолио: /portfolio/{slug}
if (preg_match('#^portfolio/([A-Za-z0-9\-]+)$#', $route, $m)) {
    $_GET['slug'] = $m[1];
    require __DIR__ . '/pages/project.php';
    return true;
}

// Обычная страница: ищем в pages/sites, pages, корне
if (preg_match('#^[A-Za-z0-9\-]+$#', $route)) {
    $candidates = [
        __DIR__ . '/pages/sites/' . $route . '.php',
        __DIR__ . '/pages/' . $route . '.php',
        __DIR__ . '/' . $route . '.php',
    ];
    foreach ($candidates as $file) {
        if (is_file($file)) {
            require $file;
            return true;
        }
    }
}

// 404
http_response_code(404);
require __DIR__ . '/index.php';
return true;

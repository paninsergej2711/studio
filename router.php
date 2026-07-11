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

// Redirect old site page URLs to /dev/*
$devRedirects = [
    'landing' => '/dev/landing',
    'catalog' => '/dev/catalog',
    'marketplace' => '/dev/marketplace',
    'internet-magazin' => '/dev/internet-magazin',
    'vizitka' => '/dev/corporate',
];
if (isset($devRedirects[$route])) {
    header('Location: ' . $devRedirects[$route], true, 301);
    return true;
}

// Dev subpages: /dev/{slug} → pages/sites/{slug}.php
$devMap = [
    'corporate' => 'vizitka.php',
];
if (preg_match('#^dev/([A-Za-z0-9\-]+)$#', $route, $m)) {
    $sub = $m[1];
    $fileName = $devMap[$sub] ?? ($sub . '.php');
    $pagePath = __DIR__ . '/pages/sites/' . $fileName;
    if (is_file($pagePath)) {
        $_GET['dev_sub'] = $sub;
        define('DEV_SUBPAGE', $sub);
        require $pagePath;
        return true;
    }
    // 404
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

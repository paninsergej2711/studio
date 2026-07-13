<?php
require_once __DIR__ . '/config.php';
$base = 'https://bobrstudio.ru';

header('Content-Type: application/xml; charset=utf-8');

$urls = [
    '/' => ['priority' => '1.0', 'changefreq' => 'weekly'],
    '/sites/internet-magazin' => ['priority' => '0.9', 'changefreq' => 'monthly'],
    '/sites/marketplace' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/sites/landing' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/sites/catalog' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/sites/corporate' => ['priority' => '0.7', 'changefreq' => 'monthly'],
    '/mobile-app' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/telegram-bot' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/crm' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/app-design' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/sites' => ['priority' => '0.9', 'changefreq' => 'weekly'],
    '/design' => ['priority' => '0.7', 'changefreq' => 'monthly'],
    '/promo' => ['priority' => '0.9', 'changefreq' => 'weekly'],
    '/promo/seo' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/promo/yandex-direct' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/promo/smm' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/content' => ['priority' => '0.8', 'changefreq' => 'weekly'],
    '/content/parsing' => ['priority' => '0.7', 'changefreq' => 'monthly'],
    '/content/filling' => ['priority' => '0.7', 'changefreq' => 'monthly'],
    '/content/site-audit' => ['priority' => '0.7', 'changefreq' => 'monthly'],
    '/content/site-support' => ['priority' => '0.7', 'changefreq' => 'monthly'],
    '/portfolio' => ['priority' => '0.9', 'changefreq' => 'weekly'],
    '/contacts' => ['priority' => '0.6', 'changefreq' => 'yearly'],
    '/privacy' => ['priority' => '0.3', 'changefreq' => 'yearly'],
    '/offer' => ['priority' => '0.3', 'changefreq' => 'yearly'],
];

$projects = [];
$projectsFile = __DIR__ . '/data/projects.php';
if (is_file($projectsFile)) {
    $projects = require $projectsFile;
}

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $loc => $meta): ?>
	<url>
		<loc><?= $base . $loc ?></loc>
		<priority><?= $meta['priority'] ?></priority>
		<changefreq><?= $meta['changefreq'] ?></changefreq>
	</url>
<?php endforeach; ?>
<?php foreach ($projects as $slug => $project): ?>
	<url>
		<loc><?= $base ?>/portfolio/<?= rawurlencode($slug) ?></loc>
		<priority>0.7</priority>
		<changefreq>monthly</changefreq>
	</url>
<?php endforeach; ?>
</urlset>

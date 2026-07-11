<?php
require_once __DIR__ . '/config.php';
$base = SITE_URL;

header('Content-Type: application/xml; charset=utf-8');

$urls = [
    '/' => ['priority' => '1.0', 'changefreq' => 'weekly'],
    '/dev/internet-magazin' => ['priority' => '0.9', 'changefreq' => 'monthly'],
    '/dev/marketplace' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/dev/landing' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/dev/catalog' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/dev/corporate' => ['priority' => '0.7', 'changefreq' => 'monthly'],
    '/mobile-app' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/telegram-bot' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/crm' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/site-support' => ['priority' => '0.7', 'changefreq' => 'monthly'],
    '/site-audit' => ['priority' => '0.7', 'changefreq' => 'monthly'],
    '/yandex-direct' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/smm' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/filling' => ['priority' => '0.7', 'changefreq' => 'monthly'],
    '/parsing' => ['priority' => '0.7', 'changefreq' => 'monthly'],
    '/promotion' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/promo' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/app-design' => ['priority' => '0.8', 'changefreq' => 'monthly'],
    '/dev' => ['priority' => '0.9', 'changefreq' => 'weekly'],
    '/design' => ['priority' => '0.7', 'changefreq' => 'monthly'],
    '/content' => ['priority' => '0.7', 'changefreq' => 'monthly'],
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

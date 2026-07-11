<?php
require_once __DIR__ . '/../config.php';

$pageTitle = 'Управление SEO — Bobr Studio';
$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['page_key'])) {
    $stmt = $pdo->prepare("INSERT INTO seo_meta (page_key, seo_title, seo_description) VALUES (:k,:t,:d) ON DUPLICATE KEY UPDATE seo_title=:t2, seo_description=:d2");
    $stmt->execute(['k'=>$_POST['page_key'],'t'=>$_POST['seo_title'],'d'=>$_POST['seo_description'],'t2'=>$_POST['seo_title'],'d2'=>$_POST['seo_description']]);
    $msg = 'Сохранено.';
}

// Fetch all SEO entries
$all = $pdo->query("SELECT * FROM seo_meta ORDER BY page_key")->fetchAll();
$seoMap = [];
foreach ($all as $r) $seoMap[$r['page_key']] = $r;

// Page definitions
$pages = [
    'index.php' => 'Главная — Веб-студия',
    'internet-magazin.php' => 'Интернет-магазин',
    'portfolio.php' => 'Портфолио',
    'contacts.php' => 'Контакты',
    'telegram-bot.php' => 'Боты',
    'marketplace.php' => 'Маркетплейс',
    'development.php' => 'Разработка',
    'promotion.php' => 'Продвижение',
    'design.php' => 'Дизайн',
    'content.php' => 'Контент',
];

// Portfolio projects
$projects = require __DIR__ . '/../data/projects.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $pageTitle ?></title>
	<style>
		*{margin:0;padding:0;box-sizing:border-box}
		body{font-family:'Exo 2',sans-serif;background:#f4f5f7;color:#1a1a1a}
		.container{max-width:1100px;margin:0 auto;padding:20px}
		h1{font-size:22px;margin-bottom:6px;color:#8f4f23}
		h2{font-size:18px;margin:24px 0 12px;color:#1a1a1a}
		.back-link{display:inline-block;margin-bottom:16px;color:#8f4f23;text-decoration:none;font-weight:600}
		.msg{background:#d4edda;color:#155724;padding:10px 16px;border-radius:6px;margin-bottom:16px}
		.seo-row{display:grid;grid-template-columns:240px 1fr 1fr 80px;gap:10px;align-items:center;padding:8px 0;border-bottom:1px solid #eee;font-size:13px}
		.seo-row.header{font-weight:700;background:#f0f0f0;padding:10px 8px;border-radius:4px}
		.seo-row input{border:1px solid #ddd;padding:6px 10px;border-radius:4px;font-size:13px;width:100%;font-family:inherit}
		.seo-row input:focus{border-color:#8f4f23;outline:none}
		.seo-save{background:#8f4f23;color:#fff;border:none;padding:6px 12px;border-radius:4px;cursor:pointer;font-size:12px;white-space:nowrap}
		.seo-save:hover{background:#71391a}
		.page-name{font-weight:600;word-break:break-all;font-size:12px}
		.tabs{margin-bottom:16px;display:flex;gap:8px}
		.tab{padding:8px 20px;background:#fff;border-radius:6px;color:#666;text-decoration:none;font-weight:500}
		.tab.active{background:#8f4f23;color:#fff}
	</style>
</head>
<body>
<div class="container">
	<div class="tabs">
		<a href="index.php" class="tab">Заявки</a>
		<a href="seo.php" class="tab active">SEO-метатеги</a>
	</div>
	<a href="../index.php" class="back-link">&larr; На сайт</a>
	<h1>Управление SEO-метатегами</h1>
	<?php if($msg): ?><div class="msg"><?= $msg ?></div><?php endif; ?>

	<h2>Страницы сайта</h2>
	<div class="seo-row header"><span>Страница</span><span>Title</span><span>Description</span><span></span></div>
	<?php foreach($pages as $key => $label):
		$s = $seoMap[$key] ?? null;
		$title = $s['seo_title'] ?? '';
		$desc  = $s['seo_description'] ?? '';
	?>
	<form method="post" class="seo-row">
		<span class="page-name"><?= htmlspecialchars($label) ?><br><small><?= htmlspecialchars($key) ?></small></span>
		<input type="text" name="seo_title" value="<?= htmlspecialchars($title) ?>" placeholder="По умолчанию">
		<input type="text" name="seo_description" value="<?= htmlspecialchars($desc) ?>" placeholder="По умолчанию">
		<input type="hidden" name="page_key" value="<?= htmlspecialchars($key) ?>">
		<button type="submit" class="seo-save">Сохранить</button>
	</form>
	<?php endforeach; ?>

	<h2>Проекты портфолио</h2>
	<div class="seo-row header"><span>Проект</span><span>Title</span><span>Description</span><span></span></div>
	<?php foreach($projects as $slug => $proj):
		$key = 'project.php?slug=' . $slug;
		$s = $seoMap[$key] ?? null;
		$title = $s['seo_title'] ?? '';
		$desc  = $s['seo_description'] ?? '';
	?>
	<form method="post" class="seo-row">
		<span class="page-name"><?= htmlspecialchars($proj['title']) ?><br><small><?= htmlspecialchars($key) ?></small></span>
		<input type="text" name="seo_title" value="<?= htmlspecialchars($title) ?>" placeholder="По умолчанию">
		<input type="text" name="seo_description" value="<?= htmlspecialchars($desc) ?>" placeholder="По умолчанию">
		<input type="hidden" name="page_key" value="<?= htmlspecialchars($key) ?>">
		<button type="submit" class="seo-save">Сохранить</button>
	</form>
	<?php endforeach; ?>
</div>
</body>
</html>

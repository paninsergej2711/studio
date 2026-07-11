<?php
require_once __DIR__ . '/../config.php';

$pageTitle = 'Админ-панель — Заявки — Bobr Studio';
$pageDesc = 'Просмотр заявок с сайта.';

// Determine active tab
$tab = $_GET['tab'] ?? 'brief';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= htmlspecialchars($pageTitle) ?></title>
	<style>
		* { margin: 0; padding: 0; box-sizing: border-box; }
		body { font-family: 'Exo 2', sans-serif; background: #f4f5f7; color: #1a1a1a; }
		.container { max-width: 1300px; margin: 0 auto; padding: 20px; }
		h1 { font-size: 24px; margin-bottom: 20px; color: #8f4f23; }
		nav a { display: inline-block; padding: 10px 20px; margin-right: 8px; background: #fff; border-radius: 8px 8px 0 0; color: #666; text-decoration: none; font-weight: 500; }
		nav a.active { background: #8f4f23; color: #fff; }
		table { width: 100%; border-collapse: collapse; background: #fff; border-radius: 0 8px 8px 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.06); }
		th { background: #1a1a1a; color: #fff; padding: 12px 10px; text-align: left; font-size: 13px; font-weight: 600; }
		td { padding: 10px; border-bottom: 1px solid #eee; font-size: 13px; vertical-align: top; }
		tr:hover td { background: #fafafa; }
		.back-link { display: inline-block; margin-bottom: 20px; color: #8f4f23; text-decoration: none; font-weight: 500; }
		.no-data { text-align: center; padding: 40px; color: #999; }
	</style>
</head>
<body>
<div class="container">
	<a href="../index.php" class="back-link">&larr; На сайт</a>
	<h1>Заявки</h1>
	<nav>
		<a href="?tab=brief" class="<?= $tab === 'brief' ? 'active' : '' ?>">Бриф (интернет-магазин)</a>
		<a href="?tab=contacts" class="<?= $tab === 'contacts' ? 'active' : '' ?>">Сообщения с контактов</a>
	</nav>
	<br>

<?php if ($tab === 'brief'): ?>
	<table>
		<thead>
			<tr>
				<th>ID</th><th>Дата</th><th>Тематика</th><th>Бюджет</th><th>Дизайн</th>
				<th>Функционал</th><th>Интеграции</th><th>CMS</th><th>Товары</th>
				<th>Имя</th><th>Телефон</th><th>Email</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$rows = $pdo->query("SELECT * FROM brief_submissions ORDER BY created_at DESC")->fetchAll();
		if (empty($rows)): ?>
			<tr><td colspan="12" class="no-data">Пока нет заявок</td></tr>
		<?php else:
		foreach ($rows as $r):
			$func = json_decode($r['functionalities'] ?? '[]', true) ?: [];
			$intg = json_decode($r['integrations'] ?? '[]', true) ?: [];
		?>
			<tr>
				<td><?= $r['id'] ?></td>
				<td><?= date('d.m.y H:i', strtotime($r['created_at'])) ?></td>
				<td><?= htmlspecialchars($r['theme'] ?? '—') ?><?= $r['theme_other'] ? ' (' . htmlspecialchars($r['theme_other']) . ')' : '' ?></td>
				<td><?= htmlspecialchars($r['budget'] ?? '—') ?></td>
				<td><?= htmlspecialchars($r['design'] ?? '—') ?></td>
				<td><?= $func ? htmlspecialchars(implode(', ', $func)) : '—' ?></td>
				<td><?= $intg ? htmlspecialchars(implode(', ', $intg)) : '—' ?></td>
				<td><?= htmlspecialchars($r['cms'] ?? '—') ?></td>
				<td><?= htmlspecialchars($r['products_count'] ?? '—') ?></td>
				<td><?= htmlspecialchars($r['name'] ?? '—') ?></td>
				<td><?= htmlspecialchars($r['phone'] ?? '—') ?></td>
				<td><?= htmlspecialchars($r['email'] ?? '—') ?></td>
			</tr>
		<?php endforeach; endif; ?>
		</tbody>
	</table>

<?php else: ?>
	<table>
		<thead>
			<tr><th>ID</th><th>Дата</th><th>Имя</th><th>Телефон</th><th>Email</th><th>Сообщение</th></tr>
		</thead>
		<tbody>
		<?php
		$rows = $pdo->query("SELECT * FROM contact_messages ORDER BY created_at DESC")->fetchAll();
		if (empty($rows)): ?>
			<tr><td colspan="6" class="no-data">Пока нет сообщений</td></tr>
		<?php else:
		foreach ($rows as $r): ?>
			<tr>
				<td><?= $r['id'] ?></td>
				<td><?= date('d.m.y H:i', strtotime($r['created_at'])) ?></td>
				<td><?= htmlspecialchars($r['name']) ?></td>
				<td><?= htmlspecialchars($r['phone'] ?? '—') ?></td>
				<td><?= htmlspecialchars($r['email'] ?? '—') ?></td>
				<td><?= nl2br(htmlspecialchars($r['message'])) ?></td>
			</tr>
		<?php endforeach; endif; ?>
		</tbody>
	</table>
<?php endif; ?>
</div>
</body>
</html>

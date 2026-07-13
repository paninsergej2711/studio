<?php
require_once __DIR__ . '/../config.php';

$slug    = $_GET['slug'] ?? '';
$projects = require __DIR__ . '/../data/projects.php';
$project = $projects[$slug] ?? null;

if (!$project) {
    http_response_code(404);
    $pageTitle = 'Проект не найден — Bobr Studio';
    $pageDesc  = 'Проект не найден.';
    require_once __DIR__ . '/../includes/header.php';
    echo '<section class="page-hero section-light"><div class="container"><h1>Проект не найден</h1><p>К сожалению, страница этого проекта не существует. <a href="/portfolio" style="color:#8f4f23">Вернуться в портфолио</a>.</p></div></section>';
    require_once __DIR__ . '/../includes/footer.php';
    exit;
}

$pageTitle = $project['title'] . ' — портфолио Bobr Studio';
$pageDesc  = strip_tags($project['desc']);
$pageDesc  = mb_substr($pageDesc, 0, 160) . '...';
$ogImage   = isset($images[0]) ? $images[0] : '/logo.svg';

// Keyword-rich alt prefix for SEO
$altPrefix = ($project['category'] === 'app' ? 'Разработка приложения' : 'Разработка сайта') . ' — ' . $project['title'];

// Get all images from project folder
$images = [];
$folderPath = __DIR__ . '/../' . $project['folder'];
if (is_dir($folderPath)) {
    $files = array_merge(
        glob($folderPath . '/*.png') ?: [],
        glob($folderPath . '/*.jpg') ?: [],
        glob($folderPath . '/*.jpeg') ?: [],
        glob($folderPath . '/*.webp') ?: []
    );
    sort($files);
    foreach ($files as $f) {
        $images[] = '/' . $project['folder'] . '/' . basename($f);
    }
}

require_once __DIR__ . '/../includes/header.php';
?>

<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" },
		{ "@type": "ListItem", "position": 2, "name": "Портфолио", "item": "<?= SITE_URL ?>/portfolio" },
		{ "@type": "ListItem", "position": 3, "name": "<?= htmlspecialchars($project['title'], ENT_QUOTES) ?>", "item": "<?= SITE_URL ?>/portfolio/<?= rawurlencode($slug) ?>" }
	]
}
</script>

<section class="page-hero section-light">
	<div class="container">
		<div class="project-nav">
			<a href="/portfolio" class="project-back">&larr; Все проекты</a>
			<span class="project-cat-badge"><?= $project['category'] === 'app' ? 'Приложение' : 'Сайт' ?></span>
		</div>
		<h1><?= htmlspecialchars($project['title']) ?></h1>
		<div class="project-tags">
			<?php foreach ($project['type_tags'] as $tag): ?>
				<span class="tag"><?= htmlspecialchars($tag) ?></span>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="project-detail section-light" style="padding-top:20px">
	<div class="container">
		<div class="project-layout">
			<div class="project-gallery-wrap">
				<?php if (count($images) > 0): ?>
				<div class="project-gallery">
					<div class="gallery-main" id="galleryMain">
						<img src="<?= htmlspecialchars($images[0]) ?>" alt="<?= htmlspecialchars($altPrefix) ?>" id="galleryPreview">
						<?php if (count($images) > 1): ?>
						<button class="gallery-nav gallery-prev" id="galleryPrev" aria-label="Назад">&lsaquo;</button>
						<button class="gallery-nav gallery-next" id="galleryNext" aria-label="Вперёд">&rsaquo;</button>
						<?php endif; ?>
					</div>
					<?php if (count($images) > 1): ?>
					<div class="gallery-thumbs">
						<?php foreach ($images as $i => $img): ?>
						<button class="gallery-thumb <?= $i === 0 ? 'active' : '' ?>" data-src="<?= htmlspecialchars($img) ?>" data-index="<?= $i ?>">
							<img src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($altPrefix) ?> — скриншот <?= $i + 1 ?>" loading="lazy">
						</button>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
				</div>
				<?php endif; ?>
			</div>

			<div class="project-info">
				<div class="project-desc">
					<?= $project['desc'] ?>
				</div>
				<?php if (!empty($project['features'])): ?>
				<h3>Что сделано</h3>
				<ul class="project-features">
					<?php foreach ($project['features'] as $f): ?>
					<li><?= htmlspecialchars($f) ?></li>
					<?php endforeach; ?>
				</ul>
				<?php endif; ?>
				<a href="/#brief" class="btn btn-main" style="margin-top:20px">Обсудить похожий проект</a>
			</div>
		</div>
	</div>
</section>

<?php if (count($images) > 1): ?>
<script>
(function(){
	var imgs = <?= json_encode($images, JSON_UNESCAPED_SLASHES) ?>;
	var current = 0;
	var mainImg = document.getElementById('galleryPreview');
	var thumbs = document.querySelectorAll('.gallery-thumb');

	function show(idx) {
		current = (idx + imgs.length) % imgs.length;
		mainImg.src = imgs[current];
		thumbs.forEach(function(t, i) { t.classList.toggle('active', i === current); });
	}

	document.getElementById('galleryPrev')?.addEventListener('click', function(){ show(current - 1); });
	document.getElementById('galleryNext')?.addEventListener('click', function(){ show(current + 1); });
	thumbs.forEach(function(th){
		th.addEventListener('click', function(){ show(parseInt(th.getAttribute('data-index'))); });
	});
	mainImg.addEventListener('click', function(){ show(current + 1); });
})();
</script>
<?php endif; ?>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

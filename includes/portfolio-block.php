<?php
$projects = require __DIR__ . '/../data/projects.php';
$darkBg = isset($pfDarkBg) ? $pfDarkBg : false;
$bgClass = $darkBg ? 'section-dark' : 'section-light';
$waveClass = $darkBg ? 'wave-light' : 'wave-footer';

// Map type_tags to filter categories
function getFilterTags($tags) {
	$filters = [];
	foreach ($tags as $t) {
		$l = mb_strtolower($t);
		if (strpos($l, 'интернет-магазин') !== false || strpos($l, 'магазин') !== false || strpos($l, 'e-commerce') !== false)
			$filters[] = 'internet-magazin';
		if (strpos($l, 'маркетплейс') !== false || strpos($l, 'агрегатор') !== false)
			$filters[] = 'marketplace';
		if (strpos($l, 'визитка') !== false || strpos($l, 'корпоративный') !== false || strpos($l, 'лендинг') !== false)
			$filters[] = 'vizitka';
		if (strpos($l, 'приложение') !== false)
			$filters[] = 'prilozheniya';
		if (strpos($l, 'каталог') !== false)
			$filters[] = 'katalog';
	}
	return array_unique($filters);
}

// Кеш превью проектов (glob по файловой системе кешируется на 1 час)
$thumbCacheFile = __DIR__ . '/../data/.portfolio-thumbs.json';
$thumbMap = [];
if (is_file($thumbCacheFile) && (time() - filemtime($thumbCacheFile) < 3600)) {
	$thumbMap = json_decode(file_get_contents($thumbCacheFile), true) ?: [];
}
$cacheDirty = false;

// Pre-compute first image for each project
foreach ($projects as $slug => &$p) {
	if (array_key_exists($slug, $thumbMap)) {
		$p['thumb'] = $thumbMap[$slug];
	} else {
		$dir = __DIR__ . '/../' . $p['folder'];
		$images = glob($dir . '/*.png') ?: glob($dir . '/*.jpg') ?: glob($dir . '/*.jpeg') ?: [];
		$p['thumb'] = !empty($images) ? '/' . $p['folder'] . '/' . basename($images[0]) : '';
		$thumbMap[$slug] = $p['thumb'];
		$cacheDirty = true;
	}
	$p['filters'] = implode(',', getFilterTags($p['type_tags']));
	$p['filter_display'] = $p['category'] === 'app' ? 'Приложение' : ($p['type_tags'][0] ?? 'Сайт');
}
unset($p);

if ($cacheDirty) {
	@file_put_contents($thumbCacheFile, json_encode($thumbMap, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
}
?>

<section class="portfolio-preview <?= $bgClass ?>" id="portfolioBlock">
	<div class="container">
		<div class="section-title-wrap">
			<<?= $pfTitleTag ?? 'h3' ?> class="section-title"><?= $pfTitle ?? 'Наше портфолио' ?></<?= $pfTitleTag ?? 'h3' ?>>
			<p class="section-subtitle"><?= $pfSubtitle ?? 'Более 30 успешно реализованных проектов — сайты и мобильные приложения' ?></p>
		</div>

		<div class="portfolio-filters" id="pfFilters">
			<button class="filter-btn active" data-filter="all">Все</button>
			<button class="filter-btn" data-filter="internet-magazin">Интернет магазин</button>
			<button class="filter-btn" data-filter="marketplace">Маркетплейс</button>
			<button class="filter-btn" data-filter="vizitka">Визитка</button>
			<button class="filter-btn" data-filter="prilozheniya">Приложения</button>
			<button class="filter-btn" data-filter="katalog">Каталог</button>
		</div>

		<div class="portfolio-grid" id="pfGrid">
			<?php foreach ($projects as $slug => $p): if (empty($p['thumb'])) continue; ?>
			<a href="/portfolio/<?= $slug ?>" class="portfolio-item" data-filters="<?= $p['filters'] ?>" data-cat="<?= $p['category'] ?>">
				<img src="<?= htmlspecialchars($p['thumb']) ?>" alt="Разработка <?= $p['category'] === 'app' ? 'приложения' : 'сайта' ?> <?= htmlspecialchars($p['title']) ?>" loading="lazy">
				<span class="portfolio-cat"><?= htmlspecialchars($p['filter_display']) ?></span>
			</a>
			<?php endforeach; ?>
		</div>

		<div class="center-btn" id="pfLoadMoreWrap">
			<button class="btn btn-load-more" id="pfLoadMore">Загрузить ещё</button>
		</div>
	</div>

	<?php if (!isset($pfNoWave)): ?>
	<div class="wave-divider <?= $waveClass ?>" aria-hidden="true">
		<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
	</div>
	<?php endif; ?>
</section>

<script>
(function(){
	var grid = document.getElementById('pfGrid');
	var btns = document.getElementById('pfFilters');
	var loadMore = document.getElementById('pfLoadMore');
	var wrap = document.getElementById('pfLoadMoreWrap');
	if (!grid) return;

	var items = Array.from(grid.querySelectorAll('.portfolio-item'));
	var visible = 8;
	var current = 'all';

	function render() {
		var shown = 0;
		items.forEach(function(item) {
			var filters = (item.getAttribute('data-filters') || '').split(',').filter(Boolean);
			var match = (current === 'all' || filters.indexOf(current) !== -1);
			if (match && shown < visible) { shown++; item.style.display = ''; item.classList.add('fade-in'); }
			else { item.style.display = 'none'; }
		});
		if (wrap) wrap.style.display = (shown >= visible && items.some(function(i) {
			var f = (i.getAttribute('data-filters') || '').split(',').filter(Boolean);
			return (current === 'all' || f.indexOf(current) !== -1) && i.style.display !== 'none';
		})) ? '' : 'none';
	}

	if (btns) {
		btns.querySelectorAll('button').forEach(function(b) {
			b.addEventListener('click', function() {
				btns.querySelectorAll('button').forEach(function(x) { x.classList.remove('active'); });
				b.classList.add('active');
				current = b.getAttribute('data-filter');
				visible = 8;
				render();
			});
		});
	}

	if (loadMore) {
		loadMore.addEventListener('click', function() { visible += 8; render(); });
	}

	render();
})();
</script>

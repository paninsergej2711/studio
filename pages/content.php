<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'Контент для сайтов — наполнение, тексты, SEO-описания | Bobr Studio';
$pageDesc = 'Создание контента для сайтов: SEO-тексты, изображения, описания товаров, наполнение интернет-магазинов. Парсинг данных, аудит, поддержка.';
$ogImage = '/img/uslugi/email.webp';
require_once __DIR__ . '/../includes/header.php';
?>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" },
		{ "@type": "ListItem", "position": 2, "name": "Контент для сайтов", "item": "<?= SITE_URL ?>/content" }
	]
}
</script>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "Service",
	"name": "Контент для сайтов",
	"description": "Создание контента для сайтов: SEO-тексты, изображения, описания товаров, наполнение интернет-магазинов.",
	"provider": { "@type": "ProfessionalService", "name": "Bobr Studio", "url": "<?= SITE_URL ?>" },
	"areaServed": "RU",
	"offers": { "@type": "Offer", "price": "5000", "priceCurrency": "RUB" }
}
</script>

	<section class="page-hero section-light">
		<div class="container">
			<div class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1"></span> / <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">Контент</span><meta itemprop="position" content="2"></span></div>
			<h1>Контент для сайтов</h1>
		</div>
	</section>
	<section class="section-light" style="padding-top:10px">
		<div class="container service-layout">
			<div class="service-text">
				<h2>Контент, который продаёт и привлекает</h2>
				<p>Сайт без качественного контента не работает. Мы готовим тексты, описания товаров, изображения и SEO-материалы, которые помогают сайту ранжироваться и конвертировать посетителей в клиентов.</p>
				<ul>
					<li>SEO-описания товаров и категорий</li>
					<li>Информационные статьи и блог</li>
					<li>Продающие тексты для лендингов</li>
					<li>Обработка и оптимизация изображений</li>
					<li>Наполнение интернет-магазинов</li>
					<li>Микроразметка и мета-теги</li>
				</ul>
				<a href="/#brief" class="btn btn-main">Оставить заявку</a>
			</div>
			<div class="service-image">
				<img loading="lazy" src="/img/uslugi/email.webp" alt="Контент для сайтов">
			</div>
		</div>
	</section>
	<?php require_once __DIR__ . '/../includes/footer.php'; ?>
<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'Разработка сайтов любой сложности — корпоративные, лендинги, веб-сервисы | Bobr Studio';
$pageDesc = 'Разработка сайтов любой сложности под ключ: корпоративные сайты, лендинги, веб-сервисы, каталоги. Backend и frontend. Индивидуальный подход.';
$ogImage = '/img/svg/dev.svg';
require_once __DIR__ . '/../includes/header.php';
?>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" },
		{ "@type": "ListItem", "position": 2, "name": "Разработка сайтов", "item": "<?= SITE_URL ?>/development" }
	]
}
</script>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "Service",
	"name": "Разработка сайтов",
	"description": "Разработка сайтов любой сложности: корпоративные сайты, лендинги, веб-сервисы. Backend и frontend.",
	"provider": { "@type": "ProfessionalService", "name": "Bobr Studio", "url": "<?= SITE_URL ?>" },
	"areaServed": "RU",
	"offers": { "@type": "Offer", "price": "15000", "priceCurrency": "RUB" }
}
</script>

	<section class="page-hero section-light">
		<div class="container">
			<div class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1"></span> / <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">Разработка сайтов</span><meta itemprop="position" content="2"></span></div>
			<h1>Разработка сайтов</h1>
		</div>
	</section>
	<section class="section-light" style="padding-top:10px">
		<div class="container service-layout">
			<div class="service-text">
				<h2>От лендинга до сложного веб-сервиса</h2>
				<p>Мы разрабатываем корпоративные сайты, лендинги, веб-сервисы и порталы. Чистый код, современные технологии и внимательное отношение к деталям.</p>
				<ul>
					<li>Корпоративные сайты и визитки</li>
					<li>Лендинги и промо-страницы</li>
					<li>Веб-сервисы и личные кабинеты</li>
					<li>Backend на PHP, Python, Node.js</li>
					<li>Frontend на React, Vue, Angular</li>
					<li>API и интеграции со сторонними сервисами</li>
				</ul>
				<a href="/#brief" class="btn btn-main">Оставить заявку</a>
			</div>
			<div class="service-image">
				<img loading="lazy" src="/img/uslugi/backend.png" alt="Разработка сайтов">
			</div>
		</div>
	</section>
	<?php require_once __DIR__ . '/../includes/footer.php'; ?>
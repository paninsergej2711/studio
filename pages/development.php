<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'Разработка сайтов — Bobr Studio';
$pageDesc = 'Разработка сайтов любой сложности: корпоративные сайты, лендинги, веб-сервисы. Backend и frontend.';
require_once __DIR__ . '/../includes/header.php';
?>

	<section class="page-hero section-light">
		<div class="container">
			<div class="breadcrumb"><a href="/">Главная</a> / Разработка</div>
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
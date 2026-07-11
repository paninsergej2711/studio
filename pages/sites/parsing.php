<?php
require_once __DIR__ . '/../../config.php';
$pageTitle = 'Парсинг данных под ключ — заказать сбор данных с сайтов | Bobr Studio';
$pageDesc = 'Профессиональный парсинг данных под ключ: сбор товаров, цен, контактов и контента с сайтов и маркетплейсов. Парсинг Ozon, Wildberries, Avito, Kaspi и любых сайтов. Выгрузка в Excel, CSV, JSON, Google Sheets.';
$ogImage = '/img/svg/parse.svg';
require_once __DIR__ . '/../../includes/header.php';
?>

<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" },
		{ "@type": "ListItem", "position": 2, "name": "Парсинг данных", "item": "<?= SITE_URL ?>/parsing" }
	]
}
</script>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "Service",
	"name": "Парсинг данных под ключ",
	"description": "Сбор и обработка данных с сайтов и маркетплейсов: товары, цены, контакты, отзывы. Парсинг Ozon, Wildberries, Avito, Kaspi. Выгрузка в Excel, CSV, JSON.",
	"provider": {
		"@type": "ProfessionalService",
		"name": "Bobr Studio",
		"url": "<?= SITE_URL ?>"
	},
	"areaServed": "RU",
	"offers": {
		"@type": "Offer",
		"price": "15000",
		"priceCurrency": "RUB"
	}
}
</script>

	<section class="hero section-light">
		<canvas class="hero-particles" id="heroParticles" aria-hidden="true"></canvas>
		<div class="container hero-grid">
			<div class="hero-content">
				<div class="slider-title">
					Профессиональный
					<h1>Парсинг <span class="text-accent">данных</span> под ключ</h1>
					— сбор и обработка данных с сайтов и маркетплейсов
				</div>
				<p class="slider-text">Собираем товары, цены, контакты и контент с любых сайтов и маркетплейсов: Ozon, Wildberries, Avito, Kaspi, Яндекс.Маркет. Автоматический парсинг с ежедневным обновлением и выгрузкой в Excel, CSV, JSON, Google Sheets или вашу CRM.</p>
				<a href="#brief" class="btn btn-main">Заказать парсинг</a>
			</div>
			<div class="hero-image">
				<img src="/img/svg/parse.svg" alt="Профессиональный парсинг данных под ключ — Bobr Studio" loading="eager" style="max-height:550px;width:auto">
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<section class="stages section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Этапы парсинга данных</h2></div>
			<div class="stages-grid">
				<div class="stage-card dev-etap"><div class="stage-num">01</div><div class="stage-icon"><img loading="lazy" src="/img/icons/analise.png" alt="Анализ источника данных"></div><h3 class="stage-title">Анализ источника</h3><ul><li>Изучаем структуру сайта-источника</li><li>Определяем нужные поля и данные</li><li>Оцениваем объём и частоту обновления</li><li>Готовим схему данных</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">02</div><div class="stage-icon"><img loading="lazy" src="/img/icons/scripts.png" alt="Разработка парсера"></div><h3 class="stage-title">Разработка парсера</h3><ul><li>Пишем парсер под конкретный сайт</li><li>Настраиваем обход пагинации</li><li>Обрабатываем антибот-защиту</li><li>Прокси и задержки</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">03</div><div class="stage-icon"><img loading="lazy" src="/img/icons/functions.png" alt="Обработка данных"></div><h3 class="stage-title">Обработка данных</h3><ul><li>Чистим и нормализуем данные</li><li>Удаляем дубликаты</li><li>Сопоставляем с вашей структурой</li><li>Проверяем качество</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">04</div><div class="stage-icon"><img loading="lazy" src="/img/icons/sites.png" alt="Выгрузка данных"></div><h3 class="stage-title">Выгрузка</h3><ul><li>Экспорт в Excel, CSV, JSON</li><li>Выгрузка в Google Sheets</li><li>Интеграция с 1С или CRM</li><li>Настройка периодичности</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">05</div><div class="stage-icon"><img loading="lazy" src="/img/icons/test.png" alt="Тестирование"></div><h3 class="stage-title">Тестирование</h3><ul><li>Сверяем данные с источником</li><li>Проверяем полноту выгрузки</li><li>Исправляем ошибки</li><li>Оптимизируем скорость</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">06</div><div class="stage-icon"><img loading="lazy" src="/img/icons/start.png" alt="Поддержка парсинга"></div><h3 class="stage-title">Поддержка</h3><ul><li>Мониторим стабильность парсинга</li><li>Обновляем при изменении сайта</li><li>Добавляем новые источники</li><li>Техподдержка 24/7</li></ul></div>
			</div>
		</div>
		<div class="wave-divider wave-light" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<section class="advantages section-light">
		<div class="container">
			<div class="section-title-wrap"><h3 class="section-title">Почему заказывают парсинг у нас?</h3></div>
			<div class="adv-grid">
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/auto.png" alt="Автоматический парсинг"></div><h3 class="adv-title">Полная автоматизация</h3><p class="adv-text">парсер работает 24/7 без вашего участия — данные обновляются автоматически по расписанию</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/crm.png" alt="Интеграция парсинга с CRM и 1С"></div><h3 class="adv-title">Любые форматы выгрузки</h3><p class="adv-text">Excel, CSV, JSON, Google Sheets, 1С, CRM, API — данные приходят туда, где вам удобно</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/delivery.png" alt="Парсинг маркетплейсов"></div><h3 class="adv-title">Маркетплейсы и сайты</h3><p class="adv-text">Ozon, Wildberries, Avito, Kaspi, Яндекс.Маркет и любые другие сайты — разберёмся с любой защитой</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/service.png" alt="Сопровождение парсинга"></div><h3 class="adv-title">Сопровождение</h3><p class="adv-text">мониторим работоспособность, обновляем при изменениях сайта, добавляем новые источники</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/profi.png" alt="Надёжность парсинга"></div><h3 class="adv-title">Надёжность</h3><p class="adv-text">прокси, задержки, обработка капчи и антибот-систем — данные собираются без блокировок</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/analise.png" alt="Качество данных"></div><h3 class="adv-title">Качество данных</h3><p class="adv-text">чистим, нормализуем и проверяем данные перед выгрузкой — вы получаете готовый к работе результат</p></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

<?php $briefWave = 'wave-dark'; $briefTitle = 'Бриф на парсинг данных'; $briefSubtitle = 'Расскажите о задаче — мы подберём оптимальное решение для сбора данных'; require __DIR__ . '/../../briefs/parsing-brief.php'; ?>

<?php $noWave = true; require_once __DIR__ . '/../../includes/tech-marquee.php'; ?>

<?php $pfDarkBg = true; $pfTitle = 'Наше портфолио'; $pfSubtitle = 'Более 30 успешно реализованных проектов — сайты, приложения и сервисы'; require_once __DIR__ . '/../../includes/portfolio-block.php'; ?>

	<section class="price section-light">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title">Стоимость парсинга данных</h2>
				<p class="section-subtitle">Выберите подходящий тариф — точную стоимость рассчитаем после брифа</p>
			</div>
			<div class="price-grid">
				<div class="price-card">
					<h3 class="price-card-title">Разовая задача</h3>
					<div class="price-value">от <strong>15 000</strong> ₽</div>
					<ul class="price-features">
						<li>Парсинг одного источника</li>
						<li>До 5 000 позиций</li>
						<li>До 10 полей на позицию</li>
						<li>Выгрузка в Excel или CSV</li>
						<li>Однократный сбор</li>
					</ul>
					<a href="#brief" class="btn btn-main">Заказать</a>
				</div>
				<div class="price-card price-card-featured">
					<h3 class="price-card-title">Ежемесячная</h3>
					<div class="price-value">от <strong>35 000</strong> ₽/мес</div>
					<ul class="price-features">
						<li>Парсинг до 3 источников</li>
						<li>До 50 000 позиций</li>
						<li>Ежедневное обновление</li>
						<li>Выгрузка в Google Sheets или CRM</li>
						<li>Мониторинг и поддержка</li>
					</ul>
					<a href="#brief" class="btn btn-main">Заказать</a>
				</div>
				<div class="price-card">
					<h3 class="price-card-title">Корпоративный</h3>
					<div class="price-value">от <strong>70 000</strong> ₽/мес</div>
					<ul class="price-features">
						<li>Неограниченное число источников</li>
						<li>Неограниченный объём данных</li>
						<li>Обновление в реальном времени</li>
						<li>Интеграция с 1С и любыми CRM</li>
						<li>Приоритетная поддержка 24/7</li>
					</ul>
					<a href="#brief" class="btn btn-main">Заказать</a>
				</div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<section class="faq section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Часто задаваемые вопросы о парсинге данных</h2></div>
			<div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Сколько стоит парсинг данных?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Разовая задача — от 15 000 ₽ за один источник. Ежемесячный парсинг с обновлением — от 35 000 ₽/мес для 3 источников. Корпоративный тариф с неограниченным объёмом — от 70 000 ₽/мес.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">С каких сайтов можно парсить данные?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">С любых: Ozon, Wildberries, Avito, Kaspi, Яндекс.Маркет, интернет-магазины, агрегаторы, каталоги, соцсети и любые сайты со структурными данными. Работаем с антибот-защитой и капчами.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Как часто обновляются данные?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Настраиваем любое расписание: разово, ежедневно, еженедельно или в реальном времени. Данные автоматически загружаются в ваш Excel, Google Sheets или CRM.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">В каком формате я получу данные?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Excel, CSV, JSON, Google Sheets, 1С, CRM, база данных — любой формат. Данные уже очищены, нормализованы и готовы к использованию без дополнительной обработки.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Не заблокируют ли мой IP?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Используем ротацию прокси, задержки между запросами, эмуляцию поведения реального пользователя и обход капчи. Парсинг незаметен для сайта и безопасен для вашего IP.</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wave-divider wave-accent" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

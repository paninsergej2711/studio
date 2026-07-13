<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'Разработка Telegram-ботов под ключ — магазины, запись, оплата | Bobr Studio';
$pageDesc = 'Профессиональная разработка Telegram-ботов под ключ: боты-магазины, запись и бронирование, опросы, интеграции с CRM и 1С, приём оплат. Автоматизация продаж и поддержки 24/7.';
$ogImage = '/img/svg/girl.svg';
require_once __DIR__ . '/../includes/header.php';
?>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" },
		{ "@type": "ListItem", "position": 2, "name": "Разработка Telegram-ботов", "item": "<?= SITE_URL ?>/telegram-bot" }
	]
}
</script>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "Service",
	"name": "Разработка Telegram-ботов под ключ",
	"description": "Создание Telegram-ботов любой сложности: боты-магазины, запись, опросы, интеграции с CRM и 1С, приём оплат.",
	"provider": { "@type": "ProfessionalService", "name": "Bobr Studio", "url": "<?= SITE_URL ?>" },
	"areaServed": "RU",
	"offers": { "@type": "Offer", "price": "15000", "priceCurrency": "RUB" }
}
</script>

	<!-- Hero -->
	<section class="hero section-light">
		<canvas class="hero-particles" id="heroParticles" aria-hidden="true"></canvas>
		<div class="container hero-grid">
			<div class="hero-content">
				<div class="slider-title">
					Профессиональная
					<h1>разработка <span class="text-accent">Telegram-ботов</span> под ключ</h1>
					– автоматизация продаж и поддержки 24/7
				</div>
				<p class="slider-text">Создаём Telegram-ботов любой сложности: от простых опросников до полноценных магазинов с каталогом, корзиной и оплатой прямо в мессенджере. Интеграции с CRM, 1С и платёжными системами.</p>
				<a href="#brief" class="btn btn-main">Оставить заявку</a>
			</div>
			<div class="hero-image">
				<img src="/img/svg/girl.svg" alt="Разработка Telegram-ботов под ключ в веб-студии Bobr Studio" loading="eager" style="max-height:600px;width:auto">
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Бриф -->
<?php require __DIR__ . '/../briefs/bot-brief.php'; ?>

	<!-- Преимущества -->
	<section class="advantages section-light">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Почему заказывают ботов у нас?</h2></div>
			<div class="adv-grid">
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/time.png" alt=""></div><h3 class="adv-title">Быстрый запуск</h3><p class="adv-text">простого бота запускаем за 3-5 дней, сложного — в течение 2-4 недель</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/shop.png" alt=""></div><h3 class="adv-title">Автоматизация продаж</h3><p class="adv-text">каталог, корзина и приём заказов работают без участия менеджера</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/crm.png" alt=""></div><h3 class="adv-title">Интеграция с CRM</h3><p class="adv-text">AmoCRM, Битрикс24, 1С — заявки сразу попадают в вашу систему</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/payments.png" alt=""></div><h3 class="adv-title">Приём оплат в боте</h3><p class="adv-text">ЮKassa, СБЕР, Telegram Payments и другие платёжные системы</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/support.png" alt=""></div><h3 class="adv-title">Работа 24/7</h3><p class="adv-text">бот отвечает клиентам и принимает заказы круглосуточно</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/profi.png" alt=""></div><h3 class="adv-title">Безопасность</h3><p class="adv-text">защита данных, стабильный хостинг и резервное копирование</p></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Этапы разработки -->
	<section class="stages section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Этапы разработки Telegram-бота</h2></div>
			<div class="stages-grid">
				<div class="stage-card dev-etap"><div class="stage-num">01</div><div class="stage-icon"><img loading="lazy" src="/img/icons/analise.png" alt=""></div><h3 class="stage-title">Анализ и ТЗ</h3><ul><li>Обсуждаем задачи и целевую аудиторию бота</li><li>Определяем необходимый функционал</li><li>Составляем техническое задание</li><li>Подбираем технологии и интеграции</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">02</div><div class="stage-icon"><img loading="lazy" src="/img/icons/plan.png" alt=""></div><h3 class="stage-title">Сценарий и логика</h3><ul><li>Прорабатываем сценарии диалогов</li><li>Проектируем структуру меню и кнопок</li><li>Описываем пользовательские сценарии</li><li>Согласовываем логику работы</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">03</div><div class="stage-icon"><img loading="lazy" src="/img/icons/disign.png" alt=""></div><h3 class="stage-title">Дизайн интерфейса</h3><ul><li>Оформляем сообщения и карточки товаров</li><li>Создаём удобные клавиатуры и кнопки</li><li>Готовим тексты и медиа-контент</li><li>Настраиваем брендирование бота</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">04</div><div class="stage-icon"><img loading="lazy" src="/img/icons/functions.png" alt=""></div><h3 class="stage-title">Программирование</h3><ul><li>Разрабатываем логику бота</li><li>Подключаем базу данных и админ-панель</li><li>Реализуем каталог, корзину и оплату</li><li>Настраиваем уведомления и рассылки</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">05</div><div class="stage-icon"><img loading="lazy" src="/img/icons/test.png" alt=""></div><h3 class="stage-title">Интеграции и тесты</h3><ul><li>Интегрируем CRM, 1С и платёжные системы</li><li>Тестируем все сценарии работы</li><li>Исправляем ошибки и оптимизируем</li><li>Проверяем нагрузку и стабильность</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">06</div><div class="stage-icon"><img loading="lazy" src="/img/icons/start.png" alt=""></div><h3 class="stage-title">Запуск и поддержка</h3><ul><li>Публикуем бота и настраиваем сервер</li><li>Обучаем работе с админ-панелью</li><li>Подключаем аналитику</li><li>Обеспечиваем техподдержку и доработки</li></ul></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

<?php $noWave = true; require_once __DIR__ . '/../includes/tech-marquee.php'; ?>

<?php $pfDarkBg = true; $pfTitle = 'Наше портфолио'; $pfSubtitle = 'Более 30 успешно реализованных проектов — сайты, приложения и Telegram-боты'; require_once __DIR__ . '/../includes/portfolio-block.php'; ?>

	<!-- Цена -->
	<section class="price section-light">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title">Стоимость разработки бота</h2>
				<p class="section-subtitle">Выберите подходящий тариф — точную цену рассчитаем после брифа</p>
			</div>
			<div class="price-grid">
				<div class="price-card">
					<div class="price-plan">Старт</div>
					<div class="price-plan-desc">Простой бот для заявок и общения</div>
					<div class="price-value">от <strong>15 000</strong> ₽</div>
					<ul class="price-features">
						<li>Приветствие и меню кнопок</li>
						<li>Автоответы на частые вопросы</li>
						<li>Приём заявок в чат или на почту</li>
						<li>Базовое оформление сообщений</li>
						<li>Запуск и настройка сервера</li>
					</ul>
					<a href="#brief" class="btn btn-outline" style="color:var(--accent);border-color:var(--accent)">Выбрать тариф</a>
				</div>
				<div class="price-card price-featured">
					<span class="price-badge">Популярный</span>
					<div class="price-plan">Бизнес</div>
					<div class="price-plan-desc">Бот для продаж и автоматизации</div>
					<div class="price-value">от <strong>45 000</strong> ₽</div>
					<ul class="price-features">
						<li>Каталог товаров или услуг</li>
						<li>Корзина и оформление заказа</li>
						<li>Уведомления и админ-панель</li>
						<li>Интеграция с одной CRM</li>
						<li>Личный кабинет пользователя</li>
						<li>Аналитика и поддержка</li>
					</ul>
					<a href="#brief" class="btn btn-main">Выбрать тариф</a>
				</div>
				<div class="price-card">
					<div class="price-plan">Премиум</div>
					<div class="price-plan-desc">Бот-магазин под ключ с оплатой</div>
					<div class="price-value">от <strong>90 000</strong> ₽</div>
					<ul class="price-features">
						<li>Всё из тарифа «Бизнес»</li>
						<li>Приём оплат внутри бота</li>
						<li>Интеграции с CRM, 1С и платёжками</li>
						<li>Автоматические рассылки</li>
						<li>Мультиязычность и геолокация</li>
						<li>Расширенная поддержка и доработки</li>
					</ul>
					<a href="#brief" class="btn btn-outline" style="color:var(--accent);border-color:var(--accent)">Выбрать тариф</a>
				</div>
			</div>
		</div>
	</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

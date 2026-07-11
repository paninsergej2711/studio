<?php
require_once __DIR__ . '/../../config.php';
$pageTitle = 'Разработка CRM и ERP систем под ключ — заказать создание | Bobr Studio';
$pageDesc = 'Профессиональная разработка CRM и ERP систем под ключ. Создание кастомной CRM и ERP с нуля: управление клиентами, сделки, задачи, склад, финансы, интеграция с 1С и телефонией. Автоматизация бизнес-процессов под ваш бизнес!';
$ogImage = '/img/svg/controlpanel.svg';
require_once __DIR__ . '/../../includes/header.php';
?>

<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" },
		{ "@type": "ListItem", "position": 2, "name": "CRM и ERP системы", "item": "<?= SITE_URL ?>/crm" }
	]
}
</script>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "Service",
	"name": "Разработка CRM и ERP систем под ключ",
	"description": "Создание кастомных CRM и ERP систем с нуля: управление клиентами, продажами, складом и финансами, задачи и аналитика, интеграции с 1С, телефонией, мессенджерами и API.",
	"provider": {
		"@type": "ProfessionalService",
		"name": "Bobr Studio",
		"url": "<?= SITE_URL ?>"
	},
	"areaServed": "RU",
	"offers": {
		"@type": "Offer",
		"price": "150000",
		"priceCurrency": "RUB"
	}
}
</script>

	<!-- Hero -->
	<section class="hero section-light">
		<canvas class="hero-particles" id="heroParticles" aria-hidden="true"></canvas>
		<div class="container hero-grid">
			<div class="hero-content">
				<div class="slider-title">
					Профессиональная
					<h1>Разработка <span class="text-accent">CRM и ERP систем</span> под ключ</h1>
					— автоматизация продаж, склада и бизнес-процессов
				</div>
				<p class="slider-text">Создаём кастомные CRM и ERP системы, которые идеально подходят под ваш бизнес: управление клиентами и сделками, складской учёт, финансы, задачи и аналитика. Интеграция с 1С, телефонией, мессенджерами и сайтами. Полная автоматизация — от лида до отгрузки.</p>
				<a href="#brief" class="btn btn-main">Заказать CRM</a>
			</div>
			<div class="hero-image">
				<img src="/img/svg/controlpanel.svg" alt="Профессиональная разработка CRM и ERP систем под ключ в веб-студии Bobr Studio" loading="eager">
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Этапы разработки -->
	<section class="stages section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Этапы разработки CRM и ERP систем</h2></div>
			<div class="stages-grid">
				<div class="stage-card dev-etap"><div class="stage-num">01</div><div class="stage-icon"><img loading="lazy" src="/img/icons/analise.png" alt="Анализ бизнес-процессов"></div><h3 class="stage-title">Анализ бизнес-процессов</h3><ul><li>Изучаем текущие процессы и боли</li><li>Определяем роли и их задачи</li><li>Проектируем структуру данных</li><li>Составляем техническое задание</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">02</div><div class="stage-icon"><img loading="lazy" src="/img/icons/plan.png" alt="Прототип системы"></div><h3 class="stage-title">Прототипирование</h3><ul><li>Создаём макеты интерфейса</li><li>Проектируем воронки и экраны</li><li>Согласовываем логику работы</li><li>Готовим сценарии интеграций</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">03</div><div class="stage-icon"><img loading="lazy" src="/img/icons/disign.png" alt="Интерфейс системы"></div><h3 class="stage-title">Дизайн интерфейса</h3><ul><li>Разрабатываем UI/UX под бизнес-задачи</li><li>Адаптируем под мобильные устройства</li><li>Прорабатываем дашборды и отчёты</li><li>Учитываем удобство внедрения</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">04</div><div class="stage-icon"><img loading="lazy" src="/img/icons/functions.png" alt="Разработка системы"></div><h3 class="stage-title">Разработка</h3><ul><li>Программируем ядро системы</li><li>Реализуем управление клиентами, складом и финансами</li><li>Настраиваем права доступа и роли</li><li>Интегрируем с внешними сервисами</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">05</div><div class="stage-icon"><img loading="lazy" src="/img/icons/test.png" alt="Тестирование"></div><h3 class="stage-title">Тестирование</h3><ul><li>Проверяем все бизнес-сценарии</li><li>Тестируем интеграции и импорт данных</li><li>Проверяем безопасность и скорость</li><li>Исправляем ошибки</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">06</div><div class="stage-icon"><img loading="lazy" src="/img/icons/start.png" alt="Внедрение"></div><h3 class="stage-title">Внедрение и поддержка</h3><ul><li>Переносим данные из старых систем</li><li>Обучаем сотрудников работе</li><li>Подключаем техподдержку</li><li>Развиваем систему под новые задачи</li></ul></div>
			</div>
		</div>
		<div class="wave-divider wave-light" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Преимущества -->
	<section class="advantages section-light">
		<div class="container">
			<div class="section-title-wrap"><h3 class="section-title">Почему заказывают CRM и ERP у нас?</h3></div>
			<div class="adv-grid">
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/personal.png" alt="Кастомная CRM под бизнес"></div><h3 class="adv-title">Кастомная под вас</h3><p class="adv-text">система заточена под ваши бизнес-процессы, а не наоборот — не нужно подстраиваться под шаблон</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/crm.png" alt="Интеграция с сервисами"></div><h3 class="adv-title">Любые интеграции</h3><p class="adv-text">1С, телефония, мессенджеры, сайт, почта, платёжные системы, API сторонних сервисов и маркетплейсов</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/calculator.png" alt="Аналитика и отчёты"></div><h3 class="adv-title">Аналитика и отчёты</h3><p class="adv-text">дашборды, воронки продаж, складские остатки, финансы и эффективность сотрудников — всё в реальном времени</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/mobile.png" alt="Мобильная версия"></div><h3 class="adv-title">Мобильная версия</h3><p class="adv-text">удобный интерфейс с телефона и планшета — менеджеры и кладовщики работают из любого места</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/profi.png" alt="Безопасность данных"></div><h3 class="adv-title">Безопасность данных</h3><p class="adv-text">разграничение прав доступа, логирование действий, шифрование и резервное копирование</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/support.png" alt="Поддержка"></div><h3 class="adv-title">Поддержка и развитие</h3><p class="adv-text">сопровождение после внедрения, доработка функций и масштабирование системы под рост бизнеса</p></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Бриф -->
<?php $briefWave = 'wave-dark'; $briefTitle = 'Бриф на разработку CRM или ERP системы'; $briefSubtitle = 'Ответьте на несколько вопросов — мы подберём оптимальное решение для вашего бизнеса'; require __DIR__ . '/../../briefs/crm-brief.php'; ?>

<?php $noWave = true; require_once __DIR__ . '/../../includes/tech-marquee.php'; ?>

<?php $pfDarkBg = true; $pfTitle = 'Наше портфолио'; $pfSubtitle = 'Более 30 успешно реализованных проектов — сайты, приложения и сервисы'; require_once __DIR__ . '/../../includes/portfolio-block.php'; ?>

	<!-- Цена -->
	<section class="price section-light">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title">Стоимость разработки CRM и ERP систем</h2>
				<p class="section-subtitle">Выберите подходящий тариф — точную цену рассчитаем после брифа</p>
			</div>
			<div class="price-grid">
				<div class="price-card">
					<h3 class="price-card-title">Базовый</h3>
					<div class="price-value">от <strong>150 000</strong> ₽</div>
					<ul class="price-features">
						<li>Управление клиентами и сделками</li>
						<li>Базовая воронка продаж</li>
						<li>До 5 пользователей</li>
						<li>Напоминания и задачи</li>
						<li>Интеграция с почтой</li>
					</ul>
					<a href="#brief" class="btn btn-main">Заказать</a>
				</div>
				<div class="price-card price-card-featured">
					<h3 class="price-card-title">Стандарт</h3>
					<div class="price-value">от <strong>300 000</strong> ₽</div>
					<ul class="price-features">
						<li>Всё из базового тарифа</li>
						<li>Складской учёт и финансы</li>
						<li>Интеграция с 1С и телефонией</li>
						<li>Отчёты и дашборды</li>
						<li>До 20 пользователей</li>
						<li>Мобильная версия</li>
						<li>API для внешних сервисов</li>
					</ul>
					<a href="#brief" class="btn btn-main">Заказать</a>
				</div>
				<div class="price-card">
					<h3 class="price-card-title">Премиум</h3>
					<div class="price-value">от <strong>600 000</strong> ₽</div>
					<ul class="price-features">
						<li>Всё из тарифа «Стандарт»</li>
						<li>Неограниченное число пользователей</li>
						<li>Сложная бизнес-логика и кастомные модули</li>
						<li>ERP-функционал (закупки, производство, логистика)</li>
						<li>Интеграция с мессенджерами, маркетплейсами и соцсетями</li>
						<li>Высоконагруженная архитектура</li>
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

	<!-- FAQ -->
	<section class="faq section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Часто задаваемые вопросы о разработке CRM и ERP систем</h2></div>
			<div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Сколько стоит разработка CRM или ERP системы под ключ?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Стоимость начинается от 150 000 ₽ за базовый тариф и зависит от сложности бизнес-процессов, интеграций и числа пользователей. ERP-система с модулями склада и производства рассчитывается индивидуально.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Чем отличается CRM от ERP?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">CRM управляет продажами, клиентами и коммуникациями. ERP — ресурсами предприятия: складом, закупками, производством и финансами. Мы можем разработать как отдельные модули, так и комплексную ERP-систему с CRM-блоком.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Какие интеграции можно сделать?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Подключаем 1С, бухгалтерские системы, телефонию (Манго, Zadarma), мессенджеры (Telegram, WhatsApp), email-рассылки, платёжные системы, маркетплейсы и любые открытые API.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Как перенести данные из старой системы?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Мы переносим клиентов, сделки, складские остатки, финансы и документы из 1С, Excel, AmoCRM или других систем. Данные выгружаются с сохранением связей и структуры.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Сколько времени занимает разработка?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Базовая CRM запускается за 4-8 недель. Полноценная ERP-система с модулями склада, производства и интеграциями — от 3 до 8 месяцев. Работаем поэтапно, запуская ключевые модули по готовности.</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wave-divider wave-accent" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

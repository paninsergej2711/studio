<?php
require_once __DIR__ . '/config.php';
$pageTitle = 'Bobr Studio — разработка сайтов, приложений и ботов под ключ';
$pageDesc = 'Веб-студия Bobr Studio: профессиональная разработка сайтов, интернет-магазинов, маркетплейсов, мобильных приложений и Telegram-ботов. Индивидуальный дизайн, SEO-продвижение, поддержка.';
$ogImage = '/img/svg/herocontact.svg';
require_once __DIR__ . '/includes/header.php';
?>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" }
	]
}
</script>

	<!-- Hero -->
	<section class="hero section-light">
		<canvas class="hero-particles" id="heroParticles" aria-hidden="true"></canvas>
		<div class="container hero-grid">
			<div class="hero-content">
			<div class="slider-title">
				<h1>Комплексная разработка <span class="text-accent">сайтов</span>, приложений и ботов под ключ</h1>
			</div>
				<p class="slider-text">Создаём современные цифровые продукты для вашего бизнеса: интернет-магазины, маркетплейсы, мобильные приложения, Telegram-боты, корпоративные сайты и лендинги. От идеи до запуска и продвижения.</p>
				<a href="https://t.me/B0br_studio" target="_blank" rel="noopener" class="btn btn-main">Обсудить проект</a>
			</div>
			<div class="hero-image">
				<img src="/img/svg/herocontact.svg" alt="Разработка сайтов, приложений и ботов в веб-студии Bobr Studio" loading="eager">
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Услуги -->
	<section class="services-main section-dark">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title">Наши услуги</h2>
				<p class="section-subtitle">Полный цикл разработки цифровых продуктов для бизнеса любого масштаба</p>
			</div>
			<div class="services-grid">
			<a href="/sites/internet-magazin" class="service-card">
				<div class="service-card-img"><img loading="lazy" src="/img/uslugi/magazinonline.webp" alt="Разработка интернет-магазинов под ключ"></div>
				<h3>Интернет-магазины</h3>
				<p>Продающие онлайн-площадки с интеграцией оплат, доставок и CRM. Индивидуальный дизайн и SEO-оптимизация.</p>
			</a>
			<a href="/sites/marketplace" class="service-card">
				<div class="service-card-img"><img loading="lazy" src="/img/uslugi/markerplaces.webp" alt="Разработка маркетплейсов на заказ"></div>
				<h3>Маркетплейсы</h3>
				<p>Многопользовательские торговые площадки с личными кабинетами продавцов, системой комиссий и модерацией.</p>
			</a>
			<a href="/telegram-bot" class="service-card">
				<div class="service-card-img"><img loading="lazy" src="/img/uslugi/Telegram-Bots.webp" alt="Разработка Telegram-ботов любой сложности"></div>
				<h3>Telegram-боты</h3>
				<p>Автоматизация продаж, поддержки и маркетинга. Боты-магазины, квизы, интеграции с CRM и 1С.</p>
			</a>
			<a href="/sites/corporate" class="service-card">
				<div class="service-card-img"><img loading="lazy" src="/img/uslugi/korporativnya.webp" alt="Разработка корпоративных сайтов и лендингов"></div>
				<h3>Корпоративные сайты</h3>
				<p>Представительские сайты, лендинги и веб-сервисы. Чистый код, адаптивный дизайн.</p>
			</a>
			<a href="/mobile-app" class="service-card">
				<div class="service-card-img"><img loading="lazy" src="/img/uslugi/prilojenie.jpg" alt="Разработка мобильных приложений iOS и Android"></div>
				<h3>Мобильные приложения</h3>
				<p>Нативная разработка для iOS и Android. Приложения для e-commerce, доставок и бизнеса.</p>
			</a>
			<a href="/design" class="service-card">
				<div class="service-card-img"><img loading="lazy" src="/img/uslugi/ui-disign.png" alt="Профессиональный веб-дизайн и UI/UX"></div>
				<h3>Веб-дизайн</h3>
				<p>UI/UX-дизайн, прототипирование и адаптивные макеты. Продающий и удобный интерфейс под ваш бренд.</p>
			</a>
			<a href="/promo" class="service-card">
				<div class="service-card-img"><img loading="lazy" src="/img/uslugi/prodvijenie.webp" alt="Продвижение сайтов, SEO и контекстная реклама"></div>
				<h3>Продвижение</h3>
				<p>SEO-оптимизация, Яндекс.Директ, контекстная реклама. Комплексное продвижение с аналитикой.</p>
			</a>
				<a href="/content" class="service-card">
					<div class="service-card-img"><img loading="lazy" src="/img/uslugi/email.webp" alt="Наполнение контентом и копирайтинг для сайтов"></div>
					<h3>Контент</h3>
					<p>Написание статей, наполнение товарами, SEO-тексты, парсинг данных. Качественный контент для вашего сайта.</p>
				</a>
			</div>
		</div>
		<div class="wave-divider wave-light" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Преимущества -->
	<section class="advantages section-light">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Почему выбирают Bobr Studio</h2></div>
			<div class="adv-grid">
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/desctop.png" alt="Разработка индивидуального дизайна сайтов"></div><h3 class="adv-title">Индивидуальный дизайн</h3><p class="adv-text">адаптивный, удобный и продающий интерфейс под ваш бренд</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/seo.png" alt="SEO-оптимизация и продвижение сайтов"></div><h3 class="adv-title">SEO-оптимизация</h3><p class="adv-text">грамотная структура, мета-разметка, ЧПУ и интеграция с аналитикой</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/profi.png" alt="Безопасность сайтов и веб-приложений"></div><h3 class="adv-title">Безопасность</h3><p class="adv-text">защита от взлома, DDoS-атак и мошенничества</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/expirience.png" alt="Опыт разработки более 30 проектов"></div><h3 class="adv-title">Опыт</h3><p class="adv-text">более 30 успешно реализованных проектов в разных нишах</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/support.png" alt="Техническая поддержка и сопровождение сайтов"></div><h3 class="adv-title">Поддержка 24/7</h3><p class="adv-text">техническое сопровождение и оперативное решение любых вопросов</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/payments.png" alt="Интеграция систем оплаты, доставки и CRM"></div><h3 class="adv-title">Интеграции</h3><p class="adv-text">подключаем платежи, доставку, CRM, 1С и любые API</p></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Бриф -->
<?php require __DIR__ . '/briefs/main-brief.php'; ?>

<?php require_once __DIR__ . '/includes/tech-marquee.php'; ?>

<?php $pfDarkBg = true; $pfTitle = 'Последние проекты'; $pfSubtitle = 'Более 30 успешно реализованных проектов — сайты, приложения и боты'; require_once __DIR__ . '/includes/portfolio-block.php'; ?>

	<!-- CTA -->
	<section class="cta-section section-light">
		<div class="container" style="text-align:center">
			<h2 class="section-title">Готовы обсудить ваш проект?</h2>
			<p class="section-subtitle">Заполните бриф — и мы подберём оптимальное решение для вашего бизнеса. Расчёт стоимости и сроков — бесплатно.</p>
			<div class="cta-buttons">
				<a href="/#mainBrief" class="btn btn-main">Заполнить бриф</a>
				<a href="/contacts" class="btn btn-outline" style="color:var(--accent);border-color:var(--accent)">Связаться с нами</a>
			</div>
		</div>
	</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

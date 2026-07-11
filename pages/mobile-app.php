<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'Разработка мобильного приложения под ключ — заказать создание для iOS и Android | Bobr Studio';
$pageDesc = 'Профессиональная разработка мобильных приложений под ключ для iOS и Android. Создание с нуля: нативная и кроссплатформенная разработка, оплаты, push-уведомления, публикация в App Store и Google Play. Закажите приложение для бизнеса!';
$ogImage = '/img/svg/mobile.svg';
require_once __DIR__ . '/../includes/header.php';
?>

<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" },
		{ "@type": "ListItem", "position": 2, "name": "Мобильное приложение", "item": "<?= SITE_URL ?>/mobile-app" }
	]
}
</script>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "Service",
	"name": "Разработка мобильного приложения под ключ",
	"description": "Создание мобильного приложения с нуля для iOS и Android: нативная и кроссплатформенная разработка, дизайн, оплаты, push-уведомления, публикация в App Store и Google Play.",
	"provider": {
		"@type": "ProfessionalService",
		"name": "Bobr Studio",
		"url": "<?= SITE_URL ?>"
	},
	"areaServed": "RU",
	"offers": {
		"@type": "Offer",
		"price": "300000",
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
					<h1>Разработка <span class="text-accent">мобильного приложения</span> под ключ</h1>
					— для iOS и Android
				</div>
				<p class="slider-text">Создаём удобные и быстрые мобильные приложения для бизнеса: интернет-магазины, сервисы услуг, доставку и соцсети. Нативная и кроссплатформенная разработка с публикацией в App Store и Google Play.</p>
				<a href="#brief" class="btn btn-main">Заказать приложение</a>
			</div>
			<div class="hero-image">
				<img src="/img/svg/mobile.svg" alt="Профессиональная разработка мобильного приложения под ключ в веб-студии Bobr Studio" loading="eager">
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Этапы разработки -->
	<section class="stages section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Этапы разработки приложения</h2></div>
			<div class="stages-grid">
				<div class="stage-card dev-etap"><div class="stage-num">01</div><div class="stage-icon"><img src="/img/icons/analise.png" alt="Анализ и ТЗ для мобильного приложения"></div><h3 class="stage-title">Анализ и ТЗ</h3><ul><li>Изучаем идею, аудиторию и конкурентов</li><li>Определяем функционал и платформы</li><li>Составляем техническое задание</li><li>Оцениваем сроки и стоимость</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">02</div><div class="stage-icon"><img src="/img/icons/plan.png" alt="Прототип и UX мобильного приложения"></div><h3 class="stage-title">Прототип и UX</h3><ul><li>Проектируем пользовательские сценарии</li><li>Создаём интерактивный прототип</li><li>Прорабатываем навигацию и экраны</li><li>Согласовываем логику работы</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">03</div><div class="stage-icon"><img src="/img/icons/disign.png" alt="Дизайн интерфейса мобильного приложения"></div><h3 class="stage-title">Дизайн интерфейса</h3><ul><li>Разрабатываем UI-дизайн под iOS и Android</li><li>Готовим иконки и графику</li><li>Учитываем гайдлайны платформ</li><li>Согласовываем макеты экранов</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">04</div><div class="stage-icon"><img src="/img/icons/functions.png" alt="Разработка мобильного приложения"></div><h3 class="stage-title">Разработка</h3><ul><li>Программируем клиентскую часть</li><li>Разрабатываем сервер и API</li><li>Подключаем оплаты и push-уведомления</li><li>Интегрируем сторонние сервисы</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">05</div><div class="stage-icon"><img src="/img/icons/test.png" alt="Тестирование мобильного приложения"></div><h3 class="stage-title">Тестирование</h3><ul><li>Проверяем на реальных устройствах</li><li>Тестируем все сценарии и оплату</li><li>Оптимизируем скорость и стабильность</li><li>Исправляем ошибки</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">06</div><div class="stage-icon"><img src="/img/icons/start.png" alt="Публикация и поддержка мобильного приложения"></div><h3 class="stage-title">Публикация и поддержка</h3><ul><li>Публикуем в App Store и Google Play</li><li>Настраиваем аналитику и мониторинг</li><li>Обновляем и развиваем приложение</li><li>Обеспечиваем техподдержку</li></ul></div>
			</div>
		</div>
		<div class="wave-divider wave-light" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Преимущества -->
	<section class="advantages section-light">
		<div class="container">
			<div class="section-title-wrap"><h3 class="section-title">Почему заказывают приложения у нас?</h3></div>
			<div class="adv-grid">
				<div class="adv-card"><div class="adv-icon"><img src="/img/icons/mobile.png" alt="Нативная скорость мобильного приложения"></div><h3 class="adv-title">Нативная скорость</h3><p class="adv-text">быстрые и отзывчивые приложения с плавными анимациями</p></div>
				<div class="adv-card"><div class="adv-icon"><img src="/img/icons/apps.png" alt="Приложения для iOS и Android"></div><h3 class="adv-title">iOS и Android</h3><p class="adv-text">разрабатываем под обе платформы, в том числе кроссплатформенно</p></div>
				<div class="adv-card"><div class="adv-icon"><img src="/img/icons/chat.png" alt="Push-уведомления в приложении"></div><h3 class="adv-title">Push-уведомления</h3><p class="adv-text">возвращаем пользователей и повышаем вовлечённость</p></div>
				<div class="adv-card"><div class="adv-icon"><img src="/img/icons/payments.png" alt="Оплаты в мобильном приложении"></div><h3 class="adv-title">Оплаты в приложении</h3><p class="adv-text">интеграция платёжных систем и подписок</p></div>
				<div class="adv-card"><div class="adv-icon"><img src="/img/icons/start.png" alt="Публикация приложения в App Store и Google Play"></div><h3 class="adv-title">Публикация в сторах</h3><p class="adv-text">берём на себя выпуск в App Store и Google Play</p></div>
				<div class="adv-card"><div class="adv-icon"><img src="/img/icons/support.png" alt="Поддержка мобильного приложения"></div><h3 class="adv-title">Поддержка</h3><p class="adv-text">сопровождение, обновления и развитие после запуска</p></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Бриф -->
<?php $briefWave = 'wave-dark'; require __DIR__ . '/../briefs/mobile-app-brief.php'; ?>

<?php $noWave = true; require_once __DIR__ . '/../includes/tech-marquee.php'; ?>

<?php $pfDarkBg = true; $pfTitle = 'Наше портфолио'; $pfSubtitle = 'Более 30 успешно реализованных проектов — сайты, приложения и сервисы'; require_once __DIR__ . '/../includes/portfolio-block.php'; ?>

	<!-- Цена -->
	<section class="price section-light">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title">Стоимость разработки приложения</h2>
				<p class="section-subtitle">Выберите подходящий тариф — точную цену рассчитаем после брифа</p>
			</div>
			<div class="price-grid">
				<div class="price-card">
					<div class="price-plan">Старт</div>
					<div class="price-plan-desc">MVP-приложение для проверки идеи</div>
					<div class="price-value">от <strong>300 000</strong> ₽</div>
					<ul class="price-features">
						<li>Одна платформа (iOS или Android)</li>
						<li>Базовый функционал и экраны</li>
						<li>Регистрация и личный кабинет</li>
						<li>Простой дизайн интерфейса</li>
						<li>Публикация в сторе</li>
					</ul>
					<a href="#brief" class="btn btn-outline" style="color:var(--accent);border-color:var(--accent)">Выбрать тариф</a>
				</div>
				<div class="price-card price-featured">
					<span class="price-badge">Популярный</span>
					<div class="price-plan">Бизнес</div>
					<div class="price-plan-desc">Приложение для двух платформ</div>
					<div class="price-value">от <strong>700 000</strong> ₽</div>
					<ul class="price-features">
						<li>iOS и Android</li>
						<li>Индивидуальный дизайн</li>
						<li>Онлайн-оплата и push-уведомления</li>
						<li>Личный кабинет и каталог</li>
						<li>Интеграции с CRM и сервисами</li>
						<li>Аналитика и поддержка</li>
					</ul>
					<a href="#brief" class="btn btn-main">Выбрать тариф</a>
				</div>
				<div class="price-card">
					<div class="price-plan">Премиум</div>
					<div class="price-plan-desc">Сложное высоконагруженное решение</div>
					<div class="price-value">от <strong>1 500 000</strong> ₽</div>
					<ul class="price-features">
						<li>Всё из тарифа «Бизнес»</li>
						<li>Сложная бизнес-логика</li>
						<li>Реалтайм, чаты и геосервисы</li>
						<li>Высоконагруженный бэкенд</li>
						<li>Расширенная аналитика</li>
						<li>Персональная команда и поддержка</li>
					</ul>
					<a href="#brief" class="btn btn-outline" style="color:var(--accent);border-color:var(--accent)">Выбрать тариф</a>
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
			<div class="section-title-wrap"><h2 class="section-title">Часто задаваемые вопросы о разработке мобильного приложения</h2></div>
			<div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Сколько стоит разработка мобильного приложения под ключ?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Стоимость начинается от 300 000 ₽ за MVP на одной платформе и зависит от сложности функционала, числа платформ, дизайна и интеграций. Точную цену рассчитываем после заполнения брифа.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Сколько времени занимает создание приложения?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">В среднем разработка мобильного приложения занимает от 2 до 6 месяцев. MVP запускается быстрее, а сложное высоконагруженное приложение с бэкендом требует больше времени.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Нативная или кроссплатформенная разработка — что выбрать?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Нативная разработка (Swift, Kotlin) даёт максимальную производительность, кроссплатформенная (Flutter, React Native) — экономию бюджета и сроков при одном коде на iOS и Android. Подбираем подход под ваши задачи.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Публикуете ли вы приложение в App Store и Google Play?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Да, мы берём на себя полный цикл публикации: подготовку иконок и описаний, оформление страниц в сторах, прохождение модерации и выпуск приложения в App Store и Google Play.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Поддерживаете ли приложение после запуска?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Да, мы обеспечиваем техподдержку, обновления под новые версии iOS и Android, исправление ошибок, а также развитие функционала приложения по мере роста вашего бизнеса.</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wave-divider wave-accent" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

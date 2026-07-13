<?php
require_once __DIR__ . '/../../config.php';
$pageTitle = 'Разработка лендинга под ключ — заказать создание продающей страницы | Bobr Studio';
$pageDesc = 'Профессиональная разработка продающих лендингов под ключ. Создание одностраничного сайта с высокой конверсией: цепляющий оффер, формы захвата, квизы, интеграция с CRM и аналитикой. Быстрый запуск!';
$ogImage = '/img/svg/speaker.svg';
require_once __DIR__ . '/../../includes/header.php';
?>

<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" },
		{ "@type": "ListItem", "position": 2, "name": "Лендинг", "item": "<?= SITE_URL ?>/sites/landing" }
	]
}
</script>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "Service",
	"name": "Разработка лендинга под ключ",
	"description": "Создание продающего одностраничного сайта: оффер, структура убеждения, формы захвата и квизы, интеграция с CRM и аналитикой, высокая конверсия.",
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

	<!-- Hero -->
	<section class="hero section-light">
		<canvas class="hero-particles" id="heroParticles" aria-hidden="true"></canvas>
		<div class="container hero-grid">
			<div class="hero-content">
				<div class="slider-title">
					Профессиональная
					<h1>Разработка <span class="text-accent">лендинга</span> под ключ</h1>
					— продающие страницы с высокой конверсией
				</div>
				<p class="slider-text">Создаём одностраничные сайты, которые превращают посетителей в клиентов: цепляющий оффер, понятная структура, формы захвата и интеграции с CRM и аналитикой. Быстрый запуск и измеримый результат.</p>
				<a href="#brief" class="btn btn-main">Заказать лендинг</a>
			</div>
			<div class="hero-image">
				<img src="/img/svg/speaker.svg" alt="Профессиональная разработка продающего лендинга под ключ в веб-студии Bobr Studio" loading="eager">
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Этапы разработки -->
	<section class="stages section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Этапы разработки лендинга</h2></div>
			<div class="stages-grid">
				<div class="stage-card dev-etap"><div class="stage-num">01</div><div class="stage-icon"><img src="/img/icons/analise.png" alt="Анализ и оффер лендинга"></div><h3 class="stage-title">Анализ и оффер</h3><ul><li>Изучаем продукт и аудиторию</li><li>Анализируем конкурентов</li><li>Формулируем сильный оффер</li><li>Определяем структуру страницы</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">02</div><div class="stage-icon"><img src="/img/icons/plan.png" alt="Прототип лендинга"></div><h3 class="stage-title">Прототип</h3><ul><li>Проектируем последовательность блоков</li><li>Прорабатываем логику убеждения</li><li>Готовим тексты и смыслы</li><li>Согласовываем структуру</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">03</div><div class="stage-icon"><img src="/img/icons/disign.png" alt="Дизайн лендинга"></div><h3 class="stage-title">Дизайн</h3><ul><li>Разрабатываем продающий дизайн</li><li>Оформляем блоки и кнопки</li><li>Адаптируем под мобильные</li><li>Согласовываем макет</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">04</div><div class="stage-icon"><img src="/img/icons/scripts.png" alt="Вёрстка лендинга"></div><h3 class="stage-title">Вёрстка</h3><ul><li>Верстаем адаптивно и быстро</li><li>Подключаем анимации</li><li>Настраиваем формы захвата</li><li>Оптимизируем скорость</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">05</div><div class="stage-icon"><img src="/img/icons/integration.png" alt="Интеграции лендинга с CRM и аналитикой"></div><h3 class="stage-title">Интеграции</h3><ul><li>Подключаем CRM и мессенджеры</li><li>Настраиваем аналитику и пиксели</li><li>Проверяем отправку заявок</li><li>Тестируем на устройствах</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">06</div><div class="stage-icon"><img src="/img/icons/start.png" alt="Запуск лендинга"></div><h3 class="stage-title">Запуск</h3><ul><li>Публикуем на хостинге и домене</li><li>Настраиваем SSL и защиту</li><li>Готовим к рекламному трафику</li><li>Сопровождаем после запуска</li></ul></div>
			</div>
		</div>
		<div class="wave-divider wave-light" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Преимущества -->
	<section class="advantages section-light">
		<div class="container">
			<div class="section-title-wrap"><h3 class="section-title">Почему заказывают лендинг у нас?</h3></div>
			<div class="adv-grid">
				<div class="adv-card"><div class="adv-icon"><img src="/img/icons/money.png" alt="Высокая конверсия лендинга"></div><h3 class="adv-title">Высокая конверсия</h3><p class="adv-text">продающая структура и сильный оффер, которые приносят заявки</p></div>
				<div class="adv-card"><div class="adv-icon"><img src="/img/icons/start.png" alt="Быстрый запуск лендинга"></div><h3 class="adv-title">Быстрый запуск</h3><p class="adv-text">готовый лендинг за 3-7 дней без потери качества</p></div>
				<div class="adv-card"><div class="adv-icon"><img src="/img/icons/desctop.png" alt="Адаптивность лендинга"></div><h3 class="adv-title">Адаптивность</h3><p class="adv-text">идеально выглядит на телефоне, планшете и десктопе</p></div>
				<div class="adv-card"><div class="adv-icon"><img src="/img/icons/form.png" alt="Формы захвата лидов на лендинге"></div><h3 class="adv-title">Формы захвата</h3><p class="adv-text">квизы и формы, которые собирают лиды и заявки</p></div>
				<div class="adv-card"><div class="adv-icon"><img src="/img/icons/crm.png" alt="Интеграция лендинга с CRM"></div><h3 class="adv-title">Интеграции</h3><p class="adv-text">CRM, мессенджеры и рассылки для работы с заявками</p></div>
				<div class="adv-card"><div class="adv-icon"><img src="/img/icons/analise.png" alt="Аналитика лендинга"></div><h3 class="adv-title">Аналитика</h3><p class="adv-text">пиксели и цели для рекламы и оценки эффективности</p></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Бриф -->
<?php $briefWave = 'wave-dark'; require __DIR__ . '/../../briefs/dev/landing-brief.php'; ?>

<?php $noWave = true; require_once __DIR__ . '/../../includes/tech-marquee.php'; ?>

<?php $pfDarkBg = true; $pfTitle = 'Наше портфолио'; $pfSubtitle = 'Более 30 успешно реализованных проектов — сайты, лендинги и приложения'; require_once __DIR__ . '/../../includes/portfolio-block.php'; ?>

	<!-- Цена -->
	<section class="price section-light">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title">Стоимость разработки лендинга</h2>
				<p class="section-subtitle">Выберите подходящий тариф — точную цену рассчитаем после брифа</p>
			</div>
			<div class="price-grid">
				<div class="price-card">
					<div class="price-plan">Старт</div>
					<div class="price-plan-desc">Лендинг для быстрого запуска</div>
					<div class="price-value">от <strong>15 000</strong> ₽</div>
					<ul class="price-features">
						<li>Одностраничный сайт на шаблоне</li>
						<li>Адаптивная вёрстка</li>
						<li>Форма заявки на почту</li>
						<li>Базовая структура и оффер</li>
						<li>Запуск на вашем домене</li>
					</ul>
					<a href="#brief" class="btn btn-outline" style="color:var(--accent);border-color:var(--accent)">Выбрать тариф</a>
				</div>
				<div class="price-card price-featured">
					<span class="price-badge">Популярный</span>
					<div class="price-plan">Бизнес</div>
					<div class="price-plan-desc">Продающий лендинг под ключ</div>
					<div class="price-value">от <strong>45 000</strong> ₽</div>
					<ul class="price-features">
						<li>Индивидуальный дизайн</li>
						<li>Проработка структуры и смыслов</li>
						<li>Квиз и формы захвата</li>
						<li>Интеграция с CRM</li>
						<li>Аналитика и пиксели</li>
						<li>Анимации и микровзаимодействия</li>
					</ul>
					<a href="#brief" class="btn btn-main">Выбрать тариф</a>
				</div>
				<div class="price-card">
					<div class="price-plan">Премиум</div>
					<div class="price-plan-desc">Максимум для рекламного трафика</div>
					<div class="price-value">от <strong>90 000</strong> ₽</div>
					<ul class="price-features">
						<li>Всё из тарифа «Бизнес»</li>
						<li>A/B-версии первого экрана</li>
						<li>Сложные анимации и 3D</li>
						<li>Мультилендинг под сегменты</li>
						<li>Сквозная аналитика</li>
						<li>Сопровождение рекламных кампаний</li>
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
			<div class="section-title-wrap"><h2 class="section-title">Часто задаваемые вопросы о разработке лендинга</h2></div>
			<div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Сколько стоит разработка лендинга под ключ?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Стоимость начинается от 15 000 ₽ за тариф «Старт» на шаблоне. Индивидуальный продающий лендинг с проработкой смыслов, квизом и интеграциями — от 45 000 ₽. Точную цену рассчитываем после брифа.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Сколько времени занимает создание лендинга?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Простой лендинг на шаблоне запускаем за 3-7 дней. Индивидуальный продающий лендинг с уникальным дизайном и интеграциями занимает от 1 до 2 недель.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Какую конверсию можно ожидать от лендинга?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Конверсия зависит от продукта, оффера и качества трафика. Хорошо проработанный лендинг обычно даёт 3-10% заявок. Мы закладываем продающую структуру и формы захвата, чтобы максимизировать результат.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Настраиваете ли вы интеграции с CRM и аналитикой?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Да, подключаем CRM (AmoCRM, Битрикс24), мессенджеры и email-рассылки, а также настраиваем Яндекс.Метрику, Google Analytics и рекламные пиксели с целями для эффективного запуска рекламы.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Поможете ли с запуском рекламы на лендинг?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Да, мы настраиваем и сопровождаем рекламные кампании в Яндекс.Директ и Google Ads, а также готовим лендинг под трафик: скорость загрузки, цели, A/B-версии первого экрана.</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wave-divider wave-accent" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

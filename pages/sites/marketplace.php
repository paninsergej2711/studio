<?php
require_once __DIR__ . '/../../config.php';
$pageTitle = 'Разработка маркетплейса под ключ — заказать создание | Bobr Studio';
$pageDesc = 'Профессиональная разработка маркетплейсов под ключ. Создание мультивендорной площадки с нуля: кабинеты продавцов, система комиссий и выплат, модерация, интеграция оплат и доставки. Закажите маркетплейс с масштабируемой архитектурой!';
$ogImage = '/img/svg/man.svg';
require_once __DIR__ . '/../../includes/header.php';
?>

<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" },
		{ "@type": "ListItem", "position": 2, "name": "Маркетплейс", "item": "<?= SITE_URL ?>/dev/marketplace" }
	]
}
</script>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "Service",
	"name": "Разработка маркетплейса под ключ",
	"description": "Создание мультивендорного маркетплейса с нуля: кабинеты продавцов, система комиссий и выплат, модерация, поиск и фильтры, интеграция платежей и доставок.",
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
					<h1>Разработка <span class="text-accent">маркетплейса</span> под ключ</h1>
					— масштабируемая мультивендорная площадка для множества продавцов
				</div>
				<p class="slider-text">Создаём торговые площадки с личными кабинетами продавцов, гибкой системой комиссий и автоматических выплат, модерацией товаров и удобным поиском. Полный цикл: от архитектуры до запуска и масштабирования.</p>
				<a href="#brief" class="btn btn-main">Заказать маркетплейс</a>
			</div>
			<div class="hero-image">
				<img src="/img/svg/man.svg" alt="Профессиональная разработка маркетплейса под ключ в веб-студии Bobr Studio" loading="eager">
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Этапы разработки -->
	<section class="stages section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Этапы разработки маркетплейса</h2></div>
			<div class="stages-grid">
				<div class="stage-card dev-etap"><div class="stage-num">01</div><div class="stage-icon"><img loading="lazy" src="/img/icons/analise.png" alt="Анализ и ТЗ для маркетплейса"></div><h3 class="stage-title">Анализ и ТЗ</h3><ul><li>Изучаем бизнес-модель и нишу</li><li>Анализируем конкурентов и аудиторию</li><li>Определяем роли и сценарии</li><li>Составляем техническое задание</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">02</div><div class="stage-icon"><img loading="lazy" src="/img/icons/plan.png" alt="Архитектура маркетплейса"></div><h3 class="stage-title">Архитектура площадки</h3><ul><li>Проектируем мультивендорную структуру</li><li>Продумываем систему комиссий и выплат</li><li>Планируем базу данных и нагрузку</li><li>Выбираем технологический стек</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">03</div><div class="stage-icon"><img loading="lazy" src="/img/icons/disign.png" alt="Дизайн и UX маркетплейса"></div><h3 class="stage-title">Дизайн и UX</h3><ul><li>Разрабатываем UI/UX площадки</li><li>Проектируем кабинеты продавцов и покупателей</li><li>Адаптируем под мобильные устройства</li><li>Согласовываем макеты</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">04</div><div class="stage-icon"><img loading="lazy" src="/img/icons/functions.png" alt="Разработка платформы маркетплейса"></div><h3 class="stage-title">Разработка платформы</h3><ul><li>Программируем кабинеты и каталог</li><li>Реализуем комиссии, выплаты и модерацию</li><li>Настраиваем поиск, фильтры и корзину</li><li>Интегрируем оплату и доставку</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">05</div><div class="stage-icon"><img loading="lazy" src="/img/icons/test.png" alt="Тестирование маркетплейса"></div><h3 class="stage-title">Тестирование</h3><ul><li>Проверяем все роли и сценарии</li><li>Тестируем платежи и выплаты</li><li>Проводим нагрузочное тестирование</li><li>Исправляем ошибки и оптимизируем</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">06</div><div class="stage-icon"><img loading="lazy" src="/img/icons/start.png" alt="Запуск и развитие маркетплейса"></div><h3 class="stage-title">Запуск и развитие</h3><ul><li>Переносим площадку на боевой сервер</li><li>Настраиваем безопасность и резервирование</li><li>Подключаем аналитику</li><li>Развиваем функционал и поддерживаем</li></ul></div>
			</div>
		</div>
		<div class="wave-divider wave-light" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Преимущества -->
	<section class="advantages section-light">
		<div class="container">
			<div class="section-title-wrap"><h3 class="section-title">Почему заказывают маркетплейс у нас?</h3></div>
			<div class="adv-grid">
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/personal.png" alt="Мультивендорность маркетплейса"></div><h3 class="adv-title">Мультивендорность</h3><p class="adv-text">личные кабинеты продавцов с товарами, заказами и статистикой</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/money.png" alt="Система комиссий маркетплейса"></div><h3 class="adv-title">Система комиссий</h3><p class="adv-text">гибкие комиссии, автоматические выплаты и взаиморасчёты</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/functions.png" alt="Модерация товаров и продавцов"></div><h3 class="adv-title">Модерация</h3><p class="adv-text">проверка товаров, продавцов и отзывов перед публикацией</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/complex.png" alt="Масштабируемость маркетплейса"></div><h3 class="adv-title">Масштабируемость</h3><p class="adv-text">архитектура выдерживает рост числа продавцов и товаров</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/filter.png" alt="Поиск и фильтры на маркетплейсе"></div><h3 class="adv-title">Поиск и фильтры</h3><p class="adv-text">быстрый поиск, умные фильтры и сравнение предложений</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/payments.png" alt="Интеграция оплаты и доставки в маркетплейс"></div><h3 class="adv-title">Оплата и доставка</h3><p class="adv-text">интеграция эквайринга, платёжных систем и служб доставки</p></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Бриф -->
<?php $briefWave = 'wave-dark'; require __DIR__ . '/../../briefs/dev/marketplace-brief.php'; ?>

<?php $noWave = true; require_once __DIR__ . '/../../includes/tech-marquee.php'; ?>

<?php $pfDarkBg = true; $pfTitle = 'Наше портфолио'; $pfSubtitle = 'Более 30 успешно реализованных проектов — сайты, маркетплейсы и приложения'; require_once __DIR__ . '/../../includes/portfolio-block.php'; ?>

	<!-- Цена -->
	<section class="price section-light">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title">Стоимость разработки маркетплейса</h2>
				<p class="section-subtitle">Выберите подходящий тариф — точную цену рассчитаем после брифа</p>
			</div>
			<div class="price-grid">
				<div class="price-card">
					<div class="price-plan">Старт</div>
					<div class="price-plan-desc">Базовый маркетплейс для запуска</div>
					<div class="price-value">от <strong>150 000</strong> ₽</div>
					<ul class="price-features">
						<li>Кабинеты продавцов и покупателей</li>
						<li>Каталог с категориями</li>
						<li>Корзина и приём оплаты</li>
						<li>Базовая система комиссий</li>
						<li>Поиск и фильтры</li>
					</ul>
					<a href="#brief" class="btn btn-outline" style="color:var(--accent);border-color:var(--accent)">Выбрать тариф</a>
				</div>
				<div class="price-card price-featured">
					<span class="price-badge">Популярный</span>
					<div class="price-plan">Бизнес</div>
					<div class="price-plan-desc">Полноценная площадка для роста</div>
					<div class="price-value">от <strong>500 000</strong> ₽</div>
					<ul class="price-features">
						<li>Всё из тарифа «Старт»</li>
						<li>Модерация товаров и продавцов</li>
						<li>Рейтинги, отзывы и чаты</li>
						<li>Автоматические выплаты продавцам</li>
						<li>Интеграции оплаты и доставки</li>
						<li>Аналитика и админ-панель</li>
					</ul>
					<a href="#brief" class="btn btn-main">Выбрать тариф</a>
				</div>
				<div class="price-card">
					<div class="price-plan">Премиум</div>
					<div class="price-plan-desc">Маркетплейс уровня enterprise</div>
					<div class="price-value">от <strong>1 000 000</strong> ₽</div>
					<ul class="price-features">
						<li>Всё из тарифа «Бизнес»</li>
						<li>Мобильное приложение</li>
						<li>Сложная логика комиссий и тарифов</li>
						<li>Мультиязычность и мультивалютность</li>
						<li>Высоконагруженная архитектура</li>
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
			<div class="section-title-wrap"><h2 class="section-title">Часто задаваемые вопросы о разработке маркетплейса</h2></div>
			<div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Сколько стоит разработка маркетплейса под ключ?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Стоимость начинается от 150 000 ₽ за тариф «Старт» и зависит от сложности площадки: числа ролей, системы комиссий и выплат, модерации, интеграций и требуемой нагрузки. Точную цену рассчитываем после брифа.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Что такое мультивендорный маркетплейс?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Это торговая площадка, где товары продают множество независимых продавцов, а владелец платформы зарабатывает на комиссии с продаж. Каждый продавец получает личный кабинет для управления товарами, заказами и статистикой.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Сколько времени занимает создание маркетплейса?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">В среднем разработка маркетплейса занимает от 2 до 6 месяцев в зависимости от функционала. Базовая площадка запускается быстрее, сложная высоконагруженная платформа с приложением требует больше времени.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Как работает система комиссий и выплат продавцам?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Мы настраиваем гибкие правила: процент комиссии по категориям или продавцам, автоматическое удержание при оплате и регулярные выплаты на счета продавцов через эквайринг и платёжные сервисы с разделением платежей.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Можно ли разработать мобильное приложение для маркетплейса?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Да, мы разрабатываем мобильные приложения для iOS и Android с личными кабинетами покупателей и продавцов, push-уведомлениями и оплатой. Приложение входит в тариф «Премиум» или заказывается отдельно.</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wave-divider wave-accent" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

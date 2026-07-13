<?php
require_once __DIR__ . '/../../config.php';
$pageTitle = 'Настройка и поддержка Яндекс Директа под ключ — заказать | Bobr Studio';
$pageDesc = 'Профессиональная настройка и поддержка Яндекс Директа под ключ. Создание рекламных кампаний, сбор семантики, настройка целей и аналитики, ежемесячная оптимизация и отчёты. Закажите эффективный Яндекс Директ!';
$ogImage = '/img/svg/photo.svg';
require_once __DIR__ . '/../../includes/header.php';
?>

<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" },
		{ "@type": "ListItem", "position": 2, "name": "Продвижение", "item": "<?= SITE_URL ?>/promo" },
		{ "@type": "ListItem", "position": 3, "name": "Яндекс Директ", "item": "<?= SITE_URL ?>/promo/yandex-direct" }
	]
}
</script>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "Service",
	"name": "Настройка и поддержка Яндекс Директа под ключ",
	"description": "Создание и ведение рекламных кампаний в Яндекс.Директ: сбор семантики, настройка кампаний, A/B-тесты, аналитика и ежемесячная оптимизация.",
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
					Профессиональная
					<h1>Настройка и <span class="text-accent">поддержка Яндекс Директа</span> под ключ</h1>
					— эффективная реклама с измеримым результатом
				</div>
				<p class="slider-text">Настраиваем и ведём рекламные кампании в Яндекс.Директе: поиск, РСЯ, ретаргетинг. Собираем семантику, подключаем аналитику и оптимизируем ставки для максимальной отдачи бюджета.</p>
				<a href="#brief" class="btn btn-main">Заказать Яндекс Директ</a>
			</div>
			<div class="hero-image">
				<img src="/img/svg/photo.svg" alt="Профессиональная настройка и поддержка Яндекс Директа — Bobr Studio" loading="eager" style="max-height:500px;width:auto">
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<section class="stages section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Этапы работы с Яндекс Директом</h2></div>
			<div class="stages-grid">
				<div class="stage-card dev-etap"><div class="stage-num">01</div><div class="stage-icon"><img loading="lazy" src="/img/icons/analise.png" alt="Анализ ниши и конкурентов"></div><h3 class="stage-title">Анализ и стратегия</h3><ul><li>Изучаем нишу, конкурентов и аудиторию</li><li>Собираем семантическое ядро</li><li>Определяем бюджет и KPI</li><li>Стратегию согласовываем</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">02</div><div class="stage-icon"><img loading="lazy" src="/img/icons/poisk.png" alt="Сбор семантического ядра"></div><h3 class="stage-title">Сбор семантики</h3><ul><li>Парсим запросы через Wordstat</li><li>Группируем по кластерам</li><li>Минусуем нецелевые слова</li><li>Подбираем минус-слова</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">03</div><div class="stage-icon"><img loading="lazy" src="/img/icons/desctop.png" alt="Создание рекламных кампаний"></div><h3 class="stage-title">Создание кампаний</h3><ul><li>Настраиваем поисковые кампании</li><li>Запускаем РСЯ и ретаргетинг</li><li>Пишем объявления с УТП</li><li>Подключаем быстрые ссылки и уточнения</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">04</div><div class="stage-icon"><img loading="lazy" src="/img/icons/analise.png" alt="Настройка целей и аналитики"></div><h3 class="stage-title">Цели и аналитика</h3><ul><li>Подключаем Яндекс.Метрику</li><li>Настраиваем цели и конверсии</li><li>Внедряем сквозную аналитику</li><li>Настраиваем отчёты</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">05</div><div class="stage-icon"><img loading="lazy" src="/img/icons/test.png" alt="A/B тесты и оптимизация"></div><h3 class="stage-title">A/B тесты и оптимизация</h3><ul><li>Тестируем объявления и заголовки</li><li>Оптимизируем ставки и бюджеты</li><li>Анализируем CTR и конверсию</li><li>Масштабируем успешные связки</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">06</div><div class="stage-icon"><img loading="lazy" src="/img/icons/start.png" alt="Ежемесячная поддержка"></div><h3 class="stage-title">Поддержка и отчёты</h3><ul><li>Ежемесячная оптимизация кампаний</li><li>Добавление новых запросов</li><li>Отчёты о расходах и конверсиях</li><li>Корректировка стратегии</li></ul></div>
			</div>
		</div>
		<div class="wave-divider wave-light" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<section class="advantages section-light">
		<div class="container">
			<div class="section-title-wrap"><h3 class="section-title">Почему заказывают Яндекс Директ у нас?</h3></div>
			<div class="adv-grid">
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/search.png" alt="Глубокая проработка семантики"></div><h3 class="adv-title">Глубокая семантика</h3><p class="adv-text">собираем до 10 000 ключей на проект, группируем по смыслу — ни один целевой запрос не потеряется</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/money.png" alt="Оптимизация бюджета"></div><h3 class="adv-title">Контроль бюджета</h3><p class="adv-text">регулярно чистим неэффективные запросы, снижаем цену клика и увеличиваем долю целевого трафика</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/math.png" alt="Сквозная аналитика"></div><h3 class="adv-title">Сквозная аналитика</h3><p class="adv-text">настраиваем цели от клика до продажи — вы видите, сколько реальных заказов принёс каждый рубль</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/links.png" alt="A/B тестирование"></div><h3 class="adv-title">A/B тесты</h3><p class="adv-text">тестируем заголовки, тексты и аудитории — оставляем только то, что реально приносит конверсии</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/desctop.png" alt="Поиск + РСЯ + ретаргетинг"></div><h3 class="adv-title">Все форматы</h3><p class="adv-text">запускаем поиск, РСЯ, ретаргетинг и медийную рекламу — подбираем связку под ваш продукт</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/text.png" alt="Прозрачные отчёты"></div><h3 class="adv-title">Прозрачные отчёты</h3><p class="adv-text">каждый месяц присылаем отчёт: расходы, конверсии, цена цели — вы всегда в курсе эффективности</p></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

<?php $briefWave = 'wave-dark'; $briefTitle = 'Бриф на Яндекс Директ'; $briefSubtitle = 'Расскажите о вашем бизнесе — настроим эффективную рекламную кампанию'; require __DIR__ . '/../../briefs/yandex-brief.php'; ?>

<?php $noWave = true; require_once __DIR__ . '/../../includes/tech-marquee.php'; ?>

<?php $pfDarkBg = true; $pfTitle = 'Наше портфолио'; $pfSubtitle = 'Более 30 успешно реализованных проектов — сайты, приложения и сервисы'; require_once __DIR__ . '/../../includes/portfolio-block.php'; ?>

	<section class="price section-light">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title">Стоимость настройки и ведения Яндекс Директа</h2>
				<p class="section-subtitle">Выберите подходящий тариф — точную стоимость рассчитаем после брифа</p>
			</div>
			<div class="price-grid">
				<div class="price-card">
					<div class="price-plan">Старт</div>
					<div class="price-plan-desc">Настройка одной рекламной кампании</div>
					<div class="price-value">от <strong>15 000</strong> ₽</div>
					<ul class="price-features">
						<li>Сбор семантического ядра</li>
						<li>Настройка поисковой кампании</li>
						<li>Написание объявлений</li>
						<li>Подключение Метрики и целей</li>
						<li>Отчёт о запуске</li>
					</ul>
					<a href="#brief" class="btn btn-main">Заказать</a>
				</div>
				<div class="price-card price-card-featured">
					<div class="price-plan">Стандарт</div>
					<div class="price-plan-desc">Настройка + ведение 1 месяц</div>
					<div class="price-value">от <strong>35 000</strong> ₽</div>
					<ul class="price-features">
						<li>Всё из тарифа «Старт»</li>
						<li>Поиск + РСЯ + ретаргетинг</li>
						<li>Еженедельная оптимизация</li>
						<li>Минусация нецелевых запросов</li>
						<li>A/B тесты объявлений</li>
						<li>Еженедельные отчёты</li>
					</ul>
					<a href="#brief" class="btn btn-main">Заказать</a>
				</div>
				<div class="price-card">
					<div class="price-plan">Премиум</div>
					<div class="price-plan-desc">Полное ведение под ключ</div>
					<div class="price-value">от <strong>70 000</strong> ₽</div>
					<ul class="price-features">
						<li>Всё из тарифа «Стандарт»</li>
						<li>До 5 рекламных кампаний</li>
						<li>Сквозная аналитика + CRM</li>
						<li>Медийная реклама</li>
						<li>Ежемесячная стратегия роста</li>
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
			<div class="section-title-wrap"><h2 class="section-title">Часто задаваемые вопросы о Яндекс Директе</h2></div>
			<div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Сколько стоит настройка Яндекс Директа под ключ?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Стоимость настройки одной кампании — от 15 000 ₽. Ведение с ежемесячной оптимизацией — от 35 000 ₽. Полное управление рекламой под ключ — от 70 000 ₽. Бюджет на клики оплачивается отдельно.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Сколько времени занимает настройка?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Базовая кампания настраивается за 3-5 дней. Сложная стратегия с семантикой на 10 000+ ключей, РСЯ и ретаргетингом — от 1 до 2 недель.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Что входит в ведение Яндекс Директа?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Еженедельная оптимизация ставок, минусация нецелевых запросов, A/B тесты объявлений, добавление новых ключей, корректировка стратегии и подробные отчёты с аналитикой.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Какой бюджет на клики нужен для старта?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Рекомендуемый бюджет — от 15 000 ₽ в месяц на ниши с низкой конкуренцией и от 50 000 ₽ на высококонкурентные. Точную сумму рассчитаем после анализа семантики.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Вы даёте гарантию на результат?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Мы гарантируем профессиональную настройку и оптимизацию, но не можем обещать конкретную цену клика или конверсию — это зависит от ниши, конкурентов и качества вашего сайта. Прозрачная статистика доступна в любой момент.</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wave-divider wave-accent" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>


<?php
require_once __DIR__ . '/../../config.php';
$pageTitle = 'Аудит и доработка сайта — заказать проверку | Bobr Studio';
$pageDesc = 'Профессиональный аудит и доработка сайта: технический SEO-аудит, speed-оптимизация, исправление ошибок, редизайн, адаптация под мобильные. Полный отчёт и план улучшений!';
$ogImage = '/img/svg/barshape.svg';
require_once __DIR__ . '/../../includes/header.php';
?>

<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" },
		{ "@type": "ListItem", "position": 2, "name": "Аудит сайта", "item": "<?= SITE_URL ?>/site-audit" }
	]
}
</script>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "Service",
	"name": "Аудит и доработка сайта",
	"description": "Комплексный аудит сайта: технический SEO-аудит, скорость загрузки, юзабилити, безопасность, ошибки. План улучшений с расчётом стоимости доработок.",
	"provider": {
		"@type": "ProfessionalService",
		"name": "Bobr Studio",
		"url": "<?= SITE_URL ?>"
	},
	"areaServed": "RU",
	"offers": {
		"@type": "Offer",
		"price": "10000",
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
					<h1>Аудит и <span class="text-accent">доработка сайта</span> под ключ</h1>
					— найдём проблемы и исправим
				</div>
				<p class="slider-text">Проведём полную диагностику вашего сайта: технический аудит, скорость загрузки, SEO-ошибки, юзабилити и безопасность. Предоставим детальный отчёт с планом улучшений и реализуем доработки.</p>
				<a href="#brief" class="btn btn-main">Заказать аудит</a>
			</div>
			<div class="hero-image">
				<img src="/img/svg/barshape.svg" alt="Профессиональный аудит и доработка сайта — Bobr Studio" loading="eager">
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<section class="stages section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Этапы аудита и доработки</h2></div>
			<div class="stages-grid">
				<div class="stage-card dev-etap"><div class="stage-num">01</div><div class="stage-icon"><img loading="lazy" src="/img/icons/analise.png" alt="Сбор данных и диагностика"></div><h3 class="stage-title">Сбор данных</h3><ul><li>Сканируем сайт на всех страницах</li><li>Проверяем индексацию и мета-теги</li><li>Анализируем скорость Core Web Vitals</li><li>Проверяем безопасность</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">02</div><div class="stage-icon"><img loading="lazy" src="/img/icons/search.png" alt="Технический SEO-аудит"></div><h3 class="stage-title">Технический аудит</h3><ul><li>Проверяем robots.txt и sitemap</li><li>Ищем битые ссылки и ошибки 404</li><li>Проверяем дубли и canonical</li><li>Анализируем микроразметку</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">03</div><div class="stage-icon"><img loading="lazy" src="/img/icons/desctop.png" alt="Юзабилити-аудит"></div><h3 class="stage-title">Юзабилити</h3><ul><li>Анализируем мобильную версию</li><li>Оцениваем навигацию и CTA</li><li>Проверяем формы и конверсию</li><li>Тестируем на разных устройствах</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">04</div><div class="stage-icon"><img loading="lazy" src="/img/icons/functions.png" alt="Отчёт и план доработок"></div><h3 class="stage-title">Отчёт и план</h3><ul><li>Готовим детальный отчёт с ошибками</li><li>Ранжируем по критичности</li><li>Оцениваем стоимость доработок</li><li>Согласовываем план работ</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">05</div><div class="stage-icon"><img loading="lazy" src="/img/icons/scripts.png" alt="Доработка сайта"></div><h3 class="stage-title">Доработки</h3><ul><li>Исправляем найденные ошибки</li><li>Оптимизируем скорость</li><li>Настраиваем SEO и микроразметку</li><li>Дорабатываем мобильную версию</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">06</div><div class="stage-icon"><img loading="lazy" src="/img/icons/start.png" alt="Повторный аудит"></div><h3 class="stage-title">Контроль качества</h3><ul><li>Проводим повторную проверку</li><li>Сравниваем метрики «до/после»</li><li>Передаём отчёт об изменениях</li><li>Даём рекомендации на будущее</li></ul></div>
			</div>
		</div>
		<div class="wave-divider wave-light" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<section class="advantages section-light">
		<div class="container">
			<div class="section-title-wrap"><h3 class="section-title">Почему заказывают аудит у нас?</h3></div>
			<div class="adv-grid">
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/search.png" alt="Детальный аудит сайта"></div><h3 class="adv-title">Глубокий анализ</h3><p class="adv-text">проверяем более 50 параметров: от индексации до скорости, от безопасности до микроразметки</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/money.png" alt="Чёткий план и смета"></div><h3 class="adv-title">Прозрачная смета</h3><p class="adv-text">каждая ошибка с ценой исправления. Вы выбираете, что делать сейчас, а что отложить</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/start.png" alt="Оптимизация скорости сайта"></div><h3 class="adv-title">Рост конверсии</h3><p class="adv-text">ускорение сайта, понятная навигация и исправление ошибок напрямую влияют на продажи</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/seo.png" alt="SEO-аудит и продвижение"></div><h3 class="adv-title">SEO-эффект</h3><p class="adv-text">исправляем технические ошибки, улучшаем индексацию — сайт поднимается в выдаче</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/adaptive.png" alt="Мобильная версия сайта"></div><h3 class="adv-title">Mobile First</h3><p class="adv-text">проверяем и дорабатываем мобильную версию — больше 60% трафика приходит с телефонов</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/profi.png" alt="Безопасность сайта"></div><h3 class="adv-title">Безопасность</h3><p class="adv-text">проверяем уязвимости, утечки данных и соответствие требованиям законодательства</p></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

<?php $briefWave = 'wave-dark'; $briefTitle = 'Заявка на аудит сайта'; $briefSubtitle = 'Укажите адрес сайта — мы проверим его и подготовим план доработок'; require __DIR__ . '/../../briefs/audit-brief.php'; ?>

<?php $noWave = true; require_once __DIR__ . '/../../includes/tech-marquee.php'; ?>

<?php $pfDarkBg = true; $pfTitle = 'Наше портфолио'; $pfSubtitle = 'Более 30 успешно реализованных проектов — сайты, приложения и сервисы'; require_once __DIR__ . '/../../includes/portfolio-block.php'; ?>

	<section class="price section-light">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title">Стоимость аудита сайта</h2>
				<p class="section-subtitle">Выберите подходящий тариф</p>
			</div>
			<div class="price-grid">
				<div class="price-card">
					<div class="price-plan">Экспресс</div>
					<div class="price-plan-desc">Быстрая проверка основных метрик</div>
					<div class="price-value">от <strong>10 000</strong> ₽</div>
					<ul class="price-features">
						<li>Технический SEO-аудит</li>
						<li>Проверка скорости Pagespeed</li>
						<li>Индексация и мета-теги</li>
						<li>Битые ссылки и ошибки</li>
						<li>Краткий отчёт с рекомендациями</li>
					</ul>
					<a href="#brief" class="btn btn-main">Выбрать</a>
				</div>
				<div class="price-card price-card-featured">
					<div class="price-plan">Стандарт</div>
					<div class="price-plan-desc">Полный аудит с отчётом и сметой</div>
					<div class="price-value">от <strong>30 000</strong> ₽</div>
					<ul class="price-features">
						<li>Всё из экспресс-аудита</li>
						<li>Юзабилити-аудит</li>
						<li>Анализ конкурентов</li>
						<li>Microdata и разметка</li>
						<li>Детальный отчёт + смета доработок</li>
						<li>Консультация по итогам</li>
					</ul>
					<a href="#brief" class="btn btn-main">Выбрать</a>
				</div>
				<div class="price-card">
					<div class="price-plan">Премиум</div>
					<div class="price-plan-desc">Аудит + доработка «под ключ»</div>
					<div class="price-value">от <strong>65 000</strong> ₽</div>
					<ul class="price-features">
						<li>Всё из тарифа «Стандарт»</li>
						<li>Исправление всех найденных ошибок</li>
						<li>Speed-оптимизация</li>
						<li>Доработка мобильной версии</li>
						<li>SEO-настройки и микроразметка</li>
						<li>Повторный аудит после работ</li>
					</ul>
					<a href="#brief" class="btn btn-main">Выбрать</a>
				</div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<section class="faq section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Часто задаваемые вопросы об аудите сайта</h2></div>
			<div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Сколько стоит аудит сайта?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Экспресс-аудит — от 10 000 ₽, стандартный с детальным отчётом — от 30 000 ₽, аудит с полной доработкой — от 65 000 ₽. Стоимость зависит от размера сайта и глубины проверки.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Что входит в аудит сайта?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Технический SEO, скорость загрузки, индексация, битые ссылки, дубли, микроразметка, безопасность, юзабилити и мобильная версия. Вы получаете список ошибок с приоритетами и смету исправлений.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Сколько времени занимает аудит?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Экспресс-аудит — 1-2 дня. Полный аудит с отчётом — 3-5 дней. Аудит с доработками — от 1 до 3 недель в зависимости от объёма работ.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Вы только проверяете или ещё и исправляете?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">И проверяем, и исправляем. Вы можете заказать только аудит, чтобы понять состояние сайта, или аудит с доработкой — мы сами устраним все найденные проблемы.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Нужно ли что-то устанавливать на сайт для аудита?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Нет, мы используем внешние инструменты и проводим проверку удалённо. Для доступа к CMS нужно предоставить логин только если запланированы работы по исправлению.</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wave-divider wave-accent" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

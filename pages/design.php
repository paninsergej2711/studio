<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'Дизайн сайтов под ключ — заказать веб-дизайн | Bobr Studio';
$pageDesc = 'Профессиональный дизайн сайтов под ключ: UI/UX, прототипы, дизайн-системы, адаптивные макеты. Создание уникального визуального стиля под ваш бренд. Закажите дизайн сайта!';
$ogImage = '/img/svg/design.svg';
require_once __DIR__ . '/../includes/header.php';
?>

<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" },
		{ "@type": "ListItem", "position": 2, "name": "Дизайн сайтов", "item": "<?= SITE_URL ?>/design" }
	]
}
</script>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "Service",
	"name": "Дизайн сайтов под ключ",
	"description": "UI/UX дизайн, прототипирование, дизайн-системы, адаптивные макеты, брендинг.",
	"provider": { "@type": "ProfessionalService", "name": "Bobr Studio", "url": "<?= SITE_URL ?>" },
	"areaServed": "RU",
	"offers": { "@type": "Offer", "price": "30000", "priceCurrency": "RUB" }
}
</script>

	<section class="hero section-light">
		<canvas class="hero-particles" id="heroParticles" aria-hidden="true"></canvas>
		<div class="container hero-grid">
			<div class="hero-content">
				<div class="slider-title">Профессиональный<h1>Дизайн <span class="text-accent">сайтов</span> под ключ</h1>— уникальный визуальный стиль под ваш бренд</div>
				<p class="slider-text">Создаём дизайн, который продаёт: прорабатываем UX-сценарии, рисуем адаптивные макеты под все устройства и оформляем фирменный стиль. От лендинга до сложного интернет-магазина — интерфейс, которым хочется пользоваться.</p>
				<a href="#brief" class="btn btn-main">Заказать дизайн</a>
			</div>
			<div class="hero-image"><img src="/img/svg/design.svg" alt="Дизайн сайтов под ключ — Bobr Studio" loading="eager" style="max-height:550px;width:auto"></div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

	<section class="stages section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Этапы дизайна сайта</h2></div>
			<div class="stages-grid">
				<div class="stage-card dev-etap"><div class="stage-num">01</div><div class="stage-icon"><img loading="lazy" src="/img/icons/analise.png" alt="Анализ"></div><h3 class="stage-title">Анализ и бриф</h3><ul><li>Изучаем нишу и конкурентов</li><li>Собираем референсы</li><li>Определяем стиль и tone</li><li>Составляем карту экранов</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">02</div><div class="stage-icon"><img loading="lazy" src="/img/icons/plan.png" alt="Прототип"></div><h3 class="stage-title">Прототипирование</h3><ul><li>Рисуем wireframe'ы</li><li>Продумываем UX-сценарии</li><li>Прорабатываем навигацию</li><li>Согласовываем структуру</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">03</div><div class="stage-icon"><img loading="lazy" src="/img/icons/disign.png" alt="Дизайн-концепция"></div><h3 class="stage-title">Дизайн-концепция</h3><ul><li>Разрабатываем 2-3 концепции</li><li>Подбираем шрифты и цвета</li><li>Рисуем UI-элементы</li><li>Согласовываем направление</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">04</div><div class="stage-icon"><img loading="lazy" src="/img/icons/desctop.png" alt="Макеты"></div><h3 class="stage-title">Отрисовка макетов</h3><ul><li>Рисуем все страницы</li><li>Адаптируем под мобильные</li><li>Прорабатываем анимации</li><li>Готовим макеты к вёрстке</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">05</div><div class="stage-icon"><img loading="lazy" src="/img/icons/adaptive.png" alt="Адаптив"></div><h3 class="stage-title">Адаптивный дизайн</h3><ul><li>Desktop, планшет, мобильный</li><li>Mobile-first подход</li><li>Проверка touch-элементов</li><li>Сетка под все экраны</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">06</div><div class="stage-icon"><img loading="lazy" src="/img/icons/start.png" alt="Передача"></div><h3 class="stage-title">Передача и поддержка</h3><ul><li>UI-кит и гайдлайн</li><li>Иконки и графика</li><li>Передача разработчикам</li><li>Авторский надзор</li></ul></div>
			</div>
		</div>
		<div class="wave-divider wave-light" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

	<section class="advantages section-light">
		<div class="container">
			<div class="section-title-wrap"><h3 class="section-title">Почему заказывают дизайн у нас?</h3></div>
			<div class="adv-grid">
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/disign.png" alt="Уникальный дизайн"></div><h3 class="adv-title">Уникальный стиль</h3><p class="adv-text">не шаблон, а индивидуальный дизайн под ваш бренд — сайт не похож на конкурентов</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/desctop.png" alt="UX дизайн"></div><h3 class="adv-title">UX-проработка</h3><p class="adv-text">продумываем сценарии пользователя — путь от входа до целевого действия интуитивен</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/money.png" alt="Конверсионный дизайн"></div><h3 class="adv-title">Конверсионный дизайн</h3><p class="adv-text">каждый элемент работает на продажи: кнопки, формы, CTA — проверено на реальных проектах</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/adaptive.png" alt="Адаптив"></div><h3 class="adv-title">Mobile First</h3><p class="adv-text">дизайн сразу под мобильные — больше 60% трафика приходит с телефонов</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/image.png" alt="UI-кит"></div><h3 class="adv-title">UI-кит и гайдлайн</h3><p class="adv-text">передаём дизайн-систему: шрифты, цвета, компоненты, иконки — готово к разработке</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/support.png" alt="Поддержка"></div><h3 class="adv-title">Авторский надзор</h3><p class="adv-text">сопровождаем вёрстку — следим, чтобы реализация точно соответствовала дизайну</p></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

<?php $briefWave = 'wave-dark'; $briefTitle = 'Бриф на дизайн сайта'; $briefSubtitle = 'Расскажите о проекте — подготовим дизайн-концепцию'; require __DIR__ . '/../briefs/design-brief.php'; ?>

<?php $noWave = true; require_once __DIR__ . '/../includes/tech-marquee.php'; ?>

<?php $pfDarkBg = true; $pfTitle = 'Наше портфолио'; $pfSubtitle = 'Более 30 успешно реализованных проектов'; require_once __DIR__ . '/../includes/portfolio-block.php'; ?>

	<section class="price section-light">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Стоимость дизайна сайта</h2><p class="section-subtitle">Выберите тариф</p></div>
			<div class="price-grid">
				<div class="price-card"><h3 class="price-card-title">Лендинг</h3><div class="price-value">от <strong>15 000</strong> ₽</div><ul class="price-features"><li>Дизайн главного экрана</li><li>Мобильная версия</li><li>UI-кит</li><li>Правки: 3 раунда</li></ul><a href="#brief" class="btn btn-main">Заказать</a></div>
				<div class="price-card price-card-featured"><h3 class="price-card-title">Многостраничный</h3><div class="price-value">от <strong>50 000</strong> ₽</div><ul class="price-features"><li>До 5 уникальных страниц</li><li>Адаптив под все устройства</li><li>Прототипы экранов</li><li>UI-кит + гайдлайн</li><li>Правки: 5 раундов</li></ul><a href="#brief" class="btn btn-main">Заказать</a></div>
				<div class="price-card"><h3 class="price-card-title">Комплексный</h3><div class="price-value">Индивидуально</div><ul class="price-features"><li>Все страницы проекта</li><li>Дизайн-система</li><li>Иконки и графика</li><li>Анимации интерфейса</li><li>Авторский надзор</li></ul><a href="#brief" class="btn btn-main">Заказать</a></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

	<section class="faq section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Частые вопросы о дизайне</h2></div>
			<div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><h3 class="faq-question" itemprop="name">Сколько стоит дизайн сайта?</h3><div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div class="faq-answer-text" itemprop="text">Лендинг — от 15 000 ₽. Многостраничный сайт — от 50 000 ₽. Комплексный дизайн с анимациями — от 150 000 ₽.</div></div></div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><h3 class="faq-question" itemprop="name">Сколько времени занимает дизайн?</h3><div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div class="faq-answer-text" itemprop="text">Лендинг — 1-2 недели. Многостраничный сайт — 2-4 недели. Сложный проект — рассчитывается индивидуально.</div></div></div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><h3 class="faq-question" itemprop="name">Вы даёте исходники?</h3><div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div class="faq-answer-text" itemprop="text">Да, передаём все исходники: Figma, SVG иконки, шрифты и гайдлайн по использованию.</div></div></div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><h3 class="faq-question" itemprop="name">Что такое UI-кит?</h3><div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div class="faq-answer-text" itemprop="text">Это набор всех элементов интерфейса: кнопки, формы, карточки, шрифты и цвета — готов к использованию разработчиками и для будущих страниц.</div></div></div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><h3 class="faq-question" itemprop="name">Можно ли заказать редизайн?</h3><div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div class="faq-answer-text" itemprop="text">Да, освежаем существующий сайт: улучшаем UX, обновляем стиль и повышаем конверсию без полной переработки.</div></div></div>
			</div>
		</div>
		<div class="wave-divider wave-accent" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

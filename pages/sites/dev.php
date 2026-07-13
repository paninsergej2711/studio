<?php
require_once __DIR__ . '/../../config.php';
$pageTitle = 'Разработка сайтов под ключ — заказать создание сайта | Bobr Studio';
$pageDesc = 'Профессиональная разработка сайтов под ключ. Создание лендингов, корпоративных сайтов, интернет-магазинов, каталогов и маркетплейсов. Полный цикл: от дизайна до запуска и продвижения!';
$ogImage = '/img/svg/dev.svg';
require_once __DIR__ . '/../../includes/header.php';
?>

<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" },
		{ "@type": "ListItem", "position": 2, "name": "Разработка сайтов", "item": "<?= SITE_URL ?>/sites" }
	]
}
</script>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "Service",
	"name": "Разработка сайтов под ключ",
	"description": "Создание сайтов любого типа: лендинги, корпоративные сайты, интернет-магазины, каталоги, маркетплейсы.",
	"provider": { "@type": "ProfessionalService", "name": "Bobr Studio", "url": "<?= SITE_URL ?>" },
	"areaServed": "RU",
	"offers": { "@type": "Offer", "price": "15000", "priceCurrency": "RUB" }
}
</script>

	<section class="hero section-light">
		<canvas class="hero-particles" id="heroParticles" aria-hidden="true"></canvas>
		<div class="container hero-grid">
			<div class="hero-content">
				<div class="slider-title">Профессиональная <h1>Разработка <span class="text-accent">сайтов</span> под ключ</h1>— любой тип сайта для вашего бизнеса</div>
				<p class="slider-text">Создаём сайты любого типа и сложности: от продающего лендинга до маркетплейса с высокой нагрузкой. Полный цикл работ — дизайн, разработка, наполнение, SEO и продвижение. Работаем с WordPress, OpenCart, Laravel, 1С-Битрикс.</p>
				<a href="#brief" class="btn btn-main">Заказать сайт</a>
			</div>
			<div class="hero-image"><img src="/img/svg/dev.svg" alt="Разработка сайтов под ключ — Bobr Studio" loading="eager" style="max-height:550px;width:auto"></div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

	<section class="stages section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Этапы разработки сайта</h2></div>
			<div class="stages-grid">
				<div class="stage-card dev-etap"><div class="stage-num">01</div><div class="stage-icon"><img loading="lazy" src="/img/icons/analise.png" alt="Анализ"></div><h3 class="stage-title">Анализ и бриф</h3><ul><li>Изучаем бизнес и конкурентов</li><li>Определяем цели сайта</li><li>Составляем структуру</li><li>Подбираем технологический стек</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">02</div><div class="stage-icon"><img loading="lazy" src="/img/icons/disign.png" alt="Дизайн"></div><h3 class="stage-title">Дизайн</h3><ul><li>Создаём прототипы и макеты</li><li>Прорабатываем UX-сценарии</li><li>Разрабатываем адаптивный дизайн</li><li>Согласовываем результат</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">03</div><div class="stage-icon"><img loading="lazy" src="/img/icons/scripts.png" alt="Вёрстка"></div><h3 class="stage-title">Вёрстка и программирование</h3><ul><li>Верстаем адаптивно (Mobile First)</li><li>Настраиваем выбранную CMS</li><li>Интегрируем платёжные системы и API</li><li>Подключаем формы и аналитику</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">04</div><div class="stage-icon"><img loading="lazy" src="/img/icons/sites.png" alt="Наполнение"></div><h3 class="stage-title">Наполнение контентом</h3><ul><li>Добавляем тексты и изображения</li><li>Настраиваем SEO-мета-теги</li><li>Оптимизируем скорость загрузки</li><li>Проверяем отображение</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">05</div><div class="stage-icon"><img loading="lazy" src="/img/icons/test.png" alt="Тестирование"></div><h3 class="stage-title">Тестирование</h3><ul><li>Проверяем на всех устройствах</li><li>Тестируем формы и функционал</li><li>Проверяем безопасность</li><li>Исправляем ошибки</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">06</div><div class="stage-icon"><img loading="lazy" src="/img/icons/start.png" alt="Запуск"></div><h3 class="stage-title">Запуск и поддержка</h3><ul><li>Переносим на боевой домен</li><li>Настраиваем SSL и защиту</li><li>Подключаем аналитику</li><li>Обучаем работе с сайтом</li></ul></div>
			</div>
		</div>
		<div class="wave-divider wave-light" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

	<section class="advantages section-light">
		<div class="container">
			<div class="section-title-wrap"><h3 class="section-title">Почему заказывают разработку у нас?</h3></div>
			<div class="adv-grid">
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/desctop.png" alt="Любые типы сайтов"></div><h3 class="adv-title">Любые типы сайтов</h3><p class="adv-text">лендинги, корпоративные сайты, интернет-магазины, каталоги, маркетплейсы — подберём формат под ваш бизнес</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/profi.png" alt="Современный дизайн"></div><h3 class="adv-title">Современный дизайн</h3><p class="adv-text">уникальный UI/UX с адаптацией под все устройства — ваш сайт будет выглядеть дорого и современно</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/seo.png" alt="SEO"></div><h3 class="adv-title">SEO-оптимизация</h3><p class="adv-text">правильная структура, ЧПУ-ссылки, микроразметка и мета-теги — закладываем SEO с самого начала</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/start.png" alt="Скорость"></div><h3 class="adv-title">Быстрый запуск</h3><p class="adv-text">лендинг за 3-7 дней, корпоративный сайт за 1-2 недели, сложный проект — от месяца</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/crm.png" alt="Интеграции"></div><h3 class="adv-title">Любые интеграции</h3><p class="adv-text">CRM, 1С, платёжные системы, доставки, аналитика, телефония — подключаем всё необходимое</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/support.png" alt="Поддержка"></div><h3 class="adv-title">Поддержка после запуска</h3><p class="adv-text">не бросаем после сдачи: обучаем, поддерживаем, дорабатываем и развиваем сайт</p></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

<?php $briefWave = 'wave-dark'; $briefTitle = 'Бриф на разработку сайта'; $briefSubtitle = 'Выберите тип сайта — мы подберём оптимальное решение'; require __DIR__ . '/../../briefs/dev-brief.php'; ?>

<?php $noWave = true; require_once __DIR__ . '/../../includes/tech-marquee.php'; ?>

<?php $pfDarkBg = true; $pfTitle = 'Наше портфолио'; $pfSubtitle = 'Более 30 успешно реализованных проектов'; require_once __DIR__ . '/../../includes/portfolio-block.php'; ?>

	<section class="price section-light">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Стоимость разработки сайта</h2><p class="section-subtitle">от типа и сложности</p></div>
			<div class="price-grid">
				<div class="price-card"><h3 class="price-card-title">Лендинг</h3><div class="price-value">от <strong>15 000</strong> ₽</div><ul class="price-features"><li>Уникальный дизайн</li><li>Формы захвата</li><li>Адаптив под все устройства</li><li>Базовая SEO-оптимизация</li></ul><a href="#brief" class="btn btn-main">Заказать</a></div>
				<div class="price-card price-card-featured"><h3 class="price-card-title">Корпоративный</h3><div class="price-value">от <strong>35 000</strong> ₽</div><ul class="price-features"><li>до 10 страниц</li><li>Уникальный дизайн</li><li>Блог / новости</li><li>CRM интеграция</li></ul><a href="#brief" class="btn btn-main">Заказать</a></div>
				<div class="price-card"><h3 class="price-card-title">Интернет-магазин</h3><div class="price-value">от <strong>50 000</strong> ₽</div><ul class="price-features"><li>Каталог и корзина</li><li>Оплата и доставка</li><li>Личный кабинет</li><li>Полная SEO-оптимизация</li></ul><a href="#brief" class="btn btn-main">Заказать</a></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

	<section class="faq section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Частые вопросы</h2></div>
			<div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><h3 class="faq-question" itemprop="name">Сколько стоит разработка сайта под ключ?</h3><div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div class="faq-answer-text" itemprop="text">Стоимость зависит от типа сайта: лендинг — от 15 000 ₽, корпоративный — от 35 000 ₽, интернет-магазин — от 50 000 ₽. Точную цену рассчитываем после брифа.</div></div></div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><h3 class="faq-question" itemprop="name">Какие CMS вы используете?</h3><div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div class="faq-answer-text" itemprop="text">WordPress, OpenCart, 1С-Битрикс, MODX, Laravel, кастомные решения. Подбираем под задачи и бюджет.</div></div></div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><h3 class="faq-question" itemprop="name">Сколько времени занимает разработка?</h3><div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div class="faq-answer-text" itemprop="text">Лендинг — 3-7 дней. Корпоративный сайт — 1-2 недели. Интернет-магазин — 2-6 недель. Сложные проекты индивидуально.</div></div></div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><h3 class="faq-question" itemprop="name">Вы даёте хостинг и домен?</h3><div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div class="faq-answer-text" itemprop="text">Помогаем с выбором и настройкой хостинга и домена, но вы оплачиваете их напрямую провайдеру.</div></div></div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><h3 class="faq-question" itemprop="name">Входит ли SEO в стоимость?</h3><div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div class="faq-answer-text" itemprop="text">Базовая SEO-оптимизация включена: мета-теги, ЧПУ, микроразметка. Расширенное продвижение — отдельно.</div></div></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

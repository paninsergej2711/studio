<?php
require_once __DIR__ . '/../../config.php';
$pageTitle = 'Разработка корпоративного сайта под ключ — заказать создание | Bobr Studio';
$pageDesc = 'Профессиональная разработка корпоративных сайтов под ключ. Создание представительского сайта компании: презентабельный дизайн, информация об услугах, портфолио, новости, форма связи. Имиджевый сайт для бизнеса!';
$ogImage = '/img/svg/illustartion.svg';
require_once __DIR__ . '/../../includes/header.php';
?>

<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" },
		{ "@type": "ListItem", "position": 2, "name": "Корпоративный сайт", "item": "<?= SITE_URL ?>/sites/corporate" }
	]
}
</script>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "Service",
	"name": "Разработка корпоративного сайта под ключ",
	"description": "Создание представительского корпоративного сайта компании: презентабельный дизайн, информация о компании и услугах, портфолио, новости, форма связи и онлайн-запись.",
	"provider": { "@type": "ProfessionalService", "name": "Bobr Studio", "url": "<?= SITE_URL ?>" },
	"areaServed": "RU",
	"offers": { "@type": "Offer", "price": "35000", "priceCurrency": "RUB" }
}
</script>

	<section class="hero section-light">
		<canvas class="hero-particles" id="heroParticles" aria-hidden="true"></canvas>
		<div class="container hero-grid">
			<div class="hero-content">
				<div class="slider-title">Профессиональная<h1>Разработка <span class="text-accent">корпоративного сайта</span> под ключ</h1>— имиджевый сайт для вашей компании</div>
				<p class="slider-text">Создаём стильные корпоративные сайты, которые формируют доверие к вашей компании. Информация об услугах, портфолио, отзывы, новости, форма связи и онлайн-запись — всё для первого впечатления и новых клиентов.</p>
				<a href="#brief" class="btn btn-main">Заказать корпоративный сайт</a>
			</div>
			<div class="hero-image"><img src="/img/svg/illustartion.svg" alt="Профессиональная разработка корпоративного сайта — Bobr Studio" loading="eager"></div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

	<section class="stages section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Этапы разработки корпоративного сайта</h2></div>
			<div class="stages-grid">
				<div class="stage-card dev-etap"><div class="stage-num">01</div><div class="stage-icon"><img loading="lazy" src="/img/icons/analise.png" alt="Анализ и структура"></div><h3 class="stage-title">Анализ и структура</h3><ul><li>Изучаем компанию и нишу</li><li>Определяем задачи сайта</li><li>Проектируем структуру разделов</li><li>Составляем техническое задание</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">02</div><div class="stage-icon"><img loading="lazy" src="/img/icons/disign.png" alt="Дизайн"></div><h3 class="stage-title">Дизайн</h3><ul><li>Разрабатываем фирменный стиль</li><li>Рисуем макеты всех разделов</li><li>Адаптируем под мобильные</li><li>Согласовываем макет</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">03</div><div class="stage-icon"><img loading="lazy" src="/img/icons/scripts.png" alt="Вёрстка"></div><h3 class="stage-title">Вёрстка и программирование</h3><ul><li>Верстаем адаптивно</li><li>Подключаем CMS</li><li>Настраиваем формы связи</li><li>Оптимизируем скорость</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">04</div><div class="stage-icon"><img loading="lazy" src="/img/icons/sites.png" alt="Наполнение"></div><h3 class="stage-title">Наполнение контентом</h3><ul><li>Добавляем тексты и фото</li><li>Оформляем услуги и кейсы</li><li>Настраиваем новости и блог</li><li>Базовая SEO-оптимизация</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">05</div><div class="stage-icon"><img loading="lazy" src="/img/icons/test.png" alt="Тестирование"></div><h3 class="stage-title">Тестирование</h3><ul><li>Проверяем формы и отображение</li><li>Тестируем на всех устройствах</li><li>Проверяем скорость</li><li>Исправляем недочёты</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">06</div><div class="stage-icon"><img loading="lazy" src="/img/icons/start.png" alt="Запуск"></div><h3 class="stage-title">Запуск</h3><ul><li>Публикуем на хостинге и домене</li><li>Настраиваем SSL и защиту</li><li>Подключаем аналитику</li><li>Сопровождаем после запуска</li></ul></div>
			</div>
		</div>
		<div class="wave-divider wave-light" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

	<section class="advantages section-light">
		<div class="container">
			<div class="section-title-wrap"><h3 class="section-title">Почему заказывают корпоративный сайт у нас?</h3></div>
			<div class="adv-grid">
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/profi.png" alt="Имидж"></div><h3 class="adv-title">Доверие с первого взгляда</h3><p class="adv-text">продуманный дизайн и структура формируют положительный образ компании в глазах клиентов и партнёров</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/seo.png" alt="SEO"></div><h3 class="adv-title">SEO-готовность</h3><p class="adv-text">правильная структура, мета-теги и микроразметка — сайт находят по названию компании и услугам</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/desctop.png" alt="Адаптивность"></div><h3 class="adv-title">Адаптивность</h3><p class="adv-text">корпоративный сайт идеально выглядит на всех устройствах — от телефона до широкого монитора</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/desctop.png" alt="CMS"></div><h3 class="adv-title">Удобная CMS</h3><p class="adv-text">вы легко меняете контент, добавляете новости и обновляете страницы без знаний программирования</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/form.png" alt="Формы"></div><h3 class="adv-title">Формы связи</h3><p class="adv-text">заявки, обратный звонок, запись на услугу — заявки приходят прямо в CRM или на почту</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/money.png" alt="Быстрый запуск"></div><h3 class="adv-title">Быстрый запуск</h3><p class="adv-text">базовый корпоративный сайт запускаем за 5-10 дней. Полноценный портал с блогом — от 2 недель</p></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

<?php $briefWave = 'wave-dark'; $briefTitle = 'Бриф на корпоративный сайт'; $briefSubtitle = 'Расскажите о компании — создадим сайт, который работает на ваш имидж'; require __DIR__ . '/../../briefs/corporate-brief.php'; ?>

<?php $noWave = true; require_once __DIR__ . '/../../includes/tech-marquee.php'; ?>

<?php $pfDarkBg = true; $pfTitle = 'Наше портфолио'; $pfSubtitle = 'Более 30 успешно реализованных проектов'; require_once __DIR__ . '/../../includes/portfolio-block.php'; ?>

	<section class="price section-light">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Стоимость корпоративного сайта</h2><p class="section-subtitle">Выберите тариф</p></div>
			<div class="price-grid">
				<div class="price-card"><h3 class="price-card-title">Базовый</h3><div class="price-value">от <strong>35 000</strong> ₽</div><ul class="price-features"><li>до 5 страниц</li><li>Дизайн под бренд</li><li>Форма связи</li><li>Базовая SEO-оптимизация</li><li>Адаптив под все устройства</li></ul><a href="#brief" class="btn btn-main">Заказать</a></div>
				<div class="price-card price-card-featured"><h3 class="price-card-title">Стандарт</h3><div class="price-value">от <strong>70 000</strong> ₽</div><ul class="price-features"><li>до 15 страниц</li><li>Уникальный дизайн</li><li>Блог / новости</li><li>Портфолио / кейсы</li><li>Интеграция с CRM</li><li>Расширенная SEO-оптимизация</li></ul><a href="#brief" class="btn btn-main">Заказать</a></div>
				<div class="price-card"><h3 class="price-card-title">Премиум</h3><div class="price-value">от <strong>150 000</strong> ₽</div><ul class="price-features"><li>Неограниченные страницы</li><li>Дизайн-система</li><li>Каталог продукции</li><li>Личный кабинет</li><li>Интеграция с 1С</li><li>Приоритетная поддержка</li></ul><a href="#brief" class="btn btn-main">Заказать</a></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

	<section class="faq section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Частые вопросы о корпоративном сайте</h2></div>
			<div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><h3 class="faq-question" itemprop="name">Сколько стоит разработка корпоративного сайта?</h3><div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div class="faq-answer-text" itemprop="text">Базовый сайт до 5 страниц — от 35 000 ₽. Многостраничный портал с блогом и портфолио — от 70 000 ₽. Премиум с каталогом и интеграциями — от 150 000 ₽.</div></div></div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><h3 class="faq-question" itemprop="name">Чем корпоративный сайт отличается от лендинга?</h3><div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div class="faq-answer-text" itemprop="text">Лендинг — одностраничник под рекламный трафик. Корпоративный сайт — многостраничный портал с информацией о компании, услугах, новостях и портфолио. Он формирует полноценный образ бизнеса.</div></div></div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><h3 class="faq-question" itemprop="name">Какие разделы входят в корпоративный сайт?</h3><div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div class="faq-answer-text" itemprop="text">Главная, о компании, услуги, портфолио, новости/блог, контакты. При необходимости добавляем каталог, вакансии, отзывы, партнёров и другие разделы под ваш бизнес.</div></div></div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><h3 class="faq-question" itemprop="name">Можно ли будет обновлять сайт?</h3><div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div class="faq-answer-text" itemprop="text">Да, мы устанавливаем удобную CMS с понятной админ-панелью. Вы сможете менять тексты, фото, добавлять новости и услуги без помощи разработчиков.</div></div></div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><h3 class="faq-question" itemprop="name">Делаете ли SEO-оптимизацию?</h3><div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div class="faq-answer-text" itemprop="text">Да, базовая SEO-оптимизация входит во все тарифы: мета-теги, правильная структура, ЧПУ-ссылки и микроразметка. Расширенное SEO — в тарифах Стандарт и Премиум.</div></div></div>
			</div>
		</div>
		<div class="wave-divider wave-accent" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

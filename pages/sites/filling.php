<?php
require_once __DIR__ . '/../../config.php';
$pageTitle = 'Наполнение товарами под ключ — заказать загрузку контента на сайт | Bobr Studio';
$pageDesc = 'Профессиональное наполнение товарами интернет-магазинов и каталогов под ключ. Загрузка карточек товаров, SEO-описания, оптимизация изображений, импорт из 1С и Excel. Закажите наполнение сайта!';
$ogImage = '/img/svg/fill.svg';
require_once __DIR__ . '/../../includes/header.php';
?>

<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" },
		{ "@type": "ListItem", "position": 2, "name": "Наполнение товарами", "item": "<?= SITE_URL ?>/filling" }
	]
}
</script>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "Service",
	"name": "Наполнение товарами под ключ",
	"description": "Загрузка и оформление карточек товаров на сайт: описания, фото, характеристики, цены, SEO-тексты.",
	"provider": { "@type": "ProfessionalService", "name": "Bobr Studio", "url": "<?= SITE_URL ?>" },
	"areaServed": "RU",
	"offers": { "@type": "Offer", "price": "5000", "priceCurrency": "RUB" }
}
</script>

	<section class="hero section-light">
		<canvas class="hero-particles" id="heroParticles" aria-hidden="true"></canvas>
		<div class="container hero-grid">
			<div class="hero-content">
				<div class="slider-title">Профессиональное<h1>Наполнение <span class="text-accent">товарами</span> под ключ</h1>— загрузка контента на сайт</div>
				<p class="slider-text">Заполняем интернет-магазины и каталоги товарами: пишем SEO-описания, обрабатываем фото, заполняем характеристики и цены. Импорт из Excel, 1С или поставщиков — быстро и аккуратно.</p>
				<a href="#brief" class="btn btn-main">Заказать наполнение</a>
			</div>
			<div class="hero-image"><img src="/img/svg/fill.svg" alt="Наполнение товарами под ключ — Bobr Studio" loading="eager" style="max-height:550px;width:auto"></div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

	<section class="stages section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Этапы наполнения товарами</h2></div>
			<div class="stages-grid">
				<div class="stage-card dev-etap"><div class="stage-num">01</div><div class="stage-icon"><img loading="lazy" src="/img/icons/analise.png" alt="Подготовка данных"></div><h3 class="stage-title">Подготовка данных</h3><ul><li>Получаем файлы с товарами</li><li>Анализируем структуру</li><li>Составляем шаблон карточки</li><li>Согласовываем формат</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">02</div><div class="stage-icon"><img loading="lazy" src="/img/icons/text.png" alt="Описания товаров"></div><h3 class="stage-title">Описания товаров</h3><ul><li>Пишем SEO-оптимизированные тексты</li><li>Подбираем ключевые слова</li><li>Указываем характеристики</li><li>Адаптируем контент поставщика</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">03</div><div class="stage-icon"><img loading="lazy" src="/img/icons/image.png" alt="Фото товаров"></div><h3 class="stage-title">Обработка фото</h3><ul><li>Оптимизируем размер и качество</li><li>Удаляем водяные знаки</li><li>Кадрируем и выравниваем</li><li>Готовим WebP для скорости</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">04</div><div class="stage-icon"><img loading="lazy" src="/img/icons/sites.png" alt="Загрузка на сайт"></div><h3 class="stage-title">Загрузка на сайт</h3><ul><li>Добавляем товары в админку</li><li>Проставляем категории и фильтры</li><li>Настраиваем цены и артикулы</li><li>Импортируем через CSV/API</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">05</div><div class="stage-icon"><img loading="lazy" src="/img/icons/test.png" alt="Проверка"></div><h3 class="stage-title">Проверка</h3><ul><li>Сверяем карточки с исходными данными</li><li>Проверяем отображение на витрине</li><li>Исправляем ошибки</li><li>Проверяем SEO-теги</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">06</div><div class="stage-icon"><img loading="lazy" src="/img/icons/start.png" alt="Поддержка"></div><h3 class="stage-title">Поддержка</h3><ul><li>Регулярное обновление цен</li><li>Добавление новых позиций</li><li>Корректировка описаний</li><li>Техническая поддержка</li></ul></div>
			</div>
		</div>
		<div class="wave-divider wave-light" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

	<section class="advantages section-light">
		<div class="container">
			<div class="section-title-wrap"><h3 class="section-title">Почему заказывают наполнение у нас?</h3></div>
			<div class="adv-grid">
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/seo.png" alt="SEO-контент"></div><h3 class="adv-title">SEO-оптимизировано</h3><p class="adv-text">каждая карточка — с ключевыми словами и правильной структурой для поисковиков</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/start.png" alt="Быстро"></div><h3 class="adv-title">Быстрая загрузка</h3><p class="adv-text">до 500 карточек в день — ваш каталог пополняется без задержек</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/calculator.png" alt="Цена"></div><h3 class="adv-title">Фиксированная цена</h3><p class="adv-text">оплата за каждую заполненную карточку — без скрытых платежей</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/auto.png" alt="Автоматизация"></div><h3 class="adv-title">Автоматический импорт</h3><p class="adv-text">настроим выгрузку из Excel, 1С или API поставщика напрямую на сайт</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/image.png" alt="Фото"></div><h3 class="adv-title">Обработка фото</h3><p class="adv-text">оптимизируем изображения для быстрой загрузки сайта без потери качества</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/support.png" alt="Поддержка"></div><h3 class="adv-title">Сопровождение</h3><p class="adv-text">поддерживаем каталог в актуальном состоянии: цены, остатки, новинки</p></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

<?php $briefWave = 'wave-dark'; $briefTitle = 'Бриф на наполнение товарами'; $briefSubtitle = 'Расскажите о задачах — подготовим решение'; require __DIR__ . '/../../briefs/filling-brief.php'; ?>

<?php $noWave = true; require_once __DIR__ . '/../../includes/tech-marquee.php'; ?>

<?php $pfDarkBg = true; $pfTitle = 'Наше портфолио'; $pfSubtitle = 'Более 30 успешно реализованных проектов'; require_once __DIR__ . '/../../includes/portfolio-block.php'; ?>

	<section class="price section-light">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Стоимость наполнения</h2><p class="section-subtitle">от 100 ₽ за карточку</p></div>
			<div class="price-grid">
				<div class="price-card"><h3 class="price-card-title">Базовая</h3><div class="price-value">от <strong>100</strong> ₽/шт</div><ul class="price-features"><li>Загрузка с готовым контентом</li><li>Заполнение характеристик</li><li>Цены и артикулы</li></ul><a href="#brief" class="btn btn-main">Заказать</a></div>
				<div class="price-card price-card-featured"><h3 class="price-card-title">Стандарт</h3><div class="price-value">от <strong>200</strong> ₽/шт</div><ul class="price-features"><li>Всё из базового тарифа</li><li>Написание SEO-описания</li><li>Обработка и загрузка фото</li><li>Категории и фильтры</li></ul><a href="#brief" class="btn btn-main">Заказать</a></div>
				<div class="price-card"><h3 class="price-card-title">Премиум</h3><div class="price-value">от <strong>300</strong> ₽/шт</div><ul class="price-features"><li>Всё из тарифа «Стандарт»</li><li>Уникальные SEO-тексты</li><li>Ретушь и WebP</li><li>Массовый импорт из 1С/Excel</li><li>Приоритетная загрузка</li></ul><a href="#brief" class="btn btn-main">Заказать</a></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

	<section class="faq section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Частые вопросы о наполнении</h2></div>
			<div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><h3 class="faq-question" itemprop="name">Сколько стоит наполнение товарами?</h3><div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div class="faq-answer-text" itemprop="text">Базовая загрузка готового контента — от 100 ₽ за карточку. Написание SEO-описаний и обработка фото — от 200 ₽. Полный премиум — от 300 ₽.</div></div></div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><h3 class="faq-question" itemprop="name">Из каких источников можно загрузить?</h3><div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div class="faq-answer-text" itemprop="text">Excel, CSV, 1С, API поставщика, парсинг с других сайтов — подойдёт любой формат данных.</div></div></div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><h3 class="faq-question" itemprop="name">Сколько времени занимает?</h3><div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div class="faq-answer-text" itemprop="text">До 500 карточек в день при стандартном наполнении. Крупные каталоги грузим партиями.</div></div></div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><h3 class="faq-question" itemprop="name">Вы пишете уникальные описания?</h3><div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div class="faq-answer-text" itemprop="text">Да, в тарифах «Стандарт» и «Премиум» — пишем SEO-тексты с ключевыми словами под ваш каталог.</div></div></div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><h3 class="faq-question" itemprop="name">Вы обрабатываете фото товаров?</h3><div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div class="faq-answer-text" itemprop="text">Да, обрезаем, выравниваем, сжимаем в WebP для быстрой загрузки сайта и чистим от водяных знаков.</div></div></div>
			</div>
		</div>
		<div class="wave-divider wave-accent" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>


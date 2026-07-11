<?php
require_once __DIR__ . '/../../config.php';
$pageTitle = 'Поддержка и техобслуживание сайта — заказать | Bobr Studio';
$pageDesc = 'Профессиональная поддержка и техобслуживание сайта: обновление CMS, бэкапы, мониторинг, аптайм, хостинг, доработка функционала. Гарантируем стабильную работу вашего сайта 24/7!';
$ogImage = '/img/svg/puzzle.svg';
require_once __DIR__ . '/../../includes/header.php';
?>

<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" },
		{ "@type": "ListItem", "position": 2, "name": "Поддержка сайтов", "item": "<?= SITE_URL ?>/site-support" }
	]
}
</script>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "Service",
	"name": "Поддержка и техобслуживание сайта",
	"description": "Комплексная поддержка сайта: обновления CMS, резервное копирование, мониторинг аптайма, защита от взломов, доработка функционала и хостинг.",
	"provider": {
		"@type": "ProfessionalService",
		"name": "Bobr Studio",
		"url": "<?= SITE_URL ?>"
	},
	"areaServed": "RU",
	"offers": {
		"@type": "Offer",
		"price": "5000",
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
					<h1>Поддержка и <span class="text-accent">техобслуживание</span> сайта</h1>
					— ваш сайт всегда работает стабильно и безопасно
				</div>
				<p class="slider-text">Обеспечиваем круглосуточную работу вашего сайта: регулярные обновления, бэкапы, мониторинг и оперативное решение проблем. Сайт защищён, актуален и не тормозит — вы занимаетесь бизнесом, а не техническими вопросами.</p>
				<a href="#brief" class="btn btn-main">Заказать поддержку</a>
			</div>
			<div class="hero-image">
				<img src="/img/svg/puzzle.svg" alt="Поддержка и техобслуживание сайта — Bobr Studio" loading="eager" style="max-height:600px;width:auto">
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<section class="stages section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Что входит в обслуживание сайта</h2></div>
			<div class="stages-grid">
				<div class="stage-card dev-etap"><div class="stage-num">01</div><div class="stage-icon"><img loading="lazy" src="/img/icons/scripts.png" alt="Обновление CMS и плагинов"></div><h3 class="stage-title">Обновление CMS и плагинов</h3><ul><li>Своевременное обновление ядра и модулей</li><li>Совместимость с новыми версиями PHP</li><li>Устранение конфликтов после обновлений</li><li>Тестирование перед применением</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">02</div><div class="stage-icon"><img loading="lazy" src="/img/icons/profi.png" alt="Безопасность сайта"></div><h3 class="stage-title">Безопасность</h3><ul><li>Мониторинг на взломы и вирусы</li><li>Настройка SSL и файерволов</li><li>Защита от DDoS и брутфорса</li><li>Аудит кода на уязвимости</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">03</div><div class="stage-icon"><img loading="lazy" src="/img/icons/sites.png" alt="Резервное копирование сайта"></div><h3 class="stage-title">Резервное копирование</h3><ul><li>Ежедневные бэкапы файлов и базы данных</li><li>Хранение копий на внешних серверах</li><li>Быстрое восстановление при сбоях</li><li>Тестирование восстановления</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">04</div><div class="stage-icon"><img loading="lazy" src="/img/icons/search.png" alt="Мониторинг сайта"></div><h3 class="stage-title">Мониторинг аптайма</h3><ul><li>Круглосуточная проверка доступности</li><li>Уведомления о сбоях</li><li>Контроль скорости загрузки</li><li>Мониторинг ошибок 404 и 500</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">05</div><div class="stage-icon"><img loading="lazy" src="/img/icons/functions.png" alt="Доработка функционала"></div><h3 class="stage-title">Доработка функционала</h3><ul><li>Правки контента и вёрстки</li><li>Добавление новых разделов</li><li>Настройка форм и интеграций</li><li>Оптимизация скорости загрузки</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">06</div><div class="stage-icon"><img loading="lazy" src="/img/icons/support.png" alt="Техподдержка сайта"></div><h3 class="stage-title">Техподдержка</h3><ul><li>Оперативные ответы на заявки</li><li>Устранение срочных неполадок</li><li>Консультации по развитию сайта</li><li>Отчёт о проделанной работе</li></ul></div>
			</div>
		</div>
		<div class="wave-divider wave-light" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<section class="advantages section-light">
		<div class="container">
			<div class="section-title-wrap"><h3 class="section-title">Почему заказывают обслуживание у нас?</h3></div>
			<div class="adv-grid">
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/start.png" alt="Быстрое реагирование на проблемы"></div><h3 class="adv-title">Быстрое реагирование</h3><p class="adv-text">отвечаем на заявки в течение часа в рабочее время. Срочные проблемы решаем за 2-4 часа</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/profi.png" alt="Гарантия безопасности сайта"></div><h3 class="adv-title">Гарантия безопасности</h3><p class="adv-text">регулярные аудиты, защита от взломов, мониторинг вирусов и мгновенное восстановление после атак</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/money.png" alt="Фиксированная стоимость обслуживания"></div><h3 class="adv-title">Фиксированная стоимость</h3><p class="adv-text">понятный абонемент без скрытых платежей. Доработки сверх тарифа — по согласованию</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/desctop.png" alt="Комплексный подход к поддержке"></div><h3 class="adv-title">Комплексный подход</h3><p class="adv-text">один подрядчик отвечает за обновления, безопасность, хостинг и доработки</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/time.png" alt="Регулярные отчёты о работе"></div><h3 class="adv-title">Прозрачная отчётность</h3><p class="adv-text">ежемесячный отчёт о проделанной работе, статусе обновлений и состоянии сайта</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/adaptive.png" alt="Хостинг с управлением"></div><h3 class="adv-title">Хостинг под ключ</h3><p class="adv-text">подбираем и настраиваем хостинг, контролируем нагрузку и переносим при необходимости</p></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

<?php $briefWave = 'wave-dark'; $briefTitle = 'Бриф на обслуживание сайта'; $briefSubtitle = 'Расскажите о вашем сайте — мы подберём оптимальный тариф поддержки'; require __DIR__ . '/../../briefs/support-brief.php'; ?>

<?php $noWave = true; require_once __DIR__ . '/../../includes/tech-marquee.php'; ?>

<?php $pfDarkBg = true; $pfTitle = 'Наше портфолио'; $pfSubtitle = 'Более 30 успешно реализованных проектов — сайты, приложения и сервисы'; require_once __DIR__ . '/../../includes/portfolio-block.php'; ?>

	<section class="price section-light">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title">Стоимость обслуживания сайта</h2>
				<p class="section-subtitle">Выберите тариф — точную стоимость рассчитаем после брифа</p>
			</div>
			<div class="price-grid">
				<div class="price-card">
					<div class="price-plan">Базовый</div>
					<div class="price-plan-desc">Для небольших сайтов и визиток</div>
					<div class="price-value">от <strong>5 000</strong> ₽/мес</div>
					<ul class="price-features">
						<li>Обновление CMS и плагинов</li>
						<li>Еженедельные бэкапы</li>
						<li>Мониторинг аптайма</li>
						<li>До 2 часов доработок</li>
						<li>Ответ на заявки до 24ч</li>
					</ul>
					<a href="#brief" class="btn btn-main">Выбрать</a>
				</div>
				<div class="price-card price-card-featured">
					<div class="price-plan">Стандарт</div>
					<div class="price-plan-desc">Для интернет-магазинов и каталогов</div>
					<div class="price-value">от <strong>12 000</strong> ₽/мес</div>
					<ul class="price-features">
						<li>Всё из базового тарифа</li>
						<li>Ежедневные бэкапы</li>
						<li>Мониторинг безопасности</li>
						<li>До 8 часов доработок</li>
						<li>Ответ на заявки до 4ч</li>
						<li>Ежемесячный отчёт</li>
					</ul>
					<a href="#brief" class="btn btn-main">Выбрать</a>
				</div>
				<div class="price-card">
					<div class="price-plan">Премиум</div>
					<div class="price-plan-desc">Для высоконагруженных проектов</div>
					<div class="price-value">от <strong>25 000</strong> ₽/мес</div>
					<ul class="price-features">
						<li>Всё из тарифа «Стандарт»</li>
						<li>Бэкапы каждые 6 часов</li>
						<li>Круглосуточный мониторинг</li>
						<li>До 20 часов доработок</li>
						<li>Реагирование до 1 часа</li>
						<li>Персональный менеджер</li>
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
			<div class="section-title-wrap"><h2 class="section-title">Часто задаваемые вопросы об обслуживании сайтов</h2></div>
			<div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Сколько стоит обслуживание сайта в месяц?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Стоимость начинается от 5 000 ₽/мес для небольших сайтов и зависит от сложности проекта, числа доработок и требуемого уровня мониторинга. Точную цену рассчитываем после брифа.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Вы работаете с любыми CMS?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Да, обслуживаем WordPress, OpenCart, 1С-Битрикс, MODX, Laravel и кастомные CMS. Если сайт написан на неподдерживаемой системе — предложим варианты.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Что делать, если сайт уже взломали?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Мы экстренно восстанавливаем сайт из бэкапа, чистим от вредоносного кода, закрываем уязвимости. После восстановления усиливаем защиту, чтобы предотвратить повторный взлом.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Нужно ли заключать договор?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Да, мы работаем по договору с чётким перечнем работ, SLA и стоимостью. Разовая помощь тоже возможна — обращайтесь, решим проблему.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Вы предоставляете хостинг?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Мы подбираем и настраиваем хостинг под ваш проект, но оплачиваете вы его напрямую хостинг-провайдеру. При необходимости переносим сайт на другой хостинг без потери данных.</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wave-divider wave-accent" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

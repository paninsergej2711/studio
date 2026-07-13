<?php
require_once __DIR__ . '/../../config.php';
$pageTitle = 'SEO-продвижение сайтов под ключ — Bobr Studio';
$pageDesc = 'Профессиональное SEO-продвижение сайтов: технический аудит, семантическое ядро, внутренняя оптимизация, контент и ссылки. Вывод в ТОП Яндекса и Google, рост органического трафика и заявок.';
$ogImage = '/img/svg/joinman.svg';
require_once __DIR__ . '/../../includes/header.php';
?>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" },
		{ "@type": "ListItem", "position": 2, "name": "Продвижение", "item": "<?= SITE_URL ?>/promo" },
		{ "@type": "ListItem", "position": 3, "name": "SEO продвижение", "item": "<?= SITE_URL ?>/promo/seo" }
	]
}
</script>

	<!-- Hero -->
	<section class="hero section-light">
		<canvas class="hero-particles" id="heroParticles" aria-hidden="true"></canvas>
		<div class="container hero-grid">
			<div class="hero-content">
				<div class="slider-title">
					Профессиональное
					<h1><span class="text-accent">SEO-продвижение</span> сайтов под ключ</h1>
					– вывод в ТОП и рост органического трафика
				</div>
				<p class="slider-text">Выводим сайты в ТОП Яндекса и Google по целевым запросам. Технический аудит, семантическое ядро, внутренняя оптимизация, SEO-тексты и ссылочное продвижение — с прозрачной аналитикой и понятными отчётами.</p>
				<a href="#brief" class="btn btn-main">Оставить заявку</a>
			</div>
			<div class="hero-image">
				<img src="/img/svg/joinman.svg" alt="SEO-продвижение сайтов под ключ в веб-студии Bobr Studio" loading="eager">
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Бриф -->
<?php require __DIR__ . '/../../briefs/promo-brief.php'; ?>

	<!-- Преимущества -->
	<section class="advantages section-light">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Почему заказывают SEO-продвижение у нас?</h2></div>
			<div class="adv-grid">
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/seo.png" alt=""></div><h3 class="adv-title">Рост органического трафика</h3><p class="adv-text">выводим целевые запросы в ТОП Яндекса и Google</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/profi.png" alt=""></div><h3 class="adv-title">Целевые клиенты из поиска</h3><p class="adv-text">приводим аудиторию, которая ищет ваши товары и услуги</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/analise.png" alt=""></div><h3 class="adv-title">Прозрачность</h3><p class="adv-text">понятные ежемесячные отчёты по позициям и работам</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/start.png" alt=""></div><h3 class="adv-title">Работа по KPI</h3><p class="adv-text">продвигаем по согласованным запросам и измеримым целям</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/functions.png" alt=""></div><h3 class="adv-title">Аналитика</h3><p class="adv-text">настраиваем Метрику, Search Console и отслеживание позиций</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/expirience.png" alt=""></div><h3 class="adv-title">Опыт</h3><p class="adv-text">продвигаем проекты в разных нишах более чем с 30 кейсами</p></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Этапы продвижения -->
	<section class="stages section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Этапы СЕО продвижения сайта</h2></div>
			<div class="stages-grid">
				<div class="stage-card dev-etap"><div class="stage-num">01</div><div class="stage-icon"><img loading="lazy" src="/img/icons/analise.png" alt=""></div><h3 class="stage-title">Аудит и анализ</h3><ul><li>Проводим технический аудит сайта</li><li>Анализируем конкурентов и нишу</li><li>Оцениваем текущие позиции и трафик</li><li>Выявляем точки роста</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">02</div><div class="stage-icon"><img loading="lazy" src="/img/icons/plan.png" alt=""></div><h3 class="stage-title">Стратегия и семантика</h3><ul><li>Собираем семантическое ядро</li><li>Кластеризуем запросы по страницам</li><li>Составляем план продвижения</li><li>Определяем KPI и сроки</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">03</div><div class="stage-icon"><img loading="lazy" src="/img/icons/adaptive.png" alt=""></div><h3 class="stage-title">Оптимизация сайта</h3><ul><li>Исправляем технические ошибки</li><li>Оптимизируем мета-теги и контент</li><li>Ускоряем загрузку и адаптив</li><li>Настраиваем ЧПУ и микроразметку</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">04</div><div class="stage-icon"><img loading="lazy" src="/img/icons/text.png" alt=""></div><h3 class="stage-title">Контент и ссылки</h3><ul><li>Пишем SEO-тексты и оптимизируем контент</li><li>Наращиваем качественную ссылочную массу</li><li>Улучшаем коммерческие факторы</li><li>Работаем над поведенческими метриками</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">05</div><div class="stage-icon"><img loading="lazy" src="/img/icons/test.png" alt=""></div><h3 class="stage-title">Аналитика и корректировка</h3><ul><li>Отслеживаем позиции и конверсии</li><li>Анализируем поведение пользователей</li><li>Корректируем стратегию по данным</li><li>Масштабируем эффективные каналы</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">06</div><div class="stage-icon"><img loading="lazy" src="/img/icons/start.png" alt=""></div><h3 class="stage-title">Отчётность и рост</h3><ul><li>Готовим прозрачные ежемесячные отчёты</li><li>Обсуждаем результаты и планы</li><li>Наращиваем трафик и продажи</li><li>Развиваем новые направления</li></ul></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

<?php $noWave = true; require_once __DIR__ . '/../../includes/tech-marquee.php'; ?>

<?php $pfDarkBg = true; $pfTitle = 'Наше портфолио'; $pfSubtitle = 'Более 30 успешно реализованных и продвигаемых проектов в разных нишах'; require_once __DIR__ . '/../../includes/portfolio-block.php'; ?>

	<!-- Цена -->
	<section class="price section-light">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title">Стоимость SEO-продвижения</h2>
				<p class="section-subtitle">Выберите подходящий тариф — точную цену рассчитаем после аудита</p>
			</div>
			<div class="price-grid">
				<div class="price-card">
					<div class="price-plan">Старт</div>
					<div class="price-plan-desc">Базовое SEO для небольших сайтов</div>
					<div class="price-value">от <strong>15 000</strong> ₽/мес</div>
					<ul class="price-features">
						<li>Технический аудит сайта</li>
						<li>Сбор семантического ядра</li>
						<li>Оптимизация 5-10 ключевых запросов</li>
						<li>Настройка Метрики и Search Console</li>
						<li>Ежемесячный отчёт по позициям</li>
					</ul>
					<a href="#brief" class="btn btn-outline" style="color:var(--accent);border-color:var(--accent)">Выбрать тариф</a>
				</div>
				<div class="price-card price-featured">
					<span class="price-badge">Популярный</span>
					<div class="price-plan">Бизнес</div>
					<div class="price-plan-desc">Комплексное SEO для роста трафика</div>
					<div class="price-value">от <strong>35 000</strong> ₽/мес</div>
					<ul class="price-features">
						<li>Расширенное семантическое ядро</li>
						<li>Полная внутренняя оптимизация</li>
						<li>SEO-тексты и работа с контентом</li>
						<li>Ссылочное продвижение</li>
						<li>Аналитика позиций и трафика</li>
						<li>Отчёты и работа по KPI</li>
					</ul>
					<a href="#brief" class="btn btn-main">Выбрать тариф</a>
				</div>
				<div class="price-card">
					<div class="price-plan">Премиум</div>
					<div class="price-plan-desc">Максимальный результат в поиске</div>
					<div class="price-value">от <strong>70 000</strong> ₽/мес</div>
					<ul class="price-features">
						<li>Всё из тарифа «Бизнес»</li>
						<li>Проработка коммерческих факторов</li>
						<li>Локальное SEO и карты</li>
						<li>Улучшение поведенческих факторов</li>
						<li>Персональный SEO-специалист</li>
						<li>Приоритетная поддержка</li>
					</ul>
					<a href="#brief" class="btn btn-outline" style="color:var(--accent);border-color:var(--accent)">Выбрать тариф</a>
				</div>
			</div>
		</div>
	</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

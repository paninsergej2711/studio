<?php
require_once __DIR__ . '/../../config.php';
$pageTitle = 'Разработка сайта каталога под ключ — заказать создание | Bobr Studio';
$pageDesc = 'Профессиональная разработка сайтов каталогов под ключ. Создание витрины товаров и услуг: удобная структура категорий, карточки товаров, умные фильтры, поиск и приём заявок. Закажите каталог с SEO-оптимизацией!';
$ogImage = '/img/svg/services.svg';
require_once __DIR__ . '/../../includes/header.php';
?>

<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" },
		{ "@type": "ListItem", "position": 2, "name": "Сайт каталог", "item": "<?= SITE_URL ?>/dev/catalog" }
	]
}
</script>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "Service",
	"name": "Разработка сайта каталога под ключ",
	"description": "Создание сайта каталога с нуля: структура категорий, карточки товаров, фильтры и поиск, формы заявок, SEO-оптимизация и наполнение.",
	"provider": {
		"@type": "ProfessionalService",
		"name": "Bobr Studio",
		"url": "<?= SITE_URL ?>"
	},
	"areaServed": "RU",
	"offers": {
		"@type": "Offer",
		"price": "35000",
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
					<h1>Разработка <span class="text-accent">сайта каталога</span> под ключ</h1>
					— удобная витрина товаров и услуг
				</div>
				<p class="slider-text">Создаём каталоги с продуманной структурой категорий, информативными карточками, фильтрами и поиском. Идеальное решение, чтобы показать ассортимент и собирать заявки без сложностей интернет-магазина.</p>
				<a href="#brief" class="btn btn-main">Заказать каталог</a>
			</div>
			<div class="hero-image">
				<img src="/img/svg/services.svg" alt="Профессиональная разработка сайта каталога под ключ в веб-студии Bobr Studio" loading="eager">
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Этапы разработки -->
	<section class="stages section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Этапы разработки каталога</h2></div>
			<div class="stages-grid">
				<div class="stage-card dev-etap"><div class="stage-num">01</div><div class="stage-icon"><img src="/img/icons/analise.png" alt="Анализ и структура каталога"></div><h3 class="stage-title">Анализ и структура</h3><ul><li>Изучаем ассортимент и задачи</li><li>Проектируем структуру категорий</li><li>Определяем набор характеристик</li><li>Составляем техническое задание</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">02</div><div class="stage-icon"><img src="/img/icons/disign.png" alt="Дизайн сайта каталога"></div><h3 class="stage-title">Дизайн</h3><ul><li>Разрабатываем дизайн каталога</li><li>Проектируем карточки и списки</li><li>Прорабатываем фильтры и навигацию</li><li>Адаптируем под устройства</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">03</div><div class="stage-icon"><img src="/img/icons/scripts.png" alt="Разработка каталога"></div><h3 class="stage-title">Разработка</h3><ul><li>Настраиваем CMS и структуру</li><li>Реализуем фильтры и поиск</li><li>Программируем формы заявок</li><li>Настраиваем импорт данных</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">04</div><div class="stage-icon"><img src="/img/icons/sites.png" alt="Наполнение каталога контентом"></div><h3 class="stage-title">Наполнение</h3><ul><li>Загружаем категории и позиции</li><li>Добавляем фото и описания</li><li>Настраиваем характеристики</li><li>Оптимизируем под SEO</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">05</div><div class="stage-icon"><img src="/img/icons/test.png" alt="Тестирование каталога"></div><h3 class="stage-title">Тестирование</h3><ul><li>Проверяем фильтры и поиск</li><li>Тестируем формы и заявки</li><li>Проверяем на устройствах</li><li>Оптимизируем скорость</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">06</div><div class="stage-icon"><img src="/img/icons/start.png" alt="Запуск сайта каталога"></div><h3 class="stage-title">Запуск</h3><ul><li>Публикуем на хостинге и домене</li><li>Настраиваем аналитику</li><li>Подключаем защиту и бэкапы</li><li>Сопровождаем после запуска</li></ul></div>
			</div>
		</div>
		<div class="wave-divider wave-light" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Преимущества -->
	<section class="advantages section-light">
		<div class="container">
			<div class="section-title-wrap"><h3 class="section-title">Почему заказывают каталог у нас?</h3></div>
			<div class="adv-grid">
				<div class="adv-card"><div class="adv-icon"><img src="/img/icons/menu.png" alt="Удобная структура каталога"></div><h3 class="adv-title">Удобная структура</h3><p class="adv-text">логичные категории и разделы, в которых легко ориентироваться</p></div>
				<div class="adv-card"><div class="adv-icon"><img src="/img/icons/filter.png" alt="Фильтры и поиск в каталоге"></div><h3 class="adv-title">Фильтры и поиск</h3><p class="adv-text">клиент быстро находит нужный товар или услугу</p></div>
				<div class="adv-card"><div class="adv-icon"><img src="/img/icons/product.png" alt="Информативные карточки товаров"></div><h3 class="adv-title">Информативные карточки</h3><p class="adv-text">фото, характеристики и описания, которые продают</p></div>
				<div class="adv-card"><div class="adv-icon"><img src="/img/icons/form.png" alt="Приём заявок из каталога"></div><h3 class="adv-title">Приём заявок</h3><p class="adv-text">формы заказа и обратного звонка прямо из карточки</p></div>
				<div class="adv-card"><div class="adv-icon"><img src="/img/icons/seo.png" alt="SEO-структура сайта каталога"></div><h3 class="adv-title">SEO-структура</h3><p class="adv-text">каталог заточен под поисковое продвижение</p></div>
				<div class="adv-card"><div class="adv-icon"><img src="/img/icons/adaptive.png" alt="Адаптивность каталога под устройства"></div><h3 class="adv-title">Адаптивность</h3><p class="adv-text">удобно смотреть каталог с любого устройства</p></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Бриф -->
<?php $briefWave = 'wave-dark'; require __DIR__ . '/../../briefs/dev/catalog-brief.php'; ?>

<?php $noWave = true; require_once __DIR__ . '/../../includes/tech-marquee.php'; ?>

<?php $pfDarkBg = true; $pfTitle = 'Наше портфолио'; $pfSubtitle = 'Более 30 успешно реализованных проектов — сайты, каталоги и приложения'; require_once __DIR__ . '/../../includes/portfolio-block.php'; ?>

	<!-- Цена -->
	<section class="price section-light">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title">Стоимость разработки каталога</h2>
				<p class="section-subtitle">Выберите подходящий тариф — точную цену рассчитаем после брифа</p>
			</div>
			<div class="price-grid">
				<div class="price-card">
					<div class="price-plan">Старт</div>
					<div class="price-plan-desc">Простой каталог для старта</div>
					<div class="price-value">от <strong>35 000</strong> ₽</div>
					<ul class="price-features">
						<li>До 5 категорий</li>
						<li>Карточки товаров</li>
						<li>Базовый поиск</li>
						<li>Форма заявки</li>
						<li>Адаптивная вёрстка</li>
					</ul>
					<a href="#brief" class="btn btn-outline" style="color:var(--accent);border-color:var(--accent)">Выбрать тариф</a>
				</div>
				<div class="price-card price-featured">
					<span class="price-badge">Популярный</span>
					<div class="price-plan">Бизнес</div>
					<div class="price-plan-desc">Полноценный каталог под ключ</div>
					<div class="price-value">от <strong>90 000</strong> ₽</div>
					<ul class="price-features">
						<li>Индивидуальный дизайн</li>
						<li>Умные фильтры и поиск</li>
						<li>Сравнение и избранное</li>
						<li>Управление через CMS</li>
						<li>SEO-оптимизация</li>
						<li>Импорт товаров</li>
					</ul>
					<a href="#brief" class="btn btn-main">Выбрать тариф</a>
				</div>
				<div class="price-card">
					<div class="price-plan">Премиум</div>
					<div class="price-plan-desc">Большой каталог с интеграциями</div>
					<div class="price-value">от <strong>180 000</strong> ₽</div>
					<ul class="price-features">
						<li>Всё из тарифа «Бизнес»</li>
						<li>Личный кабинет</li>
						<li>Интеграция с 1С и CRM</li>
						<li>Мультиязычность</li>
						<li>Тысячи позиций и категорий</li>
						<li>Приоритетная поддержка</li>
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
			<div class="section-title-wrap"><h2 class="section-title">Часто задаваемые вопросы о разработке каталога</h2></div>
			<div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Сколько стоит разработка сайта каталога под ключ?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Стоимость начинается от 35 000 ₽ за тариф «Старт» и зависит от числа категорий, количества позиций, сложности фильтров и интеграций. Точную цену рассчитываем после заполнения брифа.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Чем сайт каталог отличается от интернет-магазина?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Каталог показывает ассортимент товаров и услуг и собирает заявки, но без корзины и онлайн-оплаты. Это дешевле и быстрее интернет-магазина и подходит, когда заказы оформляются по телефону или через форму.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Сколько времени занимает создание каталога?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">В среднем разработка сайта каталога занимает от 1 до 4 недель в зависимости от объёма ассортимента, сложности фильтров и необходимости интеграций с 1С или CRM.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Можно ли потом расширить каталог до интернет-магазина?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Да, мы проектируем каталог с учётом дальнейшего роста. В любой момент можно добавить корзину, онлайн-оплату и личный кабинет, превратив каталог в полноценный интернет-магазин.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Вы наполняете каталог товарами?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Да, мы загружаем категории и позиции с фото, описаниями и характеристиками, а также можем настроить автоматический импорт из прайс-листов, Excel или 1С.</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wave-divider wave-accent" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'Портфолио сайтов и приложений — более 30 проектов | Bobr Studio';
$pageDesc = 'Портфолио веб-студии Bobr Studio: сайты, интернет-магазины, маркетплейсы и мобильные приложения. Более 30 реализованных проектов в разных нишах.';
$ogImage = '/img/svg/girl.svg';
require_once __DIR__ . '/../includes/header.php';
?>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" },
		{ "@type": "ListItem", "position": 2, "name": "Портфолио", "item": "<?= SITE_URL ?>/portfolio" }
	]
}
</script>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "CollectionPage",
	"name": "Портфолио сайтов и приложений",
	"description": "Более 30 проектов веб-студии Bobr Studio — разработка сайтов, интернет-магазинов, маркетплейсов и мобильных приложений."
}
</script>


	<section class="page-hero section-light">
		<div class="container">
			<div class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1"></span> / <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">Портфолио</span><meta itemprop="position" content="2"></span></div>
			<h1>Наше портфолио</h1>
			<p class="section-subtitle" style="margin:0">Более 30 успешно реализованных проектов — от лендингов до сложных маркетплейсов и мобильных приложений.</p>
		</div>
	</section>

	<section class="portfolio-page section-dark" style="padding-top:30px">
		<div class="container">
			<div class="portfolio-filters" id="portfolioFilter">
				<button class="filter-btn active" data-filter="all">Все</button>
				<button class="filter-btn" data-filter="site">Сайты</button>
				<button class="filter-btn" data-filter="app">Приложения</button>
			</div>

			<div class="portfolio-grid" id="portfolioGrid">
				<!-- Сайты -->
				<a href="/portfolio/biowood" class="portfolio-item" data-cat="site"><img loading="lazy" src="/img/portfolio/Сайты/biowood/biowood1.png" alt="Разработка сайта Biowood — продажа химии для обработки древесины"><span class="portfolio-cat">Сайт · Biowood</span></a>
				<a href="/portfolio/montale" class="portfolio-item" data-cat="site"><img loading="lazy" src="/img/portfolio/Сайты/montale/montale.png" alt="Разработка сайта Montale — парфюмерный интернет-магазин класса люкс"><span class="portfolio-cat">Сайт · Montale</span></a>
				<a href="/portfolio/eco-climate" class="portfolio-item" data-cat="site"><img loading="lazy" src="/img/portfolio/Сайты/eco-climate/eco1.png" alt="Разработка сайта Eco-Climate — оборудование для промышленной вентиляции"><span class="portfolio-cat">Сайт · Eco-Climate</span></a>
				<a href="/portfolio/f5gifts" class="portfolio-item" data-cat="site"><img loading="lazy" src="/img/portfolio/Сайты/f5gifts.ru/f5gifts1.png" alt="Разработка сайта F5 Gifts — конструктор персонализации подарков"><span class="portfolio-cat">Сайт · F5 Gifts</span></a>
				<a href="/portfolio/dvline" class="portfolio-item" data-cat="site"><img loading="lazy" src="/img/portfolio/Сайты/dvline/dvline1.png" alt="Разработка сайта DV Line — продажа мотоциклов и автомобилей из Японии"><span class="portfolio-cat">Сайт · DV Line</span></a>
				<a href="/portfolio/alkone" class="portfolio-item" data-cat="site"><img loading="lazy" src="/img/portfolio/Сайты/alkone/alkone1.png" alt="Разработка сайта Альянс стандартизации и документации — оформление документов"><span class="portfolio-cat">Сайт · Alkone</span></a>
				<a href="/portfolio/meb-dekor" class="portfolio-item" data-cat="site"><img loading="lazy" src="/img/portfolio/Сайты/meb-dekor/meb-dekor1.png" alt="Разработка сайта Меб-Декор — продажа мебели для дома"><span class="portfolio-cat">Сайт · Меб-Декор</span></a>
				<a href="/portfolio/ofice-styl" class="portfolio-item" data-cat="site"><img loading="lazy" src="/img/portfolio/Сайты/ofice-styl/officestyl1.png" alt="Разработка сайта Офис-Стиль — продажа офисной мебели"><span class="portfolio-cat">Сайт · Офис-Стиль</span></a>
				<a href="/portfolio/proanvil" class="portfolio-item" data-cat="site"><img loading="lazy" src="/img/portfolio/Сайты/proanvil/anvil1.png" alt="Разработка сайта ProAnvil — конструктор гоночных кресел и автотюнинг"><span class="portfolio-cat">Сайт · Proanvil</span></a>
				<a href="/portfolio/gearmatic" class="portfolio-item" data-cat="site"><img loading="lazy" src="/img/portfolio/Сайты/gearmatic/gearmatic1.png" alt="Разработка сайта Gearmatic — ремонт АКПП всех марок автомобилей"><span class="portfolio-cat">Сайт · Gearmatic</span></a>
				<a href="/portfolio/fermacremea" class="portfolio-item" data-cat="site"><img loading="lazy" src="/img/portfolio/Сайты/fermacremea/ferma.png" alt="Разработка сайта Ферма Крым — продажа фермерских продуктов"><span class="portfolio-cat">Сайт · Ферма Крым</span></a>
				<a href="/portfolio/krasulin" class="portfolio-item" data-cat="site"><img loading="lazy" src="/img/portfolio/Сайты/krasulin/advokat1.png" alt="Разработка сайта Красулин — сайт адвокатской конторы"><span class="portfolio-cat">Сайт · Красулин</span></a>
				<a href="/portfolio/voda" class="portfolio-item" data-cat="site"><img loading="lazy" src="/img/portfolio/Сайты/voda/voda1.png" alt="Разработка сайта Вода — оптовая продажа бутилированной воды"><span class="portfolio-cat">Сайт · Вода</span></a>
				<a href="/portfolio/avtomatic" class="portfolio-item" data-cat="site"><img loading="lazy" src="/img/portfolio/Сайты/avtomatic/avtomatika1.png" alt="Разработка сайта Автоматика — каталог промышленной электроники"><span class="portfolio-cat">Сайт · Автоматика</span></a>
				<a href="/portfolio/888food" class="portfolio-item" data-cat="site"><img loading="lazy" src="/img/portfolio/Сайты/888food/888food1.png" alt="Разработка сайта 888Food — агрегатор доставки еды"><span class="portfolio-cat">Сайт · 888 Food</span></a>
				<a href="/portfolio/m8market" class="portfolio-item" data-cat="site"><img loading="lazy" src="/img/portfolio/Сайты/m8market/coffee.png" alt="Разработка сайта M8 Market — маркетплейс по продаже кофе"><span class="portfolio-cat">Сайт · M8 Market</span></a>
				<a href="/portfolio/psk1" class="portfolio-item" data-cat="site"><img loading="lazy" src="/img/portfolio/Сайты/PSK-1/psk1.png" alt="Разработка сайта ПСК-1 — сайт крупной строительной компании"><span class="portfolio-cat">Сайт · ПСК</span></a>
				<a href="/portfolio/justlovelypaintings" class="portfolio-item" data-cat="site"><img loading="lazy" src="/img/portfolio/Сайты/justlovelypaintings/justlovelypaintings1.png" alt="Разработка сайта Just Lovely Paintings — галерея и продажа картин"><span class="portfolio-cat">Сайт · Paintings</span></a>
				<a href="/portfolio/fotopostapp" class="portfolio-item" data-cat="site"><img loading="lazy" src="/img/portfolio/Сайты/fotopostapp/fotopostapp1.png" alt="Разработка сайта FotoPostApp — полиграфия и печать на заказ"><span class="portfolio-cat">Сайт · FotoPostApp</span></a>

				<!-- Приложения -->
				<a href="/portfolio/pizza" class="portfolio-item" data-cat="app"><img loading="lazy" src="/img/portfolio/Приложения/pizza/pizza.png" alt="Разработка приложения Pizza — доставка пиццы с отслеживанием курьера"><span class="portfolio-cat">Приложение · Pizza</span></a>
				<a href="/portfolio/kino" class="portfolio-item" data-cat="app"><img loading="lazy" src="/img/portfolio/Приложения/kino/kino.png" alt="Разработка приложения Кино — обзоры, трейлеры и отзывы"><span class="portfolio-cat">Приложение · Kino</span></a>
				<a href="/portfolio/vpn" class="portfolio-item" data-cat="app"><img loading="lazy" src="/img/portfolio/Приложения/vpn/vpn.png" alt="Разработка приложения VPN — безопасный интернет в один тап"><span class="portfolio-cat">Приложение · VPN</span></a>
				<a href="/portfolio/doska" class="portfolio-item" data-cat="app"><img loading="lazy" src="/img/portfolio/Приложения/Доска объявлений/doska.png" alt="Разработка приложения Доска объявлений — всё в одном городе"><span class="portfolio-cat">Приложение · Объявления</span></a>
				<a href="/portfolio/food" class="portfolio-item" data-cat="app"><img loading="lazy" src="/img/portfolio/Приложения/Еда/food.png" alt="Разработка приложения доставки еды — каталог ресторанов"><span class="portfolio-cat">Приложение · Еда</span></a>
				<a href="/portfolio/obuv" class="portfolio-item" data-cat="app"><img loading="lazy" src="/img/portfolio/Приложения/Обувь/obuv.png" alt="Разработка приложения магазина обуви — примерка через AR"><span class="portfolio-cat">Приложение · Обувь</span></a>
				<a href="/portfolio/kursi" class="portfolio-item" data-cat="app"><img loading="lazy" src="/img/portfolio/Приложения/Обучение/kursi.png" alt="Разработка приложения обучения — онлайн-курсы с прогрессом"><span class="portfolio-cat">Приложение · Обучение</span></a>
				<a href="/portfolio/samurai" class="portfolio-item" data-cat="app"><img loading="lazy" src="/img/portfolio/Приложения/Самурай/samurai.png" alt="Разработка приложения Самурай — доставка суши и роллов"><span class="portfolio-cat">Приложение · Самурай</span></a>
				<a href="/portfolio/stroy" class="portfolio-item" data-cat="app"><img loading="lazy" src="/img/portfolio/Приложения/Стройкальк/stroy.png" alt="Разработка приложения Стройкальк — расчёт стоимости строительства"><span class="portfolio-cat">Приложение · Стройкальк</span></a>
				<a href="/portfolio/kkal" class="portfolio-item" data-cat="app"><img loading="lazy" src="/img/portfolio/Приложения/Счётчик калорий/kkal.png" alt="Разработка приложения Счётчик калорий — фитнес-питание"><span class="portfolio-cat">Приложение · Калории</span></a>
				<a href="/portfolio/tur" class="portfolio-item" data-cat="app"><img loading="lazy" src="/img/portfolio/Приложения/турагенство/tur.png" alt="Разработка приложения Турагентство — бронирование туров"><span class="portfolio-cat">Приложение · Турагенство</span></a>
				<a href="/portfolio/music" class="portfolio-item" data-cat="app"><img loading="lazy" src="/img/portfolio/Приложения/Music/music.png" alt="Разработка приложения Music — платформа для продюсеров и музыкантов"><span class="portfolio-cat">Приложение · Music</span></a>
				<a href="/portfolio/proxy" class="portfolio-item" data-cat="app"><img loading="lazy" src="/img/portfolio/Приложения/Proxy/proxy.png" alt="Разработка приложения Proxy — управление прокси-серверами"><span class="portfolio-cat">Приложение · Proxy</span></a>
			</div>

			<div class="center-btn">
				<button class="btn btn-load-more" id="loadMoreBtn">Загрузить ещё</button>
			</div>
		</div>
	</section>

	<!-- CTA -->
	<section class="section-light">
		<div class="container" style="text-align:center">
			<h2 class="section-title">Хотите такой же проект?</h2>
			<p class="section-subtitle">Расскажите о вашей задаче — мы предложим оптимальное решение.</p>
			<a href="/#brief" class="btn btn-main" style="margin-top:25px">Заполнить бриф</a>
		</div>
	</section>

	<!-- Футер -->
	<?php require_once __DIR__ . '/../includes/footer.php'; ?>
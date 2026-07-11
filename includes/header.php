<?php
if (!isset($pageTitle)) $pageTitle = 'Bobr Studio — Разработка сайтов и интернет магазинов';
if (!isset($pageDesc)) $pageDesc = 'Профессиональная разработка сайтов, интернет магазинов и маркетплейсов под ключ.';

// Fetch SEO overrides from database
if (isset($pdo)) {
    $pageKey = trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');
    $qs = $_SERVER['QUERY_STRING'] ?? '';
    if ($qs !== '') $pageKey .= '?' . $qs;

    try {
        $seo = $pdo->prepare("SELECT seo_title, seo_description FROM seo_meta WHERE page_key = :k");
        $seo->execute(['k' => $pageKey]);
        $row = $seo->fetch();
        if ($row) {
            if (!empty($row['seo_title'])) $pageTitle = $row['seo_title'];
            if (!empty($row['seo_description'])) $pageDesc = $row['seo_description'];
        }
    } catch (Exception $e) {
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/svg+xml" href="/logo.svg">
	<title><?= htmlspecialchars($pageTitle) ?></title>
	<meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">
	<meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
	<meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?= SITE_URL . htmlspecialchars(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) ?>">
	<meta property="og:image" content="<?= isset($ogImage) ? SITE_URL . $ogImage : SITE_URL . '/logo.svg' ?>">
	<link rel="canonical" href="<?= SITE_URL . htmlspecialchars(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="preload" as="script" href="/js/main.js">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700&family=Comfortaa:wght@500;600;700&display=swap" media="print" onload="this.media='all'">
	<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700&family=Comfortaa:wght@500;600;700&display=swap"></noscript>
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "ProfessionalService",
		"name": "Bobr Studio",
		"url": "<?= SITE_URL ?>",
		"image": "<?= SITE_URL ?>/logo.svg",
		"telephone": "+70000000000",
		"email": "panin-sergej@yandex.com",
		"address": { "@type": "PostalAddress", "addressLocality": "Москва", "streetAddress": "ул. Примерная, д. 1" },
		"priceRange": "от 50 000 ₽",
		"areaServed": "RU",
		"sameAs": []
	}
	</script>
</head>
<body>

	<div class="preloader" id="preloader">
		<div class="preloader-logo">
			<?php
			$__logo = @file_get_contents(__DIR__ . '/../logo.svg');
			if ($__logo) {
				$__logo = preg_replace('/<\?xml.*?\?>/s', '', $__logo);
				$__logo = preg_replace('/<!--.*?-->/s', '', $__logo);
				echo $__logo;
			} else {
				echo '<img src="/logo.svg" alt="Bobr Studio" width="220">';
			}
			?>
		</div>
	</div>

	<header class="header" id="header">
		<div class="header-inner">
			<a href="/" class="logo" aria-label="Bobr Studio">
				<img src="/logo.svg" alt="Bobr Studio">
				<span class="logo-text"><span>Bobr</span><span>Studio</span></span>
			</a>
			<nav class="main-nav" id="mainNav">
				<ul class="nav-list">
					<li class="has-dropdown">
						<a href="/dev">Сайты</a>
						<ul class="dropdown">
							<li><a href="/dev/internet-magazin">Интернет магазин</a></li>
							<li><a href="/dev/landing">Лендинг</a></li>
							<li><a href="/dev/marketplace">Маркетплейс</a></li>
							<li><a href="/dev/catalog">Каталог</a></li>
							<li><a href="/dev/corporate">Корпоративный сайт</a></li>
						</ul>
					</li>
					<li><a href="/mobile-app">Приложения</a></li>
					<li><a href="/telegram-bot">Боты</a></li>
					<li><a href="/crm">CRM системы</a></li>
					<li class="has-dropdown">
						<a href="/promo">Продвижение</a>
						<ul class="dropdown">
							<li><a href="/promotion">СЕО продвижение</a></li><li><a href="/yandex-direct">Яндекс Директ</a></li>
							<li><a href="/smm">SMM продвижение</a></li></ul>
					</li>
					<li class="has-dropdown">
						<a href="#">Контент</a>
						<ul class="dropdown">
							<li><a href="/parsing">Парсинг данных</a></li>
							<li><a href="/filling">Наполнение товарами</a></li>
							<li><a href="/site-audit">Аудит сайтов</a></li>
							<li><a href="/site-support">Поддержка сайтов</a></li>
						</ul>
					</li>
					<li class="has-dropdown">
						<a href="#">Дизайн</a>
						<ul class="dropdown">
							<li><a href="/design">Дизайн сайтов</a></li>
							<li><a href="/design">Дизайн приложений</a></li>
							<li><a href="/design">Дизайн банеров и логотипов</a></li>
							<li><a href="/design">Брендбук</a></li>
						</ul>
					</li>
					<li><a href="/portfolio">Портфолио</a></li>
					<li><a href="/contacts">Контакты</a></li>
				</ul>
			</nav>
			<div class="header-actions">
				<div class="header-socials">
					<a href="#" class="header-social" aria-label="Telegram"><img src="/img/vector/telegram.svg" alt="Telegram"></a>
					<a href="#" class="header-social" aria-label="WhatsApp"><img src="/img/vector/whatsapp.svg" alt="WhatsApp"></a>
					<a href="#" class="header-social" aria-label="MAX"><img src="/img/vector/max.svg" alt="MAX"></a>
				</div>
				<a href="tel:+70000000000" class="header-phone">+7 (000) 000-00-00</a>
				<a href="/#mainBrief" class="btn btn-main header-cta">Оставить заявку</a>
			</div>
			<button class="burger" id="burger" aria-label="Меню">
				<span></span><span></span><span></span>
			</button>
		</div>
	</header>

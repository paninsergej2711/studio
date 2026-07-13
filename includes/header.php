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
	<meta name="robots" content="<?= isset($noindex) && $noindex ? 'noindex, follow' : 'index, follow' ?>">
	<meta name="theme-color" content="#8f4f23">
	<link rel="icon" type="image/svg+xml" href="/logo.svg">
	<link rel="icon" type="image/x-icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/logo.svg">
	<title><?= htmlspecialchars($pageTitle) ?></title>
	<meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">
	<meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
	<meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?= SITE_URL . htmlspecialchars(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) ?>">
	<meta property="og:image" content="<?= isset($ogImage) ? SITE_URL . $ogImage : SITE_URL . '/logo.svg' ?>">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
	<meta name="twitter:description" content="<?= htmlspecialchars($pageDesc) ?>">
	<meta name="twitter:image" content="<?= isset($ogImage) ? SITE_URL . $ogImage : SITE_URL . '/logo.svg' ?>">
	<link rel="canonical" href="<?= SITE_URL . htmlspecialchars(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) ?>">
	<meta http-equiv="x-dns-prefetch-control" content="on">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://mc.yandex.ru">
	<style>:root{--accent:#8f4f23;--accent-dark:#71391a;--accent-glow:rgba(143,79,35,0.5);--white:#ffffff;--black:#000000;--footer-bg:#1a1a1a;--footer-copy:#111111;--gray:#888888;--light-gray:#f5f5f5;--text:#1a1a1a;--text-muted:#666;--radius:30px;--radius-sm:10px;--container:1200px;--font:'Exo 2',sans-serif;--transition:0.4s ease;--shadow:0 4px 20px rgba(0,0,0,0.08)}*,:after,:before{margin:0;padding:0;box-sizing:border-box}html{scroll-behavior:smooth}body{font-family:var(--font);font-size:16px;line-height:1.6;color:var(--text);background:var(--white);overflow-x:hidden}img{max-width:100%;height:auto;display:block}a{color:inherit;text-decoration:none;transition:color var(--transition)}ul{list-style:none}h1,h2,h3,h4{font-weight:700;line-height:1.25}.container{max-width:var(--container);margin:0 auto;padding:0 20px}.text-accent{color:var(--accent)}.preloader{position:fixed;inset:0;background:var(--white);z-index:9999;display:flex;align-items:center;justify-content:center;animation:preloaderFade .5s ease 1.4s forwards}.preloader-logo svg{width:220px;height:auto;display:block;overflow:visible;animation:preloaderPulse 1.6s ease infinite}@keyframes preloaderFade{to{opacity:0;visibility:hidden;pointer-events:none}}@keyframes preloaderPulse{0%,100%{transform:scale(1);opacity:1}50%{transform:scale(1.08);opacity:.85}}.header{position:sticky;top:0;z-index:1000;background:var(--white);box-shadow:0 2px 10px rgba(0,0,0,.08)}.header-inner{display:flex;align-items:center;justify-content:space-between;padding:12px 32px;gap:20px;max-width:100%}.logo{display:flex;align-items:center;gap:12px}.logo img{max-height:80px;width:auto}.logo-text{font-family:Comfortaa,sans-serif;font-size:26px;font-weight:600;color:var(--black);white-space:nowrap;display:flex;flex-direction:column;line-height:1.05}.burger{display:none;flex-direction:column;gap:5px;background:none;border:none;cursor:pointer;padding:8px;z-index:1001}.burger span{width:26px;height:3px;background:var(--text);border-radius:2px;transition:var(--transition)}.hero{position:relative;padding:60px 0 90px;overflow:hidden}.hero-particles{position:absolute;inset:0;width:100%;height:100%;z-index:0;pointer-events:none}.hero-grid{display:grid;grid-template-columns:1fr 1fr;align-items:center;gap:40px;position:relative;z-index:1}.hero-image{text-align:right}.hero-image img{max-width:100%;height:auto;margin-left:auto;animation:floatY 5s ease-in-out infinite}@keyframes floatY{0%,100%{transform:translateY(0)}50%{transform:translateY(-15px)}}.services-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:24px}.service-card{background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);border-radius:var(--radius-sm);padding:36px 24px 28px;text-align:center;transition:var(--transition);text-decoration:none;color:var(--white);display:block;position:relative;overflow:hidden}.service-card-img{width:100%;height:auto;border-radius:6px;overflow:hidden;margin-bottom:18px}.service-card-img img{width:100%;height:auto;object-fit:cover;border-radius:8px}.service-card h3{font-size:19px;color:var(--accent);margin-bottom:12px}.section-title-wrap{text-align:center;margin-bottom:50px}.section-title{font-size:32px;font-weight:700;display:inline-block;position:relative;padding-bottom:15px}.section-title::after{content:'';position:absolute;bottom:0;left:50%;transform:translateX(-50%);width:70px;height:3px;background:var(--accent);border-radius:2px}.section-subtitle{margin-top:15px;color:var(--text-muted);font-size:16px;max-width:600px;margin-left:auto;margin-right:auto}.section-dark{background:#0d0d0d;color:var(--white)}.section-dark .section-title{color:var(--white)}.section-dark .section-subtitle{color:rgba(255,255,255,.7)}@media(max-width:900px){.hero-grid{grid-template-columns:1fr}.hero-image{text-align:center;order:-1}.hero-image img{max-width:320px;margin:0 auto}}@media(max-width:768px){.main-nav{position:fixed;top:0;right:-100%;width:320px;height:100vh;background:var(--white);padding:10px 0 20px;flex-direction:column;justify-content:flex-start;transition:right .3s ease;box-shadow:-4px 0 20px rgba(0,0,0,.15);overflow-y:auto}.burger{display:flex}.hero{padding:60px 0 90px}.section-title{font-size:26px}}@media(max-width:480px){.services-grid{grid-template-columns:1fr}.header-inner{padding:10px 15px}.logo img{max-height:44px}.section-title-wrap{margin-bottom:30px}.section-title{font-size:22px}}</style>
	<link rel="preload" as="style" href="/css/style.css?v=2.7" fetchpriority="high">
	<link rel="stylesheet" href="/css/style.css?v=2.7">
	<link rel="preload" as="script" href="/js/main.js?v=2.7">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700&family=Comfortaa:wght@500;600;700&display=optional" media="print" onload="this.media='all'">
	<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700&family=Comfortaa:wght@500;600;700&display=optional"></noscript>
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "ProfessionalService",
		"name": "Bobr Studio",
		"url": "<?= SITE_URL ?>",
		"image": "<?= SITE_URL ?>/logo.svg",
		"telephone": "+79804027629",
		"email": "panin-sergej@yandex.com",
		"address": { "@type": "PostalAddress", "addressLocality": "Москва", "streetAddress": "ул. Примерная, д. 1" },
		"priceRange": "от 50 000 ₽",
		"areaServed": "RU",
		"sameAs": [
			"https://t.me/B0br_studio",
			"https://wa.me/79804027629"
		]
	}
	</script>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};m[i].l=1*new Date();for(var j=0;j<document.scripts.length;j++){if(document.scripts[j].src===r){return}}k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})(window,document,'script','https://mc.yandex.ru/metrika/tag.js?id=110706727','ym');ym(110706727,'init',{accurateTrackBounce:true,clickmap:true,ecommerce:'dataLayer',referrer:document.referrer,trackLinks:true,url:location.href,webvisor:true})
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
				<img src="/logo.svg" alt="Bobr Studio" width="429" height="341">
				<span class="logo-text"><span>Bobr</span><span>Studio</span></span>
			</a>
			<nav class="main-nav" id="mainNav">
				<ul class="nav-list">
					<li class="has-dropdown">
					<a href="/sites">Сайты</a>
					<ul class="dropdown">
						<li><a href="/sites/internet-magazin">Интернет магазин</a></li>
						<li><a href="/sites/landing">Лендинг</a></li>
						<li><a href="/sites/marketplace">Маркетплейс</a></li>
						<li><a href="/sites/catalog">Каталог</a></li>
						<li><a href="/sites/corporate">Корпоративный сайт</a></li>
					</ul>
					</li>
					<li><a href="/mobile-app">Приложения</a></li>
					<li><a href="/telegram-bot">Боты</a></li>
					<li><a href="/crm">CRM системы</a></li>
					<li class="has-dropdown">
				<a href="/promo">Продвижение</a>
					<ul class="dropdown">
						<li><a href="/promo/seo">СЕО продвижение</a></li><li><a href="/promo/yandex-direct">Яндекс Директ</a></li>
						<li><a href="/promo/smm">SMM продвижение</a></li></ul>
					</li>
					<li class="has-dropdown">
				<a href="/content">Контент</a>
					<ul class="dropdown">
						<li><a href="/content/parsing">Парсинг данных</a></li>
						<li><a href="/content/filling">Наполнение товарами</a></li>
						<li><a href="/content/site-audit">Аудит сайтов</a></li>
						<li><a href="/content/site-support">Поддержка сайтов</a></li>
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
					<a href="https://t.me/B0br_studio" target="_blank" rel="noopener" class="header-social" aria-label="Telegram"><img src="/img/vector/telegram.svg" alt="Telegram"></a>
					<a href="https://wa.me/79804027629" target="_blank" rel="noopener" class="header-social" aria-label="WhatsApp"><img src="/img/vector/whatsapp.svg" alt="WhatsApp"></a>
					<a href="https://max.ru/u/f9LHodD0cOLAIbdcbPh7YQqPWK5DHVTxuWyfw40qLnnHJrcnCqBHdigZb1Y" target="_blank" rel="noopener" class="header-social" aria-label="MAX"><img src="/img/vector/max.svg" alt="MAX"></a>
				</div>
				<a href="tel:+79804027629" class="header-phone">+7 (980) 402-76-29</a>
				<a href="/#mainBrief" class="btn btn-main header-cta">Оставить заявку</a>
			</div>
			<button class="burger" id="burger" aria-label="Меню">
				<span></span><span></span><span></span>
			</button>
		</div>
	</header>

<?php
require_once __DIR__ . '/../../config.php';
$pageTitle = 'Разработка интернет магазина под ключ — заказать создание | Bobr Studio';
$pageDesc = 'Профессиональная разработка интернет магазинов под ключ. Создание с нуля: индивидуальный дизайн, SEO-оптимизация, интеграция оплат и доставок. Закажите интернет магазин — увеличение продаж с первых дней!';
$ogImage = '/img/svg/comp.svg';
require_once __DIR__ . '/../../includes/header.php';
?>

<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [
		{ "@type": "ListItem", "position": 1, "name": "Главная", "item": "<?= SITE_URL ?>/" },
		{ "@type": "ListItem", "position": 2, "name": "Интернет магазин", "item": "<?= SITE_URL ?>/dev/internet-magazin" }
	]
}
</script>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "Service",
	"name": "Разработка интернет магазина под ключ",
	"description": "Создание интернет магазина с нуля: индивидуальный дизайн, верстка, программирование, интеграция платежей и доставок, SEO-оптимизация.",
	"provider": {
		"@type": "ProfessionalService",
		"name": "Bobr Studio",
		"url": "<?= SITE_URL ?>"
	},
	"areaServed": "RU",
	"offers": {
		"@type": "Offer",
		"price": "50000",
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
					<h1>Разработка <span class="text-accent">интернет магазина</span> под ключ</h1>
				</div>
				<p class="slider-text">Хотите запустить мощный и прибыльный интернет магазин? Мы создаем современные, удобные и высококонверсионные онлайн-платформы, которые привлекают клиентов и увеличивают продажи. Полный цикл: от идеи до SEO-продвижения.</p>
				<a href="#brief" class="btn btn-main">Заказать интернет магазин</a>
			</div>
			<div class="hero-image">
				<img src="/img/svg/comp.svg" alt="Профессиональная разработка интернет магазина под ключ в веб-студии Bobr Studio" loading="eager">
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Этапы разработки -->
	<section class="stages section-dark">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title">Этапы разработки Интернет магазина</h2></div>
			<div class="stages-grid">
				<div class="stage-card dev-etap"><div class="stage-num">01</div><div class="stage-icon"><img loading="lazy" src="/img/icons/analise.png" alt="Анализ и планирование интернет магазина"></div><h3 class="stage-title">Анализ и планирование</h3><ul><li>Обсуждаем цели, целевую аудиторию и нишу</li><li>Анализируем конкурентов, определяем уникальное торговое предложение</li><li>Составляем техническое задание на разработку интернет магазина</li><li>Подбираем оптимальную CMS и стек технологий</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">02</div><div class="stage-icon"><img loading="lazy" src="/img/icons/disign.png" alt="Прототипирование и дизайн интернет магазина"></div><h3 class="stage-title">Прототипирование и дизайн</h3><ul><li>Создаем wireframe (каркас) магазина с удобной структурой каталога</li><li>Разрабатываем современный UI/UX-дизайн</li><li>Адаптируем дизайн под мобильные устройства (Mobile First)</li><li>Согласовываем и вносим правки до полного утверждения</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">03</div><div class="stage-icon"><img loading="lazy" src="/img/icons/scripts.png" alt="Верстка и программирование интернет магазина"></div><h3 class="stage-title">Верстка и программирование</h3><ul><li>Верстаем макеты с учетом SEO-оптимизации и скорости загрузки</li><li>Настраиваем выбранную CMS (WordPress, OpenCart, 1С-Битрикс, Laravel)</li><li>Программируем корзину, фильтры, личный кабинет и сравнение товаров</li><li>Интегрируем API платежных систем, служб доставки и CRM</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">04</div><div class="stage-icon"><img loading="lazy" src="/img/icons/sites.png" alt="Наполнение контентом интернет магазина"></div><h3 class="stage-title">Наполнение контентом</h3><ul><li>Добавляем товары, категории и подробные описания с ключевыми словами</li><li>Загружаем оптимизированные изображения и обрабатываем их для быстрой загрузки</li><li>Настраиваем мета-теги, ЧПУ-ссылки и микроразметку Schema.org</li><li>Тестируем корректность отображения на всех устройствах и в браузерах</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">05</div><div class="stage-icon"><img loading="lazy" src="/img/icons/test.png" alt="Тестирование интернет магазина"></div><h3 class="stage-title">Тестирование и доработки</h3><ul><li>Проверяем работу всех функций: корзины, оформления заказа, личного кабинета</li><li>Тестируем на разных устройствах, браузерах и скоростях интернета</li><li>Исправляем ошибки и оптимизируем скорость загрузки страниц</li><li>Настраиваем автоматическое резервное копирование и мониторинг</li></ul></div>
				<div class="stage-card dev-etap"><div class="stage-num">06</div><div class="stage-icon"><img loading="lazy" src="/img/icons/start.png" alt="Запуск и продвижение интернет магазина"></div><h3 class="stage-title">Запуск и продвижение</h3><ul><li>Переносим магазин на боевой хостинг, подключаем домен и SSL-сертификат</li><li>Подключаем Google Analytics, Яндекс.Метрику и системы веб-мастера</li><li>Запускаем контекстную рекламу (Яндекс.Директ, Google Ads) и SEO-продвижение</li><li>Обучаем работе с админ-панелью и предоставляем документацию</li></ul></div>
			</div>
		</div>
		<div class="wave-divider wave-light" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Преимущества -->
	<section class="advantages section-light">
		<div class="container">
			<div class="section-title-wrap"><h3 class="section-title">Почему заказывают разработку у нас?</h3></div>
			<div class="adv-grid">
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/desctop.png" alt="Индивидуальный дизайн интернет магазина"></div><h3 class="adv-title">Индивидуальный дизайн</h3><p class="adv-text">адаптивный, удобный и продающий интерфейс под ваш бренд — уникальный дизайн, а не шаблон</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/seo.png" alt="SEO-оптимизация интернет магазина"></div><h3 class="adv-title">SEO-оптимизация</h3><p class="adv-text">грамотная структура каталога, мета-разметка, ЧПУ-ссылки и интеграция с Яндекс.Метрикой и Google Analytics</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/profi.png" alt="Безопасность интернет магазина"></div><h3 class="adv-title">Безопасность</h3><p class="adv-text">защита от взлома, DDoS-атак и мошенничества — SSL-сертификат и регулярное резервное копирование</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/payments.png" alt="Интеграция оплаты в интернет магазин"></div><h3 class="adv-title">Интеграция систем оплаты</h3><p class="adv-text">прием платежей через ЮMoney, СБЕР, ТБанк, Робокасса, наложенный платеж и другие популярные системы</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/delivery.png" alt="Интеграция доставки в интернет магазин"></div><h3 class="adv-title">Интеграция служб доставки</h3><p class="adv-text">автоматический расчет стоимости и отслеживание заказов через СДЭК, Почту России, BoxBerry и DPD</p></div>
				<div class="adv-card"><div class="adv-icon"><img loading="lazy" src="/img/icons/crm.png" alt="Интеграция CRM с интернет магазином"></div><h3 class="adv-title">Интеграция с CRM системами</h3><p class="adv-text">синхронизация заказов и клиентов с AmoCRM, Битрикс24, 1С и другими системами учета</p></div>
			</div>
		</div>
		<div class="wave-divider wave-dark" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<!-- Бриф -->
<?php $briefWave = 'wave-dark'; require __DIR__ . '/../../briefs/shop-brief.php'; ?>

<?php $noWave = true; require_once __DIR__ . '/../../includes/tech-marquee.php'; ?>

<?php $pfDarkBg = true; $pfTitle = 'Наше портфолио'; $pfSubtitle = 'Более 30 успешно реализованных проектов — сайты и мобильные приложения'; require_once __DIR__ . '/../../includes/portfolio-block.php'; ?>

	<!-- Цена -->
	<section class="price section-light">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title">Стоимость разработки интернет магазина</h2>
				<p class="section-subtitle">Точную цену рассчитаем после заполнения брифа — от 50 000 ₽</p>
			</div>
			<div class="price-grid">
				<div class="price-card">
					<h3 class="price-card-title">Старт</h3>
					<div class="price-value">от <strong>50 000</strong> ₽</div>
					<ul class="price-features">
						<li>Адаптация шаблона под вас</li>
						<li>До 100 товаров</li>
						<li>До 10 категорий</li>
						<li>До 10 страниц</li>
						<li>Подключение метрики</li>
						<li>Базовая SEO-оптимизация</li>
					</ul>
					<a href="#brief" class="btn btn-main">Заказать</a>
				</div>
				<div class="price-card price-card-featured">
					<h3 class="price-card-title">Стандарт</h3>
					<div class="price-value">от <strong>100 000</strong> ₽</div>
					<ul class="price-features">
						<li>Всё из базовой версии</li>
						<li>До 500 товаров и 50 категорий</li>
						<li>Интеграция с оплатой</li>
						<li>Фильтры</li>
						<li>Личный кабинет</li>
					</ul>
					<a href="#brief" class="btn btn-main">Заказать</a>
				</div>
				<div class="price-card">
					<h3 class="price-card-title">ВИП</h3>
					<div class="price-value">от <strong>200 000</strong> ₽</div>
					<ul class="price-features">
						<li>Уникальный UI/UX-дизайн и анимация</li>
						<li>SEO-оптимизация + микроразметка</li>
						<li>Неограниченное количество товаров</li>
						<li>Интеграция с службами доставки</li>
						<li>Интеграция с CRM</li>
						<li>Мультиязычность и мультивалютность</li>
					</ul>
					<a href="#brief" class="btn btn-main">Заказать</a>
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
			<div class="section-title-wrap"><h2 class="section-title">Часто задаваемые вопросы о разработке интернет магазина</h2></div>
			<div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Сколько стоит разработка интернет магазина под ключ?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Стоимость начинается от 50 000 ₽ за базовый тариф «Старт» и зависит от сложности: количества товаров, интеграций, уникального дизайна и требуемого функционала. Точную цену рассчитываем после брифа.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Какие CMS вы используете для разработки?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Мы работаем с WordPress (WooCommerce), OpenCart, 1С-Битрикс, Shopify, MODX, Laravel и Magento. Подбираем оптимальную платформу под задачи и бюджет вашего проекта.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Сколько времени занимает создание интернет магазина?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">В среднем разработка интернет магазина занимает от 2 до 6 недель. Простой магазин на готовом шаблоне — около 2 недель. Сложный проект с уникальным дизайном и интеграциями — до 6 недель.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Входит ли SEO-оптимизация в стоимость разработки?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Да, базовая SEO-оптимизация включена во все тарифы: настройка мета-тегов, ЧПУ-ссылок, правильная структура каталога, микроразметка Schema.org и интеграция с Яндекс.Метрикой и Google Analytics.</div>
					</div>
				</div>
				<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
					<h3 class="faq-question" itemprop="name">Вы делаете наполнение магазина товарами?</h3>
					<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<div class="faq-answer-text" itemprop="text">Да, мы предоставляем услугу наполнения интернет магазина товарами с их описаниями, SEO-текстами и оптимизированными изображениями. Также можем настроить парсинг товаров с других площадок.</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wave-divider wave-accent" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

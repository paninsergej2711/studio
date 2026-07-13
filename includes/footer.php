	<footer class="footer">
		<div class="footer-top-wave" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
		<div class="container footer-grid">
			<div class="footer-col footer-about">
				<a href="/" class="footer-logo-link">
					<img src="/logo.svg" alt="Bobr Studio" class="footer-logo" width="429" height="341">
					<span class="logo-text"><span>Bobr</span><span>Studio</span></span>
				</a>
				<p>Bobr Studio — профессиональная разработка сайтов, интернет магазинов и маркетплейсов под ключ.</p>
				<div class="footer-social">
			<a href="https://t.me/B0br_studio" target="_blank" rel="noopener" aria-label="Telegram"><img src="/img/vector/telegram.svg" alt="Telegram" loading="lazy"></a>
				<a href="https://wa.me/79804027629" target="_blank" rel="noopener" aria-label="WhatsApp"><img src="/img/vector/whatsapp.svg" alt="WhatsApp" loading="lazy"></a>
				<a href="https://max.ru/u/f9LHodD0cOLAIbdcbPh7YQqPWK5DHVTxuWyfw40qLnnHJrcnCqBHdigZb1Y" target="_blank" rel="noopener" aria-label="MAX"><img src="/img/vector/max.svg" alt="MAX" loading="lazy"></a>
				</div>
			</div>
			<div class="footer-col">
				<h4 class="footer-title">Контакты</h4>
				<ul class="footer-contacts">
					<li><a href="tel:+79804027629">+7 (980) 402-76-29</a></li>
					<li><a href="mailto:panin-sergej@yandex.com">panin-sergej@yandex.com</a></li>
					<li>г. Москва, ул. Примерная, д. 1</li>
					<li>Пн-Пт: 10:00 – 19:00</li>
				</ul>
			</div>
			<div class="footer-col footer-services">
				<h4 class="footer-title">Услуги</h4>
				<ul class="footer-links footer-links-cols">
			<li><a href="/sites/internet-magazin">Интернет магазин</a></li>
				<li><a href="/sites/marketplace">Маркетплейс</a></li>
				<li><a href="/mobile-app">Мобильные приложения</a></li>
				<li><a href="/crm">CRM и ERP системы</a></li>
				<li><a href="/telegram-bot">Telegram боты</a></li>
				<li><a href="/design">Веб-дизайн</a></li>
				<li><a href="/app-design">Дизайн приложений</a></li>
				<li><a href="/sites">Все сайты</a></li>
			<li><a href="/promo">Комплексное продвижение</a></li>
				<li><a href="/promo/yandex-direct">Яндекс Директ</a></li>
				<li><a href="/promo/smm">SMM продвижение</a></li>
				<li><a href="/promo/seo">SEO продвижение</a></li>
				<li><a href="/content/parsing">Парсинг данных</a></li>
				<li><a href="/content/filling">Наполнение товарами</a></li>
				<li><a href="/content/site-support">Поддержка сайтов</a></li>
				<li><a href="/content/site-audit">Аудит сайтов</a></li>
					<li><a href="/portfolio">Портфолио</a></li>
				</ul>
			</div>
		</div>
		<div class="footer-copy">
			<div class="container">
				<span>&copy; <?= date('Y') ?> Bobr Studio. Все права защищены.</span>
				<a href="/privacy">Политика конфиденциальности</a>
				<a href="/offer">Договор-оферта</a>
			</div>
		</div>
	</footer>

	<button class="scroll-top" id="scrollTop" aria-label="Наверх">&uarr;</button>

	<div class="cursor-dot" id="cursorDot" aria-hidden="true"></div>
	<div class="cursor-ring" id="cursorRing" aria-hidden="true"></div>

	<!-- Popup: выбор тарифа -->
	<div class="tariff-modal" id="tariffModal" aria-hidden="true">
		<div class="tariff-modal__overlay" data-tariff-close></div>
		<div class="tariff-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="tariffModalTitle">
			<button type="button" class="tariff-modal__close" aria-label="Закрыть" data-tariff-close>&times;</button>
			<div class="tariff-modal__head">
				<h3 class="tariff-modal__title" id="tariffModalTitle">Оформление тарифа</h3>
				<p class="tariff-modal__plan">Тариф: <span id="tariffModalPlan">—</span><span id="tariffModalPrice" class="tariff-modal__price"></span></p>
			</div>
			<form class="tariff-form" id="tariffForm" novalidate>
				<input type="hidden" name="tariff" id="tariffField">
				<input type="hidden" name="price" id="tariffPriceField">
				<input type="hidden" name="page" value="<?= htmlspecialchars(isset($pageTitle) ? $pageTitle : (parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH))) ?>">
				<input type="hidden" name="page_url" value="<?= htmlspecialchars(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH)) ?>">

				<div class="tariff-field">
					<label for="tariffName" class="tariff-label">Ваше имя</label>
					<input type="text" id="tariffName" name="name" required placeholder="Как к вам обращаться">
				</div>

				<div class="tariff-field">
					<span class="tariff-label">Удобный способ связи</span>
					<div class="tariff-methods" id="tariffMethods">
						<label class="tariff-method" title="Телефон"><input type="radio" name="method" value="Телефон" checked><img src="/img/vector/phone.svg" alt="Телефон"><span>Телефон</span></label>
						<label class="tariff-method" title="Telegram"><input type="radio" name="method" value="Telegram"><img src="/img/vector/telegram.svg" alt="Telegram"><span>Telegram</span></label>
						<label class="tariff-method" title="WhatsApp"><input type="radio" name="method" value="WhatsApp"><img src="/img/vector/whatsapp.svg" alt="WhatsApp"><span>WhatsApp</span></label>
						<label class="tariff-method" title="MAX"><input type="radio" name="method" value="MAX"><img src="/img/vector/max.svg" alt="MAX"><span>MAX</span></label>
					</div>
				</div>

				<div class="tariff-field">
					<label for="tariffContact" class="tariff-label" id="tariffContactLabel">Номер телефона</label>
					<input type="text" id="tariffContact" name="contact" required placeholder="+7 (___) ___-__-__">
				</div>

				<button type="submit" class="btn btn-main tariff-submit">Отправить заявку</button>
				<p class="tariff-consent">Нажимая кнопку, вы соглашаетесь с <a href="/privacy">политикой конфиденциальности</a>.</p>

				<div class="tariff-success hidden" id="tariffSuccess">
					<img src="/img/svg/like.svg" alt="Заявка отправлена">
					<h3>Спасибо за заявку!</h3>
					<p>Мы свяжемся с вами выбранным способом в ближайшее время.</p>
				</div>
			</form>
		</div>
	</div>

	<script src="/js/main.js?v=2.7" defer></script>

	<!-- Mobile contact widget -->
	<div class="mobile-contact" id="mobileContact" aria-hidden="true">
		<button class="mobile-contact__fab" id="mobileContactFab" aria-label="Способы связи">
			<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
		</button>
		<div class="mobile-contact__actions" id="mobileContactActions">
			<a href="tel:+79804027629" class="mobile-contact__btn mobile-contact__btn--phone" aria-label="Позвонить">
				<img src="/img/vector/phone.svg" alt="Телефон" width="24" height="24">
			</a>
			<a href="https://t.me/B0br_studio" target="_blank" rel="noopener" class="mobile-contact__btn mobile-contact__btn--telegram" aria-label="Telegram">
				<img src="/img/vector/telegram.svg" alt="Telegram" width="24" height="24">
			</a>
			<a href="https://wa.me/79804027629" target="_blank" rel="noopener" class="mobile-contact__btn mobile-contact__btn--whatsapp" aria-label="WhatsApp">
				<img src="/img/vector/whatsapp.svg" alt="WhatsApp" width="24" height="24">
			</a>
			<a href="https://max.ru/u/f9LHodD0cOLAIbdcbPh7YQqPWK5DHVTxuWyfw40qLnnHJrcnCqBHdigZb1Y" target="_blank" rel="noopener" class="mobile-contact__btn mobile-contact__btn--max" aria-label="MAX">
				<img src="/img/vector/max.svg" alt="MAX" width="24" height="24">
			</a>
		</div>
	</div>
<noscript><div><img src="https://mc.yandex.ru/watch/110706727" style="position:absolute;left:-9999px" alt="" /></div></noscript>
</body>
</html>

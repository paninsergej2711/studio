<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'Контакты — Bobr Studio';
$pageDesc = 'Свяжитесь с веб-студией Bobr Studio. Разработка сайтов, интернет-магазинов и маркетплейсов под ключ.';
require_once __DIR__ . '/../includes/header.php';
?>


	<section class="page-hero section-light">
		<div class="container">
			<div class="breadcrumb"><a href="/">Главная</a> / Контакты</div>
			<h1>Контакты</h1>
			<p class="section-subtitle" style="margin:0">Свяжитесь с нами любым удобным способом — ответим в течение рабочего дня.</p>
		</div>
	</section>

	<section class="section-light" style="padding-top:30px">
		<div class="container">
			<div class="contacts-grid">
				<div class="contact-info">
					<div class="contact-info-item">
						<img loading="lazy" src="/img/icons/phone.png" alt="Телефон">
						<div>
							<h4>Телефон</h4>
							<a href="tel:+70000000000">+7 (000) 000-00-00</a>
						</div>
					</div>
					<div class="contact-info-item">
						<img loading="lazy" src="/img/icons/mail.png" alt="Email">
						<div>
							<h4>Email</h4>
							<a href="mailto:panin-sergej@yandex.com">panin-sergej@yandex.com</a>
						</div>
					</div>
					<div class="contact-info-item">
						<img loading="lazy" src="/img/icons/place.png" alt="Адрес">
						<div>
							<h4>Адрес</h4>
							<p>г. Москва, ул. Примерная, д. 1</p>
						</div>
					</div>
					<div class="contact-info-item">
						<img loading="lazy" src="/img/icons/time.png" alt="Режим работы">
						<div>
							<h4>Режим работы</h4>
							<p>Пн-Пт: 10:00 – 19:00</p>
						</div>
					</div>
					<div class="contact-info-item">
						<img loading="lazy" src="/img/icons/telegram.png" alt="Telegram">
						<div>
							<h4>Мессенджеры</h4>
							<p><a href="#">Telegram</a> · <a href="#">WhatsApp</a></p>
						</div>
					</div>
				</div>

				<div class="contact-form-wrap">
					<h2 class="section-title" style="font-size:24px;text-align:left">Напишите нам</h2>
					<form class="contact-form" id="contactForm">
						<input type="text" name="name" placeholder="Ваше имя" required>
						<input type="tel" name="phone" placeholder="Телефон" required>
						<input type="email" name="email" placeholder="Email">
						<textarea name="message" rows="5" placeholder="Ваше сообщение" required></textarea>
						<button type="submit" class="btn btn-main" style="width:100%">Отправить</button>
						<p class="quiz-consent" style="color:#888">Нажимая кнопку, вы соглашаетесь с <a href="#">политикой конфиденциальности</a>.</p>
					</form>
				</div>
			</div>

			<div class="contact-map">
				<iframe src="https://yandex.ru/map-widget/v1/?ll=37.617635%2C55.755814&z=12" width="100%" height="400" style="border:0" loading="lazy" title="Карта"></iframe>
			</div>
		</div>
	</section>

	<!-- Футер -->
	<?php require_once __DIR__ . '/../includes/footer.php'; ?>
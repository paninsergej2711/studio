	<!-- Бриф -->
	<section class="brief section-dark" id="brief">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title"><?= $briefTitle ?? 'Бриф на разработку мобильного приложения' ?></h2>
				<p class="section-subtitle"><?= $briefSubtitle ?? 'Ответьте на несколько вопросов — и мы подготовим предложение по вашему приложению' ?></p>
			</div>

			<form class="quiz-form" id="quizForm" novalidate>
				<div class="quiz-progress" id="quizProgress">
					<div class="quiz-progress-line"><div class="quiz-progress-fill" id="quizProgressFill"></div></div>
					<ul class="quiz-steps" id="quizSteps">
						<li class="active" data-step="1"><span class="step-num">1</span><span class="step-label">Тип</span></li>
						<li data-step="2"><span class="step-num">2</span><span class="step-label">Платформа</span></li>
						<li data-step="3"><span class="step-num">3</span><span class="step-label">Функционал</span></li>
						<li data-step="4"><span class="step-num">4</span><span class="step-label">Интеграции</span></li>
						<li data-step="5"><span class="step-num">5</span><span class="step-label">Бюджет</span></li>
						<li data-step="6"><span class="step-num">6</span><span class="step-label">Контакты</span></li>
					</ul>
				</div>

				<fieldset class="quiz-page active" data-page="1">
					<legend class="quiz-legend">Какое приложение вам нужно?</legend>
					<div class="quiz-options theme-options" style="grid-template-columns:repeat(3,1fr)">
						<label class="quiz-option"><input type="radio" name="theme" value="Интернет-магазин"><img src="/img/icons/shop.png" alt="Магазин"><span>Магазин</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Сервис услуг"><img src="/img/icons/process.png" alt="Сервис услуг"><span>Сервис услуг</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Доставка"><img src="/img/icons/delivery.png" alt="Доставка"><span>Доставка</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Соцсеть и сообщество"><img src="/img/icons/chat.png" alt="Соцсеть"><span>Соцсеть</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Обучение"><img src="/img/icons/book.png" alt="Обучение"><span>Обучение</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Другая"><img src="/img/icons/other.png" alt="Другое"><span>Другое</span></label>
					</div>
					<div class="quiz-field theme-other-field">
						<label for="themeOther" class="quiz-label">Опишите ваше приложение</label>
						<input type="text" id="themeOther" name="themeOther" placeholder="Например: приложение для бронирования спортзалов">
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="2">
					<legend class="quiz-legend">Для какой платформы?</legend>
					<div class="quiz-options icon-options" style="grid-template-columns:repeat(4,1fr)">
						<label class="quiz-option"><input type="radio" name="design" value="iOS"><img src="/img/icons/ios.png" alt="iOS"><span>iOS</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="Android"><img src="/img/icons/android.png" alt="Android"><span>Android</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="iOS + Android"><img src="/img/icons/mobile.png" alt="iOS и Android"><span>iOS + Android</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="Кроссплатформенное"><img src="/img/icons/react.png" alt="Кроссплатформенное"><span>Кроссплатформа</span></label>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="3">
					<legend class="quiz-legend">Функционал приложения</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="func" value="Регистрация и авторизация"><img src="/img/icons/key.png" alt="Авторизация"><span>Авторизация</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Push-уведомления"><img src="/img/icons/chat.png" alt="Push-уведомления"><span>Push-уведомления</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Онлайн оплата"><img src="/img/icons/payments.png" alt="Онлайн оплата"><span>Онлайн оплата</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Каталог и лента"><img src="/img/icons/product.png" alt="Каталог"><span>Каталог и лента</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Личный кабинет"><img src="/img/icons/personal.png" alt="Личный кабинет"><span>Личный кабинет</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Геолокация и карты"><img src="/img/icons/map.png" alt="Геолокация"><span>Геолокация и карты</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Чат и сообщения"><img src="/img/icons/form.png" alt="Чат"><span>Чат и сообщения</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Камера и загрузка фото"><img src="/img/icons/image.png" alt="Камера"><span>Камера и фото</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Поиск и фильтры"><img src="/img/icons/filter.png" alt="Поиск и фильтры"><span>Поиск и фильтры</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Аналитика"><img src="/img/icons/analise.png" alt="Аналитика"><span>Аналитика</span></label>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="4">
					<legend class="quiz-legend">Интеграции</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="integrations" value="CRM системы"><img src="/img/icons/crm.png" alt="CRM системы"><span>CRM системы</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Платёжные системы"><img src="/img/icons/payments.png" alt="Платёжные системы"><span>Платёжные системы</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="1С"><img src="/img/icons/functions.png" alt="1С"><span>1С</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Соцсети"><img src="/img/icons/facebook.png" alt="Соцсети"><span>Соцсети</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Push-сервисы"><img src="/img/icons/subscribe.png" alt="Push-сервисы"><span>Push-сервисы</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Сторонние API"><img src="/img/icons/integration.png" alt="Сторонние API"><span>Сторонние API</span></label>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="5">
					<legend class="quiz-legend">Дизайн, бюджет и сроки</legend>
					<div class="quiz-field">
						<label class="quiz-label">Есть ли у вас примеры/референсы?</label>
						<textarea name="references" rows="3" placeholder="Ссылки на приложения, которые вам нравятся"></textarea>
					</div>
					<label class="quiz-label">Бюджет проекта</label>
					<div class="quiz-options text-options">
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="до 300 000 ₽"><span>до 300 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="300 000 — 700 000 ₽"><span>300 000 — 700 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="700 000 — 1 500 000 ₽"><span>700 000 — 1 500 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="более 1 500 000 ₽"><span>более 1 500 000 ₽</span></label>
					</div>
					<div class="quiz-field">
						<label for="deadline" class="quiz-label">Желаемые сроки запуска</label>
						<input type="text" id="deadline" name="deadline" placeholder="Например: 3-4 месяца">
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="6">
					<legend class="quiz-legend">Контактные данные</legend>
					<div class="quiz-fields-grid">
						<div class="quiz-field"><label class="quiz-label">Ваше имя</label><input type="text" name="name" required placeholder="Как к вам обращаться"></div>
						<div class="quiz-field">
							<label class="quiz-label">Удобный способ связи</label>
							<div class="quiz-methods">
								<label class="quiz-method"><input type="radio" name="method" value="Телефон" checked><img src="/img/vector/phone.svg" alt="Телефон"><span>Телефон</span></label>
								<label class="quiz-method"><input type="radio" name="method" value="Telegram"><img src="/img/vector/telegram.svg" alt="Telegram"><span>Telegram</span></label>
								<label class="quiz-method"><input type="radio" name="method" value="WhatsApp"><img src="/img/vector/whatsapp.svg" alt="WhatsApp"><span>WhatsApp</span></label>
								<label class="quiz-method"><input type="radio" name="method" value="MAX"><img src="/img/vector/max.svg" alt="MAX"><span>MAX</span></label>
							</div>
						</div>
						<div class="quiz-field"><label class="quiz-label" id="qContactLabel">Номер телефона</label><input type="text" name="phone" id="qContact" required placeholder="+7 (___) ___-__-__"></div>
					</div>
					<p class="quiz-consent">Нажимая кнопку «Отправить», вы соглашаетесь с <a href="/privacy">политикой конфиденциальности</a>.</p>
				</fieldset>

				<div class="quiz-nav">
					<button type="button" class="btn btn-outline" id="quizPrev" disabled>Назад</button>
					<button type="button" class="btn btn-main" id="quizNext">Далее</button>
					<button type="submit" class="btn btn-main hidden" id="quizSubmit">Отправить заявку</button>
				</div>

				<div class="quiz-success hidden" id="quizSuccess">
					<img src="/img/svg/like.svg" alt="">
					<h3>Спасибо за заявку!</h3>
					<p>Мы свяжемся с вами в ближайшее время и подготовим предложение по вашему приложению.</p>
				</div>
			</form>
		</div>
		<div class="wave-divider <?= $briefWave ?? 'wave-light' ?>" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

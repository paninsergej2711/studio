	<!-- Бриф -->
	<section class="brief section-dark" id="brief">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title"><?= $briefTitle ?? 'Бриф на разработку лендинга' ?></h2>
				<p class="section-subtitle"><?= $briefSubtitle ?? 'Ответьте на несколько вопросов — и мы подготовим предложение по вашему лендингу' ?></p>
			</div>

			<form class="quiz-form" id="quizForm" novalidate>
				<div class="quiz-progress" id="quizProgress">
					<div class="quiz-progress-line"><div class="quiz-progress-fill" id="quizProgressFill"></div></div>
					<ul class="quiz-steps" id="quizSteps">
						<li class="active" data-step="1"><span class="step-num">1</span><span class="step-label">Цель</span></li>
						<li data-step="2"><span class="step-num">2</span><span class="step-label">Дизайн</span></li>
						<li data-step="3"><span class="step-num">3</span><span class="step-label">Блоки</span></li>
						<li data-step="4"><span class="step-num">4</span><span class="step-label">Интеграции</span></li>
						<li data-step="5"><span class="step-num">5</span><span class="step-label">Бюджет</span></li>
						<li data-step="6"><span class="step-num">6</span><span class="step-label">Контакты</span></li>
					</ul>
				</div>

				<fieldset class="quiz-page active" data-page="1">
					<legend class="quiz-legend">Какая цель у лендинга?</legend>
					<div class="quiz-options theme-options" style="grid-template-columns:repeat(3,1fr)">
						<label class="quiz-option"><input type="radio" name="theme" value="Продажа товара"><img src="/img/icons/shop.png" alt="Продажа товара"><span>Продажа товара</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Продажа услуги"><img src="/img/icons/service.png" alt="Продажа услуги"><span>Продажа услуги</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Сбор заявок"><img src="/img/icons/form.png" alt="Сбор заявок"><span>Сбор заявок</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Регистрация на событие"><img src="/img/icons/bron.png" alt="Регистрация на событие"><span>Событие</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Презентация продукта"><img src="/img/icons/product.png" alt="Презентация продукта"><span>Презентация</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Другая"><img src="/img/icons/other.png" alt="Другое"><span>Другое</span></label>
					</div>
					<div class="quiz-field theme-other-field">
						<label for="themeOther" class="quiz-label">Опишите вашу цель</label>
						<input type="text" id="themeOther" name="themeOther" placeholder="Например: запись на бесплатный вебинар">
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="2">
					<legend class="quiz-legend">Оформление лендинга</legend>
					<div class="quiz-options icon-options">
						<label class="quiz-option"><input type="radio" name="design" value="Индивидуальный дизайн"><img src="/img/icons/disign.png" alt="Индивидуальный дизайн"><span>Индивидуальный дизайн</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="Готовый шаблон"><img src="/img/icons/theme.png" alt="Готовый шаблон"><span>Готовый шаблон</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="По референсу"><img src="/img/icons/sites.png" alt="По референсу"><span>По референсу</span></label>
					</div>
					<div class="quiz-field">
						<label class="quiz-label">Есть ли примеры/референсы?</label>
						<textarea name="references" rows="3" placeholder="Ссылки на лендинги, которые вам нравятся"></textarea>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="3">
					<legend class="quiz-legend">Какие блоки нужны?</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="func" value="Оффер (первый экран)"><img src="/img/icons/start.png" alt="Оффер"><span>Оффер</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Преимущества"><img src="/img/icons/profi.png" alt="Преимущества"><span>Преимущества</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Товары или услуги"><img src="/img/icons/product.png" alt="Товары или услуги"><span>Товары/услуги</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Отзывы"><img src="/img/icons/chat.png" alt="Отзывы"><span>Отзывы</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Тарифы и цены"><img src="/img/icons/money.png" alt="Тарифы и цены"><span>Тарифы и цены</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Форма заявки"><img src="/img/icons/form.png" alt="Форма заявки"><span>Форма заявки</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="FAQ"><img src="/img/icons/question.png" alt="FAQ"><span>FAQ</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Галерея"><img src="/img/icons/image.png" alt="Галерея"><span>Галерея</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Таймер акции"><img src="/img/icons/time.png" alt="Таймер акции"><span>Таймер акции</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Карта и контакты"><img src="/img/icons/map.png" alt="Карта и контакты"><span>Карта и контакты</span></label>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="4">
					<legend class="quiz-legend">Интеграции</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="integrations" value="CRM системы"><img src="/img/icons/crm.png" alt="CRM системы"><span>CRM системы</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Онлайн оплата"><img src="/img/icons/payments.png" alt="Онлайн оплата"><span>Онлайн оплата</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Мессенджеры"><img src="/img/icons/whatsapp.png" alt="Мессенджеры"><span>Мессенджеры</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Email-рассылки"><img src="/img/icons/subscribe.png" alt="Email-рассылки"><span>Email-рассылки</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Аналитика и пиксели"><img src="/img/icons/analise.png" alt="Аналитика и пиксели"><span>Аналитика</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Соцсети"><img src="/img/icons/facebook.png" alt="Соцсети"><span>Соцсети</span></label>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="5">
					<legend class="quiz-legend">Бюджет и сроки</legend>
					<div class="quiz-options text-options">
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="до 30 000 ₽"><span>до 30 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="30 000 — 70 000 ₽"><span>30 000 — 70 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="70 000 — 150 000 ₽"><span>70 000 — 150 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="более 150 000 ₽"><span>более 150 000 ₽</span></label>
					</div>
					<div class="quiz-field">
						<label for="deadline" class="quiz-label">Желаемые сроки запуска</label>
						<input type="text" id="deadline" name="deadline" placeholder="Например: 1-2 недели">
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
					<p>Мы свяжемся с вами в ближайшее время и подготовим предложение по вашему лендингу.</p>
				</div>
			</form>
		</div>
		<div class="wave-divider <?= $briefWave ?? 'wave-light' ?>" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

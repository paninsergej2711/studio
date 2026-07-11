	<!-- Бриф -->
	<section class="brief section-dark" id="brief">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title"><?= $briefTitle ?? 'Бриф на разработку Telegram-бота' ?></h2>
				<p class="section-subtitle"><?= $briefSubtitle ?? 'Ответьте на несколько вопросов — и мы подготовим оптимальное предложение по вашему боту' ?></p>
			</div>

			<form class="quiz-form" id="quizForm" novalidate>
				<div class="quiz-progress" id="quizProgress">
					<div class="quiz-progress-line"><div class="quiz-progress-fill" id="quizProgressFill"></div></div>
					<ul class="quiz-steps" id="quizSteps">
						<li class="active" data-step="1"><span class="step-num">1</span><span class="step-label">Тип бота</span></li>
						<li data-step="2"><span class="step-num">2</span><span class="step-label">Функционал</span></li>
						<li data-step="3"><span class="step-num">3</span><span class="step-label">Интеграции</span></li>
						<li data-step="4"><span class="step-num">4</span><span class="step-label">Бюджет</span></li>
						<li data-step="5"><span class="step-num">5</span><span class="step-label">Контакты</span></li>
					</ul>
				</div>

				<fieldset class="quiz-page active" data-page="1">
					<legend class="quiz-legend">Какой бот вам нужен?</legend>
					<div class="quiz-options theme-options" style="grid-template-columns:repeat(3,1fr)">
						<label class="quiz-option"><input type="radio" name="theme" value="Бот-магазин"><img loading="lazy" src="/img/icons/shop.png" alt="Бот-магазин"><span>Бот-магазин</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Бот для записи и бронирования"><img loading="lazy" src="/img/icons/bron.png" alt="Запись и бронирование"><span>Запись / Бронирование</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Опросы и квизы"><img loading="lazy" src="/img/icons/question.png" alt="Опросы и квизы"><span>Опросы / Квизы</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Бот техподдержки"><img loading="lazy" src="/img/icons/support.png" alt="Техподдержка"><span>Техподдержка</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Бот для рассылок"><img loading="lazy" src="/img/icons/subscribe.png" alt="Рассылки"><span>Рассылки</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Другая"><img loading="lazy" src="/img/icons/other.png" alt="Другое"><span>Другое</span></label>
					</div>
					<div class="quiz-field theme-other-field">
						<label for="themeOther" class="quiz-label">Опишите, какой бот вам нужен</label>
						<input type="text" id="themeOther" name="themeOther" placeholder="Например: бот для доставки еды">
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="2">
					<legend class="quiz-legend">Функционал бота</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="func" value="Каталог товаров/услуг"><img loading="lazy" src="/img/icons/product.png" alt="Каталог"><span>Каталог товаров/услуг</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Корзина и оплата"><img loading="lazy" src="/img/icons/payments.png" alt="Корзина и оплата"><span>Корзина и оплата</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Личный кабинет"><img loading="lazy" src="/img/icons/personal.png" alt="Личный кабинет"><span>Личный кабинет</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Поиск"><img loading="lazy" src="/img/icons/search.png" alt="Поиск"><span>Поиск</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Уведомления"><img loading="lazy" src="/img/icons/chat.png" alt="Уведомления"><span>Уведомления</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Меню и кнопки"><img loading="lazy" src="/img/icons/menu.png" alt="Меню и кнопки"><span>Меню и кнопки</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Запись по времени"><img loading="lazy" src="/img/icons/time.png" alt="Запись по времени"><span>Запись по времени</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Мультиязычность"><img loading="lazy" src="/img/icons/languege.png" alt="Мультиязычность"><span>Мультиязычность</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Геолокация"><img loading="lazy" src="/img/icons/map.png" alt="Геолокация"><span>Геолокация</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Админ-панель"><img loading="lazy" src="/img/icons/functions.png" alt="Админ-панель"><span>Админ-панель</span></label>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="3">
					<legend class="quiz-legend">Интеграции</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="integrations" value="CRM системы"><img loading="lazy" src="/img/icons/crm.png" alt="CRM системы"><span>CRM системы</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Онлайн оплата"><img loading="lazy" src="/img/icons/payments.png" alt="Онлайн оплата"><span>Онлайн оплата</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="1С"><img loading="lazy" src="/img/icons/functions.png" alt="1С"><span>1С</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Google Таблицы"><img loading="lazy" src="/img/icons/plan.png" alt="Google Таблицы"><span>Google Таблицы</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="ИИ агенты"><img loading="lazy" src="/img/icons/expirience.png" alt="ИИ агенты"><span>ИИ агенты</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Соцсети"><img loading="lazy" src="/img/icons/facebook.png" alt="Соцсети"><span>Соцсети</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Сайт"><img loading="lazy" src="/img/icons/siteweb.png" alt="Сайт"><span>Сайт</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Другие интеграции"><img loading="lazy" src="/img/icons/integration.png" alt="Другие"><span>Другие</span></label>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="4">
					<legend class="quiz-legend">Бюджет и сроки</legend>
					<div class="quiz-options text-options">
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="до 30 000 ₽"><span>до 30 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="30 000 — 70 000 ₽"><span>30 000 — 70 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="70 000 — 150 000 ₽"><span>70 000 — 150 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="более 150 000 ₽"><span>более 150 000 ₽</span></label>
					</div>
					<div class="quiz-field">
						<label for="deadline" class="quiz-label">Желаемые сроки запуска</label>
						<input type="text" id="deadline" name="deadline" placeholder="Например: 2-3 недели">
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="5">
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
					<p>Мы свяжемся с вами в ближайшее время и подготовим предложение по вашему боту.</p>
				</div>
			</form>
		</div>
		<div class="wave-divider <?= $briefWave ?? 'wave-light' ?>" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

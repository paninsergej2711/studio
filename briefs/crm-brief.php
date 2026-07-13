	<!-- Бриф -->
	<section class="brief section-dark" id="brief">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title"><?= $briefTitle ?? 'Бриф на разработку CRM-системы' ?></h2>
				<p class="section-subtitle"><?= $briefSubtitle ?? 'Ответьте на несколько вопросов — мы подготовим оптимальное решение' ?></p>
			</div>

			<form class="quiz-form" id="quizForm" novalidate>
				<div class="quiz-progress" id="quizProgress">
					<div class="quiz-progress-line"><div class="quiz-progress-fill" id="quizProgressFill"></div></div>
					<ul class="quiz-steps" id="quizSteps">
						<li class="active" data-step="1"><span class="step-num">1</span><span class="step-label">Задачи</span></li>
						<li data-step="2"><span class="step-num">2</span><span class="step-label">Функционал</span></li>
						<li data-step="3"><span class="step-num">3</span><span class="step-label">Интеграции</span></li>
						<li data-step="4"><span class="step-num">4</span><span class="step-label">Контакты</span></li>
					</ul>
				</div>

				<fieldset class="quiz-page active" data-page="1">
					<legend class="quiz-legend">Какие задачи должна решать CRM?</legend>
					<div class="quiz-options icon-options">
						<label class="quiz-option"><input type="checkbox" name="func" value="Управление клиентами"><img loading="lazy" src="/img/icons/personal.png" alt="Управление клиентами"><span>Управление клиентами</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Сделки и воронка"><img loading="lazy" src="/img/icons/money.png" alt="Сделки и воронка"><span>Сделки и воронка продаж</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Задачи и напоминания"><img loading="lazy" src="/img/icons/time.png" alt="Задачи"><span>Задачи и напоминания</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Финансы и счета"><img loading="lazy" src="/img/icons/calculator.png" alt="Финансы"><span>Финансы и счета</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Склад и остатки"><img loading="lazy" src="/img/icons/service.png" alt="Склад"><span>Склад и остатки</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Отчёты и аналитика"><img loading="lazy" src="/img/icons/analise.png" alt="Отчёты"><span>Отчёты и аналитика</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Своё"><img loading="lazy" src="/img/icons/other.png" alt="Своё"><span>Свой вариант</span></label>
					</div>
					<div class="quiz-field">
						<textarea name="references" rows="3" placeholder="Опишите подробнее"></textarea>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="2">
					<legend class="quiz-legend">Функционал</legend>
					<div class="quiz-fields-grid">
						<div class="quiz-field">
							<label for="usersCount" class="quiz-label">Сколько пользователей?</label>
							<input type="text" id="usersCount" name="budget" placeholder="Например: 10">
						</div>
						<div class="quiz-field">
							<label for="clientsCount" class="quiz-label">Сколько клиентов в базе?</label>
							<input type="text" id="clientsCount" name="productsCount" placeholder="Например: 500">
						</div>
					</div>
					<label class="quiz-label">Нужна ли мобильная версия?</label>
					<div class="quiz-options icon-options">
						<label class="quiz-option"><input type="radio" name="design" value="Да, приложение"><img loading="lazy" src="/img/icons/mobile.png" alt="Мобильное приложение"><span>Да, отдельное приложение</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="Да, адаптивный сайт"><img loading="lazy" src="/img/icons/adaptive.png" alt="Адаптивная версия"><span>Да, адаптивная web-версия</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="Только десктоп"><img loading="lazy" src="/img/icons/desctop.png" alt="Только десктоп"><span>Только десктоп</span></label>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="3">
					<legend class="quiz-legend">Необходимые интеграции</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="integrations" value="1С"><img loading="lazy" src="/img/icons/crm.png" alt="1С"><span>1С</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Телефония"><img loading="lazy" src="/img/icons/phone.png" alt="Телефония"><span>Телефония</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Telegram"><img loading="lazy" src="/img/icons/telegram.png" alt="Telegram"><span>Telegram</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="WhatsApp"><img loading="lazy" src="/img/icons/whatsapp.png" alt="WhatsApp"><span>WhatsApp</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Почта"><img loading="lazy" src="/img/icons/mail.png" alt="Почта"><span>Email-рассылки</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Платежные системы"><img loading="lazy" src="/img/icons/payments.png" alt="Платёжные системы"><span>Платёжные системы</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Сайт"><img loading="lazy" src="/img/icons/sites.png" alt="Сайт"><span>Сайт / API</span></label>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="4">
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
					<img src="/img/svg/like.svg" alt="Заявка отправлена">
					<h3>Спасибо за заявку!</h3>
					<p>Мы свяжемся с вами в ближайшее время и подготовим предложение по вашей CRM.</p>
				</div>
			</form>
		</div>
		<div class="wave-divider <?= $briefWave ?? 'wave-light' ?>" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

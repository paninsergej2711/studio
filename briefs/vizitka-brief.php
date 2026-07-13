	<!-- Бриф -->
	<section class="brief section-dark" id="brief">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title"><?= $briefTitle ?? 'Бриф на разработку сайта визитки' ?></h2>
				<p class="section-subtitle"><?= $briefSubtitle ?? 'Ответьте на несколько вопросов — и мы подготовим предложение по вашей визитке' ?></p>
			</div>

			<form class="quiz-form" id="quizForm" novalidate>
				<div class="quiz-progress" id="quizProgress">
					<div class="quiz-progress-line"><div class="quiz-progress-fill" id="quizProgressFill"></div></div>
					<ul class="quiz-steps" id="quizSteps">
						<li class="active" data-step="1"><span class="step-num">1</span><span class="step-label">Сфера</span></li>
						<li data-step="2"><span class="step-num">2</span><span class="step-label">Дизайн</span></li>
						<li data-step="3"><span class="step-num">3</span><span class="step-label">Разделы</span></li>
						<li data-step="4"><span class="step-num">4</span><span class="step-label">Дополнительно</span></li>
						<li data-step="5"><span class="step-num">5</span><span class="step-label">Бюджет</span></li>
						<li data-step="6"><span class="step-num">6</span><span class="step-label">Контакты</span></li>
					</ul>
				</div>

				<fieldset class="quiz-page active" data-page="1">
					<legend class="quiz-legend">Сфера деятельности</legend>
					<div class="quiz-options theme-options" style="grid-template-columns:repeat(3,1fr)">
						<label class="quiz-option"><input type="radio" name="theme" value="Услуги"><img src="/img/icons/service.png" alt="Услуги"><span>Услуги</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Компания"><img src="/img/icons/company.png" alt="Компания"><span>Компания</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Специалист / эксперт"><img src="/img/icons/profi.png" alt="Специалист"><span>Специалист</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Медицина"><img src="/img/icons/medical.png" alt="Медицина"><span>Медицина</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Красота и салон"><img src="/img/icons/salon.png" alt="Красота и салон"><span>Красота / Салон</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Другая"><img src="/img/icons/other.png" alt="Другое"><span>Другое</span></label>
					</div>
					<div class="quiz-field theme-other-field">
						<label for="themeOther" class="quiz-label">Опишите вашу деятельность</label>
						<input type="text" id="themeOther" name="themeOther" placeholder="Например: юридические услуги">
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="2">
					<legend class="quiz-legend">Дизайн</legend>
					<div class="quiz-options icon-options">
						<label class="quiz-option"><input type="radio" name="design" value="Индивидуальный дизайн"><img src="/img/icons/disign.png" alt="Индивидуальный дизайн"><span>Индивидуальный дизайн</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="Готовый шаблон"><img src="/img/icons/theme.png" alt="Готовый шаблон"><span>Готовый шаблон</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="По референсу"><img src="/img/icons/sites.png" alt="По референсу"><span>По референсу</span></label>
					</div>
					<div class="quiz-field">
						<label class="quiz-label">Есть ли примеры/референсы?</label>
						<textarea name="references" rows="3" placeholder="Ссылки на сайты, которые вам нравятся"></textarea>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="3">
					<legend class="quiz-legend">Какие разделы нужны?</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="func" value="О нас"><img src="/img/icons/profi.png" alt="О нас"><span>О нас</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Услуги"><img src="/img/icons/service.png" alt="Услуги"><span>Услуги</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Портфолио"><img src="/img/icons/image.png" alt="Портфолио"><span>Портфолио</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Отзывы"><img src="/img/icons/chat.png" alt="Отзывы"><span>Отзывы</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Команда"><img src="/img/icons/personal.png" alt="Команда"><span>Команда</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Прайс"><img src="/img/icons/money.png" alt="Прайс"><span>Прайс</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Форма связи"><img src="/img/icons/form.png" alt="Форма связи"><span>Форма связи</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Карта и контакты"><img src="/img/icons/map.png" alt="Карта и контакты"><span>Карта и контакты</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="FAQ"><img src="/img/icons/question.png" alt="FAQ"><span>FAQ</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Блог"><img src="/img/icons/text.png" alt="Блог"><span>Блог</span></label>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="4">
					<legend class="quiz-legend">Дополнительные возможности</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="integrations" value="CRM системы"><img src="/img/icons/crm.png" alt="CRM системы"><span>CRM системы</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Мессенджеры"><img src="/img/icons/whatsapp.png" alt="Мессенджеры"><span>Мессенджеры</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Онлайн-запись"><img src="/img/icons/bron.png" alt="Онлайн-запись"><span>Онлайн-запись</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Соцсети"><img src="/img/icons/facebook.png" alt="Соцсети"><span>Соцсети</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Аналитика"><img src="/img/icons/analise.png" alt="Аналитика"><span>Аналитика</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Email-рассылки"><img src="/img/icons/subscribe.png" alt="Email-рассылки"><span>Email-рассылки</span></label>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="5">
					<legend class="quiz-legend">Бюджет и сроки</legend>
					<div class="quiz-options text-options">
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="до 20 000 ₽"><span>до 20 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="20 000 — 50 000 ₽"><span>20 000 — 50 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="50 000 — 100 000 ₽"><span>50 000 — 100 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="более 100 000 ₽"><span>более 100 000 ₽</span></label>
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
					<img src="/img/svg/like.svg" alt="Заявка отправлена">
					<h3>Спасибо за заявку!</h3>
					<p>Мы свяжемся с вами в ближайшее время и подготовим предложение по вашей визитке.</p>
				</div>
			</form>
		</div>
		<div class="wave-divider <?= $briefWave ?? 'wave-light' ?>" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

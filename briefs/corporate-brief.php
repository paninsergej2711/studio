	<section class="brief section-dark" id="brief">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title"><?= $briefTitle ?? 'Бриф на корпоративный сайт' ?></h2><p class="section-subtitle"><?= $briefSubtitle ?? 'Расскажите о компании — подготовим решение' ?></p></div>
			<form class="quiz-form" id="quizForm" novalidate>
				<div class="quiz-progress" id="quizProgress"><div class="quiz-progress-line"><div class="quiz-progress-fill" id="quizProgressFill"></div></div><ul class="quiz-steps" id="quizSteps"><li class="active" data-step="1"><span class="step-num">1</span><span class="step-label">Компания</span></li><li data-step="2"><span class="step-num">2</span><span class="step-label">Функционал</span></li><li data-step="3"><span class="step-num">3</span><span class="step-label">Контакты</span></li></ul></div>
				<fieldset class="quiz-page active" data-page="1">
					<legend class="quiz-legend">О компании</legend>
					<div class="quiz-fields-grid">
						<div class="quiz-field"><label class="quiz-label">Название компании</label><input type="text" name="theme" placeholder="Или название проекта"></div>
						<div class="quiz-field"><label class="quiz-label">Сфера деятельности</label><input type="text" name="budget" placeholder="Например: строительство, IT, услуги"></div>
					</div>
					<label class="quiz-label">Какие разделы нужны?</label>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="func" value="О компании"><img src="/img/icons/personal.png" alt="О компании"><span>О компании</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Услуги"><img src="/img/icons/service.png" alt="Услуги"><span>Услуги</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Портфолио"><img src="/img/icons/image.png" alt="Портфолио"><span>Портфолио / Кейсы</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Новости"><img src="/img/icons/text.png" alt="Новости"><span>Новости / Блог</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Контакты"><img src="/img/icons/mail.png" alt="Контакты"><span>Контакты</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Каталог"><img src="/img/icons/sites.png" alt="Каталог"><span>Каталог товаров</span></label>
					</div>
				</fieldset>
				<fieldset class="quiz-page" data-page="2">
					<legend class="quiz-legend">Функционал</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Формы"><img src="/img/icons/form.png" alt="Формы"><span>Формы связи</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Онлайн-запись"><img src="/img/icons/bron.png" alt="Запись"><span>Онлайн-запись</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="CRM"><img src="/img/icons/crm.png" alt="CRM"><span>Интеграция с CRM</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Аналитика"><img src="/img/icons/analise.png" alt="Аналитика"><span>Аналитика</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Мультиязычность"><img src="/img/icons/languege.png" alt="Языки"><span>Английская версия</span></label>
					</div>
					<div class="quiz-field"><textarea name="references" rows="3" placeholder="Дополнительные пожелания"></textarea></div>
				</fieldset>
				<fieldset class="quiz-page" data-page="3">
					<legend class="quiz-legend">Контактные данные</legend>
					<div class="quiz-fields-grid">
						<div class="quiz-field"><label class="quiz-label">Ваше имя</label><input type="text" name="name" required placeholder="Как к вам обращаться"></div>
						<div class="quiz-field"><label class="quiz-label">Удобный способ связи</label><div class="quiz-methods">
							<label class="quiz-method"><input type="radio" name="method" value="Телефон" checked><img src="/img/vector/phone.svg" alt="Телефон"><span>Телефон</span></label>
							<label class="quiz-method"><input type="radio" name="method" value="Telegram"><img src="/img/vector/telegram.svg" alt="Telegram"><span>Telegram</span></label>
							<label class="quiz-method"><input type="radio" name="method" value="WhatsApp"><img src="/img/vector/whatsapp.svg" alt="WhatsApp"><span>WhatsApp</span></label>
							<label class="quiz-method"><input type="radio" name="method" value="MAX"><img src="/img/vector/max.svg" alt="MAX"><span>MAX</span></label>
						</div></div>
						<div class="quiz-field"><label class="quiz-label" id="qContactLabel">Номер телефона</label><input type="text" name="phone" id="qContact" required placeholder="+7 (___) ___-__-__"></div>
					</div>
					<p class="quiz-consent">Нажимая «Отправить», вы соглашаетесь с <a href="/privacy">политикой конфиденциальности</a>.</p>
				</fieldset>
				<div class="quiz-nav"><button type="button" class="btn btn-outline" id="quizPrev" disabled>Назад</button><button type="button" class="btn btn-main" id="quizNext">Далее</button><button type="submit" class="btn btn-main hidden" id="quizSubmit">Отправить заявку</button></div>
				<div class="quiz-success hidden" id="quizSuccess"><img src="/img/svg/like.svg" alt="Заявка отправлена"><h3>Спасибо!</h3><p>Мы свяжемся и подготовим предложение по вашему корпоративному сайту.</p></div>
			</form>
		</div>
		<div class="wave-divider <?= $briefWave ?? 'wave-light' ?>" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

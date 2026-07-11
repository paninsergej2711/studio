	<section class="brief section-dark" id="brief">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title"><?= $briefTitle ?? 'Бриф на Яндекс Директ' ?></h2>
				<p class="section-subtitle"><?= $briefSubtitle ?? 'Расскажите о вашем бизнесе — настроим эффективную рекламную кампанию' ?></p>
			</div>
			<form class="quiz-form" id="quizForm" novalidate>
				<div class="quiz-progress" id="quizProgress">
					<div class="quiz-progress-line"><div class="quiz-progress-fill" id="quizProgressFill"></div></div>
					<ul class="quiz-steps" id="quizSteps">
						<li class="active" data-step="1"><span class="step-num">1</span><span class="step-label">Бизнес</span></li>
						<li data-step="2"><span class="step-num">2</span><span class="step-label">Реклама</span></li>
						<li data-step="3"><span class="step-num">3</span><span class="step-label">Контакты</span></li>
					</ul>
				</div>
				<fieldset class="quiz-page active" data-page="1">
					<legend class="quiz-legend">О вашем бизнесе</legend>
					<div class="quiz-fields-grid">
						<div class="quiz-field">
							<label for="siteUrl" class="quiz-label">URL сайта</label>
							<input type="text" id="siteUrl" name="theme" placeholder="https://ваш-сайт.ру" required>
						</div>
						<div class="quiz-field">
							<label for="niche" class="quiz-label">Ниша / сфера</label>
							<input type="text" id="niche" name="budget" placeholder="Например: продажа мебели">
						</div>
					</div>
				</fieldset>
				<fieldset class="quiz-page" data-page="2">
					<legend class="quiz-legend">Параметры рекламы</legend>
					<div class="quiz-fields-grid">
						<div class="quiz-field">
							<label class="quiz-label">Планируемый бюджет на клики в месяц</label>
							<div class="quiz-options icon-options" style="grid-template-columns:repeat(2,1fr)">
								<label class="quiz-option"><input type="radio" name="design" value="До 30 000"><span>До 30 000 ₽</span></label>
								<label class="quiz-option"><input type="radio" name="design" value="30-100 000"><span>30-100 000 ₽</span></label>
								<label class="quiz-option"><input type="radio" name="design" value="100-300 000"><span>100-300 000 ₽</span></label>
								<label class="quiz-option"><input type="radio" name="design" value="Больше"><span>Больше</span></label>
							</div>
						</div>
					</div>
					<label class="quiz-label">Что нужно?</label>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="func" value="Настройка с нуля"><img src="/img/icons/start.png" alt="Настройка"><span>Настройка с нуля</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Ведение"><img src="/img/icons/support.png" alt="Ведение"><span>Ведение и оптимизация</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Аналитика"><img src="/img/icons/analise.png" alt="Аналитика"><span>Подключение аналитики</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Семантика"><img src="/img/icons/search.png" alt="Семантика"><span>Только сбор семантики</span></label>
					</div>
					<div class="quiz-field">
						<textarea name="references" rows="3" placeholder="Дополнительные пожелания"></textarea>
					</div>
				</fieldset>
				<fieldset class="quiz-page" data-page="3">
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
					<p>Мы свяжемся с вами и подготовим стратегию рекламной кампании.</p>
				</div>
			</form>
		</div>
		<div class="wave-divider <?= $briefWave ?? 'wave-light' ?>" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

	<section class="brief section-dark" id="brief">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title"><?= $briefTitle ?? 'Бриф на SMM продвижение' ?></h2><p class="section-subtitle"><?= $briefSubtitle ?? 'Расскажите о бизнесе — подготовим стратегию' ?></p></div>
			<form class="quiz-form" id="quizForm" novalidate>
				<div class="quiz-progress" id="quizProgress">
					<div class="quiz-progress-line"><div class="quiz-progress-fill" id="quizProgressFill"></div></div>
					<ul class="quiz-steps" id="quizSteps">
						<li class="active" data-step="1"><span class="step-num">1</span><span class="step-label">Бизнес</span></li>
						<li data-step="2"><span class="step-num">2</span><span class="step-label">Соцсети</span></li>
						<li data-step="3"><span class="step-num">3</span><span class="step-label">Контакты</span></li>
					</ul>
				</div>
				<fieldset class="quiz-page active" data-page="1">
					<legend class="quiz-legend">О вашем бизнесе</legend>
					<div class="quiz-fields-grid">
						<div class="quiz-field"><label class="quiz-label">URL сайта или страницы</label><input type="text" name="theme" placeholder="https://..."></div>
						<div class="quiz-field"><label class="quiz-label">Ниша / сфера</label><input type="text" name="budget" placeholder="Например: салон красоты"></div>
					</div>
				</fieldset>
				<fieldset class="quiz-page" data-page="2">
					<legend class="quiz-legend">Выберите соцсети</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="func" value="Instagram"><img loading="lazy" src="/img/icons/image.png" alt="Instagram"><span>Instagram</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="VK"><img loading="lazy" src="/img/icons/chat.png" alt="VK"><span>VK</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Telegram"><img loading="lazy" src="/img/icons/telegram.png" alt="Telegram"><span>Telegram</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="TikTok"><img loading="lazy" src="/img/icons/mobile.png" alt="TikTok"><span>TikTok</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="YouTube"><img loading="lazy" src="/img/icons/start.png" alt="YouTube"><span>YouTube</span></label>
						</div>
					<label class="quiz-label">Что нужно?</label>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Ведение"><img loading="lazy" src="/img/icons/support.png" alt="Ведение"><span>Ведение профиля</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Контент"><img loading="lazy" src="/img/icons/image.png" alt="Контент"><span>Создание контента</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Таргет"><img loading="lazy" src="/img/icons/search.png" alt="Таргет"><span>Таргетинг</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Оформление"><img loading="lazy" src="/img/icons/disign.png" alt="Оформление"><span>Оформление</span></label>
					</div>
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
				<div class="quiz-nav">
					<button type="button" class="btn btn-outline" id="quizPrev" disabled>Назад</button>
					<button type="button" class="btn btn-main" id="quizNext">Далее</button>
					<button type="submit" class="btn btn-main hidden" id="quizSubmit">Отправить заявку</button>
				</div>
				<div class="quiz-success hidden" id="quizSuccess"><img src="/img/svg/like.svg" alt=""><h3>Спасибо!</h3><p>Мы свяжемся и подготовим стратегию SMM.</p></div>
			</form>
		</div>
		<div class="wave-divider <?= $briefWave ?? 'wave-light' ?>" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

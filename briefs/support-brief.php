	<section class="brief section-dark" id="brief">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title"><?= $briefTitle ?? 'Бриф на обслуживание сайта' ?></h2>
				<p class="section-subtitle"><?= $briefSubtitle ?? 'Расскажите о вашем сайте — мы подберём тариф' ?></p>
			</div>
			<form class="quiz-form" id="quizForm" novalidate>
				<div class="quiz-progress" id="quizProgress">
					<div class="quiz-progress-line"><div class="quiz-progress-fill" id="quizProgressFill"></div></div>
					<ul class="quiz-steps" id="quizSteps">
						<li class="active" data-step="1"><span class="step-num">1</span><span class="step-label">О сайте</span></li>
						<li data-step="2"><span class="step-num">2</span><span class="step-label">Задачи</span></li>
						<li data-step="3"><span class="step-num">3</span><span class="step-label">Контакты</span></li>
					</ul>
				</div>
				<fieldset class="quiz-page active" data-page="1">
					<legend class="quiz-legend">Информация о сайте</legend>
					<div class="quiz-fields-grid">
						<div class="quiz-field">
							<label for="siteUrl" class="quiz-label">Адрес сайта</label>
							<input type="text" id="siteUrl" name="theme" placeholder="https://ваш-сайт.ру">
						</div>
						<div class="quiz-field">
							<label for="siteCms" class="quiz-label">CMS / платформа</label>
							<select id="siteCms" name="cms" class="quiz-field">
								<option value="">— выберите —</option>
								<option value="WordPress">WordPress</option>
								<option value="OpenCart">OpenCart</option>
								<option value="1С-Битрикс">1С-Битрикс</option>
								<option value="Laravel">Laravel / кастомная</option>
								<option value="Другое">Другое</option>
							</select>
						</div>
					</div>
				</fieldset>
				<fieldset class="quiz-page" data-page="2">
					<legend class="quiz-legend">Что требуется?</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="func" value="Обновления"><img loading="lazy" src="/img/icons/scripts.png" alt="Обновления"><span>Обновление CMS / плагинов</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Бэкапы"><img loading="lazy" src="/img/icons/sites.png" alt="Бэкапы"><span>Резервное копирование</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Безопасность"><img loading="lazy" src="/img/icons/profi.png" alt="Безопасность"><span>Защита и аудит</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Доработки"><img loading="lazy" src="/img/icons/functions.png" alt="Доработки"><span>Доработка функционала</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Хостинг"><img loading="lazy" src="/img/icons/desctop.png" alt="Хостинг"><span>Подбор и настройка хостинга</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Скорость"><img loading="lazy" src="/img/icons/start.png" alt="Скорость"><span>Оптимизация скорости</span></label>
					</div>
					<div class="quiz-field">
						<textarea name="references" rows="3" placeholder="Опишите проблемы или пожелания"></textarea>
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
					<img src="/img/svg/like.svg" alt="Заявка отправлена">
					<h3>Спасибо за заявку!</h3>
					<p>Мы свяжемся с вами и предложим оптимальный тариф обслуживания.</p>
				</div>
			</form>
		</div>
		<div class="wave-divider <?= $briefWave ?? 'wave-light' ?>" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

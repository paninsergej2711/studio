	<section class="brief section-dark" id="brief">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title"><?= $briefTitle ?? 'Бриф на наполнение' ?></h2><p class="section-subtitle"><?= $briefSubtitle ?? 'Расскажите о каталоге — подберём тариф' ?></p></div>
			<form class="quiz-form" id="quizForm" novalidate>
				<div class="quiz-progress" id="quizProgress"><div class="quiz-progress-line"><div class="quiz-progress-fill" id="quizProgressFill"></div></div><ul class="quiz-steps" id="quizSteps"><li class="active" data-step="1"><span class="step-num">1</span><span class="step-label">Каталог</span></li><li data-step="2"><span class="step-num">2</span><span class="step-label">Контент</span></li><li data-step="3"><span class="step-num">3</span><span class="step-label">Контакты</span></li></ul></div>
				<fieldset class="quiz-page active" data-page="1">
					<legend class="quiz-legend">О каталоге</legend>
					<div class="quiz-fields-grid">
						<div class="quiz-field"><label class="quiz-label">Сколько товаров?</label><input type="text" name="budget" placeholder="Например: 500"></div>
						<div class="quiz-field"><label class="quiz-label">Источник данных</label><select name="cms" class="quiz-field"><option value="Excel">Excel / CSV</option><option value="1С">1С</option><option value="Поставщик">API поставщика</option><option value="Вручную">Вручную</option></select></div>
					</div>
				</fieldset>
				<fieldset class="quiz-page" data-page="2">
					<legend class="quiz-legend">Что нужно сделать?</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="func" value="Загрузка на сайт"><img src="/img/icons/sites.png" alt="Загрузка"><span>Загрузка на сайт</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="SEO-описания"><img src="/img/icons/text.png" alt="Описания"><span>SEO-описания</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Обработка фото"><img src="/img/icons/image.png" alt="Фото"><span>Обработка фото</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Характеристики"><img src="/img/icons/analise.png" alt="Характеристики"><span>Характеристики</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Импорт"><img src="/img/icons/scripts.png" alt="Импорт"><span>Настройка импорта</span></label>
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
				<div class="quiz-success hidden" id="quizSuccess"><img src="/img/svg/like.svg" alt=""><h3>Спасибо!</h3><p>Мы свяжемся и рассчитаем стоимость наполнения.</p></div>
			</form>
		</div>
		<div class="wave-divider <?= $briefWave ?? 'wave-light' ?>" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>

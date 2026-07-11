	<section class="brief section-dark" id="brief">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title"><?= $briefTitle ?? 'Бриф на парсинг данных' ?></h2>
				<p class="section-subtitle"><?= $briefSubtitle ?? 'Расскажите о задаче — мы подберём оптимальное решение' ?></p>
			</div>
			<form class="quiz-form" id="quizForm" novalidate>
				<div class="quiz-progress" id="quizProgress">
					<div class="quiz-progress-line"><div class="quiz-progress-fill" id="quizProgressFill"></div></div>
					<ul class="quiz-steps" id="quizSteps">
						<li class="active" data-step="1"><span class="step-num">1</span><span class="step-label">Источники</span></li>
						<li data-step="2"><span class="step-num">2</span><span class="step-label">Параметры</span></li>
						<li data-step="3"><span class="step-num">3</span><span class="step-label">Контакты</span></li>
					</ul>
				</div>
				<fieldset class="quiz-page active" data-page="1">
					<legend class="quiz-legend">Источники данных</legend>
					<label class="quiz-label">Какие сайты нужно парсить?</label>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="func" value="Ozon"><img loading="lazy" src="/img/icons/shop.png" alt="Ozon"><span>Ozon</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Wildberries"><img loading="lazy" src="/img/icons/market.png" alt="Wildberries"><span>Wildberries</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Avito"><img loading="lazy" src="/img/icons/siteweb.png" alt="Avito"><span>Avito</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Яндекс.Маркет"><img loading="lazy" src="/img/icons/poisk.png" alt="Яндекс.Маркет"><span>Яндекс.Маркет</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Kaspi"><img loading="lazy" src="/img/icons/place.png" alt="Kaspi"><span>Kaspi</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Другой сайт"><img loading="lazy" src="/img/icons/search.png" alt="Другой"><span>Другой сайт</span></label>
					</div>
					<div class="quiz-field">
						<label for="parsingSites" class="quiz-label">Укажите адреса сайтов</label>
						<textarea id="parsingSites" name="theme" rows="3" placeholder="Ссылки на сайты для парсинга"></textarea>
					</div>
				</fieldset>
				<fieldset class="quiz-page" data-page="2">
					<legend class="quiz-legend">Параметры сбора</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Товары"><img loading="lazy" src="/img/icons/sites.png" alt="Товары"><span>Товары и цены</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Контакты"><img loading="lazy" src="/img/icons/personal.png" alt="Контакты"><span>Контакты</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Отзывы"><img loading="lazy" src="/img/icons/chat.png" alt="Отзывы"><span>Отзывы</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="SEO"><img loading="lazy" src="/img/icons/seo.png" alt="SEO"><span>SEO-данные</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Карточки"><img loading="lazy" src="/img/icons/desctop.png" alt="Карточки"><span>Карточки товаров</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Своё"><img loading="lazy" src="/img/icons/other.png" alt="Своё"><span>Свой вариант</span></label>
					</div>
					<div class="quiz-fields-grid">
						<div class="quiz-field">
							<label class="quiz-label">Как часто обновлять?</label>
							<select name="cms" class="quiz-field">
								<option value="Разовая">Разовая задача</option>
								<option value="Ежедневный">Ежедневно</option>
								<option value="Еженедельный">Еженедельно</option>
								<option value="Ежемесячный">Ежемесячно</option>
							</select>
						</div>
						<div class="quiz-field">
							<label class="quiz-label">Формат выгрузки</label>
							<select name="design" class="quiz-field">
								<option value="Excel">Excel (XLSX)</option>
								<option value="CSV">CSV</option>
								<option value="Google Sheets">Google Sheets</option>
								<option value="JSON">JSON</option>
								<option value="CRM">CRM / 1С</option>
							</select>
						</div>
					</div>
					<div class="quiz-field">
						<textarea name="references" rows="3" placeholder="Дополнительные пожелания по данным"></textarea>
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
					<p>Мы свяжемся с вами и подготовим решение для сбора данных.</p>
				</div>
			</form>
		</div>
		<div class="wave-divider <?= $briefWave ?? 'wave-light' ?>" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

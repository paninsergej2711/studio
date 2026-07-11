	<!-- Бриф -->
	<section class="brief section-dark" id="brief">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title"><?= $briefTitle ?? 'Бриф на разработку сайта каталога' ?></h2>
				<p class="section-subtitle"><?= $briefSubtitle ?? 'Ответьте на несколько вопросов — и мы подготовим предложение по вашему каталогу' ?></p>
			</div>

			<form class="quiz-form" id="quizForm" novalidate>
				<div class="quiz-progress" id="quizProgress">
					<div class="quiz-progress-line"><div class="quiz-progress-fill" id="quizProgressFill"></div></div>
					<ul class="quiz-steps" id="quizSteps">
						<li class="active" data-step="1"><span class="step-num">1</span><span class="step-label">Тематика</span></li>
						<li data-step="2"><span class="step-num">2</span><span class="step-label">Дизайн</span></li>
						<li data-step="3"><span class="step-num">3</span><span class="step-label">Функционал</span></li>
						<li data-step="4"><span class="step-num">4</span><span class="step-label">Контент</span></li>
						<li data-step="5"><span class="step-num">5</span><span class="step-label">Бюджет</span></li>
						<li data-step="6"><span class="step-num">6</span><span class="step-label">Контакты</span></li>
					</ul>
				</div>

				<fieldset class="quiz-page active" data-page="1">
					<legend class="quiz-legend">Что будет в каталоге?</legend>
					<div class="quiz-options theme-options" style="grid-template-columns:repeat(3,1fr)">
						<label class="quiz-option"><input type="radio" name="theme" value="Товары"><img src="/img/icons/product.png" alt="Товары"><span>Товары</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Оборудование"><img src="/img/icons/functions.png" alt="Оборудование"><span>Оборудование</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Услуги"><img src="/img/icons/service.png" alt="Услуги"><span>Услуги</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Недвижимость"><img src="/img/icons/buildings.png" alt="Недвижимость"><span>Недвижимость</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Автомобили"><img src="/img/icons/car.png" alt="Автомобили"><span>Автомобили</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Другое"><img src="/img/icons/other.png" alt="Другое"><span>Другое</span></label>
					</div>
					<div class="quiz-field theme-other-field">
						<label for="themeOther" class="quiz-label">Опишите ваш каталог</label>
						<input type="text" id="themeOther" name="themeOther" placeholder="Например: каталог строительной техники">
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="2">
					<legend class="quiz-legend">Дизайн</legend>
					<div class="quiz-options icon-options">
						<label class="quiz-option"><input type="radio" name="design" value="Индивидуальный дизайн"><img src="/img/icons/disign.png" alt="Индивидуальный дизайн"><span>Индивидуальный дизайн</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="Готовый шаблон"><img src="/img/icons/theme.png" alt="Готовый шаблон"><span>Готовый шаблон</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="Редизайн существующего"><img src="/img/icons/sites.png" alt="Редизайн"><span>Редизайн</span></label>
					</div>
					<div class="quiz-field">
						<label class="quiz-label">Есть ли примеры/референсы?</label>
						<textarea name="references" rows="3" placeholder="Ссылки на каталоги, которые вам нравятся"></textarea>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="3">
					<legend class="quiz-legend">Функционал каталога</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="func" value="Категории и разделы"><img src="/img/icons/menu.png" alt="Категории"><span>Категории и разделы</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Карточки товаров"><img src="/img/icons/product.png" alt="Карточки товаров"><span>Карточки товаров</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Фильтры"><img src="/img/icons/filter.png" alt="Фильтры"><span>Фильтры</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Поиск"><img src="/img/icons/search.png" alt="Поиск"><span>Поиск</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Сравнение"><img src="/img/icons/compare.png" alt="Сравнение"><span>Сравнение</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Избранное"><img src="/img/icons/wishlist.png" alt="Избранное"><span>Избранное</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Форма заявки"><img src="/img/icons/form.png" alt="Форма заявки"><span>Форма заявки</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Прайс-лист"><img src="/img/icons/text.png" alt="Прайс-лист"><span>Прайс-лист</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Мультиязычность"><img src="/img/icons/languege.png" alt="Мультиязычность"><span>Мультиязычность</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Личный кабинет"><img src="/img/icons/personal.png" alt="Личный кабинет"><span>Личный кабинет</span></label>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="4">
					<legend class="quiz-legend">Контент и платформа</legend>
					<div class="quiz-fields-grid">
						<div class="quiz-field">
							<label for="pagesCount" class="quiz-label">Сколько разделов/категорий?</label>
							<input type="text" id="pagesCount" name="pagesCount" placeholder="Например: 10-15">
						</div>
						<div class="quiz-field">
							<label for="productsCount" class="quiz-label">Сколько позиций в каталоге?</label>
							<input type="text" id="productsCount" name="productsCount" placeholder="Например: 500">
						</div>
					</div>
					<label class="quiz-label">Выберите CMS</label>
					<div class="quiz-options cms-options icon-options">
						<label class="quiz-option"><input type="radio" name="cms" value="WordPress"><img src="/img/vector/wordpress.svg" alt="WordPress"><span>WordPress</span></label>
						<label class="quiz-option"><input type="radio" name="cms" value="1С-Битрикс"><img src="/img/vector/bitrix.svg" alt="1С-Битрикс"><span>1С-Битрикс</span></label>
						<label class="quiz-option"><input type="radio" name="cms" value="OpenCart"><img src="/img/vector/opencart.svg" alt="OpenCart"><span>OpenCart</span></label>
						<label class="quiz-option"><input type="radio" name="cms" value="MODX"><img src="/img/vector/modx.svg" alt="MODX"><span>MODX</span></label>
						<label class="quiz-option"><input type="radio" name="cms" value="Tilda"><img src="/img/vector/tilda.svg" alt="Tilda"><span>Tilda</span></label>
						<label class="quiz-option"><input type="radio" name="cms" value="Затрудняюсь с выбором"><img src="/img/icons/question.png" alt="Затрудняюсь"><span>Затрудняюсь</span></label>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="5">
					<legend class="quiz-legend">Бюджет и сроки</legend>
					<div class="quiz-options text-options">
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="до 50 000 ₽"><span>до 50 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="50 000 — 150 000 ₽"><span>50 000 — 150 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="150 000 — 300 000 ₽"><span>150 000 — 300 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="более 300 000 ₽"><span>более 300 000 ₽</span></label>
					</div>
					<div class="quiz-field">
						<label for="deadline" class="quiz-label">Желаемые сроки запуска</label>
						<input type="text" id="deadline" name="deadline" placeholder="Например: 1-2 месяца">
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
					<p>Мы свяжемся с вами в ближайшее время и подготовим предложение по вашему каталогу.</p>
				</div>
			</form>
		</div>
		<div class="wave-divider <?= $briefWave ?? 'wave-light' ?>" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

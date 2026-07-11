	<!-- Бриф -->
	<section class="brief section-dark" id="brief">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title"><?= $briefTitle ?? 'Бриф для разработки Интернет магазина' ?></h2>
				<p class="section-subtitle"><?= $briefSubtitle ?? 'Заполните небольшую анкету чтобы мы могли подобрать для вас оптимальное предложение' ?></p>
			</div>

			<form class="quiz-form" id="quizForm" novalidate>
				<div class="quiz-progress" id="quizProgress">
					<div class="quiz-progress-line"><div class="quiz-progress-fill" id="quizProgressFill"></div></div>
					<ul class="quiz-steps" id="quizSteps">
						<li class="active" data-step="1"><span class="step-num">1</span><span class="step-label">Тематика</span></li>
						<li data-step="2"><span class="step-num">2</span><span class="step-label">Контент</span></li>
						<li data-step="3"><span class="step-num">3</span><span class="step-label">Дизайн</span></li>
						<li data-step="4"><span class="step-num">4</span><span class="step-label">Функционал</span></li>
						<li data-step="5"><span class="step-num">5</span><span class="step-label">Интеграции</span></li>
						<li data-step="6"><span class="step-num">6</span><span class="step-label">Контакты</span></li>
					</ul>
				</div>

				<fieldset class="quiz-page active" data-page="1">
					<legend class="quiz-legend">Тематика магазина</legend>
					<div class="quiz-options theme-options">
						<label class="quiz-option"><input type="radio" name="theme" value="Мебель"><img loading="lazy" src="/img/icons/furniture.png" alt="Мебель"><span>Мебель</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Бытовая техника"><img loading="lazy" src="/img/icons/tv.png" alt="Бытовая техника"><span>Бытовая техника</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Еда"><img loading="lazy" src="/img/icons/food.png" alt="Еда"><span>Еда</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Недвижимость"><img loading="lazy" src="/img/icons/buildings.png" alt="Недвижимость"><span>Недвижимость</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Мобильные телефоны"><img loading="lazy" src="/img/icons/phone.png" alt="Мобильные телефоны"><span>Мобильные телефоны</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Транспорт"><img loading="lazy" src="/img/icons/car.png" alt="Транспорт"><span>Транспорт</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Цветы"><img loading="lazy" src="/img/icons/flower.png" alt="Цветы"><span>Цветы</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Одежда"><img loading="lazy" src="/img/icons/tshirt.png" alt="Одежда"><span>Одежда</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Бытовая химия"><img loading="lazy" src="/img/icons/chemy.png" alt="Бытовая химия"><span>Бытовая химия</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Строительные материалы"><img loading="lazy" src="/img/icons/saw.png" alt="Строительные материалы"><span>Стройматериалы</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Парфюмерия"><img loading="lazy" src="/img/icons/perfume.png" alt="Парфюмерия"><span>Парфюмерия</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Игрушки"><img loading="lazy" src="/img/icons/toys.png" alt="Игрушки"><span>Игрушки</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Товары для животных"><img loading="lazy" src="/img/icons/pets.png" alt="Товары для животных"><span>Товары для животных</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Другая"><img loading="lazy" src="/img/icons/other.png" alt="Другая"><span>Другая</span></label>
					</div>
					<div class="quiz-field theme-other-field">
						<label for="themeOther" class="quiz-label">Напишите тематику вашего магазина</label>
						<input type="text" id="themeOther" name="themeOther" placeholder="Например: товары для сада">
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="2">
					<legend class="quiz-legend">Контент</legend>
					<div class="quiz-fields-grid">
						<div class="quiz-field">
							<label for="pagesCount" class="quiz-label">Сколько страниц нужно?</label>
							<input type="text" id="pagesCount" name="pagesCount" placeholder="Например: 10-20">
						</div>
						<div class="quiz-field">
							<label for="productsCount" class="quiz-label">Сколько товаров будет?</label>
							<input type="text" id="productsCount" name="productsCount" placeholder="Например: 500">
						</div>
					</div>
					<label class="quiz-label">Выберите CMS</label>
					<div class="quiz-options cms-options icon-options">
						<label class="quiz-option"><input type="radio" name="cms" value="WordPress"><img loading="lazy" src="/img/vector/wordpress.svg" alt="WordPress"><span>WordPress</span></label>
						<label class="quiz-option"><input type="radio" name="cms" value="OpenCart"><img loading="lazy" src="/img/vector/opencart.svg" alt="OpenCart"><span>OpenCart</span></label>
						<label class="quiz-option"><input type="radio" name="cms" value="1С-Битрикс"><img loading="lazy" src="/img/vector/bitrix.svg" alt="1С-Битрикс"><span>1С-Битрикс</span></label>
						<label class="quiz-option"><input type="radio" name="cms" value="Shopify"><img loading="lazy" src="/img/vector/shopify.svg" alt="Shopify"><span>Shopify</span></label>
						<label class="quiz-option"><input type="radio" name="cms" value="MODX"><img loading="lazy" src="/img/vector/modx.svg" alt="MODX"><span>MODX</span></label>
						<label class="quiz-option"><input type="radio" name="cms" value="Tilda"><img loading="lazy" src="/img/vector/tilda.svg" alt="Tilda"><span>Tilda</span></label>
						<label class="quiz-option"><input type="radio" name="cms" value="Joomla"><img loading="lazy" src="/img/vector/joomla.svg" alt="Joomla"><span>Joomla</span></label>
						<label class="quiz-option"><input type="radio" name="cms" value="Затрудняюсь с выбором"><img loading="lazy" src="/img/icons/question.png" alt="Затрудняюсь"><span>Затрудняюсь</span></label>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="3">
					<legend class="quiz-legend">Дизайн</legend>
					<div class="quiz-options icon-options">
						<label class="quiz-option"><input type="radio" name="design" value="Индивидуальный дизайн с нуля"><img loading="lazy" src="/img/icons/disign.png" alt="Индивидуальный дизайн"><span>Индивидуальный дизайн с нуля</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="Готовый шаблон с адаптацией"><img loading="lazy" src="/img/icons/theme.png" alt="Шаблонный дизайн"><span>Готовый шаблон с адаптацией</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="Редизайн существующего магазина"><img loading="lazy" src="/img/icons/sites.png" alt="Редизайн"><span>Редизайн существующего магазина</span></label>
					</div>
					<div class="quiz-field">
						<label class="quiz-label">Есть ли у вас примеры/референсы?</label>
						<textarea name="references" rows="3" placeholder="Ссылки на сайты, которые вам нравятся"></textarea>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="4">
					<legend class="quiz-legend">Функционал</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="func" value="Сравнение товаров"><img loading="lazy" src="/img/icons/compare.png" alt="Сравнение товаров"><span>Сравнение товаров</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Избранное"><img loading="lazy" src="/img/icons/wishlist.png" alt="Избранное"><span>Избранное</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Калькулятор"><img loading="lazy" src="/img/icons/calculator.png" alt="Калькулятор"><span>Калькулятор</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Фильтры"><img loading="lazy" src="/img/icons/filter.png" alt="Фильтры"><span>Фильтры</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Поиск"><img loading="lazy" src="/img/icons/search.png" alt="Поиск"><span>Поиск</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Личный кабинет"><img loading="lazy" src="/img/icons/personal.png" alt="Личный кабинет"><span>Личный кабинет</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Форма связи"><img loading="lazy" src="/img/icons/form.png" alt="Форма связи"><span>Форма связи</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Мультиязычность"><img loading="lazy" src="/img/icons/languege.png" alt="Мультиязычность"><span>Мультиязычность</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Карта"><img loading="lazy" src="/img/icons/map.png" alt="Карта"><span>Карта</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Региональность"><img loading="lazy" src="/img/icons/region.png" alt="Региональность"><span>Региональность</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Конфигураторы"><img loading="lazy" src="/img/icons/complex.png" alt="Конфигураторы"><span>Конфигураторы</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Мультивалютность"><img loading="lazy" src="/img/icons/money.png" alt="Мультивалютность"><span>Мультивалютность</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Мегаменю"><img loading="lazy" src="/img/icons/menu.png" alt="Мегаменю"><span>Мегаменю</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Онлайн чат"><img loading="lazy" src="/img/icons/chat.png" alt="Онлайн чат"><span>Онлайн чат</span></label>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="5">
					<legend class="quiz-legend">Интеграции</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="integrations" value="CRM системы"><img loading="lazy" src="/img/icons/crm.png" alt="CRM системы"><span>CRM системы</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Онлайн оплата"><img loading="lazy" src="/img/icons/payments.png" alt="Онлайн оплата"><span>Онлайн оплата</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Сервисы доставки"><img loading="lazy" src="/img/icons/delivery.png" alt="Сервисы доставки"><span>Сервисы доставки</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Почтовые рассылки"><img loading="lazy" src="/img/icons/subscribe.png" alt="Почтовые рассылки"><span>Почтовые рассылки</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Мессенджеры"><img loading="lazy" src="/img/icons/whatsapp.png" alt="Мессенджеры"><span>Мессенджеры</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Соцсети"><img loading="lazy" src="/img/icons/facebook.png" alt="Соцсети"><span>Соцсети</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Другие интеграции"><img loading="lazy" src="/img/icons/integration.png" alt="Другие"><span>Другие</span></label>
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
					<p>Мы свяжемся с вами в ближайшее время и подготовим оптимальное предложение.</p>
				</div>
			</form>
		</div>
		<div class="wave-divider <?= $briefWave ?? 'wave-light' ?>" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

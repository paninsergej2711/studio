	<!-- Бриф -->
	<section class="brief section-dark" id="brief">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title"><?= $briefTitle ?? 'Бриф на разработку маркетплейса' ?></h2>
				<p class="section-subtitle"><?= $briefSubtitle ?? 'Ответьте на несколько вопросов — и мы подготовим предложение по вашей площадке' ?></p>
			</div>

			<form class="quiz-form" id="quizForm" novalidate>
				<div class="quiz-progress" id="quizProgress">
					<div class="quiz-progress-line"><div class="quiz-progress-fill" id="quizProgressFill"></div></div>
					<ul class="quiz-steps" id="quizSteps">
						<li class="active" data-step="1"><span class="step-num">1</span><span class="step-label">Тип</span></li>
						<li data-step="2"><span class="step-num">2</span><span class="step-label">Модель</span></li>
						<li data-step="3"><span class="step-num">3</span><span class="step-label">Функционал</span></li>
						<li data-step="4"><span class="step-num">4</span><span class="step-label">Интеграции</span></li>
						<li data-step="5"><span class="step-num">5</span><span class="step-label">Объём и бюджет</span></li>
						<li data-step="6"><span class="step-num">6</span><span class="step-label">Контакты</span></li>
					</ul>
				</div>

				<fieldset class="quiz-page active" data-page="1">
					<legend class="quiz-legend">Тип маркетплейса</legend>
					<div class="quiz-options theme-options" style="grid-template-columns:repeat(3,1fr)">
						<label class="quiz-option"><input type="radio" name="theme" value="Товарный маркетплейс"><img loading="lazy" src="/img/icons/shop.png" alt="Товарный"><span>Товарный</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Маркетплейс услуг"><img loading="lazy" src="/img/icons/service.png" alt="Услуги"><span>Услуги</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Аренда и бронирование"><img loading="lazy" src="/img/icons/bron.png" alt="Аренда и бронирование"><span>Аренда / Бронирование</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Цифровые товары"><img loading="lazy" src="/img/icons/product.png" alt="Цифровые товары"><span>Цифровые товары</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Доска объявлений"><img loading="lazy" src="/img/icons/delivery.png" alt="Доска объявлений"><span>Доска объявлений</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Другая"><img loading="lazy" src="/img/icons/other.png" alt="Другое"><span>Другое</span></label>
					</div>
					<div class="quiz-field theme-other-field">
						<label for="themeOther" class="quiz-label">Опишите вашу площадку</label>
						<input type="text" id="themeOther" name="themeOther" placeholder="Например: маркетплейс мастеров и услуг">
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="2">
					<legend class="quiz-legend">Модель работы площадки</legend>
					<div class="quiz-options icon-options" style="grid-template-columns:repeat(4,1fr)">
						<label class="quiz-option"><input type="radio" name="design" value="B2C — компании покупателям"><img loading="lazy" src="/img/icons/company.png" alt="B2C"><span>B2C</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="C2C — частные лица"><img loading="lazy" src="/img/icons/personal.png" alt="C2C"><span>C2C</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="B2B — оптовая торговля"><img loading="lazy" src="/img/icons/functions.png" alt="B2B"><span>B2B</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="Смешанная модель"><img loading="lazy" src="/img/icons/complex.png" alt="Смешанная модель"><span>Смешанная</span></label>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="3">
					<legend class="quiz-legend">Функционал площадки</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="func" value="Кабинеты продавцов"><img loading="lazy" src="/img/icons/personal.png" alt="Кабинеты продавцов"><span>Кабинеты продавцов</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Каталог и категории"><img loading="lazy" src="/img/icons/product.png" alt="Каталог и категории"><span>Каталог и категории</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Корзина и оплата"><img loading="lazy" src="/img/icons/payments.png" alt="Корзина и оплата"><span>Корзина и оплата</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Система комиссий и выплат"><img loading="lazy" src="/img/icons/money.png" alt="Система комиссий"><span>Комиссии и выплаты</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Рейтинги и отзывы"><img loading="lazy" src="/img/icons/chat.png" alt="Рейтинги и отзывы"><span>Рейтинги и отзывы</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Поиск и фильтры"><img loading="lazy" src="/img/icons/filter.png" alt="Поиск и фильтры"><span>Поиск и фильтры</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Модерация товаров"><img loading="lazy" src="/img/icons/functions.png" alt="Модерация"><span>Модерация</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Доставка"><img loading="lazy" src="/img/icons/delivery.png" alt="Доставка"><span>Доставка</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Сравнение товаров"><img loading="lazy" src="/img/icons/compare.png" alt="Сравнение товаров"><span>Сравнение</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Мультиязычность"><img loading="lazy" src="/img/icons/languege.png" alt="Мультиязычность"><span>Мультиязычность</span></label>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="4">
					<legend class="quiz-legend">Интеграции</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="integrations" value="CRM системы"><img loading="lazy" src="/img/icons/crm.png" alt="CRM системы"><span>CRM системы</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Онлайн оплата и эквайринг"><img loading="lazy" src="/img/icons/payments.png" alt="Онлайн оплата"><span>Онлайн оплата</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Сервисы доставки"><img loading="lazy" src="/img/icons/delivery.png" alt="Сервисы доставки"><span>Сервисы доставки</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="1С"><img loading="lazy" src="/img/icons/functions.png" alt="1С"><span>1С</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Мессенджеры"><img loading="lazy" src="/img/icons/whatsapp.png" alt="Мессенджеры"><span>Мессенджеры</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Соцсети"><img loading="lazy" src="/img/icons/facebook.png" alt="Соцсети"><span>Соцсети</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Другие интеграции"><img loading="lazy" src="/img/icons/integration.png" alt="Другие"><span>Другие</span></label>
					</div>
				</fieldset>

				<fieldset class="quiz-page" data-page="5">
					<legend class="quiz-legend">Объём, бюджет и сроки</legend>
					<div class="quiz-fields-grid">
						<div class="quiz-field">
							<label for="pagesCount" class="quiz-label">Ожидаемое число продавцов</label>
							<input type="text" id="pagesCount" name="pagesCount" placeholder="Например: 50-100">
						</div>
						<div class="quiz-field">
							<label for="productsCount" class="quiz-label">Ожидаемое число товаров</label>
							<input type="text" id="productsCount" name="productsCount" placeholder="Например: 5000">
						</div>
					</div>
					<label class="quiz-label">Бюджет проекта</label>
					<div class="quiz-options text-options">
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="до 300 000 ₽"><span>до 300 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="300 000 — 700 000 ₽"><span>300 000 — 700 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="700 000 — 1 500 000 ₽"><span>700 000 — 1 500 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="более 1 500 000 ₽"><span>более 1 500 000 ₽</span></label>
					</div>
					<div class="quiz-field">
						<label for="deadline" class="quiz-label">Желаемые сроки запуска</label>
						<input type="text" id="deadline" name="deadline" placeholder="Например: 3-4 месяца">
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
					<p>Мы свяжемся с вами в ближайшее время и подготовим предложение по вашему маркетплейсу.</p>
				</div>
			</form>
		</div>
		<div class="wave-divider <?= $briefWave ?? 'wave-light' ?>" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

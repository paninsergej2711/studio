	<section class="brief section-dark" id="brief">
		<div class="container">
			<div class="section-title-wrap"><h2 class="section-title"><?= $briefTitle ?? 'Бриф на разработку сайта' ?></h2><p class="section-subtitle"><?= $briefSubtitle ?? 'Выберите тип сайта — подберём решение' ?></p></div>
			<form class="quiz-form" id="devBriefForm" novalidate>
				<div class="quiz-progress" id="devProgress">
					<div class="quiz-progress-line"><div class="quiz-progress-fill" id="devProgressFill"></div></div>
					<ul class="quiz-steps" id="devSteps"></ul>
				</div>

				<!-- Step 1: Type selection -->
				<fieldset class="quiz-page active" data-page="service" data-label="Тип сайта">
					<legend class="quiz-legend">Какой сайт вам нужен?</legend>
					<div class="type-selector" style="display:grid;grid-template-columns:repeat(6,1fr);gap:8px;margin-bottom:20px">
						<label class="type-card" onclick=""><input type="radio" name="service" value="Лендинг"><img loading="lazy" src="/img/icons/start.png" alt=""><span class="type-label">Лендинг</span><span class="type-desc">1 страница</span></label>
						<label class="type-card" onclick=""><input type="radio" name="service" value="Корпоративный"><img loading="lazy" src="/img/icons/buildings.png" alt=""><span class="type-label">Корпоративный</span><span class="type-desc">Компания</span></label>
						<label class="type-card" onclick=""><input type="radio" name="service" value="Интернет-магазин"><img loading="lazy" src="/img/icons/shop.png" alt=""><span class="type-label">Интернет-магазин</span><span class="type-desc">+ корзина</span></label>
						<label class="type-card" onclick=""><input type="radio" name="service" value="Каталог"><img loading="lazy" src="/img/icons/sites.png" alt=""><span class="type-label">Каталог</span><span class="type-desc">Витрина</span></label>
						<label class="type-card" onclick=""><input type="radio" name="service" value="Маркетплейс"><img loading="lazy" src="/img/icons/market.png" alt=""><span class="type-label">Маркетплейс</span><span class="type-desc">Площадка</span></label>
						<label class="type-card" onclick=""><input type="radio" name="service" value="Другое"><img loading="lazy" src="/img/icons/other.png" alt=""><span class="type-label">Другое</span><span class="type-desc">Свой</span></label>
					</div>
				</fieldset>

				<!-- ============= ЛЕНДИНГ ============= -->
				<fieldset class="quiz-page" data-flow="Лендинг" data-label="Дизайн">
					<legend class="quiz-legend">Оформление лендинга</legend>
					<div class="quiz-options icon-options">
						<label class="quiz-option"><input type="radio" name="landingDesign" value="Индивидуальный дизайн"><img src="/img/icons/disign.png" alt=""><span>Индивидуальный дизайн</span></label>
						<label class="quiz-option"><input type="radio" name="landingDesign" value="Готовый шаблон"><img src="/img/icons/theme.png" alt=""><span>Готовый шаблон</span></label>
						<label class="quiz-option"><input type="radio" name="landingDesign" value="По референсу"><img src="/img/icons/sites.png" alt=""><span>По референсу</span></label>
					</div>
					<div class="quiz-field"><label class="quiz-label">Есть ли примеры/референсы?</label><textarea name="references" rows="2" placeholder="Ссылки на лендинги, которые нравятся"></textarea></div>
				</fieldset>
				<fieldset class="quiz-page" data-flow="Лендинг" data-label="Блоки">
					<legend class="quiz-legend">Какие блоки нужны?</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="func" value="Оффер"><img src="/img/icons/start.png" alt=""><span>Оффер</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Преимущества"><img src="/img/icons/profi.png" alt=""><span>Преимущества</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Товары"><img src="/img/icons/product.png" alt=""><span>Товары/услуги</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Отзывы"><img src="/img/icons/chat.png" alt=""><span>Отзывы</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Тарифы"><img src="/img/icons/money.png" alt=""><span>Тарифы</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Форма заявки"><img src="/img/icons/form.png" alt=""><span>Форма заявки</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="FAQ"><img src="/img/icons/question.png" alt=""><span>FAQ</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Галерея"><img src="/img/icons/image.png" alt=""><span>Галерея</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Таймер"><img src="/img/icons/time.png" alt=""><span>Таймер акции</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Карта"><img src="/img/icons/map.png" alt=""><span>Карта и контакты</span></label>
					</div>
				</fieldset>
				<fieldset class="quiz-page" data-flow="Лендинг" data-label="Интеграции">
					<legend class="quiz-legend">Интеграции</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="integrations" value="CRM"><img src="/img/icons/crm.png" alt=""><span>CRM системы</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Оплата"><img src="/img/icons/payments.png" alt=""><span>Онлайн оплата</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Мессенджеры"><img src="/img/icons/whatsapp.png" alt=""><span>Мессенджеры</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Рассылки"><img src="/img/icons/subscribe.png" alt=""><span>Email-рассылки</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Аналитика"><img src="/img/icons/analise.png" alt=""><span>Аналитика</span></label>
					</div>
				</fieldset>

				<!-- ============= КОРПОРАТИВНЫЙ ============= -->
				<fieldset class="quiz-page" data-flow="Корпоративный" data-label="Разделы">
					<legend class="quiz-legend">Какие разделы нужны?</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="func" value="О компании"><img src="/img/icons/personal.png" alt=""><span>О компании</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Услуги"><img src="/img/icons/service.png" alt=""><span>Услуги</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Портфолио"><img src="/img/icons/image.png" alt=""><span>Портфолио / Кейсы</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Новости"><img src="/img/icons/text.png" alt=""><span>Новости / Блог</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Контакты"><img src="/img/icons/mail.png" alt=""><span>Контакты</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Каталог"><img src="/img/icons/sites.png" alt=""><span>Каталог товаров</span></label>
					</div>
				</fieldset>
				<fieldset class="quiz-page" data-flow="Корпоративный" data-label="Функционал">
					<legend class="quiz-legend">Функционал</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Формы"><img src="/img/icons/form.png" alt=""><span>Формы связи</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Онлайн-запись"><img src="/img/icons/bron.png" alt=""><span>Онлайн-запись</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="CRM"><img src="/img/icons/crm.png" alt=""><span>Интеграция с CRM</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Аналитика"><img src="/img/icons/analise.png" alt=""><span>Аналитика</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Языки"><img src="/img/icons/languege.png" alt=""><span>Английская версия</span></label>
					</div>
					<div class="quiz-field"><textarea name="references" rows="2" placeholder="Дополнительные пожелания"></textarea></div>
				</fieldset>
				<fieldset class="quiz-page" data-flow="Корпоративный" data-label="Бюджет">
					<legend class="quiz-legend">Бюджет и сроки</legend>
					<div class="quiz-options text-options">
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="до 50 000"><span>до 50 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="50 - 100 000"><span>50 000 — 100 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="100 - 200 000"><span>100 000 — 200 000 ₽</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="более 200 000"><span>более 200 000 ₽</span></label>
					</div>
				</fieldset>

				<!-- ============= ИНТЕРНЕТ-МАГАЗИН ============= -->
				<fieldset class="quiz-page" data-flow="Интернет-магазин" data-label="Контент">
					<legend class="quiz-legend">Контент и платформа</legend>
					<div class="quiz-fields-grid">
						<div class="quiz-field"><label class="quiz-label">Сколько страниц?</label><input type="text" name="pagesCount" placeholder="10-20"></div>
						<div class="quiz-field"><label class="quiz-label">Сколько товаров?</label><input type="text" name="productsCount" placeholder="500"></div>
					</div>
					<label class="quiz-label">Выберите CMS</label>
					<div class="quiz-options cms-options icon-options">
						<label class="quiz-option"><input type="radio" name="cms" value="WordPress"><img src="/img/vector/wordpress.svg" alt="CMS WordPress"><span>WordPress</span></label>
						<label class="quiz-option"><input type="radio" name="cms" value="OpenCart"><img src="/img/vector/opencart.svg" alt="CMS OpenCart"><span>OpenCart</span></label>
						<label class="quiz-option"><input type="radio" name="cms" value="1С-Битрикс"><img src="/img/vector/bitrix.svg" alt="CMS 1С-Битрикс"><span>1С-Битрикс</span></label>
						<label class="quiz-option"><input type="radio" name="cms" value="MODX"><img src="/img/vector/modx.svg" alt="CMS MODX"><span>MODX</span></label>
						<label class="quiz-option"><input type="radio" name="cms" value="Не знаю"><img src="/img/icons/question.png" alt=""><span>Затрудняюсь</span></label>
					</div>
				</fieldset>
				<fieldset class="quiz-page" data-flow="Интернет-магазин" data-label="Функционал">
					<legend class="quiz-legend">Функционал магазина</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="func" value="Сравнение"><img src="/img/icons/compare.png" alt=""><span>Сравнение товаров</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Избранное"><img src="/img/icons/wishlist.png" alt=""><span>Избранное</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Калькулятор"><img src="/img/icons/calculator.png" alt=""><span>Калькулятор</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Фильтры"><img src="/img/icons/filter.png" alt=""><span>Фильтры</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Поиск"><img src="/img/icons/search.png" alt=""><span>Поиск</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Кабинет"><img src="/img/icons/personal.png" alt=""><span>Личный кабинет</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Мегаменю"><img src="/img/icons/menu.png" alt=""><span>Мегаменю</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Конфигуратор"><img src="/img/icons/complex.png" alt=""><span>Конфигуратор</span></label>
					</div>
				</fieldset>
				<fieldset class="quiz-page" data-flow="Интернет-магазин" data-label="Дизайн">
					<legend class="quiz-legend">Дизайн</legend>
					<div class="quiz-options icon-options">
						<label class="quiz-option"><input type="radio" name="shopDesign" value="Индивидуальный"><img src="/img/icons/disign.png" alt=""><span>Индивидуальный</span></label>
						<label class="quiz-option"><input type="radio" name="shopDesign" value="Шаблон"><img src="/img/icons/theme.png" alt=""><span>Готовый шаблон</span></label>
						<label class="quiz-option"><input type="radio" name="shopDesign" value="Редизайн"><img src="/img/icons/sites.png" alt=""><span>Редизайн</span></label>
					</div>
				</fieldset>
				<fieldset class="quiz-page" data-flow="Интернет-магазин" data-label="Интеграции">
					<legend class="quiz-legend">Интеграции</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Оплата"><img src="/img/icons/payments.png" alt=""><span>Онлайн оплата</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Доставка"><img src="/img/icons/delivery.png" alt=""><span>Службы доставки</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="CRM"><img src="/img/icons/crm.png" alt=""><span>CRM системы</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="1С"><img src="/img/icons/functions.png" alt=""><span>1С</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Мессенджеры"><img src="/img/icons/whatsapp.png" alt=""><span>Мессенджеры</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Рассылки"><img src="/img/icons/subscribe.png" alt=""><span>Рассылки</span></label>
					</div>
				</fieldset>

				<!-- ============= КАТАЛОГ ============= -->
				<fieldset class="quiz-page" data-flow="Каталог" data-label="Дизайн">
					<legend class="quiz-legend">Дизайн каталога</legend>
					<div class="quiz-options icon-options">
						<label class="quiz-option"><input type="radio" name="catDesign" value="Индивидуальный"><img src="/img/icons/disign.png" alt=""><span>Индивидуальный дизайн</span></label>
						<label class="quiz-option"><input type="radio" name="catDesign" value="Шаблон"><img src="/img/icons/theme.png" alt=""><span>Готовый шаблон</span></label>
						<label class="quiz-option"><input type="radio" name="catDesign" value="Редизайн"><img src="/img/icons/sites.png" alt=""><span>Редизайн</span></label>
					</div>
					<div class="quiz-field"><textarea name="references" rows="2" placeholder="Ссылки на каталоги, которые нравятся"></textarea></div>
				</fieldset>
				<fieldset class="quiz-page" data-flow="Каталог" data-label="Функционал">
					<legend class="quiz-legend">Функционал каталога</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="func" value="Категории"><img src="/img/icons/menu.png" alt=""><span>Категории</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Карточки"><img src="/img/icons/product.png" alt=""><span>Карточки товаров</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Фильтры"><img src="/img/icons/filter.png" alt=""><span>Фильтры</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Поиск"><img src="/img/icons/search.png" alt=""><span>Поиск</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Сравнение"><img src="/img/icons/compare.png" alt=""><span>Сравнение</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Заявки"><img src="/img/icons/form.png" alt=""><span>Формы заявок</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Прайс"><img src="/img/icons/text.png" alt=""><span>Прайс-лист</span></label>
					</div>
				</fieldset>
				<fieldset class="quiz-page" data-flow="Каталог" data-label="Платформа">
					<legend class="quiz-legend">Платформа</legend>
					<div class="quiz-options cms-options icon-options">
						<label class="quiz-option"><input type="radio" name="cms" value="WordPress"><img src="/img/vector/wordpress.svg" alt="CMS WordPress"><span>WordPress</span></label>
						<label class="quiz-option"><input type="radio" name="cms" value="1С-Битрикс"><img src="/img/vector/bitrix.svg" alt="CMS 1С-Битрикс"><span>1С-Битрикс</span></label>
						<label class="quiz-option"><input type="radio" name="cms" value="OpenCart"><img src="/img/vector/opencart.svg" alt="CMS OpenCart"><span>OpenCart</span></label>
						<label class="quiz-option"><input type="radio" name="cms" value="MODX"><img src="/img/vector/modx.svg" alt="CMS MODX"><span>MODX</span></label>
						<label class="quiz-option"><input type="radio" name="cms" value="Не знаю"><img src="/img/icons/question.png" alt=""><span>Затрудняюсь</span></label>
					</div>
				</fieldset>

				<!-- ============= МАРКЕТПЛЕЙС ============= -->
				<fieldset class="quiz-page" data-flow="Маркетплейс" data-label="Модель">
					<legend class="quiz-legend">Модель работы площадки</legend>
					<div class="quiz-options icon-options" style="grid-template-columns:repeat(4,1fr)">
						<label class="quiz-option"><input type="radio" name="mpModel" value="B2C"><img src="/img/icons/company.png" alt=""><span>B2C</span></label>
						<label class="quiz-option"><input type="radio" name="mpModel" value="C2C"><img src="/img/icons/personal.png" alt=""><span>C2C</span></label>
						<label class="quiz-option"><input type="radio" name="mpModel" value="B2B"><img src="/img/icons/functions.png" alt=""><span>B2B</span></label>
						<label class="quiz-option"><input type="radio" name="mpModel" value="Смешанная"><img src="/img/icons/complex.png" alt=""><span>Смешанная</span></label>
					</div>
				</fieldset>
				<fieldset class="quiz-page" data-flow="Маркетплейс" data-label="Функционал">
					<legend class="quiz-legend">Функционал площадки</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="func" value="Кабинеты"><img src="/img/icons/personal.png" alt=""><span>Кабинеты продавцов</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Каталог"><img src="/img/icons/product.png" alt=""><span>Каталог</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Корзина"><img src="/img/icons/payments.png" alt=""><span>Корзина и оплата</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Комиссии"><img src="/img/icons/money.png" alt=""><span>Комиссии и выплаты</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Отзывы"><img src="/img/icons/chat.png" alt=""><span>Рейтинги и отзывы</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Поиск"><img src="/img/icons/filter.png" alt=""><span>Поиск и фильтры</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Модерация"><img src="/img/icons/functions.png" alt=""><span>Модерация</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Доставка"><img src="/img/icons/delivery.png" alt=""><span>Доставка</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Языки"><img src="/img/icons/languege.png" alt=""><span>Мультиязычность</span></label>
					</div>
				</fieldset>
				<fieldset class="quiz-page" data-flow="Маркетплейс" data-label="Интеграции">
					<legend class="quiz-legend">Интеграции</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="integrations" value="CRM"><img src="/img/icons/crm.png" alt=""><span>CRM системы</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Оплата"><img src="/img/icons/payments.png" alt=""><span>Эквайринг</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Доставка"><img src="/img/icons/delivery.png" alt=""><span>Службы доставки</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="1С"><img src="/img/icons/functions.png" alt=""><span>1С</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Мессенджеры"><img src="/img/icons/whatsapp.png" alt=""><span>Мессенджеры</span></label>
					</div>
				</fieldset>

				<!-- ============= ДРУГОЕ ============= -->
				<fieldset class="quiz-page" data-flow="Другое" data-label="Задача">
					<legend class="quiz-legend">Опишите ваш проект</legend>
					<textarea name="otherDesc" rows="5" placeholder="Расскажите подробнее о сайте, который хотите"></textarea>
				</fieldset>

				<!-- ============= КОНТАКТЫ ============= -->
				<fieldset class="quiz-page" data-page="contacts" data-label="Контакты">
					<legend class="quiz-legend">Контактные данные</legend>
					<div class="quiz-fields-grid">
						<div class="quiz-field"><label class="quiz-label">Ваше имя</label><input type="text" name="name" required placeholder="Как к вам обращаться"></div>
						<div class="quiz-field"><label class="quiz-label">Удобный способ связи</label><div class="quiz-methods">
							<label class="quiz-method"><input type="radio" name="method" value="Телефон" checked><img src="/img/vector/phone.svg" alt=""><span>Телефон</span></label>
							<label class="quiz-method"><input type="radio" name="method" value="Telegram"><img src="/img/vector/telegram.svg" alt=""><span>Telegram</span></label>
							<label class="quiz-method"><input type="radio" name="method" value="WhatsApp"><img src="/img/vector/whatsapp.svg" alt=""><span>WhatsApp</span></label>
							<label class="quiz-method"><input type="radio" name="method" value="MAX"><img src="/img/vector/max.svg" alt=""><span>MAX</span></label>
						</div></div>
						<div class="quiz-field"><label class="quiz-label" id="qContactLabel">Номер телефона</label><input type="text" name="phone" id="qContact" required placeholder="+7 (___) ___-__-__"></div>
					</div>
					<p class="quiz-consent">Нажимая «Отправить», вы соглашаетесь с <a href="/privacy">политикой конфиденциальности</a>.</p>
				</fieldset>

				<div class="quiz-nav">
					<button type="button" class="btn btn-outline" id="devPrev" disabled>Назад</button>
					<button type="button" class="btn btn-main" id="devNext">Далее</button>
					<button type="submit" class="btn btn-main hidden" id="devSubmit">Отправить заявку</button>
				</div>
				<div class="quiz-success hidden" id="devSuccess"><img src="/img/svg/like.svg" alt="Заявка отправлена"><h3>Спасибо!</h3><p>Мы свяжемся и подберём решение.</p></div>
			</form>
		</div>
		<div class="wave-divider <?= $briefWave ?? 'wave-light' ?>" aria-hidden="true"><svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg></div>
	</section>
	<style>
	.type-card{display:flex;flex-direction:column;align-items:center;gap:4px;padding:12px 4px;background:rgba(255,255,255,0.06);border:2px solid rgba(255,255,255,0.15);border-radius:var(--radius-sm);cursor:pointer;text-align:center;transition:var(--transition);color:rgba(255,255,255,0.7)}
	.type-card img{width:32px;height:32px}
	.type-card input{position:absolute;opacity:0;pointer-events:none}
	.type-card:hover{border-color:var(--accent);background:rgba(143,79,35,0.1)}
	.type-card:has(input:checked){border-color:var(--accent);background:var(--accent);color:var(--white)}
	.type-card:has(input:checked) img{filter:brightness(0)invert(1)}
	.type-label{font-size:13px;font-weight:600}
	.type-desc{font-size:10px;line-height:1.2;opacity:0.7}
	@media(max-width:900px){.type-selector{grid-template-columns:repeat(3,1fr)}}
	@media(max-width:480px){.type-selector{grid-template-columns:repeat(2,1fr)}}
	</style>
	<script>
	(function(){var f=document.getElementById('devBriefForm');if(!f)return;var steps=document.getElementById('devSteps');var fill=document.getElementById('devProgressFill');var prev=document.getElementById('devPrev');var next=document.getElementById('devNext');var submit=document.getElementById('devSubmit');var success=document.getElementById('devSuccess');var all=Array.from(f.querySelectorAll('.quiz-page'));var servicePage=f.querySelector('.quiz-page[data-page="service"]');var contactsPage=f.querySelector('.quiz-page[data-page="contacts"]');var seq=[];var idx=0;
	function getService(){var r=f.querySelector('input[name="service"]:checked');return r?r.value:'';}
	function build(){seq=[servicePage];var s=getService();if(s){all.forEach(function(p){if(p.getAttribute('data-flow')===s)seq.push(p)});seq.push(contactsPage)}if(idx>seq.length-1)idx=seq.length-1;}
	function refresh(push){steps.innerHTML='';seq.forEach(function(p,i){var li=document.createElement('li');li.innerHTML='<span class="step-num">'+(i+1)+'</span><span class="step-label">'+(p.dataset.label||'')+'</span>';if(i===idx)li.classList.add('active');steps.appendChild(li)});fill.style.width=(idx/(seq.length-1)*100)+'%';prev.disabled=idx===0;if(idx===seq.length-1){next.classList.add('hidden');submit.classList.remove('hidden')}else{next.classList.remove('hidden');submit.classList.add('hidden')}}
	function show(i){if(typeof i!=='number')return;if(i<0||i>=seq.length)return;all.forEach(function(p){p.classList.remove('active')});seq[i].classList.add('active');idx=i;refresh()}
	f.addEventListener('change',function(e){if(e.target.name==='service'){build();show(1)}});
	prev.addEventListener('click',function(){show(idx-1)});next.addEventListener('click',function(){show(idx+1)});
	f.addEventListener('submit',function(e){e.preventDefault();var d=new FormData(f);var xhr=new XMLHttpRequest();xhr.open('POST','/submit_brief.php',true);xhr.onload=function(){if(xhr.status>=200&&xhr.status<300){f.style.display='none';success.classList.remove('hidden')}else{alert('Ошибка')}};xhr.onerror=function(){alert('Ошибка сети')};xhr.send(d)});
	build();show(0);
	})();
	</script>

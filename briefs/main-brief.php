<!-- Бриф -->
<section class="brief section-dark" id="mainBrief">
  <div class="container">
    <div class="section-title-wrap">
      <h2 class="section-title"><?= $briefTitle ?? 'Подберите решение под вашу задачу' ?></h2>
      <p class="section-subtitle"><?= $briefSubtitle ?? 'Выберите направление — и мы зададим уточняющие вопросы под вашу услугу' ?></p>
    </div>

    <form class="quiz-form" id="mainBriefForm" novalidate>
      <div class="quiz-progress" id="mainQuizProgress">
        <div class="quiz-progress-line"><div class="quiz-progress-fill" id="mainQuizProgressFill"></div></div>
        <ul class="quiz-steps" id="mainQuizSteps"></ul>
      </div>

      <!-- Услуга -->
      <fieldset class="quiz-page active" data-page="service" data-label="Услуга">
        <legend class="quiz-legend">Выберите услугу</legend>
        <div class="quiz-options icon-options" style="grid-template-columns:repeat(6,1fr);margin-bottom:30px">
          <label class="quiz-option"><input type="radio" name="service" value="Сайт"><img src="/img/icons/siteweb.png" alt="Сайт"><span>Сайт</span></label>
          <label class="quiz-option"><input type="radio" name="service" value="Приложение"><img src="/img/icons/mobile.png" alt="Приложение"><span>Приложение</span></label>
          <label class="quiz-option"><input type="radio" name="service" value="Бот"><img src="/img/icons/telegram.png" alt="Бот"><span>Бот</span></label>
          <label class="quiz-option"><input type="radio" name="service" value="CRM"><img src="/img/icons/crm.png" alt="CRM"><span>CRM</span></label>
          <label class="quiz-option"><input type="radio" name="service" value="Продвижение"><img src="/img/icons/seo.png" alt="Продвижение"><span>Продвижение</span></label>
          <label class="quiz-option"><input type="radio" name="service" value="Другое"><img src="/img/icons/other.png" alt="Другое"><span>Другое</span></label>
        </div>
      </fieldset>

      <!-- Тип сайта -->
      <fieldset class="quiz-page" data-page="site_type" data-label="Тип сайта">
        <legend class="quiz-legend">Какой сайт вам нужен?</legend>
        <div class="quiz-options icon-options" style="grid-template-columns:repeat(5,1fr)">
          <label class="quiz-option"><input type="radio" name="site_type" value="Интернет-магазин"><img src="/img/icons/shop.png" alt="Интернет-магазин"><span>Интернет-магазин</span></label>
          <label class="quiz-option"><input type="radio" name="site_type" value="Лендинг"><img src="/img/icons/landing.png" alt="Лендинг"><span>Лендинг</span></label>
          <label class="quiz-option"><input type="radio" name="site_type" value="Маркетплейс"><img src="/img/icons/place.png" alt="Маркетплейс"><span>Маркетплейс</span></label>
          <label class="quiz-option"><input type="radio" name="site_type" value="Каталог"><img src="/img/icons/market.png" alt="Каталог"><span>Каталог</span></label>
          <label class="quiz-option"><input type="radio" name="site_type" value="Корпоративный"><img src="/img/icons/theme.png" alt="Корпоративный"><span>Корпоративный</span></label>
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

      <!-- ============= ДРУГОЕ (сайт) ============= -->
      <fieldset class="quiz-page" data-flow="Другое" data-label="Задача">
        <legend class="quiz-legend">Опишите ваш проект</legend>
        <textarea name="otherDesc" rows="5" placeholder="Расскажите подробнее о сайте, который хотите"></textarea>
      </fieldset>


      <!-- ==================== НЕ-САЙТ: ПРИЛОЖЕНИЕ ==================== -->
      <fieldset class="quiz-page" data-flow="Приложение" data-label="Тип">
        <legend class="quiz-legend">Какое приложение?</legend>
        <div class="quiz-options theme-options" style="grid-template-columns:repeat(3,1fr)">
          <label class="quiz-option"><input type="radio" name="theme" value="Интернет-магазин"><img src="/img/icons/shop.png" alt="Магазин"><span>Магазин</span></label>
          <label class="quiz-option"><input type="radio" name="theme" value="Сервис услуг"><img src="/img/icons/process.png" alt="Сервис услуг"><span>Сервис услуг</span></label>
          <label class="quiz-option"><input type="radio" name="theme" value="Доставка"><img src="/img/icons/delivery.png" alt="Доставка"><span>Доставка</span></label>
          <label class="quiz-option"><input type="radio" name="theme" value="Соцсеть"><img src="/img/icons/chat.png" alt="Соцсеть"><span>Соцсеть</span></label>
          <label class="quiz-option"><input type="radio" name="theme" value="Обучение"><img src="/img/icons/book.png" alt="Обучение"><span>Обучение</span></label>
          <label class="quiz-option"><input type="radio" name="theme" value="Другая"><img src="/img/icons/other.png" alt="Другое"><span>Другое</span></label>
        </div>
        <div class="quiz-field theme-other-field"><label class="quiz-label">Опишите приложение</label><input type="text" name="themeOther" placeholder="Например: приложение для бронирования спортзалов"></div>
      </fieldset>
      <fieldset class="quiz-page" data-flow="Приложение" data-label="Платформа">
        <legend class="quiz-legend">Платформа</legend>
        <div class="quiz-options icon-options" style="grid-template-columns:repeat(4,1fr)">
          <label class="quiz-option"><input type="radio" name="design" value="iOS"><img src="/img/icons/ios.png" alt="iOS"><span>iOS</span></label>
          <label class="quiz-option"><input type="radio" name="design" value="Android"><img src="/img/icons/android.png" alt="Android"><span>Android</span></label>
          <label class="quiz-option"><input type="radio" name="design" value="iOS + Android"><img src="/img/icons/mobile.png" alt="Обе"><span>iOS + Android</span></label>
          <label class="quiz-option"><input type="radio" name="design" value="Кроссплатформенное"><img src="/img/icons/react.png" alt="Кроссплатформа"><span>Кроссплатформа</span></label>
        </div>
      </fieldset>
      <fieldset class="quiz-page" data-flow="Приложение" data-label="Функционал">
        <legend class="quiz-legend">Функционал</legend>
        <div class="quiz-options icon-options check-options">
          <label class="quiz-option"><input type="checkbox" name="func" value="Авторизация"><img src="/img/icons/key.png" alt="Авторизация"><span>Авторизация</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Push-уведомления"><img src="/img/icons/chat.png" alt="Push"><span>Push-уведомления</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Онлайн оплата"><img src="/img/icons/payments.png" alt="Оплата"><span>Онлайн оплата</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Каталог и лента"><img src="/img/icons/product.png" alt="Каталог"><span>Каталог и лента</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Личный кабинет"><img src="/img/icons/personal.png" alt="ЛК"><span>Личный кабинет</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Геолокация"><img src="/img/icons/map.png" alt="Геолокация"><span>Геолокация</span></label>
        </div>
      </fieldset>
      <fieldset class="quiz-page" data-flow="Приложение" data-label="Интеграции">
        <legend class="quiz-legend">Интеграции</legend>
        <div class="quiz-options icon-options check-options">
          <label class="quiz-option"><input type="checkbox" name="integrations" value="CRM системы"><img src="/img/icons/crm.png" alt="CRM"><span>CRM системы</span></label>
          <label class="quiz-option"><input type="checkbox" name="integrations" value="Платёжные системы"><img src="/img/icons/payments.png" alt="Платежи"><span>Платёжные системы</span></label>
          <label class="quiz-option"><input type="checkbox" name="integrations" value="1С"><img src="/img/icons/functions.png" alt="1С"><span>1С</span></label>
          <label class="quiz-option"><input type="checkbox" name="integrations" value="Соцсети"><img src="/img/icons/facebook.png" alt="Соцсети"><span>Соцсети</span></label>
        </div>
      </fieldset>
      <fieldset class="quiz-page" data-flow="Приложение" data-label="Бюджет">
        <legend class="quiz-legend">Бюджет и сроки</legend>
        <div class="quiz-options text-options">
          <label class="quiz-option text-opt"><input type="radio" name="budget" value="до 300 000 ₽"><span>до 300 000 ₽</span></label>
          <label class="quiz-option text-opt"><input type="radio" name="budget" value="300 000 — 700 000 ₽"><span>300 000 — 700 000 ₽</span></label>
          <label class="quiz-option text-opt"><input type="radio" name="budget" value="700 000 — 1 500 000 ₽"><span>700 000 — 1 500 000 ₽</span></label>
          <label class="quiz-option text-opt"><input type="radio" name="budget" value="более 1 500 000 ₽"><span>более 1 500 000 ₽</span></label>
        </div>
        <div class="quiz-field"><label class="quiz-label">Сроки запуска</label><input type="text" name="deadline" placeholder="Например: 3-4 месяца"></div>
      </fieldset>

      <!-- ==================== НЕ-САЙТ: БОТ ==================== -->
      <fieldset class="quiz-page" data-flow="Бот" data-label="Тип бота">
        <legend class="quiz-legend">Какой бот нужен?</legend>
        <div class="quiz-options theme-options" style="grid-template-columns:repeat(3,1fr)">
          <label class="quiz-option"><input type="radio" name="theme" value="Бот-магазин"><img src="/img/icons/shop.png" alt="Магазин"><span>Бот-магазин</span></label>
          <label class="quiz-option"><input type="radio" name="theme" value="Запись и бронирование"><img src="/img/icons/bron.png" alt="Запись"><span>Запись</span></label>
          <label class="quiz-option"><input type="radio" name="theme" value="Опросы и квизы"><img src="/img/icons/question.png" alt="Опросы"><span>Опросы / Квизы</span></label>
          <label class="quiz-option"><input type="radio" name="theme" value="Техподдержка"><img src="/img/icons/support.png" alt="Техподдержка"><span>Техподдержка</span></label>
          <label class="quiz-option"><input type="radio" name="theme" value="Рассылки"><img src="/img/icons/subscribe.png" alt="Рассылки"><span>Рассылки</span></label>
          <label class="quiz-option"><input type="radio" name="theme" value="Другая"><img src="/img/icons/other.png" alt="Другое"><span>Другое</span></label>
        </div>
        <div class="quiz-field theme-other-field"><label class="quiz-label">Опишите бота</label><input type="text" name="themeOther" placeholder="Например: бот для доставки"></div>
      </fieldset>
      <fieldset class="quiz-page" data-flow="Бот" data-label="Функционал">
        <legend class="quiz-legend">Функционал бота</legend>
        <div class="quiz-options icon-options check-options">
          <label class="quiz-option"><input type="checkbox" name="func" value="Каталог"><img src="/img/icons/product.png" alt="Каталог"><span>Каталог</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Корзина и оплата"><img src="/img/icons/payments.png" alt="Оплата"><span>Корзина и оплата</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Личный кабинет"><img src="/img/icons/personal.png" alt="ЛК"><span>Личный кабинет</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Уведомления"><img src="/img/icons/chat.png" alt="Уведомления"><span>Уведомления</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Меню и кнопки"><img src="/img/icons/menu.png" alt="Меню"><span>Меню и кнопки</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Админ-панель"><img src="/img/icons/functions.png" alt="Админ"><span>Админ-панель</span></label>
        </div>
      </fieldset>
      <fieldset class="quiz-page" data-flow="Бот" data-label="Интеграции">
        <legend class="quiz-legend">Интеграции</legend>
        <div class="quiz-options icon-options check-options">
          <label class="quiz-option"><input type="checkbox" name="integrations" value="CRM системы"><img src="/img/icons/crm.png" alt="CRM"><span>CRM системы</span></label>
          <label class="quiz-option"><input type="checkbox" name="integrations" value="Онлайн оплата"><img src="/img/icons/payments.png" alt="Оплата"><span>Онлайн оплата</span></label>
          <label class="quiz-option"><input type="checkbox" name="integrations" value="Google Таблицы"><img src="/img/icons/plan.png" alt="Google Таблицы"><span>Google Таблицы</span></label>
          <label class="quiz-option"><input type="checkbox" name="integrations" value="ИИ агенты"><img src="/img/icons/expirience.png" alt="ИИ агенты"><span>ИИ агенты</span></label>
        </div>
      </fieldset>
      <fieldset class="quiz-page" data-flow="Бот" data-label="Бюджет">
        <legend class="quiz-legend">Бюджет и сроки</legend>
        <div class="quiz-options text-options">
          <label class="quiz-option text-opt"><input type="radio" name="budget" value="до 30 000 ₽"><span>до 30 000 ₽</span></label>
          <label class="quiz-option text-opt"><input type="radio" name="budget" value="30 000 — 70 000 ₽"><span>30 000 — 70 000 ₽</span></label>
          <label class="quiz-option text-opt"><input type="radio" name="budget" value="70 000 — 150 000 ₽"><span>70 000 — 150 000 ₽</span></label>
          <label class="quiz-option text-opt"><input type="radio" name="budget" value="более 150 000 ₽"><span>более 150 000 ₽</span></label>
        </div>
        <div class="quiz-field"><label class="quiz-label">Сроки запуска</label><input type="text" name="deadline" placeholder="Например: 2-3 недели"></div>
      </fieldset>

      <!-- ==================== НЕ-САЙТ: CRM ==================== -->
      <!-- ==================== НЕ-САЙТ: CRM ==================== -->
      <fieldset class="quiz-page" data-flow="CRM" data-label="Задачи">
        <legend class="quiz-legend">Какие задачи должна решать CRM?</legend>
        <div class="quiz-options icon-options check-options">
          <label class="quiz-option"><input type="checkbox" name="func" value="Управление клиентами"><img loading="lazy" src="/img/icons/personal.png" alt=""><span>Управление клиентами</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Сделки и воронка"><img loading="lazy" src="/img/icons/money.png" alt=""><span>Сделки и воронка</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Задачи и напоминания"><img loading="lazy" src="/img/icons/time.png" alt=""><span>Задачи и напоминания</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Финансы и счета"><img loading="lazy" src="/img/icons/calculator.png" alt=""><span>Финансы и счета</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Склад и остатки"><img loading="lazy" src="/img/icons/service.png" alt=""><span>Склад и остатки</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Отчёты и аналитика"><img loading="lazy" src="/img/icons/analise.png" alt=""><span>Отчёты и аналитика</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Своё"><img loading="lazy" src="/img/icons/other.png" alt=""><span>Свой вариант</span></label>
        </div>
        <div class="quiz-field"><textarea name="references" rows="2" placeholder="Опишите подробнее"></textarea></div>
      </fieldset>
      <fieldset class="quiz-page" data-flow="CRM" data-label="Функционал">
        <legend class="quiz-legend">Функционал</legend>
        <div class="quiz-fields-grid">
          <div class="quiz-field"><label class="quiz-label">Сколько пользователей?</label><input type="text" name="usersCount" placeholder="Например: 10"></div>
          <div class="quiz-field"><label class="quiz-label">Сколько клиентов в базе?</label><input type="text" name="clientsCount" placeholder="Например: 500"></div>
        </div>
        <label class="quiz-label">Нужна ли мобильная версия?</label>
        <div class="quiz-options icon-options">
          <label class="quiz-option"><input type="radio" name="design" value="Да, приложение"><img loading="lazy" src="/img/icons/mobile.png" alt=""><span>Да, отдельное приложение</span></label>
          <label class="quiz-option"><input type="radio" name="design" value="Да, адаптивный сайт"><img loading="lazy" src="/img/icons/adaptive.png" alt=""><span>Да, адаптивная web-версия</span></label>
          <label class="quiz-option"><input type="radio" name="design" value="Только десктоп"><img loading="lazy" src="/img/icons/desctop.png" alt=""><span>Только десктоп</span></label>
        </div>
      </fieldset>
      <fieldset class="quiz-page" data-flow="CRM" data-label="Интеграции">
        <legend class="quiz-legend">Необходимые интеграции</legend>
        <div class="quiz-options icon-options check-options">
          <label class="quiz-option"><input type="checkbox" name="integrations" value="1С"><img loading="lazy" src="/img/icons/crm.png" alt=""><span>1С</span></label>
          <label class="quiz-option"><input type="checkbox" name="integrations" value="Телефония"><img loading="lazy" src="/img/icons/phone.png" alt=""><span>Телефония</span></label>
          <label class="quiz-option"><input type="checkbox" name="integrations" value="Telegram"><img loading="lazy" src="/img/icons/telegram.png" alt=""><span>Telegram</span></label>
          <label class="quiz-option"><input type="checkbox" name="integrations" value="WhatsApp"><img loading="lazy" src="/img/icons/whatsapp.png" alt=""><span>WhatsApp</span></label>
          <label class="quiz-option"><input type="checkbox" name="integrations" value="Почта"><img loading="lazy" src="/img/icons/mail.png" alt=""><span>Email-рассылки</span></label>
          <label class="quiz-option"><input type="checkbox" name="integrations" value="Платежные системы"><img loading="lazy" src="/img/icons/payments.png" alt=""><span>Платёжные системы</span></label>
          <label class="quiz-option"><input type="checkbox" name="integrations" value="Сайт"><img loading="lazy" src="/img/icons/sites.png" alt=""><span>Сайт / API</span></label>
        </div>
      </fieldset>

      <!-- ==================== НЕ-САЙТ: ПРОДВИЖЕНИЕ ==================== -->
      <fieldset class="quiz-page" data-flow="Продвижение" data-label="Цель и сайт">
        <legend class="quiz-legend">Какая у вас цель продвижения?</legend>
        <div class="quiz-options theme-options" style="grid-template-columns:repeat(3,1fr)">
          <label class="quiz-option"><input type="radio" name="theme" value="Рост продаж"><img loading="lazy" src="/img/icons/money.png" alt=""><span>Рост продаж</span></label>
          <label class="quiz-option"><input type="radio" name="theme" value="Рост трафика"><img loading="lazy" src="/img/icons/seo.png" alt=""><span>Рост трафика</span></label>
          <label class="quiz-option"><input type="radio" name="theme" value="Узнаваемость"><img loading="lazy" src="/img/icons/start.png" alt=""><span>Узнаваемость бренда</span></label>
          <label class="quiz-option"><input type="radio" name="theme" value="Больше заявок"><img loading="lazy" src="/img/icons/form.png" alt=""><span>Лиды и заявки</span></label>
          <label class="quiz-option"><input type="radio" name="theme" value="Вывод в ТОП"><img loading="lazy" src="/img/icons/search.png" alt=""><span>Вывод в ТОП</span></label>
          <label class="quiz-option"><input type="radio" name="theme" value="Комплекс"><img loading="lazy" src="/img/icons/complex.png" alt=""><span>Комплексный подход</span></label>
        </div>
        <legend class="quiz-legend" style="margin-top:20px">Какой у вас сайт или проект?</legend>
        <div class="quiz-options icon-options" style="grid-template-columns:repeat(6,1fr)">
          <label class="quiz-option"><input type="radio" name="design" value="Интернет-магазин"><img loading="lazy" src="/img/icons/shop.png" alt=""><span>Магазин</span></label>
          <label class="quiz-option"><input type="radio" name="design" value="Корпоративный сайт"><img loading="lazy" src="/img/icons/company.png" alt=""><span>Корпоративный</span></label>
          <label class="quiz-option"><input type="radio" name="design" value="Лендинг"><img loading="lazy" src="/img/icons/landing.png" alt=""><span>Лендинг</span></label>
          <label class="quiz-option"><input type="radio" name="design" value="Услуги"><img loading="lazy" src="/img/icons/service.png" alt=""><span>Услуги</span></label>
          <label class="quiz-option"><input type="radio" name="design" value="Каталог"><img loading="lazy" src="/img/icons/product.png" alt=""><span>Каталог</span></label>
          <label class="quiz-option"><input type="radio" name="design" value="Другое"><img loading="lazy" src="/img/icons/other.png" alt=""><span>Другое</span></label>
        </div>
      </fieldset>
      <fieldset class="quiz-page" data-flow="Продвижение" data-label="Каналы">
        <legend class="quiz-legend">Какие каналы продвижения вам нужны?</legend>
        <div class="quiz-options icon-options check-options">
          <label class="quiz-option"><input type="checkbox" name="func" value="SEO-продвижение"><img loading="lazy" src="/img/icons/search.png" alt=""><span>SEO-продвижение</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Контекстная реклама"><img loading="lazy" src="/img/icons/start.png" alt=""><span>Контекстная реклама</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="SMM продвижение"><img loading="lazy" src="/img/icons/chat.png" alt=""><span>SMM продвижение</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Email-маркетинг"><img loading="lazy" src="/img/icons/mail.png" alt=""><span>Email-маркетинг</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Сквозная аналитика"><img loading="lazy" src="/img/icons/analise.png" alt=""><span>Сквозная аналитика</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Таргетированная реклама"><img loading="lazy" src="/img/icons/money.png" alt=""><span>Таргет</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="Медийная реклама"><img loading="lazy" src="/img/icons/desctop.png" alt=""><span>Медийная реклама</span></label>
          <label class="quiz-option"><input type="checkbox" name="func" value="YouTube и видео"><img loading="lazy" src="/img/icons/video.png" alt=""><span>YouTube и видео</span></label>
        </div>
        <label class="quiz-label" style="margin-top:14px">На каких площадках?</label>
        <div class="quiz-options icon-options check-options">
          <label class="quiz-option"><input type="checkbox" name="integrations" value="Яндекс"><img loading="lazy" src="/img/icons/poisk.png" alt=""><span>Яндекс</span></label>
          <label class="quiz-option"><input type="checkbox" name="integrations" value="Google"><img loading="lazy" src="/img/icons/google.png" alt=""><span>Google</span></label>
          <label class="quiz-option"><input type="checkbox" name="integrations" value="VK"><img loading="lazy" src="/img/icons/vk.png" alt=""><span>VK</span></label>
          <label class="quiz-option"><input type="checkbox" name="integrations" value="Instagram"><img loading="lazy" src="/img/icons/image.png" alt=""><span>Instagram</span></label>
          <label class="quiz-option"><input type="checkbox" name="integrations" value="Telegram"><img loading="lazy" src="/img/icons/telegram.png" alt=""><span>Telegram</span></label>
          <label class="quiz-option"><input type="checkbox" name="integrations" value="Другое"><img loading="lazy" src="/img/icons/other.png" alt=""><span>Другое</span></label>
        </div>
      </fieldset>
      <fieldset class="quiz-page" data-flow="Продвижение" data-label="Параметры">
        <legend class="quiz-legend">Параметры продвижения</legend>
        <label class="quiz-label">Что уже сделано?</label>
        <div class="quiz-options icon-options check-options">
          <label class="quiz-option"><input type="checkbox" name="status" value="Ничего"><img loading="lazy" src="/img/icons/start.png" alt=""><span>Ничего, с нуля</span></label>
          <label class="quiz-option"><input type="checkbox" name="status" value="Базовая SEO"><img loading="lazy" src="/img/icons/seo.png" alt=""><span>Есть базовая SEO</span></label>
          <label class="quiz-option"><input type="checkbox" name="status" value="Яндекс.Директ"><img loading="lazy" src="/img/icons/poisk.png" alt=""><span>Настроен Яндекс.Директ</span></label>
          <label class="quiz-option"><input type="checkbox" name="status" value="Соцсети"><img loading="lazy" src="/img/icons/chat.png" alt=""><span>Ведутся соцсети</span></label>
          <label class="quiz-option"><input type="checkbox" name="status" value="Аналитика"><img loading="lazy" src="/img/icons/analise.png" alt=""><span>Настроена аналитика</span></label>
        </div>
        <label class="quiz-label" style="margin-top:14px">Какие задачи по SEO?</label>
        <div class="quiz-options icon-options check-options">
          <label class="quiz-option"><input type="checkbox" name="seo" value="Аудит"><img loading="lazy" src="/img/icons/profi.png" alt=""><span>Технический аудит</span></label>
          <label class="quiz-option"><input type="checkbox" name="seo" value="Семантика"><img loading="lazy" src="/img/icons/complex.png" alt=""><span>Семантическое ядро</span></label>
          <label class="quiz-option"><input type="checkbox" name="seo" value="Оптимизация"><img loading="lazy" src="/img/icons/adaptive.png" alt=""><span>Внутренняя оптимизация</span></label>
          <label class="quiz-option"><input type="checkbox" name="seo" value="Контент"><img loading="lazy" src="/img/icons/text.png" alt=""><span>SEO-контент</span></label>
          <label class="quiz-option"><input type="checkbox" name="seo" value="Ссылочное"><img loading="lazy" src="/img/icons/links.png" alt=""><span>Ссылочное</span></label>
        </div>
      </fieldset>
      <fieldset class="quiz-page" data-flow="Продвижение" data-label="Бюджет">
        <legend class="quiz-legend">Бюджет и детали</legend>
        <div class="quiz-field"><label class="quiz-label">Ссылка на сайт</label><input type="text" name="references" placeholder="https://..."></div>
        <label class="quiz-label" style="margin-top:12px">Бюджет на продвижение в месяц</label>
        <div class="quiz-options text-options">
          <label class="quiz-option text-opt"><input type="radio" name="budget" value="до 30 000 ₽/мес"><span>до 30 000 ₽/мес</span></label>
          <label class="quiz-option text-opt"><input type="radio" name="budget" value="30 000 — 80 000 ₽/мес"><span>30 000 — 80 000 ₽/мес</span></label>
          <label class="quiz-option text-opt"><input type="radio" name="budget" value="80 000 — 150 000 ₽/мес"><span>80 000 — 150 000 ₽/мес</span></label>
          <label class="quiz-option text-opt"><input type="radio" name="budget" value="более 150 000 ₽/мес"><span>более 150 000 ₽/мес</span></label>
        </div>
        <div class="quiz-field" style="margin-top:12px"><label class="quiz-label">Срок первых результатов</label><input type="text" name="deadline" placeholder="Например: 2-3 месяца"></div>
      </fieldset>

      <!-- ==================== НЕ-САЙТ: ДРУГОЕ ==================== -->
      <fieldset class="quiz-page" data-flow="Другое" data-label="Задача">
        <legend class="quiz-legend">Опишите задачу</legend>
        <div class="quiz-field"><label class="quiz-label">Расскажите подробнее о проекте</label><textarea name="other_desc" rows="5" placeholder="Что нужно сделать?"></textarea></div>
      </fieldset>

      <!-- Контакты -->
      <fieldset class="quiz-page" data-page="contacts" data-label="Контакты">
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
        <p class="quiz-consent">Нажимая «Отправить», вы соглашаетесь с <a href="/privacy">политикой конфиденциальности</a>.</p>
      </fieldset>

      <div class="quiz-nav">
        <button type="button" class="btn btn-outline" id="mainQuizPrev" disabled>Назад</button>
        <button type="button" class="btn btn-main" id="mainQuizNext">Далее</button>
        <button type="submit" class="btn btn-main hidden" id="mainQuizSubmit">Отправить заявку</button>
      </div>

      <div class="quiz-success hidden" id="mainBriefSuccess">
        <img src="/img/svg/like.svg" alt="Заявка отправлена">
        <h3>Спасибо за заявку!</h3>
        <p>Мы свяжемся с вами в ближайшее время и предложим оптимальное решение.</p>
      </div>
    </form>
  </div>
  <div class="wave-divider <?= $briefWave ?? 'wave-light' ?>" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
  </div>
</section>
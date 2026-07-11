	<section class="brief section-dark" id="brief">
		<div class="container">
			<div class="section-title-wrap">
				<h2 class="section-title"><?= $briefTitle ?? 'Бриф на комплексное продвижение' ?></h2>
				<p class="section-subtitle"><?= $briefSubtitle ?? 'Расскажите о проекте — подберём каналы для роста вашего бизнеса' ?></p>
			</div>
			<form class="quiz-form" id="quizForm" novalidate>
				<div class="quiz-progress" id="quizProgress">
					<div class="quiz-progress-line"><div class="quiz-progress-fill" id="quizProgressFill"></div></div>
					<ul class="quiz-steps" id="quizSteps">
						<li class="active" data-step="1"><span class="step-num">1</span><span class="step-label">Цель и сайт</span></li>
						<li data-step="2"><span class="step-num">2</span><span class="step-label">Каналы</span></li>
						<li data-step="3"><span class="step-num">3</span><span class="step-label">Параметры</span></li>
						<li data-step="4"><span class="step-num">4</span><span class="step-label">Бюджет</span></li>
						<li data-step="5"><span class="step-num">5</span><span class="step-label">Контакты</span></li>
					</ul>
				</div>

				<!-- Step 1: Цель и тип сайта -->
				<fieldset class="quiz-page active" data-page="1">
					<legend class="quiz-legend">Какая у вас цель продвижения?</legend>
					<div class="quiz-options theme-options" style="grid-template-columns:repeat(3,1fr)">
						<label class="quiz-option"><input type="radio" name="theme" value="Рост продаж"><img loading="lazy" src="/img/icons/money.png" alt="Рост продаж"><span>Рост продаж</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Рост трафика"><img loading="lazy" src="/img/icons/seo.png" alt="Трафик"><span>Рост трафика</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Узнаваемость"><img loading="lazy" src="/img/icons/start.png" alt="Узнаваемость"><span>Узнаваемость бренда</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Больше заявок"><img loading="lazy" src="/img/icons/form.png" alt="Лиды"><span>Лиды и заявки</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Вывод в ТОП"><img loading="lazy" src="/img/icons/search.png" alt="ТОП"><span>Вывод в ТОП</span></label>
						<label class="quiz-option"><input type="radio" name="theme" value="Комплекс"><img loading="lazy" src="/img/icons/complex.png" alt="Комплекс"><span>Комплексный подход</span></label>
					</div>
					<legend class="quiz-legend" style="margin-top:20px">Какой у вас сайт или проект?</legend>
					<div class="quiz-options icon-options" style="grid-template-columns:repeat(6,1fr)">
						<label class="quiz-option"><input type="radio" name="design" value="Интернет-магазин"><img loading="lazy" src="/img/icons/shop.png" alt=""><span>Интернет-магазин</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="Корпоративный сайт"><img loading="lazy" src="/img/icons/company.png" alt=""><span>Корпоративный</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="Лендинг"><img loading="lazy" src="/img/icons/landing.png" alt=""><span>Лендинг</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="Услуги"><img loading="lazy" src="/img/icons/service.png" alt=""><span>Сайт услуг</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="Каталог"><img loading="lazy" src="/img/icons/product.png" alt=""><span>Каталог</span></label>
						<label class="quiz-option"><input type="radio" name="design" value="Другое"><img loading="lazy" src="/img/icons/other.png" alt=""><span>Другое</span></label>
					</div>
				</fieldset>

				<!-- Step 2: Каналы продвижения -->
				<fieldset class="quiz-page" data-page="2">
					<legend class="quiz-legend">Какие каналы продвижения вам нужны?</legend>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="func" value="SEO-продвижение"><img loading="lazy" src="/img/icons/search.png" alt="SEO"><span>SEO-продвижение</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Контекстная реклама"><img loading="lazy" src="/img/icons/start.png" alt="Контекст"><span>Контекстная реклама</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="SMM продвижение"><img loading="lazy" src="/img/icons/chat.png" alt="SMM"><span>SMM продвижение</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Email-маркетинг"><img loading="lazy" src="/img/icons/mail.png" alt="Email"><span>Email-маркетинг</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Сквозная аналитика"><img loading="lazy" src="/img/icons/analise.png" alt="Аналитика"><span>Сквозная аналитика</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Таргетированная реклама"><img loading="lazy" src="/img/icons/money.png" alt="Таргет"><span>Таргет</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="Медийная реклама"><img loading="lazy" src="/img/icons/desctop.png" alt="Медийная"><span>Медийная реклама</span></label>
						<label class="quiz-option"><input type="checkbox" name="func" value="YouTube и видео"><img loading="lazy" src="/img/icons/video.png" alt="Видео"><span>YouTube и видео</span></label>
					</div>
					<label class="quiz-label" style="margin-top:14px">На каких площадках?</label>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Яндекс"><img loading="lazy" src="/img/icons/poisk.png" alt="Яндекс"><span>Яндекс</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Google"><img loading="lazy" src="/img/icons/google.png" alt="Google"><span>Google</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="VK"><img loading="lazy" src="/img/icons/vk.png" alt="VK"><span>VK</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Instagram"><img loading="lazy" src="/img/icons/image.png" alt="Instagram"><span>Instagram</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Telegram"><img loading="lazy" src="/img/icons/telegram.png" alt="Telegram"><span>Telegram</span></label>
						<label class="quiz-option"><input type="checkbox" name="integrations" value="Другое"><img loading="lazy" src="/img/icons/other.png" alt="Другое"><span>Другое</span></label>
					</div>
				</fieldset>

				<!-- Step 3: Параметры продвижения -->
				<fieldset class="quiz-page" data-page="3">
					<legend class="quiz-legend">Параметры продвижения</legend>
					<label class="quiz-label">Что уже сделано?</label>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="status" value="Ничего, с нуля"><img loading="lazy" src="/img/icons/start.png" alt=""><span>Ничего, с нуля</span></label>
						<label class="quiz-option"><input type="checkbox" name="status" value="Есть базовая SEO"><img loading="lazy" src="/img/icons/seo.png" alt=""><span>Есть базовая SEO</span></label>
						<label class="quiz-option"><input type="checkbox" name="status" value="Настроен Яндекс.Директ"><img loading="lazy" src="/img/icons/poisk.png" alt=""><span>Настроен Яндекс.Директ</span></label>
						<label class="quiz-option"><input type="checkbox" name="status" value="Ведутся соцсети"><img loading="lazy" src="/img/icons/chat.png" alt=""><span>Ведутся соцсети</span></label>
						<label class="quiz-option"><input type="checkbox" name="status" value="Есть аналитика"><img loading="lazy" src="/img/icons/analise.png" alt=""><span>Настроена аналитика</span></label>
					</div>
					<label class="quiz-label" style="margin-top:14px">Какие задачи по SEO?</label>
					<div class="quiz-options icon-options check-options">
						<label class="quiz-option"><input type="checkbox" name="seo" value="Технический аудит"><img loading="lazy" src="/img/icons/profi.png" alt=""><span>Технический аудит</span></label>
						<label class="quiz-option"><input type="checkbox" name="seo" value="Семантическое ядро"><img loading="lazy" src="/img/icons/complex.png" alt=""><span>Семантическое ядро</span></label>
						<label class="quiz-option"><input type="checkbox" name="seo" value="Внутренняя оптимизация"><img loading="lazy" src="/img/icons/adaptive.png" alt=""><span>Внутренняя оптимизация</span></label>
						<label class="quiz-option"><input type="checkbox" name="seo" value="SEO-контент"><img loading="lazy" src="/img/icons/text.png" alt=""><span>SEO-контент</span></label>
						<label class="quiz-option"><input type="checkbox" name="seo" value="Ссылочное продвижение"><img loading="lazy" src="/img/icons/links.png" alt=""><span>Ссылочное</span></label>
					</div>
				</fieldset>

				<!-- Step 4: Бюджет -->
				<fieldset class="quiz-page" data-page="4">
					<legend class="quiz-legend">Бюджет и детали</legend>
					<div class="quiz-field">
						<label for="siteUrl" class="quiz-label">Ссылка на сайт</label>
						<input type="text" id="siteUrl" name="references" placeholder="https://...">
					</div>
					<label class="quiz-label" style="margin-top:12px">Бюджет на продвижение в месяц</label>
					<div class="quiz-options text-options">
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="до 30 000"><span>до 30 000 ₽/мес</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="30 000 — 80 000"><span>30 000 — 80 000 ₽/мес</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="80 000 — 150 000"><span>80 000 — 150 000 ₽/мес</span></label>
						<label class="quiz-option text-opt"><input type="radio" name="budget" value="более 150 000"><span>более 150 000 ₽/мес</span></label>
					</div>
					<div class="quiz-field" style="margin-top:12px">
						<label for="deadline" class="quiz-label">Желаемые сроки первых результатов</label>
						<input type="text" id="deadline" name="deadline" placeholder="Например: 2-3 месяца">
					</div>
				</fieldset>

				<!-- Step 5: Контакты -->
				<fieldset class="quiz-page" data-page="5">
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
					<p>Мы свяжемся с вами и подготовим стратегию комплексного продвижения.</p>
				</div>
			</form>
		</div>
		<div class="wave-divider <?= $briefWave ?? 'wave-light' ?>" aria-hidden="true">
			<svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C150,55 350,5 600,30 C850,55 1050,5 1200,30 L1200,60 L0,60 Z"></path></svg>
		</div>
	</section>

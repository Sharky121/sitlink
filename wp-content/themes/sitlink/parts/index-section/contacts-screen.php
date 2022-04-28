<section class="index-page__section contacts-section" id="contacts">
	<div class="contacts-section__container container">
		<div class="index-section__header index-section-header">
			<span class="index-section-header__count">09.</span>
			<h2 class="index-section-header__title">Контакты</h2>
		</div>
		<div class="contacts-section__contacts contacts">
			<div class="contacts__wrapper">
				<div class="contacts__left">
					<div class="contacts__info contacts-info">
						<dl class="contacts-info__desc-list">
							<dt class="contacts-info__desc-term">Телефон:</dt>
							<dd class="contacts-info__desc-desc">(495) 532-09-20</dd>

							<dt class="contacts-info__desc-term">E-Mail:</dt>
							<dd class="contacts-info__desc-desc">info@sotlink.ru</dd>

							<dt class="contacts-info__desc-term">Адрес:</dt>
							<dd class="contacts-info__desc-desc">Москва, ул Поляны д5 к2. <br> Метро улица Cкобелевская</dd>
						</dl>
					</div>
					<div class="contacts__callback contacts-callback">
						<h3 class="contacts-callback__title">Обратная связь:</h3>
						<p class="contacts-callback__subscribtion">Позвоните по номеру (495) 532-09-20 или заполните форму для бесплатного замера уровня сигнала на Вашем объекте.</p>
						<form class="callback__form callback-form form" action="">
							<ul class="form__list">
								<li class="form__item form-field">
									<label class="form-field__label visually-hidden" for="name">Ваше имя</label>
									<input class="form-field__input" id="name" name="name" type="text" placeholder="Ваше имя" required>
								</li>
								<li class="form__item form-field">
									<label class="form-field__label visually-hidden" for="phone">Ваш номер телефона</label>
									<input class="form-field__input" id="phone" name="phone" type="tel" placeholder="Ваш номер телефона" required>
								</li>
								<li class="form__item form-field">
									<label class="form-field__label visually-hidden" for="message">Текст сообщения</label>
									<textarea class="form-field__textarea" id="message" name="message"  placeholder="Текст сообщения" required></textarea>
								</li>
							</ul>
							<button class="form__btn btn btn--primary" type="submit">
								<span class="btn__text">Отправить</span>
								<svg class="btn__icon" width="20" height="20" aria-hidden="true" focusable="false">
									<use xlink:href="#ico-check" x="0" y="0"/>
								</svg>
							</button>
						</form>
					</div>
				</div>
				<div class="contacts__right">
					<div class="map" id="map"></div>
				</div>
			</div>
		</div>
	</div>
</section>

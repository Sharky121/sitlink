<?php /* Template Name: home */ ?>

<?php get_header('home'); ?>

<main class="page__main index-page">
  <!-- MAIN SCREEN -->
  <section class="index-page__section index-section main-screen">
    <div class="main-screen__container container">
      <h2 class="visually-hidden">Главный экран</h2>
      <div class="index-section__header index-section-header">
        <span class="index-section-header__count">01.</span>
        <h3 class="index-section-header__title">Усиление сотовой связи<br> за 1 день на обьектах<br> любой сложности</h3>
      </div>
      <div class="main-screen__img">
        <img src="<?php bloginfo('template_url'); ?>/public/images/section-screen_bg.jpg" width="213" height="140" alt="main background">
      </div>
      <p class="main-screen__slogan">Улучшаем качество мобильной связи <br> и интернета под ключ с гарантией!</p>
      <a class="main-screen__btn btn btn--primary" href="">
        <span class="btn__text">Усилить сигнал</span>
        <svg class="btn__icon" width="20" height="20" aria-hidden="true" focusable="false">
          <use xlink:href="#ico-wifi" x="0" y="0"/>
        </svg>
      </a>
    </div>
  </section>

  <!-- OPERATORS SCREEN -->
  <section class="index-page__section index-section operators-screen">
    <div class="operators-screen__container container">
      <h2 class="visually-hidden">Операторы с которомы работаем</h2>
      <div class="index-section__header index-section-header">
        <span class="index-section-header__count">02.</span>
        <h3 class="index-section-header__title">С какими операторами <br> и как мы работаем</h3>
        <p class="index-section-header__subtitle">Для усиления слабого сигнала мобильного оператора применяются <br> различные антенны, а также усилители сигнала.</p>
      </div>
      <div class="operators-screen__operators operators">
        <ul class="operators__list">
          <li class="operators__item">
            <img class="operators__img" src="<?php bloginfo('template_url'); ?>/public/images/megafon-logo.png" width="94" height="35" alt="Мегафон лого">
          </li>
          <li class="operators__item">
            <img class="operators__img" src="<?php bloginfo('template_url'); ?>/public/images/tele-logo.png" width="94" height="35" alt="Теле2 лого">
          </li>
        </ul>
        <div class="operators__station">
          <img src="<?php bloginfo('template_url'); ?>/public/images/station.jpg" width="151" height="248" alt="Билайн лого">
        </div>
        <ul class="operators__list">
          <li class="operators__item">
            <img class="operators__img" src="<?php bloginfo('template_url'); ?>/public/images/beeline-logo.png" width="94" height="35" alt="Билайн лого">
          </li>
          <li class="operators__item">
            <img class="operators__img" src="<?php bloginfo('template_url'); ?>/public/images/yota-logo.png" width="94" height="35" alt="Yota лого">
          </li>
          <li class="operators__item">
            <img class="operators__img" src="<?php bloginfo('template_url'); ?>/public/images/mts-logo.png" width="94" height="35" alt="МТС лого">
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- FEATURES SCREEN -->
  <section class="index-page__section index-section features-screen">
    <div class="features-screen__container container">
      <h2 class="visually-hidden">Преимущества</h2>
      <div class="index-section__header index-section-header">
        <span class="index-section-header__count">03.</span>
        <h3 class="index-section-header__title">Всё просто!</h3>
      </div>
      <div class="features">
        <ul class="features__list">
          <li class="features__item features__item--phone">Вы звоните по номеру 8 (800) 555-35-35 или оставляете <br> заявку на сайте</li>
          <li class="features__item features__item--measure">Наши мастера приезжают к вам на объект, проводят <br> замеры уровня сигнала и расчитывают стоимость</li>
          <li class="features__item features__item--contract">Составляется договор в котором прописывается <br> неизменная стоимость работ и оборудования</li>
          <li class="features__item features__item--installation">Мастера проводят работы по установке <br> оборудования необходимого для усиления сигнала</li>
          <li class="features__item features__item--works">По завершении основных работ проводятся <br> пуско-наладочные работы, проверяется качество сигнала</li>
          <li class="features__item features__item--quality">Вы лично убеждаетесь в качестве работы, подписываете <br> договор и получаете гарантию 24 месяца</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- SOLUTIONS -->
  <section class="index-page__section index-section solution-screen">
    <div class="solution-screen__container container">
      <div class="index-section__header index-section-header">
        <span class="index-section-header__count">04.</span>
        <h2 class="index-section-header__title">Типовые решения</h2>
      </div>
      <div class="solutions">
        <ul class="solutions__list">
          <li class="solutions__item solution-card">
            <h3 class="solution-card__title">Квартира</h3>
            <table class="solution-card__specification-table specification-table">
              <tr class="specification-table__tr">
                <td class="specification-table__td">
                  <b>Репитер</b>
                  <p>Titan-1800/2100 PRO 1 шт.</p>
                </td>
                <td class="specification-table__td">16 900 ₽</td>
              </tr>
              <tr class="specification-table__tr">
                <td class="specification-table__td">
                  <b>Антенна внешняя</b>
                  <p>AP-800/2700-7/9OD 1 шт.</p>
                </td>
                <td class="specification-table__td">1 520 ₽</td>
              </tr>
              <tr class="specification-table__tr">
                <td class="specification-table__td">
                  <b>Антенна внутренняя</b>
                  <p>AP-800/2700-7/9-11 ID 1 шт.</p>
                </td>
                <td class="specification-table__td">1 000 ₽</td>
              </tr>
              <tr class="specification-table__tr">
                <td class="specification-table__td">
                  <b>Кабель 8D-FB CCA</b>
                  <p>(черный) 10 м.</p>
                </td>
                <td class="specification-table__td">1 290 ₽</td>
              </tr>
              <tr class="specification-table__tr">
                <td class="specification-table__td">
                  <b>Разъем N-типа, вилка, для кабеля</b>
                  <p>8D 4 шт.</p>
                </td>
                <td class="specification-table__td">800 ₽</td>
              </tr>
              <tr class="specification-table__tr">
                <td class="specification-table__td">
                  <b>Кронштейн под внешнюю антенну</b>
                  <p>1 шт.</p>
                </td>
                <td class="specification-table__td">400 ₽</td>
              </tr>
              <tr class="specification-table__tr">
                <td class="specification-table__td">
                  <b>Установка + настройка</b>
                </td>
                <td class="specification-table__td">6 000 ₽</td>
              </tr>
              <tr class="specification-table__tr specification-table__tr--total">
                <td class="specification-table__td">
                  <b>Итого</b>
                </td>
                <td class="specification-table__td">
                  <b>27 910 ₽</b>
                </td>
              </tr>
            </table>
            <a class="solution-card__btn btn btn--primary" href="">
              <span class="btn__text">Заказать</span>
              <svg class="btn__icon" width="20" height="20" aria-hidden="true" focusable="false">
                <use xlink:href="#ico-wifi" x="0" y="0"/>
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- HOW TO -->
  <section class="index-page__section how-to-section">
    <div class="how-to-section__container container">
      <div class="index-section__header index-section-header">
        <span class="index-section-header__count">05.</span>
        <h2 class="index-section-header__title">Как работает система усиления связи?</h2>
        <p class="index-section-header__subtitle">Сначала на объекте проводится детальная диагностика помещения и измеряется уровень сигнала, для получения точных результов используется профессиональное оборудование.
          На основании полученных результатов, подбирается подходящее оборудование и Вы получаете оптимально выгодное по цене решение.</p>
      </div>
      <div class="how-to">
        <ul class="how-to__list">
          <li class="how-to__item how-to-item">
            <img class="how-to-item__img" src="<?php bloginfo('template_url'); ?>/public/images/home.png" width="301" height="242" alt="Home">
          </li>
          <li class="how-to__item how-to-item">
            <h3 class="how-to-item__title">Внешнаяя антенна <br> (приемная)</h3>
            <p class="how-to-item__desc">служит для приема сотового сигнала и передачи на репитер и в обратном направлении. Такие антенны различаются по коффициенту усиления и по направлению действия.</p>
          </li>
          <li class="how-to__item how-to-item">
            <h3 class="how-to-item__title">Внутренняя антенна <br> (раздающая)</h3>
            <p class="how-to-item__desc">благодаря которой преобразованный сигнал раздается внутри помещения, таких антенн, при необходимости, может быть несколько.</p>
          </li>
          <li class="how-to__item how-to-item">
            <h3 class="how-to-item__title">Репитер GSM <br> (усилитель)</h3>
            <p class="how-to-item__desc">это прибор, повторяющий и усиливающий сигнал сотовой сети. Сотовые репитеры различаются по частотным диапазонам связи (GSM-900, GSM-1800, 3G, 4G) и по коэффициенту усиления сигнала.</p>
          </li>
          <li class="how-to__item how-to-item">
            <h3 class="how-to-item__title">Прочее оборудование</h3>
            <p class="how-to-item__desc">Все части системы соединяются между собой специальным высокочастотным кабелем, также могут присутствовать другие элементы, такие как бустеры, линейные усилители, разветвители, делители мощности (сплиттеры) и т.д.</p>
          </li>
        </ul>
      </div>
    </div>
  </section>
</main>
<?php get_footer();?>

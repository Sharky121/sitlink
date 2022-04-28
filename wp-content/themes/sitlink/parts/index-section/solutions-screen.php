<section class="index-page__section index-section solution-screen" id="solutions">
	<div class="solution-screen__container container">
		<div class="index-section__header index-section-header">
			<span class="index-section-header__count">04.</span>
			<h2 class="index-section-header__title">Типовые решения</h2>
		</div>
		<div class="solutions">
      <div class="solutions swiper">
        <div class="swiper-wrapper">
			    <?php if (have_posts()) : query_posts(array('cat' => 2)); ?>
				    <?php while (have_posts()) : the_post(); ?>
					    <?php $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(),'large'); ?>
                <div class="swiper-slide">
                  <div class="solution-card">
                    <h3 class="solution-card__title"><?php the_title(); ?></h3>

                  </div>
                </div>
				      <?php endwhile; ?>
          <?php endif; wp_reset_query(); ?>
        </div>

        <div class="swiper__nav-buttons swiper-nav-buttons">
          <div class="swiper-nav-buttons__prev swiper-button swiper-button--left">
            <svg class="swiper-button__ico" width="36" height="36" aria-hidden="true" focusable="false">
              <use xlink:href="#ico-left-arrow" x="0" y="0"/>
            </svg>
          </div>
          <div class="swiper-nav-buttons__next swiper-button swiper-button--right">
            <svg class="swiper-button__ico" width="36" height="36" aria-hidden="true" focusable="false">
              <use xlink:href="#ico-left-arrow" x="0" y="0"/>
            </svg>
          </div>
        </div>
      </div>
<!--			<ul class="solutions__list">-->
<!--				<li class="solutions__item solution-card">-->
<!--					<h3 class="solution-card__title">Квартира</h3>-->
<!--					<table class="solution-card__specification-table specification-table">-->
<!--						<tr class="specification-table__tr">-->
<!--							<td class="specification-table__td">-->
<!--								<b>Репитер</b>-->
<!--								<p>Titan-1800/2100 PRO 1 шт.</p>-->
<!--							</td>-->
<!--							<td class="specification-table__td">16 900 ₽</td>-->
<!--						</tr>-->
<!--						<tr class="specification-table__tr">-->
<!--							<td class="specification-table__td">-->
<!--								<b>Антенна внешняя</b>-->
<!--								<p>AP-800/2700-7/9OD 1 шт.</p>-->
<!--							</td>-->
<!--							<td class="specification-table__td">1 520 ₽</td>-->
<!--						</tr>-->
<!--						<tr class="specification-table__tr">-->
<!--							<td class="specification-table__td">-->
<!--								<b>Антенна внутренняя</b>-->
<!--								<p>AP-800/2700-7/9-11 ID 1 шт.</p>-->
<!--							</td>-->
<!--							<td class="specification-table__td">1 000 ₽</td>-->
<!--						</tr>-->
<!--						<tr class="specification-table__tr">-->
<!--							<td class="specification-table__td">-->
<!--								<b>Кабель 8D-FB CCA</b>-->
<!--								<p>(черный) 10 м.</p>-->
<!--							</td>-->
<!--							<td class="specification-table__td">1 290 ₽</td>-->
<!--						</tr>-->
<!--						<tr class="specification-table__tr">-->
<!--							<td class="specification-table__td">-->
<!--								<b>Разъем N-типа, вилка, для кабеля</b>-->
<!--								<p>8D 4 шт.</p>-->
<!--							</td>-->
<!--							<td class="specification-table__td">800 ₽</td>-->
<!--						</tr>-->
<!--						<tr class="specification-table__tr">-->
<!--							<td class="specification-table__td">-->
<!--								<b>Кронштейн под внешнюю антенну</b>-->
<!--								<p>1 шт.</p>-->
<!--							</td>-->
<!--							<td class="specification-table__td">400 ₽</td>-->
<!--						</tr>-->
<!--						<tr class="specification-table__tr">-->
<!--							<td class="specification-table__td">-->
<!--								<b>Установка + настройка</b>-->
<!--							</td>-->
<!--							<td class="specification-table__td">6 000 ₽</td>-->
<!--						</tr>-->
<!--						<tr class="specification-table__tr specification-table__tr--total">-->
<!--							<td class="specification-table__td">-->
<!--								<b>Итого</b>-->
<!--							</td>-->
<!--							<td class="specification-table__td">-->
<!--								<b>27 910 ₽</b>-->
<!--							</td>-->
<!--						</tr>-->
<!--					</table>-->
<!--					<a class="solution-card__btn btn btn--primary" href="">-->
<!--						<span class="btn__text">Заказать</span>-->
<!--						<svg class="btn__icon" width="20" height="20" aria-hidden="true" focusable="false">-->
<!--							<use xlink:href="#ico-wifi" x="0" y="0"/>-->
<!--						</svg>-->
<!--					</a>-->
<!--				</li>-->
<!--			</ul>-->
		</div>
	</div>
</section>

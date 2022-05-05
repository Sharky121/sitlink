<section class="index-page__section market-section">
	<div class="market-section__container container">
		<div class="index-section__header index-section-header">
			<span class="index-section-header__count">07.</span>
			<h2 class="index-section-header__title">Магазин</h2>
		</div>
    <div class="market-section__products swiper">
      <div class="swiper-wrapper">
	      <?php if (have_posts()) : query_posts(array('cat' => 3)); ?>
		      <?php while (have_posts()) : the_post(); ?>
			      <?php $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(),'large'); ?>
              <div class="swiper-slide">
                <div class="card">
                  <div class="card__img">
                    <img src="<?php echo $thumbnail_attributes[0] ?>" alt="product">
                  </div>
                  <h3 class="card__title"><?php the_title(); ?></h3>
                  <p class="card__price">Цена: <?php $post_id = get_the_ID();
	                  echo get_post_meta( $post_id, 'price', 1); ?> ₽</p>
                  <a class="card__btn btn btn--primary" href="<?php the_permalink(); ?>">
                    <span class="btn__text">Подробней</span>
                    <svg class="btn__icon" width="20" height="20" aria-hidden="true" focusable="false">
                      <use xlink:href="#ico-wifi" x="0" y="0"></use>
                    </svg>
                  </a>
                </div>
              </div>
		      <?php endwhile; ?>
	      <?php endif; wp_reset_query(); ?>
      </div>

      <div class="market-section__swiper-nav-buttons swiper__nav-buttons swiper-nav-buttons">
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
	</div>
</section>

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
                    <?php the_content(); ?>
                  </div>
                </div>
				      <?php endwhile; ?>
          <?php endif; wp_reset_query(); ?>
        </div>

        <div class="solution-screen__swiper-nav-buttons swiper__nav-buttons swiper-nav-buttons">
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
	</div>
</section>

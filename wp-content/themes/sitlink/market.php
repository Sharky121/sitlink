<?php /* Template Name: market */ ?>

<?php get_header('home'); ?>

<?php

  $categories = get_categories([
    'taxonomy'     => 'category',
    'type'         => 'post',
    'child_of'     => 0,
    'parent'       => '',
    'orderby'      => 'name',
    'order'        => 'DESC',
    'hide_empty'   => 1,
    'hierarchical' => 1,
    'exclude'      => '',
    'include'      => '',
    'number'       => 0,
    'pad_counts'   => false,
  ]);
?>

<main class="page__market market-page">
	<div class="market-page__container container">
		<h1>Магазин</h1>

	  <?php foreach($categories as $cat): ?>
      <?php if ($cat->slug !== 'solutions'): ?>
        <section class="market-page__section market-section" id="">
          <div class="market-section__container container">
            <div class="market-section__header market-section-header">
              <h2 class="market-section-header__title"><?php echo $cat->name ?></h2>
              <div class="market-section-header__nav-buttons swiper-nav-buttons">
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
            <div class="swiper">
              <div class="swiper-wrapper">
              <?php if (have_posts()) : query_posts(array('cat' => $cat->cat_ID)); ?>
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
            </div>
          </div>
        </section>
      <?php endif; ?>
    <?php endforeach; ?>
	</div>
</main>

<?php get_footer();?>

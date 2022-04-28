<?php /* Template Name: market */ ?>

<?php get_header('home'); ?>

<main class="page__market market-page">
	<div class="container">
		<h1>Магазин</h1>

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
	  <?php foreach($categories as $cat): ?>
      <h2><?php $cat->name ?></h2>
	    <?php if (have_posts()) : query_posts(array('cat' => $cat->cat_ID)); ?>
		    <?php while (have_posts()) : the_post(); ?>
			    <?php the_post_thumbnail() ?>
          <p>
            <a href="<?php the_permalink(); ?>">
			        <?php the_title(); ?>
            </a>
          </p>
		    <?php endwhile; ?>
	    <?php endif; wp_reset_query(); ?>
	  <?php endforeach; ?>
	</div>
</main>

<?php get_footer();?>

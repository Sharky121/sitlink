<?php /* Template Name: home */ ?>

<?php get_header('home'); ?>

<main class="page__main index-page">
  <!-- MAIN SCREEN -->
	<?php include ('parts/index-section/main-screen.php') ?>

  <!-- OPERATORS SCREEN -->
	<?php include ('parts/index-section/operators-screen.php') ?>

  <!-- FEATURES SCREEN -->
	<?php include ('parts/index-section/features-screen.php') ?>

  <!-- SOLUTIONS -->
	<?php include ('parts/index-section/solutions-screen.php') ?>

  <!-- HOW TO -->
	<?php include ('parts/index-section/howto-section.php') ?>

  <!-- ABOUT -->
	<?php include ('parts/index-section/about-screen.php') ?>

  <!-- MARKET -->
	<?php include ('parts/index-section/market-screen.php') ?>

  <!-- CERTIFICATE -->
	<?php include ('parts/index-section/certificate-section.php') ?>

  <!-- CONTACTS -->
	<?php include ('parts/index-section/contacts-screen.php') ?>
</main>

<?php get_footer();?>

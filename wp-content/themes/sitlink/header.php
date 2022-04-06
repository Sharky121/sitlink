<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Sitlink</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <meta name="format-detection" content="telephone=no">
  <meta name="blog-info" content="<?php bloginfo('template_url'); ?>">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>"/>
  <?php wp_head() ?>
</head>

<body class="page">
  <header class="page__header page-header">
    <div class="page-header__container container">
      <button class="page-header__hamburger hamburger-menu" id="hamburger-menu">
        <div class="hamburger-menu__ico">
          <span class="hamburger-menu__line"></span>
        </div>
        <span class="hamburger-menu__text">Меню</span>
      </button>
      <a class="page-header__logo logo" href="/">
        <img class="logo__img" src="<?php bloginfo('template_url'); ?>/public/images/logo.png" width="120" height="30" alt="sitlink logo">
      </a>
      <nav class="page-header__mobile-nav mobile-nav" id="mobile-nav">
        <div class="mobile-nav__wrapper">
          <button class="mobile-nav__close-menu" id="close-mobile-nav">Закрыть</button>
          <ul class="mobile-nav__list">
            <li class="mobile-nav__item">
              <a class="mobile-nav__link" href="">Главная</a>
            </li>
            <li class="mobile-nav__item">
              <a class="mobile-nav__link" href="">Услуги</a>
            </li>
            <li class="mobile-nav__item">
              <a class="mobile-nav__link" href="">Типовые решения</a>
            </li>
            <li class="mobile-nav__item">
              <a class="mobile-nav__link" href="">Портфолио</a>
            </li>
            <li class="mobile-nav__item">
              <a class="mobile-nav__link" href="">Магазин</a>
            </li>
            <li class="mobile-nav__item">
              <a class="mobile-nav__link" href="">Контакты</a>
            </li>
          </ul>
          <a class="mobile-nav__phone" href="tel:4956644470">(495) 664-44-70</a>
          <a class="mobile-nav__callback" href="">Перезвоните мне</a>
        </div>
      </nav>
      <nav class="page-header__main-nav main-nav">
        <ul class="main-nav__list">
          <li class="main-nav__item">
            <a class="main-nav__link" href="">Главная</a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="">Услуги</a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="">Типовые решения</a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="">Портфолио</a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="">Магазин</a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="">Контакты</a>
          </li>
        </ul>
      </nav>
      <a class="page-header__mobile-callback" href="tel:">Звонок</a>
      <a class="page-header__phone" href="tel:4956644470">(495) 664-44-70</a>
      <a class="page-header__callback" href="">Перезвоните мне</a>
    </div>
  </header>

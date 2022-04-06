<?php

use JetBrains\PhpStorm\NoReturn;

remove_action( 'wp_head', 'wp_generator' );
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','rsd_link');
remove_action('wp_head','feed_links_extra', 3);
remove_action('wp_head', 'wp_resource_hints', 2 );
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );

add_action('wp_enqueue_scripts', 'webapptiv_remove_block_library_css');
add_filter('show_admin_bar', '__return_false');

add_action('wp_enqueue_scripts', 'register_styles', 25);

function webapptiv_remove_block_library_css() {
  wp_dequeue_style( 'wp-block-library' );
}

function register_styles() {
  wp_enqueue_style( 'custom_style', get_stylesheet_directory_uri() . '/public/main.css' );
}

function addScripts() {
  wp_enqueue_script('bundle_script', get_stylesheet_directory_uri() . '/public/bundle.js', false, null, true);
}

add_action('wp_enqueue_scripts', 'addScripts', 25);

add_theme_support('menus');

register_nav_menus(
  array(
    'head_menu' => 'Шапка сайта',
    'footer_menu' => 'Футер меню сайта',
  )
);

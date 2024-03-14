<?php

function enqueue_site_assets()
{
    // registering assets
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');

    //  Swiper
    wp_register_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js');

    // Template
    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css');

    // Bootstrap
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');

    wp_enqueue_script('swiper');
    // Template
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'enqueue_site_assets');
<?php
function pustakalaya_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    
    register_nav_menus([
        'primary'   => 'Primary Navigation (Main)',
        'secondary' => 'Secondary Navigation (Top Right)',
        'mobile'    => 'Mobile Sidenav',
    ]);
}
add_action('after_setup_theme', 'pustakalaya_theme_setup');

function pustakalaya_enqueue_assets() {
    // Main Stylesheet
    wp_enqueue_style('pustakalaya-style', get_stylesheet_uri());
    
    // Font Awesome from CDN
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

    // Slick Slider CSS
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/assets/css/slick-theme.css');

    // jQuery (comes with WordPress)
    wp_enqueue_script('jquery');

    // Slick Slider JS
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery'], '1.8.1', true);

    // Custom Scripts for theme functionality
    wp_enqueue_script('pustakalaya-custom', get_template_directory_uri() . '/assets/js/custom.js', ['jquery', 'slick-js'], '1.0', true);
}
add_action('wp_enqueue_scripts', 'pustakalaya_enqueue_assets');

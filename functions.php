<?php

// Enqueue styles
function blank_enqueue_styles() {
    wp_enqueue_style('blank', get_stylesheet_uri(), [], filectime(get_stylesheet_directory() . '/style.css'));
}
add_action('wp_enqueue_scripts', 'blank_enqueue_styles');

// Register menus
function blank_register_nav_menus() {
    register_nav_menus([
        'main-menu' => 'Main Menu',
    ]);
}
add_action('init', 'blank_register_nav_menus');

// Allow WordPress to manage the title tag
add_theme_support('title-tag');
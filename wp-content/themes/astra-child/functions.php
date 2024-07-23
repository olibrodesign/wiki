<?php

/**
 * Mirza Jafar Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mirza Jafar
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('CHILD_THEME_MIRZA_JAFAR_VERSION', '1.0.0');

/**
 * Enqueue styles
 */
function child_enqueue_styles() {
    // Enqueue parent theme stylesheet
    wp_enqueue_style('astra-theme-css', get_template_directory_uri() . '/style.css');

    // Enqueue child theme stylesheet
    wp_enqueue_style('mirza-jafar-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_MIRZA_JAFAR_VERSION, 'all');
    
    // Enqueue the custom stylesheet in the child theme
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/assets/css/custom-style.css', array('mirza-jafar-theme-css'), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);

/**
 * Register Menu
 */
function register_my_menu() {
    register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_my_menu');

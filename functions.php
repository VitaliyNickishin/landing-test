<?php

/**
 * ap functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ap
 */
/**
 * Enqueue scripts and styles.
 */
function ap_theme_scripts()
{
    //    for style

    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/main.css', false, time());

    //    for scripts
    wp_register_script('jquery', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', false, null, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('slick.min.js', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', 'jquery', null, true);
    wp_enqueue_script('main.js', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery','slick.min.js'), null, true);


}


add_action('wp_enqueue_scripts', 'ap_theme_scripts');

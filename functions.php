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
// function ap_theme_scripts()
// {
//     wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/main.css', false, time());

//     wp_enqueue_script('main.js', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), null, true);
// }


// add_action('wp_enqueue_scripts', 'ap_theme_scripts');

function theme_assets() {

    if (defined('WP_ENV') && WP_ENV === 'development') {

        // DEV  (Vite server)
        wp_enqueue_script(
            'vite-client',
            'http://localhost:5173/@vite/client',
            [],
            null,
            true
        );

        wp_enqueue_script(
            'theme-js',
            'http://localhost:5173/assets/js/main.js',
            [],
            null,
            true
        );

        // add type="module" for import
        add_filter('script_loader_tag', function ($tag, $handle) {
            if ($handle === 'theme-js' || $handle === 'vite-client') {
                return str_replace('<script ', '<script type="module" ', $tag);
            }
            return $tag;
        }, 10, 2);

    } else {

        // PROD (build)
        $manifest = json_decode(file_get_contents(get_template_directory() . '/dist/.vite/manifest.json'), true);
        $main = $manifest['assets/js/main.js'];

        wp_enqueue_script(
            'theme-js',
            get_template_directory_uri() . '/dist/' . $main['file'],
            [],
            null,
            true
        );

        wp_enqueue_style(
            'theme-css',
            get_template_directory_uri() . '/dist/' . $main['css'][0],
            [],
            null
        );
    }
}
add_action('wp_enqueue_scripts', 'theme_assets');
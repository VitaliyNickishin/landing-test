<?php

/**
 * ap functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ap
 */


function theme_assets() {

    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    if (defined('WP_ENV') && WP_ENV === 'development') {

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

        add_filter('script_loader_tag', function ($tag, $handle) {
            if (in_array($handle, ['theme-js', 'vite-client'])) {
                return str_replace('<script ', '<script type="module" ', $tag);
            }
            return $tag;
        }, 10, 2);

    } else {

        $manifest_path = $theme_dir . '/dist/.vite/manifest.json';

        if (!file_exists($manifest_path)) {
            return;
        }

        $manifest = json_decode(file_get_contents($manifest_path), true);

        // safer entry lookup
        $entry = null;

        foreach ($manifest as $key => $value) {
            if (str_ends_with($key, 'main.js')) {
                $entry = $value;
                break;
            }
        }

        if (!$entry) {
            return;
        }

        // JS
        wp_enqueue_script(
            'theme-js',
            $theme_uri . '/dist/' . $entry['file'],
            [],
            null,
            true
        );

        // CSS (SAFE CHECK)
        if (!empty($entry['css'])) {
            foreach ($entry['css'] as $css_file) {
                wp_enqueue_style(
                    'theme-css-' . md5($css_file),
                    $theme_uri . '/dist/' . $css_file,
                    [],
                    null
                );
            }
        }
    }
}

add_action('wp_enqueue_scripts', 'theme_assets');
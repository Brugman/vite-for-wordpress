<?php

/**
 * Enqueue scripts.
 */

add_action( 'wp_enqueue_scripts', function () {
    // register
    wp_register_script(
        'theme-js', // name
        get_stylesheet_directory_uri().'/assets/theme.min.js', // url
        [], // deps
        '1.0.0', // ver
        true // in_footer
    );
    // enqueue
    wp_enqueue_script( 'theme-js' );
});


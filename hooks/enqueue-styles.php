<?php

/**
 * Enqueue styles.
 */

add_action( 'wp_enqueue_scripts', function () {
    // register
    wp_register_style(
        'theme-css', // name
        get_stylesheet_directory_uri().'/assets/theme.min.css', // url
        [], // deps
        '1.0.0', // ver
        'all' // media
    );
    // enqueue
    wp_enqueue_style( 'theme-css' );
});


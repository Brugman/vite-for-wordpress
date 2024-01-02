<?php

/**
 * Enable or disable Vite.
 */

define( 'VITE', true );

if ( WP_ENV != 'local' || !defined('VITE') || !VITE )
    return;

/**
 * Enqueue the Vite client.
 */

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_script(
        'vite-client', // name
        'http://localhost:5173/@vite/client', // url
        [], // deps
        null, // ver
        true // in_footer
    );
});

/**
 * Load the Vite client script as module.
 */

add_filter( 'script_loader_tag', function ( $tag, $handle, $src ) {
    if ( $handle == 'vite-client' )
        return str_replace( '<script ', '<script type="module" ', $tag );

    return $tag;
}, 10, 3 );

/**
 * Load assets from Vite server.
 */

function maybe_load_assets_from_vite_server( $src, $handle )
{
    // if the asset is in the theme dir
    if ( strpos( $src, get_stylesheet_directory_uri() ) !== false )
        return str_replace( get_stylesheet_directory_uri(), 'http://localhost:5173', $src );

    // if the asset is on a custom assets url
    if ( strpos( $src, site_url().'/assets/' ) !== false )
        return str_replace( site_url(), 'http://localhost:5173', $src );

    return $src;
}

add_filter( 'style_loader_src', 'maybe_load_assets_from_vite_server', 10, 2 );
add_filter( 'script_loader_src', 'maybe_load_assets_from_vite_server', 10, 2 );


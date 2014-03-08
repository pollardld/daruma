<?php

//---- Enqueue Sripts/Style ----//
 
function daruma_scripts_styles() {

    wp_enqueue_style(
        'google-fonts',
        'http://fonts.googleapis.com/css?family=Open+Sans:300,600,800|Anaheim',
        array()
    );

	// Loads our main stylesheet.
	wp_enqueue_style( 
        'daruma-style', 
        get_template_directory_uri() . '/css/style.css', 
        array( 'google-fonts' ) 
    );

    wp_register_script(
        'video',
        get_stylesheet_directory_uri() . '/js/video.js',
        array( 'imagesloaded' ),
        '',
        true
    );

    wp_register_script(
        'bigvideo',
        get_stylesheet_directory_uri() . '/js/bigvideo.js',
        array( 'jquery', 'video' ),
        '',
        true
    );

    wp_register_script(
        'imagesloaded',
        get_stylesheet_directory_uri() . '/js/imagesloaded.min.js',
        array(),
        '',
        true
    );

    wp_register_script(
        'waypoints',
        get_stylesheet_directory_uri() . '/js/waypoints.min.js',
        array( 'jquery' ),
        '',
        true
    );

	wp_register_script(
        'scripts',
        get_stylesheet_directory_uri() . '/js/scripts.js',
        array( 'jquery', 'bigvideo' ),
        '0.0.1',
        true
    );

    wp_enqueue_script( 'waypoints' );
    wp_enqueue_script( 'imagesloaded' );
    wp_enqueue_script( 'video' );
    wp_enqueue_script( 'bigvideo' );
    wp_enqueue_script( 'scripts' );
}

add_action( 'wp_enqueue_scripts', 'daruma_scripts_styles' );
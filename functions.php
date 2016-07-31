<?php

// Remove parent css and load child css
add_action( 'wp_enqueue_scripts', 'remove_default_stylesheet', 20 );

function remove_default_stylesheet() {
    
    wp_dequeue_style( 'pingraphy-style' );
    wp_deregister_style( 'pingraphy-style' );

    wp_register_style( 'style', get_stylesheet_directory_uri() . '/style.css', false, '1.0.0' ); 
    wp_enqueue_style( 'style' );

    wp_dequeue_style( 'pingraphy-responsive-style' );
    wp_deregister_style( 'pingraphy-responsive-style' );

    wp_register_style( 'responsive', get_stylesheet_directory_uri() . '/css/responsive.css', false, '1.0.0' ); 
    wp_enqueue_style( 'responsive' );

}

function pingraphy_setup() {
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'pingraphy-child-large', 1250, 550, true );
	add_image_size( 'pingraphy-home-thumbnail', 640, 440, true);
	add_image_size( 'pingraphy-single-thumbnail', 810, 540, true );
	add_image_size( 'pingraphy-ralated-thumbnail', 170, 170, true );
	add_image_size( 'pingraphy-widget-thumbnail', 68, 68, true );
}

?>
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

if ( ! function_exists( 'pingraphy_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pingraphy_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Pingraphy, use a find and replace
	 * to change 'pingraphy' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'pingraphy', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' 	=> __( 'Primary Menu', 'pingraphy' ),
		'secondary'	=> __( 'Secondary Menu', 'pingraphy' ),
		'footer' => __('Footer Menu', 'pingraphy')
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'pingraphy_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// This theme styles the visual editor to resemble the theme style.
	//$google_font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Fira+Sans:700,400|Roboto:700,400' );
	//add_editor_style( array( 'css/editor-style.css', $google_font_url ) );
}
endif; // pingraphy_setup

?>

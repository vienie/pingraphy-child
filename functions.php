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

?>
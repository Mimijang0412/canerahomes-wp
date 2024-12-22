<?php

// Enqueue styles and scripts
function canerahomes_enqueue_assets() {
    // Enqueue styles
    wp_enqueue_style( 'canerahomes-style', get_stylesheet_uri() );

    // Enqueue custom CSS
    wp_enqueue_style( 'canerahomes-custom-style', get_template_directory_uri() . '/assets/css/style.css' );

    // Enqueue the custom JavaScript (make sure the path is correct)
    wp_enqueue_script( 'canerahomes-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'canerahomes_enqueue_assets' );

?>

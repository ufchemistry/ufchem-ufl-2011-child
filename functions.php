<?php

/**
 * Add theme styles and scripts
 * 
 * @since 1.0
 */
function ufchem_ufl_2011_enqueue_styles() {
    wp_enqueue_style( 'ufl-parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'ufl-child-style', get_stylesheet_directory_uri() . '/style.css' );
 
}
add_action( 'wp_enqueue_scripts', 'ufchem_ufl_2011_enqueue_styles' );

/**
 * Add classes to the body tag based on theme options
 * 
 * @param array $classes
 * @since 1.0
 */
function ufchem_ufl_2011_body_class( $classes ) {
    $new_classes = array();
    
    // Add theme style class
    $theme_style = 'ufchem-style-1';
    $new_classes[] = $theme_style;
    
    return array_merge( $classes, $new_classes );
}
add_filter( 'body_class', 'ufchem_ufl_2011_body_class' );

/**
 * Override the institutional nav
 * 
 * @since 1.0
 */
if ( !function_exists('ufclas_responsive_top_nav') ){
    function ufclas_responsive_top_nav(){
        include get_stylesheet_directory() . '/library/php/uf-institutional-nav.php';
    }  
}



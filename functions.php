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
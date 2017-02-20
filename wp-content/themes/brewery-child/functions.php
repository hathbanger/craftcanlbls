<?php

function brewery_enqueue_parent_theme_style() {
    wp_enqueue_style( 'brewery-parent-style', get_template_directory_uri().'/style.css' );
    wp_dequeue_style( 'brewery-style' );
    wp_enqueue_style( 'brewery-child-style', get_stylesheet_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'brewery_enqueue_parent_theme_style', 99 );
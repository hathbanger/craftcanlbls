<?php
/**
 * Functions used to implement options
 *
 */

/**
 * Enqueue Google Fonts Example
 */
function brewery_customizer_fonts() {

	// Font options
	$fonts = array(
		get_theme_mod( 'primary-font', brewery_customizer_library_get_default( 'primary-font' ) ),
		get_theme_mod( 'secondary-font', brewery_customizer_library_get_default( 'secondary-font' ) ),
		get_theme_mod( 'logo-font', brewery_customizer_library_get_default( 'logo-font' ) ),
		get_theme_mod( 'logo-tagline-font', brewery_customizer_library_get_default( 'logo-tagline-font' ) ),
		get_theme_mod( 'menu-font', brewery_customizer_library_get_default( 'menu-font' ) ),
		get_theme_mod( 'page-header-font', brewery_customizer_library_get_default( 'page-header-font' ) )
	);

	$font_uri = customizer_library_get_google_font_uri( $fonts );

	// Load Google Fonts
	wp_enqueue_style( 'brewery_customizer_fonts', $font_uri, array(), null, 'screen' );

}
add_action( 'wp_enqueue_scripts', 'brewery_customizer_fonts' );

/**
 * Custom Customizer Style
 */
function brewery_customizer_style() {

	wp_enqueue_style( 'brewery-customizer-style', get_template_directory_uri() . '/customizer/style.css', array(), '', 'all' );
}
add_action( 'customize_controls_enqueue_scripts', 'brewery_customizer_style' );

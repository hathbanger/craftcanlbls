<?php
/**
 * Jetpack Compatibility File
 * Reference: http://jetpack.me/
 *
 */

/**
 * Add theme support for Infinite Scroll.
 * Reference: http://jetpack.me/support/infinite-scroll/
 */
function brewery_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container'      => 'masonry-container',
		'footer'   		 => 'page',
		//'type' 			 => 'click',
		'render'     	 => 'brewery_infinite_scroll_render',
	) );
}
add_action( 'after_setup_theme', 'brewery_jetpack_setup' );

/**
 * Add Infinite Scroll compatibility for content.php in the template-parts folder.
 */
function brewery_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();

		get_template_part( 'template-parts/content', 'get_post_format()' );
	}
}

/**
 * Enables Jetpack's Infinite Scroll on archive pages, disables on woocommerce shop page
 * Reference: http://goo.gl/5QUEaY
 */
function brewery_jetpack_infinite_scroll_supported() {
	return current_theme_supports( 'infinite-scroll' ) && ( is_home() || is_archive() || is_search() ) && ! is_post_type_archive( 'product' );
}
add_filter( 'infinite_scroll_archive_supported', 'brewery_jetpack_infinite_scroll_supported' );
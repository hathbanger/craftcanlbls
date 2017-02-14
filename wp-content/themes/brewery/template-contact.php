<?php
/**
 * Template Name: Contact
 *
 */
get_header(); ?>

<?php
	$map_choice = get_theme_mod( 'map_choice' );
	if ( !empty( $map_choice ) ) {

		// Display Google Map
		echo '<div class="content_row_map clearfix">';

		$height = get_theme_mod( 'map_height', brewery_customizer_library_get_default( 'map_height' ) );
		$title = get_theme_mod( 'map_title', brewery_customizer_library_get_default( 'map_title' ) );
		$location = get_theme_mod( 'map_location', brewery_customizer_library_get_default( 'map_location' ) );
		$zoom = get_theme_mod( 'map_zoom', brewery_customizer_library_get_default( 'map_zoom' ) );

		echo '<div id="map_canvas_'.rand(1, 100).'" class="googlemap rescue-all" style="height:'.esc_attr( $height ).'px;width:100%">';

		echo '<input class="title" type="hidden" value="'.esc_attr( $title ).'" />';
		echo '<input class="location" type="hidden" value="'.esc_attr( $location ).'" />';
		echo '<input class="zoom" type="hidden" value="'.esc_attr( $zoom ).'" />';
		echo '<div class="map_canvas"></div>';

		echo '</div><!-- .googlemap -->';

		echo '</div><!-- .content_row_map -->';

	}; // End Google Map
?>

<div class="row">

	<div class="large-12 columns">

		<div id="primary" class="content-area">

			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main .site-main -->

		</div><!-- #primary .content-area -->

	</div><!-- .large-12 -->

  </div><!-- .row .content_row -->

<?php get_footer(); ?>

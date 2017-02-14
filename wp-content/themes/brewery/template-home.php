<?php
/**
 *
 * Template Name: Home
 *
 */

get_header(); ?>

<div class="row">
	
	<div class="large-12 columns">

		<div class="home-content clearfix">

			<?php
				$page_id = esc_attr( get_theme_mod( 'home_content_page' ) );

				$args = array(
				  'page_id' => $page_id,
				);

				$query = null;

				$query = new WP_Query( $args );

				if( $query->have_posts() ) {
				  while ($query->have_posts()) : $query->the_post(); ?>
				    <?php
				    the_content();
				  endwhile;
				}
				
				wp_reset_query();  // Restore global post data stomped by the_post().
			?>

		</div><!-- .home-content -->

	</div><!-- .large-12 -->

</div><!-- row -->

<?php get_footer(); ?>
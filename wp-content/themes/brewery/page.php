<?php
/**
 * The template for displaying all pages.
 *
 */

get_header(); ?>

<?php if ( get_theme_mod( 'header_sidebar_pages' ) ) { ?>

	<div class="header-widget-wrap">

		<div class="row">

			<div class="large-12 columns header-widget" >
				
				<?php if ( is_active_sidebar( 'header-sidebar' ) ) { ?>

					<?php dynamic_sidebar( 'header-sidebar' ); ?>

				<?php } ?>
				
			</div><!-- .large-12 -->

		</div><!-- .row -->

	</div><!-- .header-widget -->

<?php } // end header_sidebar_pages ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

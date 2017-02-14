<?php
/**
 * The template for displaying all single beer posts.
 *
 */

get_header(); ?>

<?php if ( get_theme_mod( 'header_sidebar_posts' ) ) { ?>

	<div class="header-widget-wrap">

		<div class="row">

			<div class="large-12 columns header-widget" >
				
				<?php if ( is_active_sidebar( 'header-sidebar' ) ) { ?>

					<?php dynamic_sidebar( 'header-sidebar' ); ?>

				<?php } ?>
				
			</div><!-- .large-12 -->

		</div><!-- .row -->

	</div><!-- .header-widget -->

<?php } // end header_sidebar_posts	 ?>

<div class="row">

	<div class="large-8 columns post-content">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content-beer', get_post_format() ); ?>

			<?php brewery_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	</div><!-- .large-8 -->

	<div class="large-4 columns inner-sidebar-widgets">

		<?php if ( is_active_sidebar( 'inner-sidebar' ) ) { ?>

			<?php dynamic_sidebar( 'inner-sidebar' ); ?>

		<?php } ?>

	</div><!-- .large-4 -->

</div><!-- .row -->

<?php get_footer(); ?>

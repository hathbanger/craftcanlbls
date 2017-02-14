<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>

<div class="header-widget-wrap">
	
	<div class="row">
		
		<div class="<?php if ( get_theme_mod( 'header_sidebar_blog' ) ) { echo "large-4"; } else { echo "large-12"; } ?> columns blog-title">
			
			<?php
				the_archive_title( '<h2 class="page-title">', '</h2>' );
				the_archive_description( '<p class="taxonomy-description">', '</p>' );
			?>

		</div><!-- .large-4 / .large-12 -->

		<?php if ( get_theme_mod( 'header_sidebar_blog' ) ) { ?>
		<div class="large-8 columns header-widget" align="right">
			
			<?php if ( is_active_sidebar( 'header-sidebar' ) ) { ?>

				<?php dynamic_sidebar( 'header-sidebar' ); ?>

			<?php } ?>
			
		</div><!-- .large-8 -->
		<?php } // end header_sidebar_blog ?>

	</div><!-- .row -->

</div><!-- .header-widget -->

<div class="row">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div id="masonry-container">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				if ( 'beer' == get_post_type() ) {

					get_template_part( 'template-parts/archive', 'beer' );

				} else {

					get_template_part( 'template-parts/content', 'search' );
					
				} ?>

			<?php endwhile; ?>

		</div><!-- #masonry-container -->

		<div class="clearfix"></div>

			<?php brewery_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .row -->

<?php get_footer(); ?>

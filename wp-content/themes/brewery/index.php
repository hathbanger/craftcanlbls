<?php
/**
 * The main template file. Displays the blog posts.
 *
 */

get_header(); ?>

<div class="header-widget-wrap">
	
	<div class="row">
		
		<div class="<?php if ( get_theme_mod( 'header_sidebar_blog' ) ) { echo "large-4"; } else { echo "large-12"; } ?> columns blog-title">

			<h2><?php echo esc_attr( get_theme_mod( 'blog_title', brewery_customizer_library_get_default( 'blog_title' ) ) ); ?></h2>

			<p><?php echo esc_attr( get_theme_mod( 'blog_subtitle', brewery_customizer_library_get_default( 'blog_subtitle' ) ) ); ?></p>

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
		<main id="main-posts" class="site-main" role="main">
			
		<div id="masonry-container">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

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

<?php get_sidebar(); ?>
<?php get_footer(); ?>

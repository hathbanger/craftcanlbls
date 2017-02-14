<?php
/**
 * The template for displaying search results pages.
 *
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

		<div class="header-widget-wrap">

			<div class="row">

				<div class="<?php if ( get_theme_mod( 'header_sidebar_search' ) ) { echo "large-4"; } else { echo "large-12"; } ?> columns">

					<h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'brewery' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
					
				</div><!-- .large-4 / .large-12 -->

			<?php if ( get_theme_mod( 'header_sidebar_search' ) ) { ?>

				<div class="large-8 columns header-widget" align="right">
					
					<?php if ( is_active_sidebar( 'header-sidebar' ) ) { ?>

						<?php dynamic_sidebar( 'header-sidebar' ); ?>

					<?php } ?>
					
				</div><!-- .large-8 -->

			<?php } // end header_sidebar_search ?>

			</div><!-- .row -->

		</div><!-- .header-widget -->

			</div><!-- .header-widget -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
				?>

			<?php endwhile; ?>

			<?php merch_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

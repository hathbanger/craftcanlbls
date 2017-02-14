<?php
/**
 * The template used for displaying page content in single.php
 */
?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>

		<?php if ( has_post_thumbnail() ) { ?>

			<div class="featured-image">
			
				<?php the_post_thumbnail( 'blog-single' ); ?>

			</div><!-- .featured-image -->

		<?php } ?>

		<div class="post-content-inner-wrap">

			<header class="entry-header">

				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			</header><!-- .entry-header -->

			<div class="post-top-meta-wrap">

				<?php 	
					brewery_post_top_meta();
					// Function located in inc/template-tags.php
				?>

			</div><!-- .post-top-meta-wrap -->

			<div class="entry-content">

				<?php the_content(); ?>

				<div class="entry-meta">

				<?php 	
					brewery_post_meta();
					// Function located in inc/template-tags.php
				?>

				</div><!-- .entry-meta-wrap -->

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'brewery' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

		</div><!-- .post-content-inner-wrap -->

		</article><!-- #post-## -->

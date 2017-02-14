<?php
/**
 * The template used for displaying page content in page.php
 *
 */
?>

<div class="row">

	<div class="large-8 columns">

		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

			<div class="post-content-inner-wrap">

			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

		<?php if ( has_post_thumbnail() ) {  ?>

			<div class="featured-image">
			
				<?php the_post_thumbnail( 'page-full' ); ?>

			</div><!-- .featured-image -->

		<?php } ?>

			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'brewery' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php edit_post_link( __( 'Edit', 'brewery' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-footer -->

		</div>
			
		</article><!-- #post-## -->

	</div><!-- .large-8 -->

	<div class="large-4 columns inner-sidebar-widgets">

		<?php if ( is_active_sidebar( 'inner-sidebar' ) ) { ?>

			<?php dynamic_sidebar( 'inner-sidebar' ); ?>

		<?php } ?>

	</div><!-- .large-4 -->

</div><!-- .row -->
<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 */
?>

<section class="no-results not-found clearfix">

	<div class="header-widget-wrap">

		<div class="row">

			<div class="<?php if ( get_theme_mod( 'header_sidebar_none' ) ) { echo "large-4"; } else { echo "large-12"; } ?> columns">
				<h2 class="page-title"><?php _e( 'Nothing Found', 'brewery' ); ?></h2>
			</div><!-- .large-4 / .large-12-->

			<?php if ( get_theme_mod( 'header_sidebar_none' ) ) { ?>
			<div class="large-8 columns header-widget" align="right">
				
				<?php if ( is_active_sidebar( 'header-sidebar' ) ) { ?>

					<?php dynamic_sidebar( 'header-sidebar' ); ?>

				<?php } ?>
				
			</div><!-- .large-8 -->
			<?php } // end header_sidebar_none ?>

		</div><!-- .row -->

	</div><!-- .header-widget-wrap -->

	<div class="row">

		<div class="large-12 columns">

		<div class="page-content">
			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

				<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'brewery' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

			<?php elseif ( is_search() ) : ?>

				<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'brewery' ); ?></p>
				<?php get_search_form(); ?>

			<?php else : ?>

				<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'brewery' ); ?></p>
				<?php get_search_form(); ?>

			<?php endif; ?>
		</div><!-- .page-content -->

		</div><!-- .large-12 -->

	</div><!-- .row -->

</section><!-- .no-results -->

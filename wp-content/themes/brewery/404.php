<?php
/**
 * The template for displaying 404 page (not found).
 *
 */

get_header(); ?>

<div class="row">
	
	<div id="primary" class="content-area clearfix">
		<main id="main" class="site-main" role="main">

			<div class="large-4 large-offset-1 columns end">

			<section class="error-404 not-found">

				<header class="page-header">
					<h1>
						<span class="title-error"><?php _e( 'Error', 'brewery' ); ?></span>
						<span class="title-404"><?php _e( '404', 'brewery' ); ?></span>
					</h1>
				</header><!-- .page-header -->

				<div class="page-content">

					<h3>
						<?php echo wp_kses_post( get_theme_mod( 'error_text', brewery_customizer_library_get_default( 'error_text' ) ) );?>
					</h3>

				</div><!-- .page-content -->

			</section><!-- .error-404 -->

		</div><!-- .large-4 -->

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- row -->

<?php get_footer(); ?>

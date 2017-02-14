<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

	<?php
		/**
		 * Widgetized header area.
		 * Since: Brewery 1.0
		 */
	?>
	<div class="header-widget-wrap">

		<div class="row">

			<div class="<?php if ( get_theme_mod( 'header_sidebar_shop' ) ) { echo "large-4"; } else { echo "large-12"; } ?> columns blog-title">

				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

					<h2 class="page-title"><?php woocommerce_page_title(); ?></h2>

				<?php endif; ?>

				<?php
					/**
					 * woocommerce_archive_description hook.
					 *
					 * @hooked woocommerce_taxonomy_archive_description - 10
					 * @hooked woocommerce_product_archive_description - 10
					 */
					do_action( 'woocommerce_archive_description' );
				?>

			</div><!-- .large-4 / .large-12 -->

			<?php if ( get_theme_mod( 'header_sidebar_shop' ) ) { ?>
			<div class="large-8 columns header-widget" align="right">

				<?php if ( is_active_sidebar( 'header-sidebar' ) ) { ?>

					<?php dynamic_sidebar( 'header-sidebar' ); ?>

				<?php } ?>

			</div><!-- .large-8 -->
			<?php } // end header_sidebar_shop ?>

		</div><!-- .row -->

	</div><!-- .header-widget -->

	<div class="row">

		<div class="large-2 columns shop-sidebar-widgets">


			<?php if ( is_active_sidebar( 'shop-sidebar' ) ) { ?>

				<?php dynamic_sidebar( 'shop-sidebar' ); ?>

			<?php } ?>

		<?php
			/**
			 * woocommerce_sidebar hook
			 *
			 * @hooked woocommerce_get_sidebar - 10
			 */
			do_action( 'woocommerce_sidebar' );
		?>

		</div><!-- .large-2 -->

		<div class="large-9 large-offset-1 columns">

		<?php if ( have_posts() ) : ?>

			<?php
				/**
				 * woocommerce_before_shop_loop hook
				 *
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
			?>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

	</div><!-- .large-9 -->

</div><!-- .row -->

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

<?php get_footer( 'shop' ); ?>

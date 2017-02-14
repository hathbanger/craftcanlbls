<?php

/**
 * Declare WooCommerce support
 */
add_theme_support( 'woocommerce' );

if ( function_exists( 'is_woocommerce' ) ) {
	
	/**
	 * Always show widget cart on cart and checkout pages. This is used for the modal when clicking on the menu cart icon
	 */
	add_filter( 'woocommerce_widget_cart_is_hidden', 'brewery_always_show_cart', 40, 0 );
	function brewery_always_show_cart() {
 	   return false;
	}
	
	/**
	 * Remove default WooCommerce styles
	 */
	add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

	/**
	 * Enqueue custom shop styles
	 */
	function brewery_woocommerce_scripts() {
			wp_enqueue_style( 'brewery-woocommerce', get_template_directory_uri() . '/woocommerce/shop.css' );
			wp_enqueue_style( 'brewery-woocommerce-mobile', get_template_directory_uri() . '/woocommerce/shop-mobile.css' );
		}
	add_action( 'wp_enqueue_scripts', 'brewery_woocommerce_scripts' );

	/**
	 * Ensure cart contents update when products are added to the cart via AJAX
	 */
	add_filter( 'woocommerce_add_to_cart_fragments', 'brewery_header_add_to_cart_fragment' );

	function brewery_header_add_to_cart_fragment( $fragments ) {
		ob_start();
		?>
		<a class="cart-contents" href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" title="<?php _e( 'View your shopping cart', 'brewery' ); ?>">
			<?php echo wp_kses_data( WC()->cart->get_cart_total() ); ?> <span class="count"><?php echo wp_kses_data( sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'brewery' ), WC()->cart->get_cart_contents_count() ) );?></span>
		</a>
		<?php
		
		$fragments['a.cart-contents'] = ob_get_clean();
		
		return $fragments;
	}

	/**
	 * Add the main row and column wrapper
	 */
	remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
	add_action('woocommerce_before_main_content', 'brewery_shop_wrapper_start', 10);

	function brewery_shop_wrapper_start() { ?>

		<div class="row">
			<div class="large-12 columns">

	<?php }

	remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
	add_action('woocommerce_after_main_content', 'brewery_shop_wrapper_end', 10);

	function brewery_shop_wrapper_end() { ?>

			</div><!-- .large-12 -->
		</div><!-- .row -->

	<?php }

	/**
	 * Customize Breadcrumbs
	 */
	add_filter( 'woocommerce_breadcrumb_defaults', 'brewery_change_breadcrumb_delimiter' );
	function brewery_change_breadcrumb_delimiter( $defaults ) {
		// Change the breadcrumb delimeter from '/' to '>'
		$defaults['delimiter'] = ' &#47; ';
		return $defaults;
	}

	/**
	 * Move Sale Notice Location to Product Summary
	 */
	remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
	add_action('woocommerce_single_product_summary', 'woocommerce_show_product_sale_flash', 1);

	/**
	 * Define image sizes for the theme
	 */
	if ( !function_exists( 'merch_woocommerce_image_dimensions' ) ) {

		function merch_woocommerce_image_dimensions() {
		  	$catalog = array(
				'width' 	=> '370',	// px
				'height'	=> '370',	// px
				'crop'		=> 1 		// true
			);

			$single = array(
				'width' 	=> '570',	// px
				'height'	=> '570',	// px
				'crop'		=> 1 		// true
			);

			$thumbnail = array(
				'width' 	=> '175',	// px
				'height'	=> '175',	// px
				'crop'		=> 1 		// true
			);

			// Image sizes
			update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
			update_option( 'shop_single_image_size', $single ); 		// Single product image
			update_option( 'shop_thumbnail_image_size', $thumbnail ); 	// Image gallery thumbs
		}
		add_action( 'init', 'merch_woocommerce_image_dimensions', 1 );

	} // end image dimensions function check

} // end function check is_woocommerce
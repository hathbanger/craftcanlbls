<?php
/**
 * Implements styles set in the theme customizer
 *
 */

if ( ! function_exists( 'brewery_customizer_library_build_styles' ) && class_exists( 'brewery_Customizer_Library_Styles' ) ) :
/**
 * Process user options to generate CSS needed to implement the choices.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function brewery_customizer_library_build_styles() {

	// Home Opacity Level
	$setting = 'home_opacity';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );

	if ( $mod !== brewery_customizer_library_get_default( $setting ) ) {

		$numeral = brewery_customizer_library_sanitize_text( $mod );

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.backstretch:before'
			),
			'declarations' => array(
				'opacity' => $numeral
			)
		) );
	}

	// Home Overlay Color
	$setting = 'home_bg_color';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );

	if ( $mod !== brewery_customizer_library_get_default( $setting ) ) {

		$color = brewery_sanitize_hex_color( $mod );

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.backstretch:before'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
	}

	// Header background color
	$setting = 'header_bg_color';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );

	if ( $mod !== brewery_customizer_library_get_default( $setting ) ) {

		$color = brewery_sanitize_hex_color( $mod );

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'header#masthead, .top-toggle-wrap, #infinite-footer .container'
			),
			'declarations' => array(
				'background' => $color
			)
		) );
	}

	// Anchor color
	$setting = 'anchor_hover_color';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );

	if ( $mod !== brewery_customizer_library_get_default( $setting ) ) {

		$color = brewery_sanitize_hex_color( $mod );

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'a:hover, .site-branding h1 a:hover, .site-footer aside.widget_nav_menu a:hover, .header-cart-wrap .header-cart-modal:hover, .header-cart-wrap a.cart-contents:hover, .copyright-wrap .site-info a:hover, aside.widget_tag_cloud a:hover, .single .entry-author a:hover, .comment .comment-reply-link:hover, .header-cart-wrap a.cart-contents:hover, .social-icons ul li a:hover, .woocommerce ul.products li.product:hover .star-rating span:before, .woocommerce-page ul.products li.product:hover .star-rating span:before, .woocommerce ul.products li.product figure span.onsale, .woocommerce-page ul.products li.product figure span.onsale, aside.widget_layered_nav li:hover a, .woocommerce-checkout-payment ul li.payment_method_paypal a:hover, .woocommerce-account a.edit:hover, ul.beer_post_list h2.beer-title:hover'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Anchor color background
	$setting = 'anchor_hover_color';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );

	if ( $mod !== brewery_customizer_library_get_default( $setting ) ) {

		$color = brewery_sanitize_hex_color( $mod );

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.comment .comment-reply-link, .woocommerce ul.products li.product:hover a.button, .woocommerce-page ul.products li.product:hover a.button, .woocommerce.archive ul.products li.product:hover mark, .woocommerce-page.archive ul.products li.product:hover mark, .woocommerce ul.products li.product:hover figure span.onsale, .woocommerce-page ul.products li.product:hover figure span.onsale, .woocommerce.single-product .product .entry-summary span.onsale, aside.widget_price_filter .price_slider_amount .button:hover, aside.widget_product_search input[type="submit"]:hover, aside.widget_shopping_cart a.button:hover'
			),
			'declarations' => array(
				'background' => $color
			)
		) );
	}

	// Anchor color border
	$setting = 'anchor_hover_color';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );

	if ( $mod !== brewery_customizer_library_get_default( $setting ) ) {

		$color = brewery_sanitize_hex_color( $mod );

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.blog article, .woocommerce-tabs ul.tabs li.active, aside.widget_product_tag_cloud .tagcloud a:hover, .page.woocommerce-checkout .woocommerce-info a:hover, .entry-content blockquote'
			),
			'declarations' => array(
				'border-color' => $color
			)
		) );
	}




	// Navigation Background Color
	$setting = 'nav_bg_color';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );

	if ( $mod !== brewery_customizer_library_get_default( $setting ) ) {

		$color = brewery_sanitize_hex_color( $mod );

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.top-bar-section li:not(.has-form) a:hover:not(.button),
				.top-bar-section li.active:not(.has-form) a:hover:not(.button),
				.top-bar-section  ul li:hover:not(.has-form) > a, 
				.top-bar-section ul li.has-dropdown:hover:not(.has-form) > a, 
				.top-bar-section li.active:not(.has-form) a.menu-item-has-children:hover:not(.button),.top-bar-section .dropdown li:not(.has-form):not(.active) > a:not(.button),
				.top-bar-section .dropdown li:not(.has-form):not(.active) > a:hover:not(.button),
				.top-bar-section .dropdown li.active:not(.has-form) a:not(.button), .top-bar-section li.active:not(.has-form) a:not(.button)'
			),
			'declarations' => array(
				'background'  => $color
			)
		) );
	}

	// Slidedown Sidebar Icon Color
	$setting = 'sidebar_icon_bg';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );

	if ( $mod !== brewery_customizer_library_get_default( $setting ) ) {

		$color = brewery_sanitize_hex_color( $mod );

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.top-toggle-button button i'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Slidedown Sidebar Icon Color Hover
	$setting = 'sidebar_icon_hover_bg';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );

	if ( $mod !== brewery_customizer_library_get_default( $setting ) ) {

		$color = brewery_sanitize_hex_color( $mod );

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.top-toggle-button button:hover i'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Slidedown Sidebar Icon Color Hover
	$setting = 'sidebar_icon_hover_bg';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );

	if ( $mod !== brewery_customizer_library_get_default( $setting ) ) {

		$color = brewery_sanitize_hex_color( $mod );

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'nav.push-menu-top button.close-menu:hover'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
	}

	// Slidedown Sidebar Height
	$setting = 'sidebar_height';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );

	if ( $mod !== brewery_customizer_library_get_default( $setting ) ) {

		$numeral = brewery_customizer_library_sanitize_text( $mod );

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'nav.push-menu-top'
			),
			'declarations' => array(
				'height' => $numeral,
				'top' => "-".$numeral
			)
		) );
	}

	// Slidedown Sidebar Height
	$setting = 'sidebar_height';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );

	if ( $mod !== brewery_customizer_library_get_default( $setting ) ) {

		$numeral = brewery_customizer_library_sanitize_text( $mod );

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body.pmt-open #wrapper'
			),
			'declarations' => array(
				'top' => $numeral
			)
		) );
	}

	// Menu Font Color
	$setting = 'menu_font_color';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );

	if ( $mod !== brewery_customizer_library_get_default( $setting ) ) {

		$color = brewery_sanitize_hex_color( $mod );

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.top-bar-section ul li > a, .top-bar-section li:not(.has-form) a:hover:not(.button), .top-bar-section li.active:not(.has-form) a:hover:not(.button), .top-bar-section ul li:hover:not(.has-form) > a, .top-bar-section ul li.has-dropdown:hover:not(.has-form) > a, .top-bar-section li.active:not(.has-form) a.menu-item-has-children:hover:not(.button), .top-bar-section .dropdown li:not(.has-form):not(.active) > a:not(.button), .top-bar-section .dropdown li:not(.has-form):not(.active) > a:hover:not(.button), .top-bar-section .dropdown li.active:not(.has-form) a:not(.button), .top-bar-section li.active:not(.has-form) a:not(.button)'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Header Cart Color
	$setting = 'header_cart_color';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );

	if ( $mod !== brewery_customizer_library_get_default( $setting ) ) {

		$color = brewery_sanitize_hex_color( $mod );

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.header-cart-wrap .header-cart-modal, .header-cart-wrap .forward-slash, .header-cart-wrap a.cart-contents'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// 404 Page Text Color
	$setting = 'error_text_color';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );

	if ( $mod !== brewery_customizer_library_get_default( $setting ) ) {

		$color = brewery_sanitize_hex_color( $mod );

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.error-404 .page-header h1, .error-404 .page-content h3, .error-404 .page-content h3 a'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Footer Button Color
	$setting = 'footer-button-color';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );

	if ( $mod !== brewery_customizer_library_get_default( $setting ) ) {

		$color = brewery_sanitize_hex_color( $mod );

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.footer-button-wrap .button'
			),
			'declarations' => array(
				'background' => $color
			)
		) );
	}

	// Footer background color
	$setting = 'footer_bg_color';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );

	if ( $mod !== brewery_customizer_library_get_default( $setting ) ) {

		$color = brewery_sanitize_hex_color( $mod );

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer, .copyright-wrap'
			),
			'declarations' => array(
				'background' => $color
			)
		) );
	}

	// Primary Font
	$setting = 'primary-font';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );

	if ( $mod != brewery_customizer_library_get_default( $setting ) ) {

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'h1,h2,h3,h4,h5,h6'
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );

	}

	// Secondary Font
	$setting = 'secondary-font';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );

	if ( $mod != brewery_customizer_library_get_default( $setting ) ) {

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'p, p a, table, ul, li a, span a, a.woocommerce-review-link, p.price, p.price ins, p.price del, .woocommerce span.onsale, .copyright-wrap .site-info, .home-content ul.beer_post_list h2.beer-title',
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );

	}

	// Logo Font
	$setting = 'logo-font';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );

	if ( $mod != brewery_customizer_library_get_default( $setting ) ) {

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-branding h1',
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );

	}

	// Logo Tagline Font
	$setting = 'logo-tagline-font';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );

	if ( $mod != brewery_customizer_library_get_default( $setting ) ) {

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-branding .site-description',
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );

	}

	// Menu Font
	$setting = 'menu-font';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );

	if ( $mod != brewery_customizer_library_get_default( $setting ) ) {

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.top-bar-section ul li > a',
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );

	}

	// Page Header Font
	$setting = 'page-header-font';
	$mod = get_theme_mod( $setting, brewery_customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );

	if ( $mod != brewery_customizer_library_get_default( $setting ) ) {

		brewery_Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.header-widget-wrap .blog-title h2, .woocommerce-cart .entry-header h1, .woocommerce-checkout .entry-header h1, .page header.entry-header h1, #infinite-footer .blog-info a, .single-beer header.entry-header',
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );

	}

}
endif;

add_action( 'brewery_customizer_library_styles', 'brewery_customizer_library_build_styles' );

if ( ! function_exists( 'brewery_custom_customizer_library_styles' ) ) :
/**
 * Generates the style tag and CSS needed for the theme options.
 *
 * By using the "brewery_Customizer_Library_Styles" filter, different components can print CSS in the header.
 * It is organized this way to ensure there is only one "style" tag.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function brewery_custom_customizer_library_styles() {

	do_action( 'brewery_customizer_library_styles' );

	// Echo the rules
	$css = brewery_Customizer_Library_Styles()->build();

		echo "\n<!-- Begin Custom CSS -->\n<style type=\"text/css\" id=\"brewery-custom-css\">\n";
		echo $css; ?>
		.site-branding img {
			width: <?php echo esc_attr( get_theme_mod( 'logo_width' ) ); ?>;
			height: <?php echo esc_attr( get_theme_mod( 'logo_height' ) ); ?>;
		}

		<?php echo "\n</style>\n<!-- End Custom CSS -->\n";
}
endif;

add_action( 'wp_head', 'brewery_custom_customizer_library_styles', 11 );
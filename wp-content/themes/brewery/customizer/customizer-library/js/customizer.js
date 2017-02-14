/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );

	// Site description
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Primary Font
	wp.customize( 'primary-font', function( value ) {
		value.bind( function( to ) {
			$( 'h1,h2,h3,h4,h5,h6,h1 a,h2 a,h3 a,h4 a,h5 a,h6 a' ).css( 'font-family', to );
		} );
	} );

	// Seconday Font
	wp.customize( 'secondary-font', function( value ) {
		value.bind( function( to ) {
			$( 'p, p a, table, ul, li a, span a, a.woocommerce-review-link, p.price, p.price ins, p.price del, .woocommerce span.onsale, .copyright-wrap .site-info, .home-content ul.beer_post_list h2.beer-title' ).css( 'font-family', to );
		} );
	} );

	// Page Header Font
	wp.customize( 'page-header-font', function( value ) {
		value.bind( function( to ) {
			$( '.header-widget-wrap .blog-title h2, .woocommerce-cart .entry-header h1, .woocommerce-checkout .entry-header h1, .page header.entry-header h1, #infinite-footer .blog-info a, .single-beer header.entry-header' ).css( 'font-family', to );
		} );
	} );

	// Logo Font
	wp.customize( 'logo-font', function( value ) {
		value.bind( function( to ) {
			$( '.site-branding h1' ).css( 'font-family', to );
		} );
	} );

	// Tagline Font
	wp.customize( 'logo-tagline-font', function( value ) {
		value.bind( function( to ) {
			$( '.site-branding .site-description' ).css( 'font-family', to );
		} );
	} );

	// Menu Font
	wp.customize( 'menu-font', function( value ) {
		value.bind( function( to ) {
			$( '.top-bar-section ul li > a' ).css( 'font-family', to );
		} );
	} );

	// Header Background Color
	wp.customize( 'header_bg_color', function( value ) {
		value.bind( function( to ) {
			$( 'header#masthead, .top-toggle-wrap, #infinite-footer .container' ).css( 'background', to );
		} );
	} );

	// Slidedown Icon Toggle Color
	wp.customize( 'sidebar_icon_bg', function( value ) {
		value.bind( function( to ) {
			$( '.top-toggle-button button i' ).css( 'color', to );
		} );
	} );

	// Footer Background Color
	wp.customize( 'footer_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-footer, .copyright-wrap' ).css( 'background', to );
		} );
	} );

	// Footer Copyright
	wp.customize( 'footer_copyright', function( value ) {
		value.bind( function( to ) {
			$( '.copyright-wrap .site-info' ).text( to );
		} );
	} );

	// Footer Button Text
	wp.customize( 'footer-button-text', function( value ) {
		value.bind( function( to ) {
			$( '.footer-button-wrap .button' ).text( to );
		} );
	} );

	// Footer Button Color
	wp.customize( 'footer-button-color', function( value ) {
		value.bind( function( to ) {
			$( '.footer-button-wrap .button' ).css( 'background', to );
		} );
	} );

	// Blog Title
	wp.customize( 'blog_title', function( value ) {
		value.bind( function( to ) {
			$( '.header-widget-wrap .blog-title h2' ).text( to );
		} );
	} );

	// Blog Subtitle
	wp.customize( 'blog_subtitle', function( value ) {
		value.bind( function( to ) {
			$( '.header-widget-wrap .blog-title p' ).text( to );
		} );
	} );

	// Header Cart Color
	wp.customize( 'header_cart_color', function( value ) {
		value.bind( function( to ) {
			$( '.header-cart-wrap .header-cart-modal, .header-cart-wrap .forward-slash, .header-cart-wrap a.cart-contents' ).css( 'color', to );
		} );
	} );

	// 404 Error Page Text Color
	wp.customize( 'error_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.error-404 .page-header h1, .error-404 .page-content h3, .error-404 .page-content h3 a' ).css( 'color', to );
		} );
	} );


} )( jQuery );

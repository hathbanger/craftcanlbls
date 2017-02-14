<?php
/**
 * Functions and definitions
 *
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1020; /* pixels */
}

if ( ! function_exists( 'brewery_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function brewery_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on brewery, use a find and replace
	 * to change 'brewery' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'brewery', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'blog-list' );
	add_image_size( 'blog-single', 770, 530, true );
	add_image_size( 'page-full', 1170, 530, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'brewery' ),
		'social' => __( 'Social Menu', 'brewery' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	// add_theme_support( 'post-formats', array(
	// 	'gallery', 'image',
	// ) );

	/*
	 * Enable support for shortcodes in text widgets
	 * See http://codex.wordpress.org/Function_Reference/do_shortcode
	 */
	add_filter('widget_text', 'do_shortcode');

}
endif; // brewery_setup
add_action( 'after_setup_theme', 'brewery_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function brewery_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Inner Sidebar', 'brewery' ),
		'id'            => 'inner-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Slidedown Sidebar', 'brewery' ),
		'id'            => 'slidedown-sidebar',
		'description'   => 'Add a widget to the top slidedown toggle sidebar. Additional customization in the theme options: Appearance > Customize',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Shop Sidebar', 'brewery' ),
		'id'            => 'shop-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Header', 'brewery' ),
		'id'            => 'header-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Left', 'brewery' ),
		'id'            => 'footer-left',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Center', 'brewery' ),
		'id'            => 'footer-center',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Right', 'brewery' ),
		'id'            => 'footer-right',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'brewery_widgets_init' );

/**
 * Load Default Fonts
 */
require get_template_directory() . '/inc/fonts.php';

/**
 * Enqueue scripts and styles.
 */
function brewery_scripts() {

	/**
	 * Get the theme's version number for cache busting
	 */
	$brewery = wp_get_theme();

	//wp_enqueue_script( 'jquery-masonry' );
	wp_enqueue_script( 'masonry' );

	wp_enqueue_style( 'brewery-foundation-style', get_template_directory_uri() . '/app.css' );
	wp_enqueue_style( 'brewery-fonts', brewery_fonts(), array(), null );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/fonts/font-awesome.css', array(), '4.6.1' );
	wp_enqueue_style( 'brewery-flexslider', get_template_directory_uri() . '/inc/flexslider/flexslider.css' );
	wp_enqueue_style( 'brewery-animate', get_template_directory_uri() . '/inc/css/animate.css' );

	wp_enqueue_style( 'brewery-style', get_template_directory_uri() . '/style.css', array(), $brewery['Version'] );

	wp_enqueue_style( 'brewery-store-locator', get_template_directory_uri() . '/inc/css/store-locator.css', false, $brewery['Version'] );

	wp_enqueue_script( 'brewery-modernizr', get_template_directory_uri() . '/js/foundation/modernizr.js', array(), '2.8.3', false );
	wp_enqueue_script( 'brewery-foundation', get_template_directory_uri() . '/js/foundation/foundation.js', array( 'jquery' ), '5.5.2', false );
	wp_enqueue_script( 'brewery-topbar', get_template_directory_uri() . '/js/foundation/foundation.topbar.js', array( 'jquery' ), '5.5.2', false );

	wp_enqueue_script( 'brewery-combined', get_template_directory_uri() . '/js/combined.js', array( 'jquery' ), $brewery['Version'], true );
	wp_enqueue_script( 'brewery-init', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), $brewery['Version'], true );

	if ( is_page_template( 'template-contact.php' ) ) { // only load on the contact page template
		// Load Google API key if provided. Google requires new site to use API
		$key = sanitize_text_field( get_theme_mod( 'google_map_api_key', brewery_customizer_library_get_default( 'google_map_api_key' ) ) );
		$api_key = ! empty( $key ) ? 'key=' . $key : '';
	
		wp_enqueue_script('rescue_googlemap',  get_template_directory_uri() . '/js/google-map.js', array('jquery'), '1.0', true );
		wp_enqueue_script('rescue_googlemap_api', 'https://maps.googleapis.com/maps/api/js?' . $api_key, array('jquery'), '1.0', true );
		
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/**
	 * IE Styles
	 */
	global $wp_styles;
    wp_enqueue_style( 'brewery-ie', get_template_directory_uri() . '/inc/css/ie.css' );
    $wp_styles->add_data( 'brewery-ie', 'conditional', 'IE 9' );

}
add_action( 'wp_enqueue_scripts', 'brewery_scripts' );

/**
 * Load Foundation functions
 */
require get_template_directory() . '/inc/foundation.php';

/**
 * Load customizer library files
 */
// Helper library for the theme customizer.
require get_template_directory() . '/customizer/customizer-library/customizer-library.php';

// Define options for the theme customizer.
require get_template_directory() . '/customizer/customizer-options.php';

// Output inline styles based on theme customizer selections.
require get_template_directory() . '/customizer/styles.php';

// Additional filters and actions based on theme customizer selections.
require get_template_directory() . '/customizer/mods.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load home hero settings
 */
require get_template_directory() . '/inc/home-hero.php';

/**
 * Load WooCommerce Files
 */
require get_template_directory() . '/woocommerce/woocommerce.php';

/**
 * Plugin activation Notice
 */
require get_template_directory() . '/inc/tgm/plugin-activation.php';

/**
 * Retina Support
 */
require get_template_directory() . '/inc/retina.php';

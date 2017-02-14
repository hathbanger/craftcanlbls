<?php
/**
 * Adds theme support for header images if not already present.
 */
function brewery_backstretch_setup() {
	if ( ! get_theme_support( 'custom-header' ) )

	$args = array(
		'default-image' 	=> get_template_directory_uri() . '/img/home-demo.jpg',
		'width'             => 2000,
		'height'            => 1300,
	);
	add_theme_support( 'custom-header', $args );
}

add_action( 'after_setup_theme', 'brewery_backstretch_setup', 100 );

/**
 * Required scripts are loaded.
 */
function brewery_home_hero_scripts() {

	/**
	 * Check for the home page template and if the video option is not selected
	 */
	if ( is_page_template( 'template-home.php' ) && get_theme_mod( 'video_checkbox' ) == 0 ) {

		/**
		 * Registers the backstretch script
		 */
		wp_enqueue_script( 'basic-backstretch-js', get_template_directory_uri() . '/js/backstretch.min.js', array('jquery'), '20141231', true );

		/**
		 * Load backstretch script in the footer
		 */
		add_action( 'wp_footer', 'brewery_basic_backstretch_inline_script', 100 );

	} // end get_uploaded_header_images 

	/**
	 * Check for the home page template and if the video option is selected
	 */
	if ( is_page_template( 'template-home.php' ) && get_theme_mod( 'video_checkbox' ) == 1 ) {

		/**
		 * Register the video script
		 */
		wp_enqueue_script( 'brewery-swfobject', get_template_directory_uri() . '/js/video/libs/swfobject.js', array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'brewery-modernizr-vid', get_template_directory_uri() . '/js/video/libs/modernizr.video.js', array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'brewery-video-background', get_template_directory_uri() . '/js/video/video_background.min.js', array( 'jquery' ), '1.0', true );

		/**
		 * Load video script in the footer
		 */
		add_action( 'wp_footer', 'brewery_video_inline_script', 100 );

	} // end get_uploaded_header_images 

}

add_action( 'wp_enqueue_scripts', 'brewery_home_hero_scripts' );

function brewery_video_inline_script() { 

	/**
	 * Get our video options variables.
	 */
	$video_fallback_image = get_theme_mod( 'video_fallback_image', brewery_customizer_library_get_default( 'video_fallback_image' ) );
	$video_loop = get_theme_mod( 'video_loop', brewery_customizer_library_get_default( 'video_loop' ) );
	$video_autoplay = get_theme_mod( 'video_autoplay', brewery_customizer_library_get_default( 'video_autoplay' ) );
	$video_muted = get_theme_mod( 'video_muted', brewery_customizer_library_get_default( 'video_muted' ) );
	$video_youtube_id = get_theme_mod( 'video_youtube_id', brewery_customizer_library_get_default( 'video_youtube_id' ) );
	$video_start_time = get_theme_mod( 'video_start_time', brewery_customizer_library_get_default( 'video_start_time' ) );
	$video_ratio = get_theme_mod( 'video_ratio', brewery_customizer_library_get_default( 'video_ratio' ) );


	/**
	 * Initiate the video script and settings
	 */
?>
	<script>
		jQuery(document).ready(function($) {

			var Video_back = new video_background($(".header-video"), { 
				"position": 	"absolute",	 // absolute or fixed
				"z-index": 		"-1", // "-1" or "0"

				"loop": 		<?php echo esc_attr( $video_loop ); ?>, 		// true or false
				"autoplay": 	<?php echo esc_attr( $video_autoplay ); ?>,		// true or false
				"muted": 		<?php echo esc_attr( $video_muted ); ?>,		// true or false

				"youtube": 		"<?php echo esc_attr( $video_youtube_id ); ?>",	// Youtube video id
				"start": 		<?php echo esc_attr( $video_start_time ); ?>,	// Sets the time in seconds you want the video to start
				"video_ratio": 	<?php echo esc_attr( $video_ratio ); ?>, 		// Video width divided by height

				"fallback_image": "<?php echo esc_url( $video_fallback_image ); ?>", // Fallback image path

				"priority": 	"html5", // "html5" or "flash"
			});

		});
	</script>

<?php } // end brewery_video_inline_script

/**
 * Inline script will load the full screen background image after all other images
 * on the page have loaded.
 */
function brewery_basic_backstretch_inline_script() { 

	if ( is_page_template( 'template-home.php' ) ) { ?>

	<script>
		jQuery( window ).load( function() {
			jQuery(".page-template-template-home .home-slider-container").backstretch([ 
			<?php

				/**
				 * Get our customizer options variables.
				 */
				$home_duration = get_theme_mod( 'home_duration', brewery_customizer_library_get_default( 'home_duration' ) );
				$home_fade = get_theme_mod( 'home_fade', brewery_customizer_library_get_default( 'home_fade' ) );

			    $headers = get_uploaded_header_images(); 

				/**
				 * Display demo image if custom images haven't been uploaded yet
				 */
			    if ( empty( $headers ) ) { 
			    	$demoimage = get_template_directory_uri() . '/img/home-demo.jpg';
			    ?>

			    "<?php echo esc_url( $demoimage ); ?>",

			    <?php } else {

				/**
				 * Loop through header images
				 */
			    foreach( $headers as $header ) { ?>

			    "<?php echo $header['url']; ?>",

			<?php } } ?>
	  ], {duration: <?php echo esc_html( $home_duration ); ?>, fade: <?php echo esc_html( $home_fade) ; ?>});
		});
	</script>

	<?php } // end is_front_page ?>

<?php } // end brewery_basic_backstretch_inline_script ?>

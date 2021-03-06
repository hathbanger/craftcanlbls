<?php
/**
 * Builds out customizer options
 *
 */

if ( ! function_exists( 'brewery_customizer_library_register' ) ) :

/**
 * Customizing default customizer options
 * 
 */
function brewery_rescue_customize_register( $wp_customize ) {
	// Remove the default colors section
	$wp_customize->remove_section('colors');
}
add_action( 'customize_register', 'brewery_rescue_customize_register' );

/**
 * Configure settings and controls for the theme customizer
 *
 * @since  1.0.0.
 *
 * @param  object $wp_customize The global customizer object.
 * @return void
 */
function brewery_customizer_library_register( $wp_customize ) {

	$customizer_library = Customizer_Library::Instance();

	$options = $customizer_library->get_options();

	// Bail early if we don't have any options.
	if ( empty( $options ) ) {
		return;
	}

	// Add the sections
	if ( isset( $options['sections'] ) ) {
		brewery_customizer_library_add_sections( $options['sections'], $wp_customize );
	}

	// Add Panels
	if ( isset( $options['panels'] ) ) {
		brewery_customizer_library_add_panels( $options['panels'], $wp_customize );
	}

	// Sets the priority for each control added
	$loop = 0;

	// Loops through each of the options
	foreach( $options as $option ) {

		if ( isset( $option['type'] ) ) {

			$loop++;

			// Apply a default sanitization if one isn't set
			if ( ! isset( $option['sanitize_callback'] ) ) {
				$option['sanitize_callback'] = brewery_customizer_library_get_sanitization( $option['type'] );
			}

			// Set blank active_callback if one isn't set
			if ( ! isset( $option['active_callback'] ) ) {
				$option['active_callback'] = '';
			}

			// Set blank description if one isn't set
			if ( ! isset( $option['description'] ) ) {
				$option['description'] = '';
			}

			// Add the setting
			brewery_customizer_library_add_setting( $option, $wp_customize );

			// Priority for control
			if ( ! isset( $option['priority'] ) ) {
				$option['priority'] = $loop;
			}

			// Adds control based on control type
			switch ( $option['type'] ) {

				case 'text':
				case 'url':
				case 'select':
				case 'radio':
				case 'checkbox':
				case 'range':
				case 'dropdown-pages':

					$wp_customize->add_control(
						$option['id'], $option
					);

				break;

				case 'color':

					$wp_customize->add_control(
						new WP_Customize_Color_Control(
							$wp_customize, $option['id'], $option
						)
					);

				break;

				case 'image':

					$wp_customize->add_control(
						new WP_Customize_Image_Control(
							$wp_customize,
							$option['id'], array(
								'label'             => $option['label'],
								'section'           => $option['section'],
								'sanitize_callback' => $option['sanitize_callback'],
								'priority'          => $option['priority'],
								'active_callback'	=> $option['active_callback'],
								'description'	    => $option['description']
							)
						)
					);

				break;

				case 'upload':

					$wp_customize->add_control(
						new WP_Customize_Upload_Control(
							$wp_customize,
							$option['id'], array(
								'label'             => $option['label'],
								'section'           => $option['section'],
								'sanitize_callback' => $option['sanitize_callback'],
								'priority'          => $option['priority'],
								'active_callback'	=> $option['active_callback'],
								'description'	    => $option['description']
							)
						)
					);

				break;

				case 'textarea':

					// Custom control required before WordPress 4.0
					if ( version_compare( $GLOBALS['wp_version'], '3.9.2', '<=' ) ) :

						$wp_customize->add_control(
							new brewery_Customizer_Library_Textarea(
								$wp_customize, $option['id'], $option
							)
						);

					else :

						$wp_customize->add_control( 'setting_id', array(
							$wp_customize->add_control(
								$option['id'], $option
							)
						) );

					endif;

				break;

			}
		}
	}
}

endif;

add_action( 'customize_register', 'brewery_customizer_library_register', 100 );

/**
 * Add the customizer sections
 *
 * @since  1.2.0.
 *
 * @param  array $option
 * @return void
 */
function brewery_customizer_library_add_sections( $sections, $wp_customize )  {

	foreach( $sections as $section ) {

		if ( !isset( $section['description'] ) ) {
			$section['description'] = false;
		}

		$wp_customize->add_section( $section['id'], $section );
	}

}

/**
 * Add the customizer panels
 *
 * @since  1.2.0.
 *
 * @param  array $option
 *
 * @return void
 */
function brewery_customizer_library_add_panels( $panels, $wp_customize ) {
	foreach ( $panels as $panel ) {
		if ( ! isset( $panel['description'] ) ) {
			$panel['description'] = FALSE;
		}
		$wp_customize->add_panel( $panel['id'], $panel );
	}
}

/**
 * Add the setting and proper sanitization
 *
 * @since  1.2.0.
 *
 * @param  array $option
 * @return void
 */
function brewery_customizer_library_add_setting( $option, $wp_customize )  {

	$settings_default = array(
		'default' => null,
		'option_type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'theme_supports' => null,
		'transport' => null,
		'sanitize_callback' => 'wp_kses_post',
		'sanitize_js_callback' => null,
		'description' => null
	);

	// Settings defaults
	$settings = array_merge( $settings_default, $option );

	// Arguments for $wp_customize->add_setting
	$wp_customize->add_setting(	$option['id'], array(
			'default' => $settings['default'],
			'type' => $settings['option_type'],
			'capability' => $settings['capability'],
			'theme_supports' => $settings['theme_supports'],
			'transport' => $settings['transport'],
			'sanitize_callback' => $settings['sanitize_callback'],
			'sanitize_js_callback' => $settings['sanitize_js_callback'],
			'description' => $settings['description']
		)
	);

}

/**
 * Get default sanitization function for option type
 *
 * @since  1.2.0.
 *
 * @param  array $option
 * @return void
 */
function brewery_customizer_library_get_sanitization( $type )  {

	if ( 'select' == $type || 'radio' ==  $type ) {
		return 'brewery_customizer_library_sanitize_choices';
	}

	if ( 'checkbox' == $type ) {
		return 'brewery_customizer_library_sanitize_checkbox';
	}

	if ( 'color' == $type ) {
		return 'brewery_sanitize_hex_color';
	}

	if ( 'upload' == $type || 'image' == $type ) {
		return 'brewery_customizer_library_sanitize_file_url';
	}

	if ( 'text' == $type || 'textarea' == $type  ) {
		return 'brewery_customizer_library_sanitize_text';
	}

	if ( 'url' == $type ) {
		return 'esc_url';
	}

	if ( 'range' == $type ) {
		return 'brewery_customizer_library_sanitize_range';
	}
	
	if ( 'dropdown-pages' == $type ) {
		return 'absint';
	}

	// If a custom option is being used, return false
	return false;
}

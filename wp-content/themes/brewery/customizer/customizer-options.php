<?php
/**
 * Defines customizer options
 *
 */

function brewery_customizer_library_options() {

	// Theme defaults
	$primary_color = '#fac32b'; // Yellow
	$primary_color_alt = '#8bd0dd'; // Blue
	$pewter = '#616671'; // Header
	$night_grey = '#888f9e'; // Paragraphs
	$midnight = '#444b59'; // Anchor
	$black = '#000000';
	$white = '#ffffff';
	$header_bg = '#616161';
	$header_nav_bg = '#535050';
	$valet = '#a0917f';
	$home_slider_bg = "#545454";

	$home_bg_image = get_template_directory_uri() . '/img/home-demo.jpg';

	// Animations
	$animate = array(
		'none' => __('none', 'brewery'),
		'bounce' => __('bounce', 'brewery'),
		'flash' => __('flash', 'brewery'),
		'pulse' => __('pulse', 'brewery'),
		'shake' => __('shake', 'brewery'),
		'wobble' => __('wobble', 'brewery'),
		'bounceIn' => __('bounceIn', 'brewery'),
		'bounceInDown' => __('bounceInDown', 'brewery'),
		'bounceInLeft' => __('bounceInLeft', 'brewery'),
		'bounceInRight' => __('bounceInRight', 'brewery'),
		'bounceInUp' => __('bounceInUp', 'brewery'),
		'fadeIn' => __('fadeIn', 'brewery'),
		'fadeInDown' => __('fadeInDown', 'brewery'),
		'fadeInDownBig' => __('fadeInDownBig', 'brewery'),
		'fadeInLeft' => __('fadeInLeft', 'brewery'),
		'fadeInLeftBig' => __('fadeInLeftBig', 'brewery'),
		'fadeInRight' => __('fadeInRight', 'brewery'),
		'fadeInRightBig' => __('fadeInRightBig', 'brewery'),
		'fadeInUp' => __('fadeInUp', 'brewery'),
		'fadeInUpBig' => __('fadeInUpBig', 'brewery'),
		'lightSpeedIn' => __('lightSpeedIn', 'brewery'),
		'lightSpeedOut' => __('lightSpeedOut', 'brewery'),
		'rotateIn' => __('rotateIn', 'brewery'),
		'rotateInDownLeft' => __('rotateInDownLeft', 'brewery'),
		'rotateInDownRight' => __('rotateInDownRight', 'brewery'),
		'rotateInUpLeft' => __('rotateInUpLeft', 'brewery'),
		'rotateInUpRight' => __('rotateInUpRight', 'brewery'),
		'zoomIn' => __('zoomIn', 'brewery'),
		'zoomInDown' => __('zoomInDown', 'brewery'),
		'zoomInLeft' => __('zoomInLeft', 'brewery'),
		'zoomInRight' => __('zoomInRight', 'brewery'),
		'zoomInUp' => __('zoomInUp', 'brewery')
	);

	// Video Options
	$video_loop = array(
		'true' => __('true', 'brewery'),
		'false' => __('false', 'brewery'),
	);
	$video_autoplay = array(
		'true' => __('true', 'brewery'),
		'false' => __('false', 'brewery'),
	);
	$video_mute = array(
		'true' => __('true', 'brewery'),
		'false' => __('false', 'brewery'),
	);

	// Example Usage Animations
	// $options['button_animate'] = array(
	// 	'id' => 'button_animate',
	// 	'label'   => __( 'Donation button animation effect', 'brewery' ),
	// 	'section' => $section,
	// 	'type'    => 'select',
	// 	'choices' => $animate,
	// 	'default' => 'none',
	// 	'active_callback' => 'is_front_page',
	// );


	// Stores all the controls that will be added
	$options = array();

	// Stores all the sections to be added
	$sections = array();

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Stores all the panels to be added
	$panels = array();

	// Typography
	$section = 'typography';
	$font_choices = customizer_library_get_font_choices();

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Typography', 'brewery' ),
		'priority' => '20',
	);

	$options['primary-font'] = array(
		'id' => 'primary-font',
		'label'   => __( 'Header Font', 'brewery' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $font_choices,
		'default' => 'Source Sans Pro',
	);

	$options['secondary-font'] = array(
		'id' => 'secondary-font',
		'label'   => __( 'Paragraph Font', 'brewery' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $font_choices,
		'default' => 'Source Sans Pro',
	);

	$options['page-header-font'] = array(
		'id' => 'page-header-font',
		'label'   => __( 'Page Header Font', 'brewery' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $font_choices,
		'default' => 'Norican',
	);
	// Button
	$options['anchor_hover_color'] = array(
		'id' => 'anchor_hover_color',
		'label'   => __( 'Link Color', 'brewery' ),
		'description' => __( 'Sitewide link and button color hover.', 'brewery' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $primary_color,
	);

	$panel = 'header-panel';

	$panels[] = array(
	    'id' => $panel,
	    'title' => __( 'Header Panel', 'brewery' ),
	    'priority' => '10'
	);

	// Header
	$section = 'header';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Header', 'brewery' ),
		'priority' => '10',
		'description' => __( 'Sitewide header options.', 'brewery' ),
		'panel' => $panel
	);

	// Header: Title & Tagline
	$section = 'title_tagline';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Site Title & Tagline', 'brewery' ),
		'priority' => '10',
		'description' => __( 'Enter the site title and description.', 'brewery' ),
		'panel' => $panel
	);

	$options['logo-font'] = array(
		'id' => 'logo-font',
		'label'   => __( 'Logo Font', 'brewery' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $font_choices,
		'default' => 'Open Sans',
	);

	$options['logo-tagline-font'] = array(
		'id' => 'logo-tagline-font',
		'label'   => __( 'Tagline Font', 'brewery' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $font_choices,
		'default' => 'Open Sans',
	);

	// Header: Menus
	$section = 'nav';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Navigation', 'brewery' ),
		'priority' => '10',
		'description' => __( 'Your theme supports a header menu. Select which menu you would like to use. You can edit your menu content on the Menus screen in the Appearance section.', 'brewery' ),
		'panel' => $panel
	);

	$options['menu-font'] = array(
		'id' => 'menu-font',
		'label'   => __( 'Tagline Font', 'brewery' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $font_choices,
		'default' => 'Open Sans',
	);

	// Header: Logo
	$section = 'branding';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Logo Image', 'brewery' ),
		'priority' => '10',
		'description' => __( 'Upload logo or enter site title and description.', 'brewery' ),
		'panel' => $panel
	);

	$options['logo'] = array(
		'id' => 'logo',
		'label'   => __( 'Logo', 'brewery' ),
		'section' => $section,
		'type'    => 'image',
		'description' => __( 'If no image is uploaded, theme will display Site Title &amp; Tagline.', 'brewery' ),
		'default' => '',
	);

	$options['logo_height'] = array(
		'id' => 'logo_height',
		'label'   => __( 'Enter the height for the logo image. eg. 115px', 'brewery' ),
		'section' => $section,
		'type'    => 'text',
		'default' => '',
	);

	$options['logo_width'] = array(
		'id' => 'logo_width',
		'label'   => __( 'Enter the width for your logo image. eg: 305px', 'brewery' ),
		'section' => $section,
		'type'    => 'text',
		'default' => '',
	);

	// Header: Colors
	$section = 'background_colors';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Colors', 'brewery' ),
		'priority' => '10',
		'description' => __( 'Select the colors for the header.', 'brewery' ),
		'panel' => $panel,
	);

	$options['header_bg_color'] = array(
		'id' => 'header_bg_color',
		'label'   => __( 'Header Background', 'brewery' ),
		'description' => __( 'Background color for inner pages header.', 'brewery' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $header_bg,
		'transport'	=> 'postMessage',
	);

	$options['nav_bg_color'] = array(
		'id' => 'nav_bg_color',
		'label'   => __( 'Navigation Background', 'brewery' ),
		'description' => __( 'Background color for inner pages navigation.', 'brewery' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $header_nav_bg,
	);

	$options['menu_font_color'] = array(
		'id' => 'menu_font_color',
		'label'   => __( 'Menu Font Color', 'brewery' ),
		'description' => __( 'Font color for the main header menu.', 'brewery' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $white,
	);

	// Header: Slidedown
	$section = 'header_slidedown';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Slidedown Sidebar', 'brewery' ),
		'priority' => '10',
		'description' => __( 'Options for the top header slidedown widget area.', 'brewery' ),
		'panel' => $panel
	);

	$options['sidebar_icon_bg'] = array(
		'id' => 'sidebar_icon_bg',
		'label'   => __( 'Slidedown Toggle Icon', 'brewery' ),
		'description' => __( 'Color for the Slidedown sidebar icon.', 'brewery' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $white,
		'transport'	=> 'postMessage',
	);

	$options['sidebar_icon_hover_bg'] = array(
		'id' => 'sidebar_icon_hover_bg',
		'label'   => __( 'Slidedown Toggle Icon Hover', 'brewery' ),
		'description' => __( 'Hover color for the Slidedown sidebar icon.', 'brewery' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $primary_color,
	);

	$options['sidebar_height'] = array(
		'id' => 'sidebar_height',
		'label'   => __( 'Enter the height in pixels for the top slidedown sidebar area. Default: 500px.', 'brewery' ),
		'section' => $section,
		'type'    => 'text',
		'default' => ''
	);

	// Header: Widget Visibility
	$section = 'header_widget_area';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Widget Visibility', 'brewery' ),
		'priority' => '10',
		'description' => __( 'Select which pages to display the header widget section.', 'brewery' ),
		'panel' => $panel
	);

	$options['header_sidebar_pages'] = array(
		'id' => 'header_sidebar_pages',
		'label'   => __( 'Pages Header Widgets ', 'brewery' ),
		'description' => __( 'Select to display the Header Sidebar widgets on Pages.', 'brewery' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 0,
	);

	$options['header_sidebar_posts'] = array(
		'id' => 'header_sidebar_posts',
		'label'   => __( 'Posts Header Widgets ', 'brewery' ),
		'description' => __( 'Select to display the Header Sidebar widgets on Posts.', 'brewery' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 0,
	);

	$options['header_sidebar_search'] = array(
		'id' => 'header_sidebar_search',
		'label'   => __( 'Search Header Widgets ', 'brewery' ),
		'description' => __( 'Select to display the Header Sidebar widgets on the Search page.', 'brewery' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 0,
	);

	$options['header_sidebar_blog'] = array(
		'id' => 'header_sidebar_blog',
		'label'   => __( 'Blog Header Widgets ', 'brewery' ),
		'description' => __( 'Select to display the Header Sidebar widgets on the Blog page.', 'brewery' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 0,
	);

	$options['header_sidebar_archive'] = array(
		'id' => 'header_sidebar_archive',
		'label'   => __( 'Archive Header Widgets ', 'brewery' ),
		'description' => __( 'Select to display the Header Sidebar widgets on the Archive page.', 'brewery' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 0,
	);

	$options['header_sidebar_shop'] = array(
		'id' => 'header_sidebar_shop',
		'label'   => __( 'Shop Header Widgets ', 'brewery' ),
		'description' => __( 'Select to display the Header Sidebar widgets on the Shop page.', 'brewery' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 0,
	);

	$options['header_sidebar_none'] = array(
		'id' => 'header_sidebar_none',
		'label'   => __( 'Not Found Header Widgets ', 'brewery' ),
		'description' => __( 'Select to display the Header Sidebar widgets on the Not Found page.', 'brewery' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 0,
	);

	// Footer Panel
	$panel = 'footer-panel';

	$panels[] = array(
	    'id' => $panel,
	    'title' => __( 'Footer Panel', 'brewery' ),
	    'priority' => '10'
	);

	// Footer: Copyright
	$section = 'footer-copyright';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Copyright', 'brewery' ),
		'priority' => '45',
		'description' => __( 'Options for the footer section.', 'brewery' ),
		'panel' => $panel
	);

	$options['footer_bg_color'] = array(
		'id' => 'footer_bg_color',
		'label'   => __( 'Footer Background Color', 'brewery' ),
		'description' => __( 'Select a background color for the inner pages footer section.', 'brewery' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $primary_color,
		'transport'	=> 'postMessage',
	);

	$options['footer_copyright'] = array(
		'id' => 'footer_copyright',
		'label'   => __( 'Footer Copyright', 'brewery' ),
		'section' => $section,
		'type'    => 'textarea',
		'default' => 'Copyright <a href="https://rescuethemes.com">Rescue Themes</a>. All Rights Reserved.',
		'transport'	=> 'postMessage',
	);

	// Footer: Button
	$section = 'footer-button';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Button', 'brewery' ),
		'priority' => '45',
		'description' => __( 'Options for the call to action footer button.', 'brewery' ),
		'panel' => $panel
	);

	$options['footer-button-checkbox'] = array(
	    'id' => 'footer-button-checkbox',
	    'label'   => __( 'Select to display the footer button bar.', 'brewery' ),
	    'section' => $section,
	    'type'    => 'checkbox',
	    'default' => 0,
	);

	$options['footer-button-color'] = array(
	    'id' => 'footer-button-color',
	    'label'   => __( 'Color of the footer button.', 'demo' ),
	    'section' => $section,
	    'type'    => 'color',
	    'default' => $primary_color,
	    'transport'	=> 'postMessage',
	);

	$options['footer-button-text'] = array(
	    'id' => 'footer-button-text',
	    'label'   => __( 'Text to display on the footer button.', 'brewery' ),
	    'section' => $section,
	    'type'    => 'text',
		'default' => 'Get in touch with us today',
		'transport'	=> 'postMessage',
	);

	$options['footer-button-url'] = array(
	    'id' => 'footer-button-url',
	    'label'   => __( 'The link for the footer button.', 'brewery' ),
	    'section' => $section,
	    'type'    => 'text',
	    'default'    => '',
	);

	$panel = 'home-panel';

	$panels[] = array(
	    'id' => $panel,
	    'title' => __( 'Home Panel', 'brewery' ),
	    'priority' => '20'
	);

	$section = 'panel-section';

	// Home Image
	$section = 'header_image';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Home Images', 'brewery' ),
		'priority' => '10',
		'description' => __( 'Home page background image slider.', 'brewery' ),
		'panel' => $panel,
	);

	$options['home_bg_color'] = array(
		'id' => 'home_bg_color',
		'label'   => __( 'Overlay Color', 'brewery' ),
		'description' => __( 'Color overlayed on the home page images.', 'brewery' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $home_slider_bg,
	);

	$options['home_opacity'] = array(
	    'id' => 'home_opacity',
	    'label'   => __( 'Opacity level', 'brewery' ),
	    'section' => $section,
	    'type'    => 'range',
	    'description' => __( 'Adjust the opacity for the overlay color.', 'brewery' ),
	    'default' => 0.5,
	    'input_attrs' => array(
	        'min'   => 0,
	        'max'   => 1,
	        'step'  => 0.1
	    )
	);

	$options['home_duration'] = array(
	    'id' => 'home_duration',
	    'label'   => __( 'Images Duration', 'brewery' ),
	    'section' => $section,
	    'type'    => 'range',
	    'description' => __( 'Duration time for each background image.', 'brewery' ),
	    'default' => 4000,
	    'input_attrs' => array(
	        'min'   => 1000,
	        'max'   => 10000,
	        'step'  => 500,
	    )
	);

	$options['home_fade'] = array(
	    'id' => 'home_fade',
	    'label'   => __( 'Image Fade In', 'brewery' ),
	    'section' => $section,
	    'type'    => 'range',
	    'description' => __( 'Fade in duration for each background image.', 'brewery' ),
	    'default' => 1000,
	    'input_attrs' => array(
	        'min'   => 100,
	        'max'   => 3000,
	        'step'  => 100,
	    )
	);

	$options['home_content_page'] = array(
		'id' => 'home_content_page',
		'label'   => __( 'Select the page that will display the main home page content.', 'brewery' ),
		'section' => $section,
		'type'    => 'dropdown-pages',
		'default' => ''
	);

	// Home Video
	$section = 'header_video';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'Home Video', 'brewery' ),
		'priority' 		=> '10',
		'description' 	=> __( 'Home video background. If video is active, the Home Images settings will be nullified.', 'brewery' ),
		'panel' 		=> $panel,
	);

	$options['video_checkbox'] = array(
	    'id' => 'video_checkbox',
	    'label'   => __( 'Select to display a Youtube video as the home page background.', 'brewery' ),
	    'section' => $section,
	    'type'    => 'checkbox',
	    'default' => 0,
	);

	$options['video_youtube_id'] = array(
	    'id' => 'video_youtube_id',
	    'label'   => __( 'Youtube Video ID', 'brewery' ),
	    'section' => $section,
	    'type'    => 'text',
	    'default' => 'B5UedfCySQk',
	);

	$options['video_loop'] = array(
	    'id' => 'video_loop',
	    'label'   => __( 'Loop the video playback', 'brewery' ),
	    'section' => $section,
	    'type'    => 'select',
	    'choices' => $video_loop,
	    'default' => 'true',
	);

	$options['video_autoplay'] = array(
	    'id' => 'video_autoplay',
	    'label'   => __( 'Autoplay the video', 'brewery' ),
	    'section' => $section,
	    'type'    => 'select',
	    'choices' => $video_autoplay,
	    'default' => 'true',
	);

	$options['video_muted'] = array(
	    'id' => 'video_muted',
	    'label'   => __( 'Mute the video', 'brewery' ),
	    'section' => $section,
	    'type'    => 'select',
	    'choices' => $video_mute,
	    'default' => 'true',
	);

	$options['video_start_time'] = array(
	    'id' => 'video_start_time',
	    'label'   => __( 'Enter the time in seconds that the video will start.', 'brewery' ),
	    'section' => $section,
	    'type'    => 'text',
	    'default' => '3',
	);

	$options['video_ratio'] = array(
	    'id' => 'video_ratio',
	    'label'   => __( 'Video ratio (width divided by height)', 'brewery' ),
	    'section' => $section,
	    'type'    => 'text',
	    'default' => '1',
	);


	$options['video_fallback_image'] = array(
	    'id' => 'video_fallback_image',
	    'label'   => __( 'Video fallback image', 'brewery' ),
	    'section' => $section,
	    'type'    => 'upload',
	    'default' => $home_bg_image,
	);

	// Home Content
	$section = 'header_content';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Home Content', 'brewery' ),
		'priority' => '10',
		'description' => __( 'The page containing the main home content.', 'brewery' ),
		'panel' => $panel,
	);

	$options['home_content_page'] = array(
		'id' => 'home_content_page',
		'label'   => __( 'Select the page that will display the main home page content.', 'brewery' ),
		'section' => $section,
		'type'    => 'dropdown-pages',
		'default' => ''
	);


	// Blog
	$section = 'blog';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Blog', 'brewery' ),
		'priority' => '30',
		'description' => __( 'Options for the blog page.', 'brewery' ),
	);

	$options['blog_title'] = array(
		'id' => 'blog_title',
		'label'   => __( 'The title for the blog page.', 'brewery' ),
		'section' => $section,
		'type'    => 'text',
		'default' => 'News & Notices',
		'transport'	=> 'postMessage',

	);

	$options['blog_subtitle'] = array(
		'id' => 'blog_subtitle',
		'label'   => __( 'The sub-title for the blog page.', 'brewery' ),
		'section' => $section,
		'type'    => 'textarea',
		'default' => 'The sub-title for the blog page (Edit in the Customizer).',
		'transport'	=> 'postMessage',
	);


	// Shop
	$section = 'shop';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Shop', 'brewery' ),
		'priority' => '25',
		'description' => __( 'Options for the shop page.', 'brewery' ),
	);

	$options['header_cart_color'] = array(
		'id' => 'header_cart_color',
		'label'   => __( 'Header Cart Color', 'brewery' ),
		'description' => __( 'Select a color for the header cart icons.', 'brewery' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $white,
		'transport'	=> 'postMessage',
	);
	

	// Contact
	$section = 'contact';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Contact Page', 'brewery' ),
		'priority' => '35',
		'description' => __( 'To use the Google Map, activate the <a href="https://wordpress.org/plugins/rescue-shortcodes/">Rescue Shortcodes plugin</a>,and get a Google API key <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">Get API key</a>', 'brewery' ),
	);

	$options['map_choice'] = array(
		'id' => 'map_choice',
		'label'   => __( 'Select to display Google Map on the contact page.', 'brewery' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 1,
		'panel' => 'theme_options',
	);

	$options['map_location'] = array(
		'id' => 'map_location',
		'label'   => __( 'Map Location', 'brewery' ),
		'section' => $section,
		'type'    => 'text',
		'default' => '5046 S Greenwood Ave, Chicago IL 60615',
		'panel' => 'theme_options',
	);

	$options['map_height'] = array(
		'id' => 'map_height',
		'label'   => __( 'Map Height (px)', 'brewery' ),
		'section' => $section,
		'type'    => 'text',
		'default' => '500',
		'panel' => 'theme_options',
	);

	$options['map_title'] = array(
		'id' => 'map_title',
		'label'   => __( 'Map Title', 'brewery' ),
		'section' => $section,
		'type'    => 'text',
		'default' => 'Rescue Themes Offices',
		'panel' => 'theme_options',
	);

	$options['map_zoom'] = array(
		'id' => 'map_zoom',
		'label'   => __( 'Map Zoom', 'brewery' ),
		'section' => $section,
		'type'    => 'text',
		'default' => '14',
		'panel' => 'theme_options',
	);
	
	$options['google_map_api_key'] = array(
		'id' => 'google_map_api_key',
		'label'   => __( 'Google Map API Key', 'brewery' ),
		'section' => $section,
		'type'    => 'text',
		'default' => '',
		'panel' => 'theme_options',
	);


	// 404 Error 
	$section = 'error';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Error Page (404)', 'brewery' ),
		'priority' => '40',
		'description' => __( 'Options for the 404 error page.', 'brewery' ),
	);

	$options['error_text'] = array(
		'id' => 'error_text',
		'label'   => __( 'Text to display on the error page.', 'brewery' ),
		'section' => $section,
		'type'    => 'textarea',
		'default' => 'You don\'t have to go <a href="#">home</a> but you can\'t stay here. We wouldn\'t mind <a href="#">hearing from you</a> too.'
	);

	$options['error_text_color'] = array(
		'id' => 'error_text_color',
		'label'   => __( 'Error Page Text', 'brewery' ),
		'description' => __( 'Select a color for the text on the error page.', 'brewery' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $pewter,
		'transport'	=> 'postMessage',
	);

	$options['error_bg'] = array(
		'id' => 'error_bg',
		'label'   => __( 'Background Image', 'brewery' ),
		'section' => $section,
		'type'    => 'image',
		'description' => __( 'Upload a background image for the 404 error page.', 'brewery' ),
		'default' => '',
	);


	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Adds the panels to the $options array
	$options['panels'] = $panels;
	
	// Hook to add the custom customizer in child theme.
	$options= apply_filters( 'brewery_add_customizer_child_options' , $options );

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: brewery_customizer_library_remove_theme_mods();

}
add_action( 'init', 'brewery_customizer_library_options' );

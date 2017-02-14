<?php 
/**
 * Foundation gap fix for mobile WP menu bar
 */
if ( ! function_exists( 'brewery_mobile_admin_nav' ) ) :

	// Fixes admin bar overlap
	function brewery_mobile_admin_nav() {
	  if ( is_admin_bar_showing() ) { ?>
	    <style>
	    .fixed { margin-top: 32px; } 
	    #wpadminbar { z-index: 50; }
	    nav.push-menu-top .widget-area { margin-top: 32px; } 
	    @media screen and (max-width: 600px){
	    	.fixed { margin-top: 46px; } 
	    	#wpadminbar { position: fixed !important; }
	    }
	    </style>
	  <?php }
	}

endif;
add_action('wp_head', 'brewery_mobile_admin_nav');

/**
 * Foundation Navigation - http://goo.gl/mTkWbg
 */
class foundation_walker extends Walker_Nav_Menu {
 
    function display_element($element, &$children_elements, $max_depth, $depth=0, $args, &$output) {
        $element->has_children = !empty($children_elements[$element->ID]);
        $element->classes[] = ($element->current || $element->current_item_ancestor) ? 'active' : '';
        $element->classes[] = ($element->has_children) ? 'has-dropdown' : '';
 
        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
 
    function start_lvl(&$output, $depth = 0, $args = array()) {
        $output .= "\n<ul class=\"sub-menu dropdown\">\n";
    }
 
} // end foundation_walker
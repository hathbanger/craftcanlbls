<?php
/**
 * The sidebar containing the main widget area.
 *
 */

if ( ! is_active_sidebar( 'slidedown-sidebar' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'slidedown-sidebar' ); ?>
</div><!-- #secondary -->

<?php
/**
 * The template part for displaying results in search pages.
 *
 */
?>

<div class="brick">

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>

	<div class="entry-content">

		<header class="entry-header">

		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		</header><!-- .entry-header -->

		<?php the_excerpt( ); ?>

	</div><!-- .entry-summary -->

</article><!-- #post-## -->

</div><!-- .brick -->
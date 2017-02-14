<?php
/**
 * The template part for displaying beer categories
 *
 */
?>

<div class="brick">

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>

	<div class="entry-content clearfix">

		<header class="entry-header">

		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		</header><!-- .entry-header -->

		<div class="beer-excerpt">
			<?php the_excerpt( ); ?>
		</div><!-- .beer-excerpt -->

        <div class="beer-image">
            <a href="<?php the_permalink(); ?>">
                <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
            </a>
        </div><!-- .beer_image -->

	</div><!-- .entry-summary -->

</article><!-- #post-## -->

</div><!-- .brick -->
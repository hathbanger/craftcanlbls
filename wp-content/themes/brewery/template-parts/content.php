<?php
/**
 * The content for our standard posts
 */
?>

<div class="brick">

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> >

<?php 
	$format = get_post_format();

	if ( has_post_format( 'gallery' ) ) {

		get_template_part( 'template-parts/format', $format );

	} else { 

	if ( has_post_thumbnail() ) { ?>

		<div class="featured-image">
			
			<?php
				echo '<a href="' . esc_url( get_permalink() ) . '">';
				the_post_thumbnail( 'blog-list' );
				echo '</a>';
			?>

		</div><!-- .featured-image -->

<?php } } ?>

	<div class="entry-content">

		<header class="entry-header">

		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		</header><!-- .entry-header -->

		<div class="blog-list-meta-wrap">

		<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); _e('Written by ','brewery'); ?> 

			<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
				<?php the_author_meta( 'display_name' ); ?>
			</a>

		</div><!-- .post-top-meta-wrap -->

		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s ', '_s' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->

</div><!-- .brick -->
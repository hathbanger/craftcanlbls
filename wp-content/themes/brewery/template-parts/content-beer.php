<?php
/**
 * The template used for displaying page content in single-beer.php
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>

			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

		<div class="post-content-inner-wrap beer_post_list">

            <div class="column-2 beer_image">
                
                <div class="beer_image">
                    <a href="<?php the_permalink(); ?>">
                        <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
                    </a>
                </div><!-- .beer_image -->
                
            </div><!-- .column-2 .beer_image -->

            <div class="column-1 beer_profile_wrap">

               <div id="ribbon-container">
                    <span id="ribbon">
                        <?php _e('Beer Details','brewery'); ?>
                    </span>
               </div><!-- .ribbon-container -->

                <div class="beer_profile">

                    <ul>

                    <div class="major-meta">

                    <?php // ABV
                       $beer_abv = get_post_meta( get_the_ID(), 'beer_abv', true );
                       if ( !empty( $beer_abv ) ) {
                    ?>
                    <li class="beer_abv">
                        <span class="beer_profile_heading"><?php _e('ABV: ','brewery'); ?></span>
                        <span class="beer_profile_meta"><?php echo $beer_abv; ?></span>
                    </li>
                    <?php } ?>

                    <?php // IBU
                       $beer_ibu = get_post_meta( get_the_ID(), 'beer_ibu', true );
                       if ( !empty( $beer_ibu ) ) {
                    ?>
                    <li class="beer_ibu">
                        <span class="beer_profile_heading"><?php _e('IBU: ','brewery'); ?></span>
                        <span class="beer_profile_meta"><?php echo $beer_ibu; ?></span>
                    </li>
                    <?php } ?>

                    </div><!-- .major-meta -->

                    <div class="minor-meta">

                    <?php // OG
                       $beer_og = get_post_meta( get_the_ID(), 'beer_og', true );
                       if ( !empty( $beer_og ) ) {
                    ?>
                    <li class="beer_og">
                        <span class="beer_profile_heading"><?php _e('OG: ','brewery'); ?></span>
                        <span class="beer_profile_meta"><?php echo $beer_og; ?></span>
                    </li>
                    <?php } ?>

                    <?php // FG
                       $beer_fg = get_post_meta( get_the_ID(), 'beer_fg', true );
                       if ( !empty( $beer_fg ) ) {
                    ?>
                    <li class="beer_fg">
                        <span class="beer_profile_heading"><?php _e('FG: ','brewery'); ?></span>
                        <span class="beer_profile_meta"><?php echo $beer_fg; ?></span>
                    </li>
                    <?php } ?>

                    <?php // Color
                       $beer_color = get_post_meta( get_the_ID(), 'beer_color', true );
                       if ( !empty( $beer_color ) ) {
                    ?>
                    <li class="beer_color">
                        <span class="beer_profile_heading"><?php _e('Color: ','brewery'); ?></span>
                        <span class="beer_profile_meta"><?php echo $beer_color; ?></span>
                    </li>
                    <?php } ?>

                    <?php // Grains
                       $beer_grains = get_post_meta( get_the_ID(), 'beer_grains', true );
                       if ( !empty( $beer_grains ) ) {
                    ?>
                    <li class="beer_grains">
                        <span class="beer_profile_heading"><?php _e('Grains: ','brewery'); ?></span>
                        <span class="beer_profile_meta"><?php echo $beer_grains; ?></span>
                    </li>
                    <?php } ?>

                    <?php // Yeast
                       $beer_yeast = get_post_meta( get_the_ID(), 'beer_yeast', true );
                       if ( !empty( $beer_yeast ) ) {
                    ?>
                    <li class="beer_yeast">
                        <span class="beer_profile_heading"><?php _e('Yeast: ','brewery'); ?></span>
                        <span class="beer_profile_meta"><?php echo $beer_yeast; ?></span>
                    </li>
                    <?php } ?>

                    <?php // Hops
                       $beer_hops = get_post_meta( get_the_ID(), 'beer_hops', true );
                       if ( !empty( $beer_hops ) ) {
                    ?>
                    <li class="beer_hops">
                        <span class="beer_profile_heading"><?php _e('Hops: ','brewery'); ?></span>
                        <span class="beer_profile_meta"><?php echo $beer_hops; ?></span>
                    </li>
                    <?php } ?>

                    </div><!-- .minor-meta -->

                    </ul>

                </div><!-- .beer_profile -->

                <div class="beer_notes">

                    <?php the_excerpt(); ?>

                </div><!-- .beer_notes -->               

            </div><!-- .column-1 .beer_profile_wrap -->

            <div class="beer_post_content">

            	<?php the_content(); ?>

        	</div><!-- .beer_post_content -->

            <?php if ( has_post_thumbnail() ) { ?>

            <?php } ?>

		</div><!-- .post-content-inner-wrap -->

	</article><!-- #post-## -->

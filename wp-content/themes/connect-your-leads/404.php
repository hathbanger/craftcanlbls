<?php
/**
 * The template for displaying 404 pages (Not Found) 
 *
 * @package WordPress
 * @subpackage cyh
  * 
 */

?>
    <?php get_header(); ?>
    <div class="404">
        <div class="row">
            <div class="col-sm-12">
                <section id="content" role="main">
                    <article id="post-0" class="post not-found">
                        <header class="header">
                            <h1 class="entry-title">This page is no longer available,<br />   but our savings are!</h1>
                        </header>
                        <section class="entry-content">
                            <p> It looks like the page you're looking for no longer exists. But you're still able to access the great savings below by calling us today.</p>
                        </section>
                    </article>
                    <section class="all-brand-grid">
                        <?php
    // counter to open and close rows
    $i = 1;
    echo ' <div class="row no-gutter"><div class="row-height">';

     if(get_field('brand_details', 22)): ?>
                            <?php while(has_sub_field('brand_details', 22)): ?>
                            <div class="col-sm-4 brand-module col-sm-height">
                                <div class="inside inside-full-height">
                                    <?php $brandlogo = get_sub_field('brand_logo'); ?>
                                    <img class="img-natural" src="<?php echo $brandlogo['url']; ?>" alt="<?php echo $brandlogo['alt'] ?>">
                                    <h3><?php the_sub_field('brand_title'); ?></h3>
                                    <p>
                                        <?php the_sub_field('brand_copy'); ?>
                                    </p>
                                    <p>Click to view
                                        <a href="<?php the_sub_field('view_packages'); ?>">
                                            <?php the_sub_field('brand_title'); ?>
                                        </a> packages.</p>
                                    <a href="<?php the_sub_field('view_details'); ?>" class="btn btn-orange">View Details</a>
                                </div>
                            </div>
                            <?php  // After every three entries close and open a row
          if($i % 3 == 0) {echo '</div></div><div class="row no-gutter"><div class="row-height">';} ?>
                            <?php 
     $i++;
    endwhile; ?>
                            <?php endif;
echo ' </div></div>';

 ?>
                    </section>
                    <!-- /.all-brand-grid -->
                  
                    <div class="disclaimer">
                        <p>Prices and promotions are subject to change. Existing customers are not eligible. Discounts can only be applied to new customer and qualifying packages only. Call or click for complete details and restrictions. VISA Gift Cards fulfilled by Connect Your Home through third-party provider, rebategift.com, upon installation of services and requires 24-36 Month Agreement.</p>
                    </div>
                </section>
            </div>
            <!-- /.col-sm-10 col-sm-offset-1 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.404 -->
    <?php get_footer(); ?>

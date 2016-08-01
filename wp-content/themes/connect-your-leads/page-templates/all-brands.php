<?php
/**
 * Template Name: All Brands
 *
 * @package WordPress
 * @subpackage cyh
  * 
 */

?>




<?php get_header(); ?>
  <!-- This is the page specific wrapping class -->
<div class="all-results">
<section class="hero">
    <div class="bottom-border" >
        <div class="col-md-8 brand-intro hero-holder">
        <div class="masthead">
         <?php $hero_image = get_field('all_brand_hero'); ?>
                   
                    <img src="<?php echo $hero_image['url']; ?>"  alt="" />
           

            </div>
            <!-- /.masthead -->
        </div>
        <!-- /.col-md-12 -->
    <div class="col-md-4 brand-intro">
        <div class="masthead">
                <div class="banner-msg">
                  <h3><?php echo $success ?></h3>
                    <h2><?php the_field('brand_heading');?></h2>
                    <p><?php the_field('brand_copy');?></p>

                    <?php the_field('feature_list');?>
                         <div class="row service-cta">
                            <div class="col-md-12 ">
                        <div class="banner-msg">
                            <?php the_field('hero_banner_msg'); ?>
                        </div>                            
                             <button type="button" class="btn btn-orange" data-toggle="modal" data-target="#get-a-quote">
                             Request A Quote
                            </button>
                            </div>
                         </div>
                </div> 
        </div>            
    </div>         
    </div>
    <!-- /.row -->
</section>
<section class="all-brands-header">
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumbs">
               <?php if (function_exists('qt_custom_breadcrumbs')) qt_custom_breadcrumbs(); ?>
            </div>
        </div>
        <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->

    <div class="row service-head">
        <div class="col-md-12">
            <h1><?php the_field('page_heading'); ?></h1>
            <p><?php the_field('page_heading_strapline'); ?></p>
        </div>
        <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->
</section>
<!-- /.all-brands-header -->


<section class="all-brand-grid">

<?php
    // counter to open and close rows
    $i = 1;
    echo ' <div class="row no-gutter"><div class="row-height">';

     if(get_field('brand_details')): ?>
   
    

    <?php while(has_sub_field('brand_details')): ?>

      <div class="col-sm-4 brand-module col-sm-height">
        <a href="<?php the_sub_field('view_details'); ?>">
          <div class="inside inside-full-height">
            <?php $brandlogo = get_sub_field('brand_logo'); ?>
              <img class="img-natural" src="<?php echo $brandlogo['url']; ?>" alt="<?php echo $brandlogo['alt'] ?>">
              <h3><?php the_sub_field('brand_title'); ?></h3>
              <p><?php the_sub_field('brand_copy'); ?></p>
              <p>Click to view <a href="<?php the_sub_field('view_packages'); ?>"><?php the_sub_field('brand_title'); ?></a> packages.</p>
              <a href="<?php the_sub_field('view_details'); ?>" class="btn btn-orange">View Details</a>
          </div>
        </a>
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
      
</div>
<!-- /.all-results -->  
<?php include 'modal-form-onebrand.php' ?>

<?php get_footer(); ?>
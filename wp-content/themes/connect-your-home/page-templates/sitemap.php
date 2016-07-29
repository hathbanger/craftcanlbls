<?php
/**
 * Template Name: Sitemap
 *
 * @package WordPress
 * @subpackage cyh
  * 
 */

?>

<?php get_header(); ?>
  <!-- This is the page specific wrapping class -->
<div class="sitemap">
    
     <div class="row">
         <div class="col-md-12">
             <h1>Site Map</h1>
        
         </div>
         <!-- /.col-md-12 -->

     </div>
     <!-- /.row -->
     <div class="row">
         <div class="col-md-3 col-md-offset-2">
          <?php the_field('column_1'); ?>
         </div>
         <!-- /.col-md-3 -->
         <div class="col-md-3 ">
            <?php the_field('column_2'); ?>
         </div>
         <!-- /.col-md-3 -->
         <div class="col-md-3">
             
          <?php the_field('column_3'); ?>
         </div>
         <!-- /.col-md-4 -->
     </div>
     <!-- /.row -->

</div>
<!-- /.sitemap -->  

<?php get_footer(); ?>
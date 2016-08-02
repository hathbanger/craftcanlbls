<?php
/**
 * Template Name: Partner With Connect Your Leads
 *
 * @package WordPress
 * @subpackage cyh
  * 
 */
?>

<?php get_header(); ?>
    <section class="hero">
        <div class="row">
            <div class="col-md-12">
                <div class="masthead">
                    <?php $hero_image = get_field('partner_hero');?>
                    <img src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt'] ?>" />
                </div>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </section>
    <section class="why-partner">
        <div class="row">

            <div class="col-md-12">
                <div class="ticker">
                    <?php the_field('homepage_marquee'); ?>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-md-6" style="">
                    <?php $col_img_1 = get_field('col_img_1');?>
                    <img src="<?php echo $col_img_1['url']; ?>" alt="<?php echo $col_img_1['alt'] ?>" />
                </div>
                <div class="col-md-6">
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>
        </div>
        <div class="row">
                <div class="col-md-6">
                    

                    <?php echo the_field('second_col') ?>


                </div>
                <div class="col-md-6" style="">
                    <?php $col_img_2 = get_field('col_img_2');?>
                    <img src="<?php echo $col_img_2['url']; ?>" alt="<?php echo $col_img_2['alt'] ?>" />
                </div>

        </div>

        <div class="row">
                <div class="col-md-6" style="">
                    <?php $col_img_3 = get_field('col_img_3');?>
                    <img src="<?php echo $col_img_3['url']; ?>" alt="<?php echo $col_img_3['alt'] ?>" />
                </div>
                <div class="col-md-6">
                    

                    <?php echo the_field('third_col') ?>


                </div>

        </div>

    </section>

        <div class="row service-modules">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-6">
                            <a href="/buy-leads">
                        <div class="service buy-leads">
                                <div class="textHolder">
                                    <h2>
                                        BUY<br/>LEADS<br/>HERE
                                    </h2>
                                </div>
                        </div>
                            </a>
                    </div>   
                    <div class="col-md-6">                  
                        <a href="/sell-leads">
                            <div class="service sell-leads">
                                     <div class="textHolder">
                                        <h2>
                                            SELL<br/>LEADS<br/>HERE
                                        </h2>
                                    </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>


<!-- /.one-brand -->
<?php include 'modal-form.php' ?>
<div class="col-md-12">
    <?php get_footer(); ?>
</div>
<?php
/**
 * Template Name: About Us
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
                    <?php $hero_image = get_field('about_us_hero');?>
                    <img src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt'] ?>" />
                </div>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </section>
    <section class="services">
        <div class="row">
            <div class="col-md-12">
                <div class="ticker">
                    <?php the_field('homepage_marquee'); ?>
                </div>
            </div>
        </div>
    </section>


    <section class="why-partner">
        

        <div class="row">
                <h2 class="home-align">
                    <?php echo the_field('first_headline'); ?>
                </h2>
            <div class="col-md-12 partner-section">
                <div class="col-md-6" style="padding: 100px;">
                	<img src="<?php echo get_template_directory_uri(); ?>/images/cyh_logo.png">
                </div>
                <div class="col-md-6">
                    <h4 class="home-align">
                        Origination
                    </h4>
                    <p class="home-align">
                        <?php echo the_field('first_section'); ?>
                    </p>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12 partner-section">
                <div class="col-md-6">
                    <h4 class="home-align">
                        <?php echo the_field('second_headline'); ?>
                    </h4>
                    <p class="home-align">
                        <?php echo the_field('second_section'); ?>
                    </p>
                </div>
                <div class="col-md-6">
                	<img src="<?php echo get_template_directory_uri(); ?>/images/callcenter1.1.jpg">
                </div>


            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="masthead">
                    <?php $hero_mid_image = get_field('about_us_mid_hero');?>
                    <img src="<?php echo $hero_mid_image['url']; ?>" alt="<?php echo $hero_mid_image['alt'] ?>" />
                </div>
            </div>
            <!-- /.col-md-12 -->
        </div>        


    </section>


<!-- /.one-brand -->
<?php include 'modal-form.php' ?>
<div class="col-md-12">
    <?php get_footer(); ?>
</div>
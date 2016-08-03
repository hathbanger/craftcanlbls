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
                    <?php echo the_field('main_headline'); ?>
                </h2>
            <div class="col-md-12 partner-section">
                <div class="col-md-6">
                <?php $first_image = get_field('first_image');?>
                	<img src="<?php echo $first_image['url']; ?>">
                </div>
                <div class="col-md-6">
                    <h4 class="home-align">
                        <?php echo the_field('first_headline'); ?>
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
                <?php $second_image = get_field('second_image');?>
                    <img src="<?php echo $second_image['url']; ?>">
                </div>


            </div>
        </div>

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


    </section>


<!-- /.one-brand -->
<?php include 'modal-form.php' ?>
<div class="col-md-12">
    <?php get_footer(); ?>
</div>
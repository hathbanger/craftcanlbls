<?php
/**
 * Template Name: Homepage
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
                    <?php $hero_image = get_field('homepage_hero');?>
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
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
        <div class="row service-head">
            <div class="col-md-8 col-md-offset-2">
                <h1>
                    <?php the_field('homepage_heading'); ?>
                </h1>
                <p>
                    <?php the_field('homepage_heading_strapline'); ?>
                </p>
            </div>
            <!-- /.col-md-8 col-md-offset-2 -->
        </div>
        <hr/>
        <!-- /.row -->
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
        <!-- /.row service-modules -->
    </section>


    <section class="why-partner">
        

        <div class="row">
            <div class="col-md-12 partner-section">
                <h2 class="home-align">
                    <?php the_field('main_headline'); ?>
                </h2>

                <div class="col-md-6">
                    <h4 class="home-align">
                        <?php the_field('first_headline'); ?>
                    </h4>
                    <p class="home-align">
                        <?php the_field('first_body'); ?>
                    </p>
                </div>

                <div class="col-md-6">
                    <h4 class="home-align">
                        <?php the_field('second_headline'); ?>
                    </h4>
                    <p class="home-align">
                        <?php the_field('second_body'); ?>
                    </p>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="masthead mid-hero">
                    <?php $hero_image_mid = get_field('homepage_hero_mid');?>
                    <img src="<?php echo $hero_image_mid['url']; ?>" alt="<?php echo $hero_image_mid['alt'] ?>" />
                </div>
            </div>
            <!-- /.col-md-12 -->
        </div>

        <div class="row">
            <div class="col-md-6">
                <h5 class="home-align">
                    Who We Are:
                </h5>
                <div class="col-md-10  col-md-offset-1">
                    <p>
                        <?php the_field('who_we_are'); ?>
                        <a href="/about-us">Read More..</a>                  
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <h5 class="home-align">
                    Meet With Us At:
                </h5>
                <div class="col-md-12">
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>

    </section>


<!-- /.one-brand -->
<?php include 'modal-form.php' ?>
<div class="col-md-12">
    <?php get_footer(); ?>
</div>

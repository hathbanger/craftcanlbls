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
        <!-- /.row service-modules -->
    </section>


    <section class="why-partner">
        

        <div class="row">
                <h2 class="home-align">
                    About Us: We Are Connect Your Leads
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
						Connect Your Leads is a subsidiary of Connect Your Home, a leading national retailer in the home service industry based in Denver, Colorado. This privately owned company is an award-winning retailer for the nation’s top providers of TV, Internet, Phone & Home Security services.<br/>
						Connect Your Leads developed into its own identity gradually as different avenues opened up with companies with like goals and objectives. Now Connect Your Leads has become its own branch in the Connect Your Home Family successfully helping companies achieve their sales goals.
                    </p>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12 partner-section">
                <div class="col-md-6">
                    <h4 class="home-align">
                        Elite Call Center
                    </h4>
                    <p class="home-align">
                        Connect Your Leads leans on the successful management of its in-house call center. This consumer centric call center houses both sales and customer service departments guaranteed to focus on the personal needs of each customer that calls requesting information. The staff consists of both English and Spanish speaking professionals who help manage customer calls. The call center speaks with over 25,000 consumers every month and currently services over 90,000 consumers across the country.
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
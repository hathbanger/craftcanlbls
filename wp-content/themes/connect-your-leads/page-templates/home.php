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
                    <div class="masthead-widget">
                        <p>
                            Find Home Services. Find Deals. Right Here.
                        </p>
<!--                         <form style="color: black" action="/results" method="post">
                            <input type="text" class="form-control" placeholder="Street" name="street">
                            <input type="text" class="form-control" placeholder="Zip" name="zip">
                            <input class="btn btn-orange" type="submit">
                        </form> -->
                    </div>
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
        <!-- /.row -->
        <div class="row service-modules">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="service tele">
                            <a href="/television">
                                <h4>
                                    Television
                                </h4>
                                <p class="serviceParagraph">
                                    <?php the_field('television_copy'); ?>
                                    <a class="learnMoreLink" href="/television">
                                        Learn more >
                                    </a>
                                </p>
                            </a>
                        </div>
                        <div class="service telephone">
                            <a href="/home-phone">
                                <h4>
                                    Phone
                                </h4>
                                <p>
                                    <?php the_field('phone_copy'); ?> 
                                    <a class="learnMoreLink" href="/home-phone">
                                        Learn more >
                                    </a>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="service internet">
                            <a href="/internet">
                                <h4>
                                    Internet
                                </h4>
                                <p>
                                    <?php the_field('internet_copy'); ?> 
                                    <a class="learnMoreLink" href="/internet">      Learn more >
                                    </a>
                                </p>
                            </a>
                        </div>
                        <div class="service security">
                            <a href="/home-security">
                                <h4>
                                    Home Security
                                </h4>
                                <p>
                                    <?php the_field('home_security_copy'); ?> 
                                    <a class="learnMoreLink" href="/home-security">
                                        Learn more >
                                    </a>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row service-modules -->
    </section>
    <section class="connected">
        <div class="row">
            <div class="col-md-12">
                <h2>
                    Get Your Whole House Connected
                </h2>
                <div class="scraper-left">
                    <h3>
                        More Choices.
                        <br /> 
                        More Savings.
                        <br />
                        Just one Call.
                    </h3>
                    <h4>
                        Connect everything in one call.
                    </h4>
                    <?php $price_image = get_field('tv_packages_price_graphic'); ?>
                    <img class="offer" src="<?php echo $price_image['url']; ?>" alt="<?php echo $price_image['alt'] ?>" />
                </div>
                <div class="scraper-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/whole-house.jpg" alt="">
                </div>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </section>
    <section class="how-it-works">
        <div class="row">
            <div class="col-md-12">
                <div class="mast">
                    <h2>
                        <?php the_field('homepage_video_heading'); ?>
                    </h2>
                    <p>
                        <?php the_field('homepage_video_heading_copy'); ?>

                    </p>
                </div>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-8">
                <div class="map">
                    <iframe width="100%" height="512" src="" data-src="https://www.youtube.com/embed/2k52EryKFxY?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <ol class="step-list">
                    <li>
                        <h4>
                            <?php the_field('homepage_step_1'); ?>
                        </h4>
                        <p>
                            <?php the_field('homepage_step_1_content'); ?>
                        </p>
                    </li>
                    <li>
                        <h4>
                            <?php the_field('homepage_step_2'); ?>
                        </h4>
                        <p>
                            <?php the_field('homepage_step_2_content'); ?>
                        </p>
                    </li>
                    <li>
                        <h4>
                            <?php the_field('homepage_step_3'); ?>
                        </h4>
                        <p>
                            <?php the_field('homepage_step_3_content'); ?>
                        </p>
                    </li>
                </ol>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
        <div class="row options">
            <div class="col-sm-6">
                <h3>
                    <?php the_field('package_heading_1'); ?>
                </h3>
                <?php the_field('package_list_1'); ?>
                <img class="devices" src="<?php echo get_template_directory_uri(); ?>/images/devices.png" alt="Phone Laptop and Television">
            </div>
            <!-- /.col-md-6 -->
            <div class="col-sm-6">
                <h3>
                    <?php the_field('package_heading_2'); ?>
                </h3>
                <?php the_field('package_list_2'); ?>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
        <div class="row service-cta">
            <div class="col-md-12">
                <a href="/brands" class="btn btn-orange">
                    Review Services Now
                </a>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.how-it-works -->
    <section class="brands">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <h2>
                            Top Brands to Serve you
                        </h2>
                    </div>
                </div>
                <div class="row brand-logos">
                    <div class="col-md-12">
                        <?php
                        $iconCounter = 0;
                        // check if the repeater field has rows of data
                        if( have_rows('brand_images') ):
                            ?>
                        <div class="row">
                            <?php
                                // loop through the rows of data
                                while ( have_rows('brand_images') ) : the_row();
                                    ?>
                                    <div class="col-sm-3">
                                        <a href="<?php echo the_sub_field('home_brand_link');?>" target="_blank">
                                            <img src="<?php echo the_sub_field('home_image_upload');?>" alt="<?php echo the_sub_field('brand_alt_tag');?>">
                                        </a>
                                    </div>   
                                    <?php 
                                        $iconCounter++;
                                        if($iconCounter == 4) { ?>
                                            </div><div class="row">
                                            <?php }
                                endwhile;
                                else :
                                endif;
                            ?>
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </section>

<!-- /.one-brand -->
<?php include 'modal-form.php' ?>
<div class="col-md-12">
    <?php get_footer(); ?>
</div>

<script>
function init() {
    console.log('deferring the youtube script load');
var vidDefer = document.getElementsByTagName('iframe');
for (var i=0; i<vidDefer.length; i++) {
if(vidDefer[i].getAttribute('data-src')) {
vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
} } }
window.onload = init;
</script>
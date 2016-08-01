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
        <!-- /.row -->
        <div class="row service-modules">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-6">
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
                    </div>   
                    <div class="col-md-6">                     
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
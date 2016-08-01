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
                            <a href="/television">
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
                        <a href="/home-phone">
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
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row service-modules -->
    </section>


    <section class="why-partner">
        

        <div class="row">
            <div class="col-md-12 partner-section">
                <h2 class="home-align">
                    Why Partner With Connect Your Leads?
                </h2>

                <div class="col-md-6">
                    <h4 class="home-align">
                        Buy Leads
                    </h4>
                    <p class="home-align">
                        We have leads dealing with new movers, renters, and homeowners waiting just for you!
                    </p>
                </div>

                <div class="col-md-6">
                    <h4 class="home-align">
                        Sell Leads
                    </h4>
                    <p class="home-align">
                        You have leads for new movers, renters, and customers looking to save on home services and we want them!
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
                        Connect Your Leads is a subsidiary of Connect Your Home, a leading national retailer in the home service industry based in Denver, Colorado. This privately owned company is an award-winning retailer for the nation’s top providers of TV, Internet, Phone & Home Security services.
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
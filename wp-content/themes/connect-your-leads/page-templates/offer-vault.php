<?php
/**
 * Template Name: Offer Vault
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
                    <?php $hero_image = get_field('leads_hero');?>
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
            <div class="col-md-12 pull-right">
                <h2 class="home-align">
                    <?php the_field('leads_headline'); ?>
                </h2>
                <div class="col-md-10  col-md-offset-1">
                        <?php the_field('leads_text'); ?>              
                </div>
                <div class="col-md-10  col-md-offset-1">
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <?php the_content(); ?>
                    <?php endwhile; endif; ?>              
                </div>
            </div>
    </section>
    <section>
        

        
    </section>

<!-- /.one-brand -->
<?php include 'modal-form.php' ?>
<div class="col-md-12">
    <?php get_footer(); ?>
</div>

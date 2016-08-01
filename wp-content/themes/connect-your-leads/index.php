<?php get_header(); ?>

<div class="index-page">
<div class="row">
	<div class="col-sm-8 main-content">
		<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
	</div>
	<!-- /.col-sm-8 -->
	<div class="col-sm-4 sidebar">
		<?php get_sidebar(); ?>
	</div>
	<!-- /.col-sm-4 -->
</div>
<!-- /.row -->





</div>
<!-- /.index-page -->
<?php get_footer(); ?>
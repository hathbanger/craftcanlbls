<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="wrapper">
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php // Display background image on 404 page

	if ( is_404() ) {

		$error_bg = get_theme_mod( 'error_bg' ); ?>

	<div id="bg">
	  <img src="<?php echo esc_url( $error_bg ); ?>" alt="">
	</div>

<?php } // end is_404 ?>

<?php if ( is_active_sidebar( 'slidedown-sidebar' ) ) { ?>

<nav class="menu push-menu-top show-for-medium-up">

	<?php get_sidebar(); ?>

	<button class="close-menu"><i class="fa fa-times"></i></button>

</nav><!-- .push-menu-top -->

<?php } // end slidedown-sidebar ?>

<div id="wrapper"> <?php // wrapper for sidebar section ?>

    <div id="main">

    <div class="container">

		<section class="content">

		<div id="page" class="hfeed site">

		<?php if ( is_page_template( 'template-home.php' ) ) { ?>

		<div <?php if ( get_theme_mod( 'video_checkbox' ) == 1 ) : echo "class=\"header-video\" style=\"position: relative;\""; else : echo "class=\"home-slider-container\""; endif; ?> >

		<?php } ?>

		<?php if ( !is_active_sidebar( 'slidedown-sidebar' ) ) { ?>

		<span class="toggle-push-top"></span>

		<?php } else { ( is_active_sidebar( 'slidedown-sidebar' ) ) ?>

<!-- 	    	<div class="top-toggle-wrap">

			    <div class="top-toggle-button">
			        <button class="nav-toggler toggle-push-top show-for-large-up"><i class="fa fa-chevron-down"></i></button>
			    </div>
		    </div> -->

		<?php } // end slidedown-sidebar ?>

			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'brewery' ); ?></a>
		
			<header id="masthead" class="site-header" role="banner">

				<div class="row">

					<div class="medium-12 columns">
				
					<div class="site-branding">

					<!-- Logo -->
				    <?php
				        if ( get_theme_mod( 'logo' ) ) {
				    ?>
				        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				        	<img src="<?php echo esc_url( get_theme_mod( 'logo' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>">
				        </a>

				    <?php } else { ?>
			 
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

					<?php } ?>

					</div><!-- .site-branding -->

					<nav id="site-navigation" class="top-bar main-navigation" role="navigation" data-topbar data-options="mobile_show_parent_link: true">

			        	<ul class="title-area">

				            <li class="name"></li>

				            <!-- Mobile Menu Toggle -->
				            <li class="toggle-topbar menu-icon"><a href="#"><span><?php //_e('Menu','brewery'); ?></span></a></li>

			         	</ul><!-- .title-area -->

						<!-- Bottom Header Navigation -->
				        <section class="top-bar-section">

					<?php // Shopping Cart
						if ( class_exists( 'WooCommerce' ) ) { ?>

						<div class="header-cart-wrap">

							<span class="dash-spacer">&#45;</span>

							<a class="cart-contents" href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" title="<?php _e( 'View your shopping cart', 'brewery' ); ?>">
								<?php echo wp_kses_data( WC()->cart->get_cart_total() ); ?> <span class="count"><?php echo wp_kses_data( sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'brewery' ), WC()->cart->get_cart_contents_count() ) );?></span>
							</a>

							<a href="#" class="header-cart-modal" data-reveal-id="cartModal">
								<i class="fa fa-shopping-cart"></i>
							</a>

							<div id="cartModal" class="reveal-modal tiny" data-reveal>
								<div class="site-header-cart menu">
									<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
								</div>
								<a class="close-reveal-modal">&#215;</a>
							</div><!-- .cartModal -->

						</div><!-- .header-cart-wrap -->

						<?php } // end WooCommerce check ?>

							<?php // Primary Menu
								$defaults = array(
							        'theme_location' => 'primary',
							        'container' 	 => false,
							        'menu_class'	 => 'right',
							        'depth' 		 => 5,
							        'fallback_cb'    => false,
							        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							        'walker' 		 => new foundation_walker()
								);

								wp_nav_menu( $defaults );
							?>

				        </section><!-- .top-bar-section -->

			    	</nav><!-- .top-bar -->

			    </div><!-- .medium-12 -->

				</div><!-- .row -->

			</header><!-- #masthead -->

			<?php // Home Hero Slider
				if ( is_page_template( 'template-home.php' ) ) { ?>

			<div class="row">
				
				<div class="large-12 columns">

					<div class="home-content clearfix">
					
					<?php if ( get_theme_mod( 'video_checkbox' ) == 0 ) : echo "<span class=\"spacer\"></span>"; endif; ?>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php the_content(); ?>

						<?php endwhile; endif; ?>

					<?php if ( get_theme_mod( 'video_checkbox' ) == 0 ) : echo "<span class=\"spacer\"></span>"; endif; ?>

					</div><!-- .home-content -->

				</div><!-- .large-12 -->

			</div><!-- row -->

			</div><!-- .home-slider-container -->

			<?php } // end home template check ?>

		<div id="content" class="site-content">

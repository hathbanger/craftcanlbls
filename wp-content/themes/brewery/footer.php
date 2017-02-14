<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #wrapper div and all content after
 *
 */
?>

				</div><!-- #content -->

				</div><!-- #page -->

                </section><!-- .content -->

            </div><!-- .container -->

        </div><!-- #main -->

    </div><!-- #wrapper -->

	<?php if ( get_theme_mod( 'footer-button-checkbox' ) ) { ?>
	<div class="footer-button-wrap">
		
		<div class="row">

			<div class="large-12 columns">	
				
				<a href="<?php echo esc_url( get_theme_mod( 'footer-button-url' ) ); ?>" class="button"><?php echo esc_attr( get_theme_mod( 'footer-button-text' ), brewery_customizer_library_get_default( 'footer-button-text' ) ); ?></a>

			</div><!-- .large-12 -->

		</div><!-- .row -->

	</div><!-- .footer-button-wrap -->
	<?php } ?>

	<footer id="colophon" class="site-footer clearfix" role="contentinfo">

		<div class="row">

			<div class="large-12 columns social-icons">

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav id="social-navigation" class="social-navigation" role="navigation">
					<?php
						// Social links navigation menu.
						wp_nav_menu( array(
							'theme_location' => 'social',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			</div><!-- .large-12 -->

		</div><!-- .row -->

		<?php if ( is_active_sidebar( 'footer-left' ) || is_active_sidebar( 'footer-center' ) || is_active_sidebar( 'footer-right' ) ) { ?>

		<div class="row">
			
			<div class="medium-4 columns footer-left">

				<?php if ( ! dynamic_sidebar( 'footer-left' ) ) : endif; ?>
				
			</div><!-- .medium-4 -->

			<div class="medium-4 columns footer-center">

				<?php if ( ! dynamic_sidebar( 'footer-center' ) ) : endif; ?>
				
			</div><!-- .medium-4 -->

			<div class="medium-4 columns footer-right">

				<?php if ( ! dynamic_sidebar( 'footer-right' ) ) : endif; ?>
				
			</div><!-- .medium-4 -->

		</div><!-- .row -->

		<?php } // check if there are any footer widgets active ?>

		<div class="copyright-wrap">

			<div class="row">

				<div class="large-12 columns">

					<div class="site-info">
						<?php echo wp_kses_post( get_theme_mod( 'footer_copyright', brewery_customizer_library_get_default( 'footer_copyright' ) ) ); ?>
					</div><!-- .site-info -->

				</div><!-- .large-5 -->

			</div><!-- .row -->

		</div><!-- .copyright-wrap -->

	</footer><!-- #colophon .site-footer -->

	<?php wp_footer(); ?>

</body>
</html>
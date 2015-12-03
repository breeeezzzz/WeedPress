<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 * HELLO WORLD !!!
 */

?>
<!--<h5 class="eeod-quote"><i class="fa fa-quote-left"></i> From our hearts to yours we extend our blessings. Om mani padme hum.</h5>-->
</section>

 	<footer id="footer-container">
		
			<div id="newsletter">
				<div class="row">

					
					<div class="small-2 large-6 columns">
						<ul class="button-group newsletter-group">
						  <li><a href="#" class="button">Contact</a></li>
						  <li><a href="#" class="button">Login</a></li>
						  <li><a href="#" class="button">Sign Up</a></li>
						</ul>
					</div>
				
					<div class="large-4 columns">
						<div style="margin-top:1em;"><?php get_template_part( 'searchform' ); ?></div>
					</div>
					
				</div>
			 
			</div>
 
		<div class="row footer-widget-area">
			<div class="medium-4 columns">
				<span class="eye-con center"><i class="fa fa-eye"></i></span> 
				<h4 align="center">Eagle Eye</h4>
					<p>Eagle eye online dispensary is a small collective of individuals committed to providing an alternative healing path. We believe that the benefits of cannabis are undeniable and that all adults should have to option to work with this entheogen (plant spirit medicine).</p>

			</div>
			<div class="medium-8 columns widgetsFooter">
				<div class="row collapse">
					<?php dynamic_sidebar( 'footer-widgets' ); ?>
				</div>
			</div>
		</div>
		
	</footer>
	
	<footer id="second-footer">
	
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer_menu_class' ) ); ?>
			<?php dynamic_sidebar( 'social-widgets' ); ?>
		
	</footer>
	
	<footer id="third-footer">
		<div class="paymentIcons-footer">
				<?php echo do_shortcode('[payment_options]'); ?>

		</div>
		
		<span class="copyspan">Copyright 2015 - Eagle Eye Online Dispensary</span>
	</footer>	

	<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>

<a class="exit-off-canvas"></a>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_end' ); ?>

	<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	</div>
</div> 
	<?php endif; ?>




<?php do_action( 'foundationpress_before_closing_body' ); ?>
<?php wp_footer(); ?>
<script>
	jQuery(document).ready(function() {
	  document.getElementsByTagName("html")[0].style.visibility = "visible";
	});
</script>
</body>
</html>

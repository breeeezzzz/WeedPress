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

</section>

<div id="footer-container">

	<footer id="footer">
		<?php do_action( 'foundationpress_before_footer' ); ?>
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
		<?php do_action( 'foundationpress_after_footer' ); ?>
	</footer>
	
		<footer id="second-footer">
		<!--
			<div id="footer-logo">

					<img width="500px" height="500x" src="http://localhost/eeod/wp-content/uploads/2015/10/eagle-eye-logo.jpg" alt="EEOD" title="Eagle Eye Online Dispensary">
			</div>
			-->
			
			<div class="row">
				<div class="large-12 columns">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer_menu_class' ) ); ?>
					<span class="copyspan" style="position:relative;width:100%;margin-left:auto;margin-right:auto;text-align:center;">Copyright 2015 - Eagle Eye Online Dispensary</span>
				</div>
			<?php dynamic_sidebar( 'social-widgets' ); ?>
					<div class="flag-image-container">
						<img src="http://localhost/eeod/wp-content/uploads/2015/10/ca_weed.gif" class="alignnone" width="75" height="75">

						<img src="http://localhost/eeod/wp-content/uploads/2015/10/bc-flag.gif" class="alignnone" width="75" height="75">
					</div>
			</div>

		</footer>
		

		
</div>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>

<a class="exit-off-canvas"></a>
<?php endif; ?>

	<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	</div>
</div>
<?php endif; ?>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>

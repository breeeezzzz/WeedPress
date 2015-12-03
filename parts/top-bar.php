<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
	<?php 
		/* 
		** Top of header
		* Login/Logout Modal (depends on WooCommerce)
		* Contact Us Modal (jetpack)
		*/ 
	?>
	<div class="admin-meta">
	  <nav class="top-login-bar">
		<ul class="right top-login-area" style="display:inline-block;">
			<?php if ( is_user_logged_in() ) {  ?>				
					<li><a class="button tiny secondary" href="<?php echo wp_logout_url(); ?>">Logout <i class="fa fa-user-times"></i></a></li>
				
			<?php } 
					else { ?>
					<li><?php login_with_ajax(); ?></li>
															
				<?php }; ?>
					<li><a class="button tiny secondary" href="#" data-reveal-id="contactModal">Contact <i class="fa fa-envelope-o"></i></a></li>
					
		</ul>
	  </nav>
	</div>

		<!-- CONTACT MODAL -->
		<div id="contactModal" class="reveal-modal" data-reveal aria-labelledby="contactTitle" aria-hidden="true" role="dialog">


				<div class="row">
					<div class="large-3 columns">
						<img style="margin-bottom: 30px;" width="290px" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ca_weed.gif" alt="BC Weed" title="BC Weed">			
						<?php get_template_part( 'parts/corporate-info' ); ?>
						
					</div>
					
					<div class="large-8 columns" style="margin-top: 20px;">
						<div data-alert class="alert-box info radius">
						<a href="#" class="close">&times;</a>
						  We are EEOD and our hours are pretty much all the time, forever.
						</div>
						
					   <?php echo do_shortcode("[contact-form][contact-field label='Name' type='name' required='1'/][contact-field label='Email' type='email' required='1'/][contact-field class='modal-comment-area' label='Comment' type='textarea' required='1'/][/contact-form]") ?>
					</div>
				</div>
			<a class="close-reveal-modal" aria-label="Close">&#215;</a>
		</div>

		<!-- LOGIN/OUT MODAL -->
		<div id="loginoutModal" class="reveal-modal" data-reveal aria-labelledby="loginoutTitle" aria-hidden="true" role="dialog">
		   <?php get_template_part( 'parts/logon-reg' ); ?>
		  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
		</div>
		

<?php get_template_part( 'parts/featured-image-frontpage' ); ?>


<div class="top-bar-container contain-to-grid sticky">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area top-bar-<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>">
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>
        <section class="top-bar-section">
		
            <?php foundationpress_top_bar_l(); ?>
            <?php foundationpress_top_bar_r(); ?>
		
        </section>
	

    </nav>
</div>



<div class="sub-nav-container">
		<?php wp_nav_menu( array( 'theme_location' => 'Product Categories' ) ); ?>
</div>

<?php if (is_front_page()) { ?>
	
	<?php } 
		else { ?>
			<div class="row">
			<div class="large-8 columns">
				<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs" class="breadcrumbs">','</p>'); } ?>
			</div>
			</div>
	<?php } ?>

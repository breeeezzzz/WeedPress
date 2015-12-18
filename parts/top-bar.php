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
<div class="top-bar-container contain-to-grid sticky">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area top-bar-<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>">
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>
		
        <section class="top-bar-section">
            <?php foundationpress_top_bar_l(); ?>
        
		
		<section class="top-bar-section">
			<ul class="top-login-area show-for-large-up" style="display:inline-block;">
				<?php if ( is_user_logged_in() ) {  ?>				
						<li><a href="<?php echo wp_logout_url(); ?>">Logout <i class="fa fa-user-times"></i></a></li>
					
				<?php } 
						else { ?>
						<li><?php login_with_ajax(); ?></li>
																
					<?php }; ?>
						<li><a href="#" data-reveal-id="contactModal">Contact <i class="fa fa-envelope"></i></a></li>
						<li><a href="#" data-reveal-id="contactModal">Cart <i class="fa fa-shopping-cart"></i></a></li>
						
			</ul>	
		</section>
    </nav>
</div>

<?php get_template_part( 'parts/modals' ); ?>
<?php get_template_part( 'parts/featured-image-frontpage' ); ?>

<header id="secondaryHeader">
<?php if (is_front_page()) { ?>
	
	<?php } 
		else { ?>
				<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs" class="breadcrumbs">','</p>'); } ?>
	<?php } ?>
</header>


<!--
<div class="sub-nav-container">
		<?php //wp_nav_menu( array( 'theme_location' => 'Product Categories' ) ); ?>
</div>-->



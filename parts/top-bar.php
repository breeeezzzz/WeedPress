<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

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

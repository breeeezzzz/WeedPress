<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add desktop menu walker */
require_once( 'library/menu-walker.php' );

/** Add off-canvas menu walker */
require_once( 'library/offcanvas-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Add protocol relative theme assets */
require_once( 'library/protocol-relative-theme-assets.php' );

/*
add_filter('loop_shop_columns', 'loop_columns');
	if (!function_exists('loop_columns')) {
	function loop_columns() {
	return 3; // 3 products per row
	}
}
*/
add_filter('loop_shop_columns', 'loop_columns');
	if (!function_exists('loop_columns')) {
	function loop_columns() {
	return 3; // 3 products per row
	}
}


function payment_types_nav() {
	echo '
		<ul class="headerIcons">
			<li><i class="fa fa-bitcoin"></i></li>
			<li><i class="fa fa-cc-stripe"></i></li>
			<li><i class="fa fa-dollar"></i></li>
			<li><i class="fa fa-cc-mastercard"></i></li>
			<li><i class="fa fa-cc-paypal"></i></li>
			<li><i class="fa fa-cc-visa"></i></li>
			<li><i class="fa fa-bank"></i></li>
		</ul>';
}

// Add Shortcode
function custom_payment_options_shortcode( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'output' => '',
		), $atts )
	);

	// Code
$output = '<ul class="headerIcons">
			<li><i class="fa fa-bitcoin"></i></li>
			<li><i class="fa fa-cc-stripe"></i></li>
			<li><i class="fa fa-dollar"></i></li>
			<li><i class="fa fa-cc-mastercard"></i></li>
			<li><i class="fa fa-cc-paypal"></i></li>
			<li><i class="fa fa-cc-visa"></i></li>
			<li><i class="fa fa-bank"></i></li>
		</ul>';

return $output;
}
add_shortcode( 'payment_options', 'custom_payment_options_shortcode' );


function rotating_text() {
	echo '
		<div id="rotate">						
			<div><h2 class="header-rotate show-for-large-up" align="center">No Medical Card Needed</h2></div>
			<div><h2 class="header-rotate show-for-large-up" align="center">Worldwide Shipping</h2></div> 
			<div><h2 class="header-rotate show-for-large-up" align="center">Must Be Over 19</h2></div>					
		</div>';
}

				
function register_footer_menus() {
  register_nav_menus(
    array(
      'menu-product-categories' => __( 'Categories Menu' ),
	  'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_footer_menus' );


?>

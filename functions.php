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
	return 4 ; // 3 products per row
	}
}

function header_sub_nav() {
	echo '
		<div class="row">
			<dl class="sub-nav">
			  <dt></dt>
			  <dd><a href="http://localhost/eeod/shop/">All</a></dd>
			  <dd><a href="http://localhost/eeod/product-category/6/">Concentrate</a></dd>
			  <dd><a href="http://localhost/eeod/product-category/5/">Edible</a></dd>
			  <dd><a href="http://localhost/eeod/product-category/4/">Hybrid</a></dd>
			  <dd><a href="http://localhost/eeod/product-category/2/">Indica</a></dd>
			  <dd><a href="http://localhost/eeod/product-category/3/">Sativa</a></dd>
			  <dd><a href="http://localhost/eeod/product-category/9/">Tincture</a></dd>
			  <dd><a href="http://localhost/eeod/product-category/7/">Drinks</a></dd>
			</dl>
		</div>
';
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

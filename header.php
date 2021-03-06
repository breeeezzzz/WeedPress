<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */ 

?>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="/assets/images/icons/apple-touch-icon-precomposed.png">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,600italic,400italic,700italic,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" id="hover-effects" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/components/hover/css/hover.css" type="text/css" media="all">
	<style>html { visibility:hidden; }</style>
	<?php wp_head(); ?>
	<?php get_template_part( 'parts/user-logged-in' ); ?>
</head>

	<body <?php body_class(); ?>>
		<?php do_action( 'foundationpress_after_body' ); ?>

		<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>

		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">
				<?php endif; ?>

				<?php do_action( 'foundationpress_layout_start' ); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) :
					get_template_part( 'parts/off-canvas-menu' ); endif; ?>

				<?php get_template_part( 'parts/top-bar' ); ?>

				<section id="main-content" class="main-content content" role="document">
					<?php do_action( 'foundationpress_after_header' ); ?>
																			
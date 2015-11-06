<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>


<aside id="sidebar" class="small-12 large-3 columns show-for-xlarge-only">
	
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php dynamic_sidebar( 'cart-widget' ); ?>

	<?php do_action( 'foundationpress_after_sidebar' ); ?>
	<!--
	<div class="col-1">

		<form method="post" class="login">

			
			<p class="form-row form-row-wide">
				<label for="username">Username or email address <span class="required">*</span></label>
				<input type="text" class="input-text" name="username" id="username" value="">
			</p>
			<p class="form-row form-row-wide">
				<label for="password">Password <span class="required">*</span></label>
				<input class="input-text" type="password" name="password" id="password">
			</p>

			
			<p class="form-row">
				<input type="hidden" id="_wpnonce" name="_wpnonce" value="c17c40bae1"><input type="hidden" name="_wp_http_referer" value="/eeod/my-account/">				<input type="submit" class="button" name="login" value="Login">
				<label for="rememberme" class="inline">
					<input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me				</label>
			</p>
			<p class="lost_password">
				<a href="http://localhost/eeod/my-account/lost-password/">Lost your password?</a>
			</p>

			
		</form>


	</div>
	-->

</aside>




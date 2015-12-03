<?php 
/*
 * This is the page users will see logged out. 
 * You can edit this, but for upgrade safety you should copy and modify this file into your template folder.
 * The location from within your template folder is plugins/login-with-ajax/ (create these directories if they don't exist)
*/
?>

	<div class="lwa lwa-template-modal"><?php //class must be here, and if this is a template, class name should be that of template directory ?>
		<a href="<?php echo esc_attr(LoginWithAjax::$url_login); ?>" class="lwa-links-modal button tiny secondary"><?php esc_html_e('Log In','login-with-ajax') ?> <i class="fa fa-user"></i></a>
		<?php 
		//FOOTER - once the page loads, this will be moved automatically to the bottom of the document.
		?>
		<div class="lwa-modal reveal-modal loginout-modal-style" style="display:none;z-index:101;">
			
	        <form name="lwa-form" class="lwa-form" action="<?php echo esc_attr(LoginWithAjax::$url_login); ?>" method="post">
	        	<span class="lwa-status"></span>
	            <div class="row">
					<h2>Login</h2>
	                <div class="lwa-username">
							
						<p class="username_input form-row form-row-wide">
						<label for="username">Username or email address <span class="required">*</span></label>
						<input type="text" name="log" id="lwa_user_login" class="input" />
						</p>

	                </div>
	                <div class="lwa-password">
						<p class="password_input form-row form-row-wide">
							<label for="password">Password <span class="required">*</span></label>
							<input type="password" name="pwd" id="lwa_user_pass" class="input" value="" />
						</p>
	                <?php do_action('login_form'); ?>
					</div>
	            </div>
				
	                    <div class="row lwa-submit-button">
							<input name="rememberme" type="checkbox" id="lwa_rememberme" value="forever" /> <label class="remember-label"><?php esc_html_e( 'Remember Me','login-with-ajax' ) ?></label>
	                        <input type="submit" name="wp-submit" class="lwa-wp-submit button expand" value="<?php esc_attr_e('Log In','login-with-ajax'); ?>" tabindex="100" />
	                        <input type="hidden" name="lwa_profile_link" value="<?php echo !empty($lwa_data['profile_link']) ? 1:0 ?>" />
                        	<input type="hidden" name="login-with-ajax" value="login" />
							<?php if( !empty($lwa_data['redirect']) ): ?>
							<input type="hidden" name="redirect_to" value="<?php echo esc_url($lwa_data['redirect']); ?>" />
							<?php endif; ?>
						</div>

	                        
	                     <div class="row">

							<?php if ( get_option('users_can_register') && !empty($lwa_data['registration']) ) : ?> 
							<a href="<?php echo esc_attr(LoginWithAjax::$url_register); ?>" class="lwa-links-register-inline  button secondary expand"><?php esc_html_e('Register','login-with-ajax'); ?></a>
							<?php endif; ?>
							<?php if( !empty($lwa_data['remember']) ): ?>
							<a class="lwa-links-remember button alert expand" href="<?php echo esc_attr(LoginWithAjax::$url_remember); ?>" title="<?php esc_attr_e('Password Lost and Found','login-with-ajax') ?>"><?php esc_attr_e('Lost your password?','login-with-ajax') ?></a>
							<?php endif; ?>
						</div>
	        </form>
			
        	<?php if( !empty($lwa_data['remember']) ): ?>
	        <form name="lwa-remember" class="lwa-remember" action="<?php echo esc_attr(LoginWithAjax::$url_remember); ?>" method="post" style="display:none;">
	        	<span class="lwa-status"></span>
				<h2>Password Reset</h2>
	            <table>

	                <tr class="lwa-remember-email">	                    
	                	<td>
	                		<label>
	                        <?php $msg = __("Username or email", 'login-with-ajax'); ?>
	                        <input type="text" name="user_login" id="lwa_user_remember" value="<?php echo esc_attr($msg); ?>" onfocus="if(this.value == '<?php echo esc_attr($msg); ?>'){this.value = '';}" onblur="if(this.value == ''){this.value = '<?php echo esc_attr($msg); ?>'}" />
	                        </label>
							<?php do_action('lostpassword_form'); ?>
	                    </td>
	                </tr>
	                <tr>
	                    <td>
	                        <input class="button expand" type="submit" value="<?php esc_attr_e("Reset Password", 'login-with-ajax'); ?>" />
	                        <a href="#" class="lwa-links-remember-cancel"><?php esc_html_e("Cancel",'login-with-ajax'); ?></a>
	                        <input type="hidden" name="login-with-ajax" value="remember" />
	                    </td>	                
	                </tr>
	            </table>
	        </form>
	        <?php endif; ?>
		    <?php if ( get_option('users_can_register') && !empty($lwa_data['registration']) ) : //Taken from wp-login.php ?>
		    <div class="lwa-register" style="display:none;">

				<!--<form name="lwa-register"  action="<?php // echo esc_attr(LoginWithAjax::$url_register); ?>" method="post" onsubmit="setTimeout('parent.location.reload()',5500); return true;">-->
				<form name="lwa-register"  action="<?php echo esc_attr(LoginWithAjax::$url_register); ?>" method="post">
					<h2>Create Account</h2>
	        		<span class="lwa-status"></span>
					<table>
		                <tr class="lwa-username">
		                    <td>  
		                    	<label>
		                        <?php $msg = __('Username','login-with-ajax') ?>
		                        <input type="text" name="user_login" id="user_login"  value="<?php echo esc_attr($msg); ?>" onfocus="if(this.value == '<?php echo esc_attr($msg); ?>'){this.value = '';}" onblur="if(this.value == ''){this.value = '<?php echo esc_attr($msg); ?>'}" />
		                        </label> 
		                    </td>
		                </tr>
		                <tr class="lwa-email">
		                    <td>
		                    	<label>
		                        <?php $msg = __('E-mail','login-with-ajax') ?>
		                        <input type="text" name="user_email" id="user_email"  value="<?php echo esc_attr($msg); ?>" onfocus="if(this.value == '<?php echo esc_attr($msg); ?>'){this.value = '';}" onblur="if(this.value == ''){this.value = '<?php echo esc_attr($msg); ?>'}"/>
		                        </label>
		                    </td>
		                </tr>
		                <tr>
		                    <td>
								<?php
								//If you want other plugins to play nice, you need this: 
								do_action('register_form'); 
							?>
		                    </td>
		                </tr>
		                <tr>
		                    <td>
		                        
								<input class="button expand" type="submit" value="<?php esc_attr_e('Register','login-with-ajax'); ?>" tabindex="100"  /><br />
								<a href="#" class="lwa-links-register-inline-cancel"><?php esc_html_e("Cancel",'login-with-ajax'); ?></a>
								<input type="hidden" name="login-with-ajax" value="register" />
		                    </td>
							
						
							<span>Password will be sent to email.</span>
		                </tr>
		            </table>
					
					<script>
					<!-- Redirects the page after registration -->
						$.fn.exists = function(callback) {
						  var args = [].slice.call(arguments, 1);

						  if (this.length) {
							callback.call(this, args);
						  }

						  return this;
						};

						// Usage
						$('input#register').click(function() {

							setTimeout(function (){
								 //something you want delayed
								$('.lwa-status-confirm').exists(function() {
									window.location.reload();
								});
							 }, 10); // how long do you want the delay to be?
						});
					</script>
					
				</form>
			</div>
			<?php endif; ?>
		</div>
	</div>
	

	

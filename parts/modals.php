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
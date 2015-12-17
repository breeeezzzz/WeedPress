<?php if (is_front_page()) { ?>

			<div id="loadingHeader">
				<header id="featured-hero" role="banner">	

						<div class="tagline">
							<h1 class="feature-text"><?php bloginfo( 'name' ); ?></h1>
							<h4 class="feature-text-small"><?php bloginfo( 'description' ); ?></h4>
							

							
						<div class="front-page-button-div show-for-large-up">
							<a role="button" class="front-page-button-sign-up alert button" href="#what-we-do">Sign Up</a>
							<a role="button" class="front-page-button secondary button hvr-icon-down bounceInDown animated" href="#what-we-do">Learn More!</a>
						</div>
							

						</div>
						
				</header> 
				<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'frontpage-slider', 'slug' ); } ?>
				
				<?php //if ( function_exists( 'rotating_text' ) ) { rotating_text(); } ?>
				

			</div>
			

	<?php } 
		
	else { ?>
		<div class="header-wrapper">
			<header id="featured-hero-small" role="banner">
		
				<div class="tagline-other" >
					<h1 class="feature-text"><?php bloginfo( 'name' ); ?></h1>
					<h4 class="feature-text-small"><?php bloginfo( 'description' ); ?></h4>
				</div>
				
			
			</header>
		</div>
			<?php //if ( function_exists( 'soliloquy' ) ) { soliloquy( 'other-slider', 'slug' ); } ?>
		<?php } ?>



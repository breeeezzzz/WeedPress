<?php if (is_front_page()) { ?>
		<header id="featured-hero" class="show-for-large-up" role="banner" style="background-image: url('http://localhost/eeod/wp-content/uploads/2015/11/bg.jpg')">	
				<div class="tagline">
					<h1 class="feature-text"><?php bloginfo( 'name' ); ?></h1>
					<h4 class="feature-text-small"><?php bloginfo( 'description' ); ?></h4>
					
					<h2 class="header-rotate" align="center">
						<div id="rotate">
							<div>No Medical Card Needed</div> <div>Canadian Residents Only</div> <div>Must Be Over 19</div>
					</h2>
					
					<div style="width:100%;text-align:center;margin-top:5em;"><a role="button" style="margin-right:auto;margin-left:auto;width:200px" class="button" href="#what-we-do">Get Started</a></div>
				</div>
		</header>
	<?php } 
		
	else { ?>
			<header id="featured-hero-small" class="show-for-large-up" role="banner" style="background-image: url('http://localhost/eeod/wp-content/uploads/2015/10/marijuana-11.jpg')">
		
					<div class="tagline-other">
						<h1 class="feature-text"><?php bloginfo( 'name' ); ?></h1>
						<h4 class="feature-text-small"><?php bloginfo( 'description' ); ?></h4>
					</div>
				</div>
			</header>
		<?php } ?>

	
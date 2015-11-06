<?php if ( has_post_thumbnail( $post->ID ) ) : 
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$image = $image[0]; 
	?>

	<?php if (is_front_page()) { ?>
		<header id="featured-hero" class="show-for-large-up" role="banner" style="background-image: url('http://localhost/eeod/wp-content/uploads/2015/10/marijuana-11.jpg\')">	
			<div class="marketing">
				<div class="tagline">
					<h1 class="feature-text"><?php bloginfo( 'name' ); ?></h1>
					<h4 class="feature-text-small"><?php bloginfo( 'description' ); ?></h4>
					<a role="button" style="margin-right:auto;margin-left:auto;" class="button alert expand" href="http://localhost/eeod/shop/">View Our Shop!</a>
					<a role="button" style="margin-right:auto;margin-left:auto;" class="button alert expand" href="#what-we-do">Learn More</a>
				</div>
			</div>
		</header>
	<?php } 
		else { ?>
			<header id="featured-hero-small" class="show-for-large-up" role="banner" style="background-image: url('http://localhost/eeod/wp-content/uploads/2015/10/marijuana-11.jpg\')">
				<div class="marketing">
					<div class="tagline">
						<h1 class="feature-text"><?php bloginfo( 'name' ); ?></h1>
						<h4 class="feature-text-small"><?php bloginfo( 'description' ); ?></h4>
					</div>
				</div>
			</header>
		<?php } 
		endif; ?>
	
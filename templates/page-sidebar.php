<?php
/*
Template Name: Page Sidebar
*/
get_header(); ?>

	<div class="row">

			
			<div class="small-12 large-12 columns" role="main">
			
			<?php do_action( 'foundationpress_before_content' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>

					<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>

				</article>
			<?php endwhile;?>

			<?php do_action( 'foundationpress_after_content' ); ?>

			</div>

		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>

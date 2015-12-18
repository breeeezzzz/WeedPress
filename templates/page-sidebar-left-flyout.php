<?php
/*
Template Name: Left Fly-out Sidebar
*/
get_header(); ?>









<div class="row">
<?php //get_sidebar( 'right' ); ?>
<?php// get_sidebar( 'left' ); ?>

	<div class="large-12 columns" role="main">

        <?php do_action( 'foundationpress_before_content' ); ?>

        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <header>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>
				
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

            </article>
        <?php endwhile;?>

        <?php do_action( 'foundationpress_after_content' ); ?>

    </div>

</div>


<?php get_footer(); ?>

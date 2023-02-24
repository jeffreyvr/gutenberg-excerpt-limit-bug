<?php get_header(); ?>

<div class="container mx-auto my-8">

	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
			?>

            <div>
                <?php if(is_archive()) : ?>
                    <h2><?php the_title(); ?></h2>

                    <div><?php the_excerpt(); ?></div>
                <?php else: ?>
                    <h1><?php the_title(); ?></h1>

                    <div><?php the_content(); ?></div>
                <?php endif; ?>
            </div>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php
get_footer();

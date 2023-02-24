<?php get_header(); ?>

<div>

	<?php
        $custom_query = new WP_Query( array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
        ) );
    ?>

    <?php if ( $custom_query->have_posts() ) : ?>
        <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

            <div>
                <h2><?php the_title(); ?></h2>

                <div><?php the_excerpt(); ?></div>
            </div>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php
get_footer();

<?php get_header(); ?>

<div class="container">
    <div class="grid-container">
        <?php
            $grid_query = new WP_Query(['post_type' => 'stotramala_grid_item', 'posts_per_page' => -1]);
            if ($grid_query->have_posts()) : while ($grid_query->have_posts()) : $grid_query->the_post();
        ?>
            <a href="<?php the_permalink(); ?>" class="grid-item">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" class="grid-item-icon">
                <?php endif; ?>
                <h2><?php the_title(); ?></h2>
            </a>
        <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
</div>

<?php get_footer(); ?>

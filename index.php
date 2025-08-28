<?php get_header(); ?>

<div class="grid-container">
    <?php
        $args = [
            'post_type' => 'grid_item',
            'posts_per_page' => -1, // Show all items
            'orderby' => 'menu_order',
            'order' => 'ASC',
        ];
        $grid_query = new WP_Query($args);
    ?>

    <?php if ($grid_query->have_posts()) : ?>
        <?php while ($grid_query->have_posts()) : $grid_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="grid-item">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('thumbnail', ['class' => 'grid-item-icon']); ?>
                <?php endif; ?>
                <h2 class="grid-item-title"><?php the_title(); ?></h2>
            </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p>No grid items found.</p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>

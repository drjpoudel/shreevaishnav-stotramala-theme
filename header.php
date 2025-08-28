<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <h1 class="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php
                    $options = get_option('stotramala_theme_settings');
                    echo esc_html($options['header_text'] ?? get_bloginfo('name'));
                ?>
            </a>
        </h1>
        <nav class="main-navigation">
            <?php
                wp_nav_menu([
                    'theme_location' => 'primary_menu',
                    'menu_id' => 'primary-menu',
                ]);
            ?>
        </nav>
    </header>

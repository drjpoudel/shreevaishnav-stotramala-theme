<?php
// Theme setup
function shreevaishnav_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(['primary' => 'Main Navigation']);
}
add_action('after_setup_theme', 'shreevaishnav_theme_setup');

// Enqueue stylesheet
function shreevaishnav_enqueue_styles() {
    wp_enqueue_style('shreevaishnav-main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'shreevaishnav_enqueue_styles');```

#### `header.php`
```php
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php $options = get_option('stotramala_settings'); ?>

<?php if (!empty($options['header_notice'])): ?>
    <div class="header-notice"><?php echo esc_html($options['header_notice']); ?></div>
<?php endif; ?>

<header class="site-header">
    <div class="container">
        <div class="site-branding">
            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
        </div>
        <nav class="main-navigation">
            <?php wp_nav_menu(['theme_location' => 'primary']); ?>
        </nav>
    </div>
</header>

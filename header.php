<!DOCTYPE html>    
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' /> 
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div>
<div>
<div id="olenavbar">
    <div class="container parent-cont">
        <div class="row" style="gap:0; display: flex; align-items: center;">
            <!-- Logo -->
            <div id="logo-cont" class="col-md-3 col-xs-12 col-sm-12">
               <h1>
                <a href="<?php echo esc_url(home_url('/')); ?>" title="Homepage">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/pustlogo.svg" alt="Pustakalaya Logo" />
               </a>
               </h1>
            </div>
            
            <!-- Search and Primary Nav -->
            <div class="col-md-5 col-xs-12 col-sm-12 sec-menu-cont">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?php get_search_form(); ?>
                    </div>
                </div>
                <div class="row" id="primary-navbar">
                    <div class="col-md-12">
                        <?php 
                            wp_nav_menu([
                                'theme_location' => 'primary',
                                'menu_id' => 'menu',
                                'container' => false,
                            ]);
                        ?>
                    </div>
                </div>
            </div>

            <!-- Secondary Nav and Socials -->
            <div class="col-md-4 col-xs-12 col-sm-12">
                <?php 
                    wp_nav_menu([
                        'theme_location' => 'secondary',
                        'menu_class' => 'secondary-navbar',
                        'container' => false,
                    ]);
                ?>
            </div>
        </div>
    </div>
</div>

<!-- Mobile Sidenav -->
<div class="sidenav">
    <span id="close-mobile-menu">&times;</span>
    <?php 
        wp_nav_menu([
            'theme_location' => 'mobile',
            'container' => false,
        ]);
    ?>
</div>
<span id="burger-menu">&#9776;</span>

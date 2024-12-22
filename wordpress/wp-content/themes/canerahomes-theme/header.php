<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
    <?php wp_head(); ?> <!-- This is necessary to enqueue styles and scripts -->
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="site-header">
            <div class="site-branding">
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <p><?php bloginfo( 'description' ); ?></p>
            </div>

            <nav class="main-navigation">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'menu',
                    ) );
                ?>
            </nav>
        </div>
    </header>
    
    
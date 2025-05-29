<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container">
        <h1 class="site-title"><span class="dashicons dashicons-paw"></span> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Your Shelter</a></h1>
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav id="primary-menu" class="site-navigation" role="navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'fallback_cb'    => 'ai_shelter_fallback_menu',
            ) );
            ?>
        </nav>
    </div>
</header>

<?php
function ai_shelter_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    // Register a primary navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'ai-shelter'),
    ));
}
add_action('after_setup_theme', 'ai_shelter_setup');

function ai_shelter_widgets_init() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id'   => 'sidebar-1',
    ));
}
add_action('widgets_init', 'ai_shelter_widgets_init');

/**
 * Fallback navigation menu.
 * Displays basic links when no menu is assigned.
 */
function ai_shelter_fallback_menu() {
    echo '<ul class="menu">';
    echo '<li><a href="#">About Us</a></li>';
    echo '<li><a href="#">Blog</a></li>';
    echo '<li><a href="#">Contact Us</a></li>';
    echo '</ul>';
}

/**
 * Enqueue theme scripts and styles.
 */
function ai_shelter_scripts() {
    // Swiper slider styles and script from CDN.
    wp_enqueue_style( 'swiper', 'https://unpkg.com/swiper@9/swiper-bundle.min.css', array(), '9' );
    wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper@9/swiper-bundle.min.js', array(), '9', true );

    // Theme stylesheet.
    wp_enqueue_style( 'ai-shelter-style', get_stylesheet_uri(), array( 'swiper' ), '1.0' );

    // Front page script for initializing the slider.
    wp_enqueue_script( 'ai-shelter-front', get_template_directory_uri() . '/js/front.js', array( 'swiper' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'ai_shelter_scripts' );

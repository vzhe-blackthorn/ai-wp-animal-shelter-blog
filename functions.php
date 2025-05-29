<?php
function ai_shelter_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    // Register a primary navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'ai-shelter'),
    ));
}
add_action('after_setup_theme', 'ai_shelter_setup');

function ai_shelter_widgets_init()
{
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar-1',
    ));
}
add_action('widgets_init', 'ai_shelter_widgets_init');

/**
 * Fallback navigation menu.
 * Displays basic links when no menu is assigned.
 */
function ai_shelter_fallback_menu()
{
    $about_link   = is_front_page() ? '#about' : esc_url(home_url('/#about'));
    $contact_link = is_front_page() ? '#contact' : esc_url(home_url('/#contact'));

    echo '<ul class="menu">';
    echo '<li><a href="' . $about_link . '"><span class="dashicons dashicons-info"></span> <span class="label">About</span></a></li>';
    echo '<li><a href="' . esc_url(home_url('/blog')) . '"><span class="dashicons dashicons-admin-post"></span> <span class="label">Blog</span></a></li>';
    echo '<li><a href="' . $contact_link . '"><span class="dashicons dashicons-email"></span> <span class="label">Contact</span></a></li>';
    echo '</ul>';
}

function ai_shelter_append_blog_link($items, $args)
{
    if ('primary' === $args->theme_location && strpos($items, '/blog') === false) {
        $items .= '<li><a href="' . esc_url(home_url('/blog')) . '"><span class="dashicons dashicons-admin-post"></span> <span class="label">Blog</span></a></li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'ai_shelter_append_blog_link', 10, 2);

/**
 * Adjust About and Contact links to point to the correct page.
 */
function ai_shelter_section_links($atts, $item, $args)
{
    if (!isset($atts['href'])) {
        return $atts;
    }

    if (strpos($atts['href'], '#about') !== false) {
        $atts['href'] = is_front_page() ? '#about' : esc_url(home_url('/#about'));
    } elseif (strpos($atts['href'], '#contact') !== false) {
        $atts['href'] = is_front_page() ? '#contact' : esc_url(home_url('/#contact'));
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'ai_shelter_section_links', 10, 3);
/**
 * Enqueue theme scripts and styles.
 */
function ai_shelter_scripts()
{
    // Swiper slider styles and script from CDN.
    wp_enqueue_style('swiper', 'https://unpkg.com/swiper@9/swiper-bundle.min.css', array(), '9');
    wp_enqueue_script('swiper', 'https://unpkg.com/swiper@9/swiper-bundle.min.js', array(), '9', true);

    // WordPress dashicons for social icons
    wp_enqueue_style('dashicons');

    // Google Fonts
    wp_enqueue_style('ai-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap', false);

    // Theme stylesheet.
    wp_enqueue_style('ai-shelter-style', get_stylesheet_uri(), array('swiper'), '1.0');

    // Front page script for initializing the slider.
    wp_enqueue_script('ai-shelter-front', get_template_directory_uri() . '/js/front.js', array('swiper'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'ai_shelter_scripts');

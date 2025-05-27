<?php
function ai_shelter_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'ai_shelter_setup');

function ai_shelter_widgets_init() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id'   => 'sidebar-1',
    ));
}
add_action('widgets_init', 'ai_shelter_widgets_init');

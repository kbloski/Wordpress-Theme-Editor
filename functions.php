<?php
function enqueue_child_theme_styles() {
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(), // ładuje style.css z motywu potomnego
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');

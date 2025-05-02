<?php
/**
 * 
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 * 
 * @author Kamil Błoński
 */


function enqueue_child_theme_styles() {
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');

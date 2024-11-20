<?php
function starter_theme_scripts()
{
    // CALLING STYLES
    wp_enqueue_style('starter-theme-style', get_template_directory_uri() . "/dist/css/main.css", array(), null, 'all');

    // CALLING JAVASCRIPT
    wp_enqueue_script('starter-theme-script', get_template_directory_uri() . "/dist/js/main.js", ["jquery"], '1.0', true);
}

add_action('wp_enqueue_scripts', 'starter_theme_scripts');


/** Disabled Gutenberg Blocks edit only pages */
// add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
// function prefix_disable_gutenberg($current_status, $post_type)
// {
//     if ('page' === $post_type) {
//         return false;
//     }
//     return $current_status;
// }

// /** Disabled HTML editor */
// add_action('init', 'my_remove_editor_from_post_type');
// function my_remove_editor_from_post_type()
// {
//     remove_post_type_support('page', 'editor');
// }

/** Allow SVG files */
function enable_svg_upload($upload_mimes)
{
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter('upload_mimes', 'enable_svg_upload', 10, 1);

wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), false, true);



add_theme_support('post-thumbnails');

function custom_disable_gutenberg_for_cpt($use_block_editor, $post_type)
{
    $excluded_post_types = array('post');

    if (!in_array($post_type, $excluded_post_types)) {
        return false;
    }

    return $use_block_editor;
}
add_filter('use_block_editor_for_post_type', 'custom_disable_gutenberg_for_cpt', 10, 2);
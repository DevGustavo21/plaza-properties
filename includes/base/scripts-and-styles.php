<?php

add_action('wp_enqueue_scripts', 'news_theme_scripts');
function news_theme_scripts()
{

    $dir_assets = get_template_directory() . '/assets';
    $url_assets = get_template_directory_uri() . '/assets';

    /**
     * STYLES
     */
    wp_enqueue_style('news-theme-style', get_stylesheet_uri(), array(), '1.' . filemtime(get_template_directory() . '/style.css'));

    /**
     * SCRIPTS
     */
    wp_enqueue_script('lazyload', "{$url_assets}/js/lazyload.min.js", array(), '17.8.3', true);
    wp_enqueue_script('swiper', "{$url_assets}/js/swiper-bundle.min.js", array(), '11.0.7', true);
    wp_enqueue_script('news-theme-main', "{$url_assets}/js/main.min.js", array(), '1.' . filemtime("{$dir_assets}/js/main.min.js"), true);
}


/** Disabled Gutenberg Blocks edit only pages */
add_filter( 'use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2 );
function prefix_disable_gutenberg( $current_status, $post_type ) {
    if ( 'page' === $post_type ) {
        return false;
    }
    return $current_status;
}

/** Disabled HTML editor */
add_action('init', 'my_remove_editor_from_post_type');
function my_remove_editor_from_post_type() {
    remove_post_type_support( 'page', 'editor' );
}

/** Allow SVG files */
function enable_svg_upload( $upload_mimes ) {
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );
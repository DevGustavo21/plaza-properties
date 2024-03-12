<?php

/**
 * news_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package news_theme
 */


/**
 * Enqueue scripts and styles
 */
require_once 'includes/base/scripts-and-styles.php';

/**
 * ACF (Styles)
 */
require_once 'includes/features/acf.php';

/**
 * CUSTOMS
 */

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

/**Allow SVG files*/
function enable_svg_upload( $upload_mimes ) {
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );


/**Calling menu.js file*/
function menu() {
    wp_enqueue_script( 'menu_script', get_stylesheet_directory_uri() . '/assets/js/menu.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'menu' );


/**USE BLOCK EDITOR ONLY FOR PAGE AND GUTENBERG FOR POSTS */
add_filter( 'use_block_editor_for_page', '__return_false', 10 );

/**ALLOW USE ACF BLOCKS IN GUTENBERG FOR POSTS*/
add_action('acf/init', function(){
    if (function_exists('acf_register_block_type')){
        acf_register_block_type(array(
			'name'            => 'bk_gutenberg-cta',
            'title'           => 'Call to Action',
            'description'     => 'Block to add a CTA features',
			'mode'=> 'edit',
            'render_template' => get_stylesheet_directory() . '/ACF/blocks/template-blocks/bk_gutenberg-cta.php',
            'enqueue_style'   => get_stylesheet_directory_uri() . '/assets/sass/components/blocks/_cp-cta.scss',
            'icon'            => 'dashicons dashicons-align-full-width',
			"supports" => array (
				"anchor" => true,
				"align" => true,
				"html" => false,
				"mode" => false
			),
        ));
    }
});

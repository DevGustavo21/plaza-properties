<?php

/**
 * news_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package news_theme
 */

/**
 * Basic setup
 */
require_once 'includes/base/basic.php';


/**
 * Widgets
 */
include_once('includes/base/widgets.php');


/**
 * Enqueue scripts and styles
 */
require_once 'includes/base/scripts-and-styles.php';


/**
 * Helpers loop functions
 */
require_once 'includes/features/helpers-loop.php';


/**
 * ACF
 */
require_once 'includes/features/acf.php';


/**
 * CUSTOMIZER
 */
include_once('includes/features/settings-customizer.php');


/**
 * IMPROVE: WP MENU NAV
 */
require_once 'includes/features/improve-wp-nav.php';


/**
 * CUSTOMS
 */

/** Disabled Gutenberg Blocks edit only pages */
function prefix_disable_gutenberg( $current_status, $post_type ) {
	if ( 'page' === $post_type ) {
		return false;
	}
	return $current_status;
}
add_filter( 'use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2 );


/** Disabled HTML editor */
function my_remove_editor_from_post_type() {
    remove_post_type_support( 'page', 'editor' );
}
add_action('init', 'my_remove_editor_from_post_type');


/** Allow SVG files */
function enable_svg_upload( $upload_mimes ) {
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );


/** Hide admin bar in mobile devices */
function inject_scripts_footer() {
	?>

	<?php if ( is_user_logged_in() ) : ?>

		<script>
			const mediaQuery = window.matchMedia('(max-width: 786px)');
			const wpAdminBar = document.getElementById('wpadminbar');
			var $htmlElement = document.querySelector('html');

			const handleMediaChange = (mediaQuery) => {
				if (mediaQuery.matches) {
					wpAdminBar.style.display = 'none';
					document.body.classList.remove('admin-bar');
					$htmlElement.setAttribute('style', 'margin-top: 0!important');
				} else {
					wpAdminBar.style.display = 'block';
					document.body.classList.add('admin-bar');
					$htmlElement.setAttribute('style', 'margin-top: 32px!important');
				}
			};

			mediaQuery.addEventListener('change', handleMediaChange);
			handleMediaChange(mediaQuery);
		</script>

	<?php endif; ?>

	<?php
}
add_action( 'wp_footer', 'inject_scripts_footer' );


/** Hide block editor in pages */
add_filter( 'use_block_editor_for_page', '__return_false', 10 );


/** Show gutenberg  blocks in posts */
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

<?php

/**
 * news_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package news_theme
 */

/*————————————————————————————————————————————————————*\
	●❱ BASIC SETUP
\*————————————————————————————————————————————————————*/

require_once 'includes/base/basic.php';

/*  |> Widgets
——————————————————————————————————————————————————————*/
include_once('includes/base/widgets.php');


/*  |> Enqueue scripts and styles.
——————————————————————————————————————————————————————*/
require_once 'includes/base/scripts-and-styles.php';


/*  |> Helpers loop functions
——————————————————————————————————————————————————————*/
require_once 'includes/features/helpers-loop.php';


/*————————————————————————————————————————————————————*\
	●❱ ACF
\*————————————————————————————————————————————————————*/

require_once 'includes/features/acf.php';

/*————————————————————————————————————————————————————*\
	●❱ CUSTOMIZER
\*————————————————————————————————————————————————————*/

include_once('includes/features/settings-customizer.php');


/*————————————————————————————————————————————————————*\
	●❱ IMPROVE: WP MENU NAV
\*————————————————————————————————————————————————————*/

require_once 'includes/features/improve-wp-nav.php';


/*————————————————————————————————————————————————————*\
	●❱ OTHERS
\*————————————————————————————————————————————————————*/

/*
——— Disabled Gutenberg Blocks edit only pages
*/

add_filter( 'use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2 );
function prefix_disable_gutenberg( $current_status, $post_type ) {
	if ( 'page' === $post_type ) {
		return false;
	}
	return $current_status;
}


/*
——— Get users name
*/

function sp_get_users_names( $users_ids ) {

	$authors_names = array();
	if ( $users_ids ) {
		foreach ( $users_ids as $key => $id ) {
			$authors_names[] = sp_get_user_name( $id );
		}
	}

	return implode( ', ', $authors_names );
}

//Allow SVG files

function enable_svg_upload( $upload_mimes ) {
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );



function sp_get_user_name( $user_id ) {
	$user_info = get_userdata( $user_id );
	return $user_info->first_name . ' ' . $user_info->last_name;
}


/**
 * Check if the value exists and returns a 'true' or 'false' like string
 *
 * @return string Retunr 'true' or 'false'
 */
function sp_has_value( $value ) {
	return $value ? 'true' : 'false';
}


/*
——— Hide admin bar in mobile devices
*/

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

/**
 * Phone URL
 * @author Bill Erickson
 * @link https://www.billerickson.net/phone-number-url
 *
 * @param string $phone_number, ex: (555) 123-4568
 * @return string $phone_url, ex: tel:5551234568
 */
function sp_phone_url( $phone_number = false ) {
	$phone_number = str_replace( array( '(', ')', '-', '.', '|', ' ' ), '', $phone_number );
	return esc_url( 'tel:' . $phone_number );
}

/*
——— Change height in podcast embed
*/

function sp_change_embed_height( $embed ) {
	return preg_replace( '/height="[^"]+"/', 'height="152"', $embed );
}


//USE BLOCK EDITOR ONLY FOR PAGE AND GUTENBERG FOR POSTS

add_filter( 'use_block_editor_for_page', '__return_false', 10 );


add_action('acf/init', function(){
    if (function_exists('acf_register_block_type')){
        acf_register_block_type(array(
            'name'            => 'bk_gutenberg-slider',
            'title'           => 'Slider Blog',
            'description'     => 'Block to add slider features',
			'mode' => 'edit',
            'render_template' => get_stylesheet_directory() . '/ACF/blocks/template-blocks/bk_gutenberg-slider.php',
            'enqueue_style'   => get_stylesheet_directory_uri() . '/assets/scss/components/_cp-slider.scss',
            'icon'            => 'dashicons dashicons-slides',
            'supports'        => array(
                'anchor' => true,
                'align'  => true,
                'html'   => false,
                'mode'   => 'edit',
            ),
        ));
    }
});


add_action('acf/init', function(){
    if (function_exists('acf_register_block_type')){
        acf_register_block_type(array(
			'name'            => 'bk_gutenberg-project',
            'title'           => 'Call to Action',
            'description'     => 'Block to add a CTA features',
			'mode'=> 'edit',
            'render_template' => get_stylesheet_directory() . '/ACF/blocks/template-blocks/bk_gutenberg-project.php',
            'enqueue_style'   => get_stylesheet_directory_uri() . '/assets/scss/components/_cp-project.scss',
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


// Función para cargar posts basado en la página seleccionada
function load_posts_by_page() {
    $paged = $_POST['page'];

    $args = array(
        'posts_per_page' => 3,
        'paged' => $paged,
    );

    $my_posts = new WP_Query($args);

    if ($my_posts->have_posts()) :
        while ($my_posts->have_posts()) : $my_posts->the_post();
            echo '<li>';
            echo '<a href="' . esc_url(get_permalink()) . '">';
            
            if (has_post_thumbnail()) :
                $image_id = get_post_thumbnail_id();
                $image = wp_get_attachment_image($image_id, 'full', false, array('class' => 'entry-image'));
                echo $image;
            endif;

            echo '<div class="info-post">';
            echo '<div class="entry-title">' . esc_html(get_the_title()) . '</div>';
            echo '<div class="entry-date">' . esc_html(get_the_date('F j, Y')) . '</div>';
            echo '</div>';
            echo '</a>';
            echo '</li>';
        endwhile;

        // Restore the original WordPress loop
        wp_reset_postdata();
    else :
        echo 'No posts found';
    endif;

    wp_die(); // Termina la ejecución de la función
}

// Hook para añadir la función de carga AJAX
add_action('wp_ajax_load_posts_by_page', 'load_posts_by_page');
add_action('wp_ajax_nopriv_load_posts_by_page', 'load_posts_by_page');


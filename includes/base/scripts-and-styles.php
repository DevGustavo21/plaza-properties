<?php

function news_theme_scripts() {

	$dir_assets = get_template_directory() . '/assets';
	$url_assets = get_template_directory_uri() . '/assets';

	/*  STYLES
	——————————————————————————————————————————————————————*/

	wp_enqueue_style( 'news-theme-style', get_stylesheet_uri(), array(), '1.' . filemtime( get_template_directory() . '/style.css' ) );
	// wp_style_add_data('news-theme-style', 'rtl', 'replace');

	/*  SCRIPTS
	——————————————————————————————————————————————————————*/
	wp_enqueue_script( 'lazyload', "{$url_assets}/js/lazyload.min.js", array(), '17.8.3', true );
	wp_enqueue_script( 'news-theme-main', "{$url_assets}/js/main.min.js", array(), '1.' . filemtime( "{$dir_assets}/js/main.min.js" ), true );
	// wp_enqueue_script( 'swiper-slider', "{$url_assets}/js/swiper-bundle.min.js", array(), '10.0', true );

	// if (is_singular() && comments_open() && get_option('thread_comments')) {
	//     wp_enqueue_script('comment-reply');
	// }
}
add_action( 'wp_enqueue_scripts', 'news_theme_scripts' );

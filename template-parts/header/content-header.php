<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Start_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header class="contentHeader">
		<div class="contentHeader__logo">
		<?php
		$site_name = get_bloginfo('name');
		$site_logo = get_theme_mod('custom_logo'); // Obtain the current theme logo 
		if ($site_logo) { ?>
						<img src="<?php echo esc_url(wp_get_attachment_image_src($site_logo, 'full')[0]); ?>" alt="<?php echo esc_attr($site_name); ?>" class="logo__img">

			<?php } else { ?>
						<span><?php echo esc_html($site_name); ?></span>
			<?php } ?>

		</div>

		<nav class="contentHeader__navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id' => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

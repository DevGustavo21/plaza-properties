<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Start_Theme
 */

?>

<footer class="contentFooter">
	<div class="contentFooter__wrapper">
		<div class="site_logo site-footer">
		<?php
		$site_name = get_bloginfo('name');
		$site_logo = get_theme_mod('custom_logo'); // Obtain the current theme logo 
			if ($site_logo) { ?>
				<img src="<?php echo esc_url(wp_get_attachment_image_src($site_logo, 'full')[0]); ?>" alt="<?php echo esc_attr($site_name); ?>" class="logo__img">
						
			<?php } else { ?>
				<span><?php echo esc_html($site_name); ?></span>
			<?php } ?>
		</div>

		<div class="site_navigation site-footer">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-2',
				// 'menu_id' => 'secondary-menu',
			)
		);
		?>
		<hr>
		</div>

		<div class="site-policies site-footer">
			<span class="copyright">© 2023 Start Theme. All rights reserved.</span>

			<div class="policies">
				<nav>
					<ul>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms of Service</a></li>
						<li><a href="#">Cookies Settings</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

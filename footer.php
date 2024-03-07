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
			<span class="copyright">© 2023 Skelementor. All rights reserved.</span>

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


<script> //Script for dropdown navigation
document.addEventListener('DOMContentLoaded', function() {
	const menuItems = document.querySelectorAll('.menu-item-has-children');

	if (window.innerWidth >= 768) {
		// Functionality for desktop devices
		menuItems.forEach(function(item) {
			let timer;

			item.addEventListener('mouseenter', function() {
				const subMenu = this.querySelector('.sub-menu');
				if (subMenu) {
					subMenu.style.display = "flex";
				}
			});

			item.addEventListener('mouseleave', function() {
				const subMenu = this.querySelector('.sub-menu');
				if (subMenu) {
					timer = setTimeout(function() {
						subMenu.style.display = "none";
					}, 300);
				}
			});

			item.addEventListener('mouseenter', function() {
				clearTimeout(timer);
			});
		});
	} else {
		// Functionality for mobile devices
		menuItems.forEach(function(item) {
			item.addEventListener('click', function() {
				const subMenu = this.querySelector('.sub-menu');

				if (subMenu) {
					if (subMenu.style.display === "none" || subMenu.style.display === "") {
						subMenu.style.display = "flex";
					} else {
						subMenu.style.display = "none";
					}
				}
			});
		});
	}
});


</script>

<script>
	const openBtn = document.querySelector('.btn-open');
	const closeBtn = document.querySelector('.btn-close');
	const menu = document.querySelector('.navigation');

// Evento para el botón de cierre
openBtn.addEventListener('click', () => {
	menu.style.display = 'block';
	closeBtn.style.display = 'flex';
	openBtn.style.display = 'none'
});

// Evento para el botón de apertura
closeBtn.addEventListener('click', () => {
	menu.style.display = 'none';
	closeBtn.style.display = 'none';
	openBtn.style.display = 'flex'

});

</script>

<?php wp_footer(); ?>

</body>
</html>

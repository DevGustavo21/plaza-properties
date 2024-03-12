
<div id="page" class="site">
	<header class="contentHeader">
		<div class="contentHeader__wrapper">
			<div class="contentLogo">
				<?php
				$site_name = get_bloginfo('name');
				$site_logo = get_theme_mod('custom_logo'); // Obtain the current theme logo 
				if ($site_logo) { ?>
					<img src="<?php echo esc_url(wp_get_attachment_image_src($site_logo, 'full')[0]); ?>" alt="<?php echo esc_attr($site_name); ?>" class="logo__img">
						
				<?php } else { ?>
					<span><?php echo esc_html($site_name); ?></span>
				<?php } ?>
							
			</div>
						
			<nav class="navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						// 'menu_id' => 'primary-menu',
					)
				);
				?>
			</nav>

			<span class="btn-open btn">Open</span>
			<span class="btn-close btn">Close</span>
	</div>
	</header>


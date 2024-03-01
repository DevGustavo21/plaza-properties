<header class="custom-header">

	<!-- MOBILE NAVBAR -->

	<div class="custom-header__mobile-menu">
	<nav>
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id' => 'primaryMenu',
				'show_toggles' => false,
			)
		);
		?>
	</nav>
</div>

	<div class="custom-header__wrapper container">

		<div class="wrapper-image">
		<?php if (is_front_page()): ?>
					<h1>
					<?php sp_the_header_logo(); ?>
					</h1>
			
			
			<?php else: ?>
							<p class="site-title">
							<?php sp_the_header_logo(); ?>
							</p>
			<?php endif; ?>	
		</div>

		<div class="navmenu">
			<button class="btn open" aria-label="mobile-menu">
			<?php echo file_get_contents(get_template_directory_uri() . '/assets/icons/icon-menu.svg'); ?>
			</button>

			<nav>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id' => 'primaryMenu',
						'show_toggles' => false,
					)
				);
				?>
			</nav>
		</div>
	</div>


</header>



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
			<?php 
			$copyright = get_field('copyright_text', 'option');
			$footer_links = get_field('links', 'option')
			?>
			<?php if(isset($copyright)):?>
				<span class="copyright"><?php echo $copyright?></span>
			<?php endif?>
			
			<?php if(isset($footer_links)):?>
				<div class="policies">
				<nav>
					<ul>
						<?php foreach($footer_links as $link):?>
							<li><a href="<?php echo $link['link']['url']?>"><?php echo $link['link']['title']?></a></li> 
						<?php endforeach?>
					</ul>
				</nav>
			</div>
			<?php endif?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

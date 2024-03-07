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

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'start-theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'start-theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'start-theme' ), 'start-theme', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div>
	</footer>
</div>


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

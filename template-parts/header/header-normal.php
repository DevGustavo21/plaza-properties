<?php
$header_logo = get_field('header_logo', 'option');
?>

<header class="header container_wrapper">
    <div class="header__wrapper">
        <?php if (!empty($header_logo['url'])): ?>
                <img src="<?php echo esc_url($header_logo['url']); ?>" alt="<?php echo esc_attr($header_logo['name']); ?>" class="header__wrapper-logo">
        <?php endif; ?>
        
        <nav class="header__wrapper-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'menu_class' => 'header__wrapper-navigation-wrapper',
                'container' => false,
                'fallback_cb' => false,
            ));
            ?>

            <div class="header__wrapper-navigation-buttons">
                <a href="/" class="header__wrapper-navigation-buttons-btn">English</a>
                <a href="/" class="header__wrapper-navigation-buttons-btn">Book now</a>
            </div>
        </nav>
    </div>
</header>

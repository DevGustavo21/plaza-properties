<?php
$footer_logo = get_field('footer_logo', 'option');
$about_title = get_field('about_title', 'option');
$about_subtitle = get_field('about_subtitle', 'option');
$about_link = get_field('about_link', 'option');
$links_title = get_field('links_title', 'option');
$links_items = get_field('links_items', 'option');
$contact_title = get_field('contact_title', 'option');
$contact_address = get_field('contact_address', 'option');
$contact_items = get_field('contact_items', 'option');
?>
  
  
  <!-- Site Footer -->
    <footer class="site-footer container_wrapper">
        <div class="site-footer__wrapper">
            <div class="site-footer__wrapper-info">
                <a href="/" class="site-footer__wrapper-info-permalink">
                    <img src="<?php echo $footer_logo['url'] ?>" alt="<?php echo $footer_logo['name'] ?>" class="site-footer__wrapper-info-permalink-image">
                </a>

                <div class="site-footer__wrapper-info-about">
                    <h6 class="site-footer__wrapper-info-about-title"><?php echo $about_title ?></h6>
                    <p class="site-footer__wrapper-info-about-subtitle"><?php echo $about_subtitle ?></p>
                    <a href="<?php echo $about_link['url'] ?>" class="site-footer__wrapper-info-about-cta"><?php echo $about_link['title'] ?></a>
                </div>
            </div>

            <div class="site-footer__wrapper-links">
                <div class="site-footer__wrapper-links-link">
                    <h6 class="site-footer__wrapper-links-link-title"><?php echo $links_title ?></h6>
                    
                    <ul class="site-footer__wrapper-links-link-list">
                    <?php foreach ($links_items as $links): ?>
                            <li class="site-footer__wrapper-links-link-list-item">
                                <a href="<?php echo $links['links']['url'] ?>"><?php echo $links['links']['title'] ?></a>
                            </li>
                    <?php endforeach ?>
                    </ul>
                </div>

                <div class="site-footer__wrapper-links-contact">
                    <h6 class="site-footer__wrapper-links-contact-title"><?php echo $contact_title ?></h6>

                    <address class="site-footer__wrapper-links-contact-address"><?php echo $contact_address?></address>
                    
                    <ul class="site-footer__wrapper-links-contact-list">
                    <?php foreach ($contact_items as $items): ?>
                            <li class="site-footer__wrapper-links-contact-list-item">
                                <a href="<?php echo $items['contact_items_links']['url']?>">
                                    <img src="<?php echo $items['contact_items_icon']['url']?>" alt="">
                                    <span><?php echo $items['contact_items_links']['title']?></span>
                                </a>
                            </li>
                    <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>

<?php

$titleHero = $cp->hero_title;
$subTitleHero = $cp->hero_subtitle;
$enableDropdown = $cp->enable_dropdown;
$backgroundImage = $cp->background_image;
$id = $cp->section_id;
?>

<section class="container--hero-banner container_wrapper" <?php echo $id ? "id=\"$id\"" : ""; ?>>
    <div class="container--hero-image">
        <?php if ($backgroundImage): ?>
            <img src="<?php echo $backgroundImage ?>" alt="hero-banner-image">
        <?php endif; ?>
    </div>
    <div class="container--hero-info">
        <?php if ($titleHero): ?>
            <h1><?php echo $titleHero ?></h1>
        <?php endif; ?>
        <?php if ($subTitleHero): ?>
            <h2><?php echo $subTitleHero ?></h2>
        <?php endif; ?>

        <?php if ($enableDropdown === 'yes'): ?>
            <div class="container--hero-icon">
                <svg width="24" height="28" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 27.4L0 15.4L2.8 12.6L12 21.75L21.2 12.6L24 15.4L12 27.4ZM12 15.4L0 3.4L2.8 0.599998L12 9.75L21.2 0.599998L24 3.4L12 15.4Z"
                          fill="#F5EDE3"/>
                </svg>
            </div>
        <?php endif; ?>
    </div>
</section>
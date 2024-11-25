<?php
$offerText = $cp->offer_text;
$titleSection = $cp->title_section;
$subTitleSection = $cp->subtitle_section;
$informationSection = $cp->information_section;
$ctaLink = $cp->cta_link;
$imageSection = $cp->image_section;
?>

<div class="container--two-columns">
    <div class="container--two-columns-info container_wrapper">
        <div class="container-image">
            <?php if ($imageSection): ?>
                <img src="<?php echo $imageSection ?>" alt="image two columns media">
            <?php endif; ?>
        </div>
        <div class="container-info">
            <?php if ($offerText): ?>
                <span class="special-offer"><?php echo $offerText ?></span>
            <?php endif ?>
            <?php if ($titleSection): ?>
                <h4 class="title-section"><?php echo $titleSection ?></h4>
            <?php endif ?>
            <?php if ($subTitleSection): ?>
                <span class="subtitle-section"><?php echo $subTitleSection ?></span>
            <?php endif ?>
            <?php if ($informationSection): ?>
                <div class="information-section">
                    <?php echo $informationSection ?>
                </div>
            <?php endif ?>
            <?php if ($ctaLink): ?>
                <a href="<?php echo $ctaLink['url']?>" class="cta-link"><?php echo $ctaLink['title']?></a>
            <?php endif ?>
        </div>
    </div>
</div>

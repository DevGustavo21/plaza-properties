<?php 
$text_media_image = $cp->text_media_image;
$text_media_subtitle = $cp->text_media_subtitle;
$text_media_title = $cp->text_media_title;
$text_media_description = $cp->text_media_description;
?>

<section class="text-media container_wrapper">
    <div class="text-media__wrapper">
        <img src="<?php echo $text_media_image['url']?>" alt="<?php echo $text_media_image['name']?>" class="text-media__wrapper-image">

        <div class="text-media__wrapper-info">
            <span class="text-media__wrapper-info-subtitle"><?php echo $text_media_subtitle?></span>

            <h2 class="text-media__wrapper-info-title"><?php echo $text_media_title?></h2>

            <div class="text-media__wrapper-info-description">
                <?php echo $text_media_description?>
            </div>
        </div>
    </div>
</section>
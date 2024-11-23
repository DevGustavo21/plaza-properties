<?php
$about_subtitle = $cp->about_subtitle;
$about_title = $cp->about_title;
$about_description = $cp->about_description;
$about_image = $cp->about_image;
?>

<section class="about container_wrapper">
    <div class="about__wrapper">
        <div class="about__wrapper-info">
            <?php if(!empty($about_subtitle)):?>
                <span class="about__wrapper-info-subtitle"><?php echo $about_subtitle?></span>
            <?php endif?>

            <?php if(!empty($about_title)):?>
                <h2 class="about__wrapper-info-title"><?php echo $about_title?></h2>
            <?php endif?>

            <?php if(!empty($about_description)):?>
                <div class="about__wrapper-info-description">    
                    <?php 
                    $filtered_description = preg_replace('/<p>\s*<\/p>/', '', $about_description); 
                    echo $filtered_description; 
                    ?>
                </div>
            <?php endif?>
        </div>

        <img src="<?php echo $about_image['url']?>" alt="<?php echo $about_image['name']?>" class="about__wrapper-image">
    </div>
</section>
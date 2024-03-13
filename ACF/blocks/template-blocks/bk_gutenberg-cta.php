<?php
$image = get_field('cta_image');
$title = get_field('cta_title');
$subtitle = get_field('cta_subtitle');
$first_call_to_action = get_field('first_call_to_action');
$second_call_to_action = get_field('second_call_to_action');
?>

<section class="cta">
    <div class="cta__wrapper">
        <div class="info">
            <?php if(isset($title)):?>
                <h2 class="title"><?php echo $title?></h2>
            <?php endif?>

            <?php if(isset($subtitle)):?>
                <p class="subtitle"><?php echo $subtitle?></pc>
            <?php endif?>

            <?php if(isset($first_call_to_action) || isset($second_call_to_action)): ?>
                <div class="cta-buttons">
                    <a href="<?php echo $first_call_to_action['url']?>" class="first_cta"><?php echo $first_call_to_action['title']?></a>
                    <a href="<?php echo $second_call_to_action['url']?>" class="second_cta"><?php echo $second_call_to_action['title']?></a>
                </div>
                    <?php endif ?>
        </div>

        <?php if(isset($image)):?>
            <div class="image">
                <img src="<?php echo $image['url']?>" alt="<?php echo $image['filename']?>">
            </div>
        <?php endif?>
    </div>
</section>


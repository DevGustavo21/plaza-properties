<section class="<?php echo $cp->component_size === 'Narrow'? "narrow-size": "project"?>">
    <img 
        src="<?php echo $cp->project_image['url'] ?>" 
        alt="<?php echo $cp->project_image['filename'] ?>" 
        data-srcset="
            <?php echo $cp->project_image['sizes']['large']; ?> 400w,
            <?php echo $cp->project_image['sizes']['medium']; ?> 768w,
            <?php echo $cp->project_image['sizes']['large']; ?> 1200w"
        sizes="(max-width: 1200px) 100vw, 1200px"
        loading="lazy"
    >

    <div class="info container">
        <h2><?php echo $cp->project_title ?></h2>
        <?php if (!empty($cp->project_subtitle)) { ?>
            <p><?php echo $cp->project_subtitle ?></p>
        <?php } ?>

        <div class="links">
            <?php if (!empty($cp->first_call_to_action['url']) && !empty($cp->first_call_to_action['title'])) { ?>
                <div class="link-wrapper1">
                    <a href="<?php echo $cp->first_call_to_action['url']; ?>" class="link-btn first-btn"><?php echo $cp->first_call_to_action['title']; ?></a>
                </div>
            <?php } ?>

            <?php if (!empty($cp->second_call_to_action['url']) && !empty($cp->second_call_to_action['title'])) { ?>
                <div class="link-wrapper2">
                    <a href="<?php echo $cp->second_call_to_action['url']; ?>" class="link-btn second-btn"><?php echo $cp->second_call_to_action['title']; ?></a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


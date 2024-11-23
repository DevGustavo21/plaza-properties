<?php 
$options_title = $cp->options_title;
$options_items = $cp->options_items;
?>

<section class="options container_wrapper">
    <div class="options__wrapper">
        <?php if(!empty($options_title)):?>
            <h6 class="options__wrapper-title"><?php echo $options_title?></h6>
        <?php endif?>
        
        <?php if(!empty($options_items)):?>
            <div class="options__wrapper-items">
                <?php foreach($options_items as $item):?>
                    <div class="options__wrapper-items-item">
                        <?php if(!empty($item['item_link'])):?>
                            <a href="<?php echo $item['item_link']['url']?>" class="options__wrapper-items-item-link">
                            <?php if($item['item_icon']['url']):?>
                                <img src="<?php echo $item['item_icon']['url']?>" alt="<?php echo $item['item_icon']['name']?>" class="options__wrapper-items-item-link-icon">
                            <?php endif?>

                            <?php echo $item['item_link']['title']?>
                            </a>
                        <?php endif?>
                    </div> 
                <?php endforeach?>
            </div>
        <?php endif?>
    </div>
</section>
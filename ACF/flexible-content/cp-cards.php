<?php 
$cards_subtitle = $cp->cards_subtitle;
$cards_title = $cp->cards_title;
$cards_items = $cp->cards_items;
?>

<section class="cards container_wrapper">
    <div class="cards__wrapper">
        <?php if(!empty($cards_subtitle) || !empty($cards_title)):?>
            <div class="cards__wrapper-info">
                <span class="cards__wrapper-info-subtitle"><?php echo $cards_subtitle?></span>

                <h2 class="cards__wrapper-info-title"><?php echo $cards_title?></h2>
            </div>
        <?php endif?>

        <?php if(!empty($cards_items)):?>
            <div class="cards__wrapper-items">
                <?php foreach($cards_items as $items):?>
                    <div class="cards__wrapper-items-card">
                        <?php if(!empty($items['item_image'])):?>
                            <img src="<?php echo $items['item_image']['url']?>" alt="<?php echo $items['item_image']['name']?>" class="cards__wrapper-items-card-image">
                        <?php endif?>

                        <div class="cards__wrapper-items-card-info">
                            <?php if(!empty($items['item_subtitle'])):?>
                                <span class="cards__wrapper-items-card-info-subtitle"><?php echo $items['item_subtitle']?></span>
                            <?php endif?>
                            <?php if(!empty($items['item_title'])):?>
                                <h3 class="cards__wrapper-items-card-info-title"><?php echo $items['item_title']?></h3>
                            <?php endif?>
                            <?php if(!empty($items['item_description'])):?>
                                <p class="cards__wrapper-items-card-info-description"><?php echo $items['item_description']?></p>
                            <?php endif?>
                            <?php if(!empty($items['item_link'])):?>
                                <a href="<?php echo $items['item_link']['url']?>" class="cards__wrapper-items-card-info-link"><?php echo $items['item_link']['title']?></a>
                            <?php endif?>
                        </div>
                    </div>
                <?php endforeach?>
            </div>
        <?php endif?>
    </div>
</section>
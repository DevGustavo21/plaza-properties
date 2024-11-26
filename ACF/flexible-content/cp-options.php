<?php 
$options_title = $cp->options_title;
$options_items = $cp->options_items;
$id = $cp->section_id;
?>

<section class="options container_wrapper" <?php echo $id ? "id=\"$id\"" : ""; ?>>
    <div class="options__wrapper">
        <?php if(!empty($options_title)):?>
            <h6 class="options__wrapper-title"><?php echo $options_title?></h6>
        <?php endif?>
        
        <?php if(!empty($options_items)):?>
            <div class="options__wrapper-items">
                <?php foreach($options_items as $item):?>
                    <div class="options__wrapper-items-item">
                        <?php if(!empty($item['item_text'])):?>
                            <a href="#<?php echo $item['section_to_travel']?>" class="options__wrapper-items-item-link">
                            <?php if($item['item_icon']['url']):?>
                                <img src="<?php echo $item['item_icon']['url']?>" alt="<?php echo $item['item_icon']['name']?>" class="options__wrapper-items-item-link-icon">
                            <?php endif?>

                            <?php echo $item['item_text']?>
                            </a>
                        <?php endif?>
                    </div> 
                <?php endforeach?>
            </div>
        <?php endif?>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const links = document.querySelectorAll(".options__wrapper-items-item-link");

        links.forEach(link => {
            link.addEventListener("click", function (event) {
                event.preventDefault();

                const targetId = this.getAttribute("href").substring(1); 
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    const headerOffset = 150;
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.scrollY - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: "smooth"
                    });
                }
            });
        });
    });
</script>

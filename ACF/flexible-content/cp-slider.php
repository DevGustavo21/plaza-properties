<?php
$title = $cp->slider_logo_title;
$images = $cp->slider_logo_image;
?>

<section class="slider">

    <h2 class="slider__title"><?php echo $title ?></h2>

    <swiper-container id="swiper" class="mySwiper" slides-per-view="4" navigation="true" keyboard="true" loop="true" space-between="30" free-mode="true" autoplay infinite>
    <?php if (isset($images)): ?>
        <?php foreach ($images as $item): ?>
            <swiper-slide>
                <a href="<?php echo isset($item['logo_link']['url']) ? $item['logo_link']['url'] : '' ; ?>">
                    <img src="<?php echo $item['logo_image']['url'] ?>" alt="<?php echo $item['logo_image']['filename'] ?>">
                </a>
            </swiper-slide>
        <?php endforeach ?>
    <?php endif ?>
     </swiper-container>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

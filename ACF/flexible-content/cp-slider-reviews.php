<?php
$subTitleSection = $cp->subtitle_section;
$titleSection = $cp->title_section;
$sliderItems = $cp->slider_items;
$linkReviews = $cp->link_reviews;
$id = $cp->section_id;
?>
<div class="container--slide-review-section" <?php echo $id ? "id=\"$id\"" : ""; ?>>

    <div class="container--slide-information container_wrapper">
        <?php if ($subTitleSection): ?>
            <h4><?php echo $subTitleSection ?></h4>
        <?php endif; ?>
        <?php if ($titleSection): ?>
            <h3><?php echo $titleSection ?></h3>
        <?php endif; ?>
    </div>

    <div class="swiper mySwiperReviews">
        <div class="swiper-wrapper container-test">
            <?php if (sizeof($sliderItems) > 0): ?>
                <?php foreach ($sliderItems as $item): ?>
                    <div class="swiper-slide container--slide-item-reviews">
                        <div>
                            <div class="container--slide-items-review-info">

                                <div class="container--slide-info">
                                    <div class="container--user-info">
                                        <div class="container--avatar-name">
                                            <img src="<?php echo $item['image_user'] ?>" alt="image user company">
                                            <span><?php echo $item['company_name'] ?></span>
                                        </div>
                                        <span class="title-review"><?php echo $item['title_review'] ?></span>
                                    </div>
                                    <div class="container--quote-icon">
                                    <img 
                                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/quote-icon.svg'); ?>" 
                                        alt="Quote Icon">
                                    </div>
                                </div>

                                <div class="container--information-review">
                                    <?php echo $item['information_review'] ?>
                                </div>

                                <div class="container--user-review">
                                    <span><?php echo $item['user_name'] ?></span>
                                </div>


                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>


    <a href="<?php echo $linkReviews ?>" class="link-reviews">See all reviews</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".mySwiperReviews", {
    slidesPerView: 1,
    centeredSlides: false,
    spaceBetween: 32,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        500: {
            slidesPerView: 1,
            centeredSlides: false,
            spaceBetween: 0,
        },
        768: {
            slidesPerView: 3,
            centeredSlides: false, 
            spaceBetween: 24, 
        },
        1024: {
            slidesPerView: 3,
            centeredSlides: true,
            spaceBetween: 32,
        },
    },
    autoplay: {
        delay: 4500,
        disableOnInteraction: false,
    },
    loop: true,
});

</script>

<?php
$subTitleSection = $cp->subtitle_section;
$titleSection = $cp->title_section;
$sliderItems = $cp->slider_items;
$linkReviews = $cp->link_reviews;
?>
<div class="container--slide-review-section">

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
                                        <svg width="43" height="31" viewBox="0 0 43 31" fill="#8C6E4B"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.25 0.550293L10 10.5503C7.25 10.5503 4.89583 11.5295 2.9375 13.4878C0.979165 15.4461 -1.11464e-06 17.8003 -8.74228e-07 20.5503C-6.33815e-07 23.3003 0.979166 25.6545 2.9375 27.6128C4.89583 29.5711 7.25 30.5503 10 30.5503C12.75 30.5503 15.1042 29.5711 17.0625 27.6128C19.0208 25.6545 20 23.3003 20 20.5503C20 19.592 19.8854 18.7065 19.6562 17.894C19.4271 17.0815 19.0833 16.3003 18.625 15.5503L10 0.550292L4.25 0.550293ZM26.75 0.550291L32.5 10.5503C29.75 10.5503 27.3958 11.5295 25.4375 13.4878C23.4792 15.4461 22.5 17.8003 22.5 20.5503C22.5 23.3003 23.4792 25.6545 25.4375 27.6128C27.3958 29.5711 29.75 30.5503 32.5 30.5503C35.25 30.5503 37.6042 29.5711 39.5625 27.6128C41.5208 25.6545 42.5 23.3003 42.5 20.5503C42.5 19.592 42.3854 18.7065 42.1563 17.894C41.9271 17.0815 41.5833 16.3003 41.125 15.5503L32.5 0.55029L26.75 0.550291ZM10 16.8003C11.0417 16.8003 11.9271 17.1649 12.6562 17.894C13.3854 18.6232 13.75 19.5086 13.75 20.5503C13.75 21.592 13.3854 22.4774 12.6562 23.2065C11.9271 23.9357 11.0417 24.3003 10 24.3003C8.95833 24.3003 8.07292 23.9357 7.34375 23.2065C6.61458 22.4774 6.25 21.592 6.25 20.5503C6.25 19.5086 6.61458 18.6232 7.34375 17.894C8.07292 17.1649 8.95833 16.8003 10 16.8003ZM32.5 16.8003C33.5417 16.8003 34.4271 17.1649 35.1562 17.894C35.8854 18.6232 36.25 19.5086 36.25 20.5503C36.25 21.592 35.8854 22.4774 35.1562 23.2065C34.4271 23.9357 33.5417 24.3003 32.5 24.3003C31.4583 24.3003 30.5729 23.9357 29.8437 23.2065C29.1146 22.4774 28.75 21.592 28.75 20.5503C28.75 19.5086 29.1146 18.6232 29.8437 17.894C30.5729 17.1649 31.4583 16.8003 32.5 16.8003Z"
                                                  fill="#8C6E4B"/>
                                        </svg>
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
        slidesPerView: 3,
        centeredSlides: true,
        spaceBetween: 32,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        }
    });
</script>
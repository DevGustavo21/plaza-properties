<?php
$subTitleSection = $cp->subtitle_section;
$titleSection = $cp->title_section;
$informationSection = $cp->information_section;
$slidesInformation = $cp->slides_information;
?>

<div class="container--slide-section">
    <div class="container--slide-information container_wrapper">
        <?php if ($subTitleSection): ?>
            <h3 class="container--slide-information-subtitle"><?php echo $subTitleSection ?></h3>
        <?php endif; ?>
        <?php if ($titleSection): ?>
            <h4 class="container--slide-information-title"><?php echo $titleSection ?></h4>
        <?php endif; ?>

        <?php if ($informationSection): ?>
            <div class="container--slide-information-description">    
                <?php echo $informationSection ?>
            </div>
        <?php endif; ?>
    </div>

    <?php if (sizeof($slidesInformation) > 0): ?>
        <div class="swiper mySwiperGallery container--slide-items">
            <div class="swiper-wrapper">
                <?php foreach ($slidesInformation as $item): ?>
                    <div class="swiper-slide container--slide-items-info">
                        <img src="<?php echo $item['slide_image'] ?>" alt="image slider">
                        <span><?php echo $item['title_image'] ?></span>
                    </div>

                <?php endforeach; ?>
            </div>
            <div class="swiper-navigation">
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    <?php endif; ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiperGallery", {
        centeredSlides: true,
        initialSlide: 1,
        spaceBetween: 32,
        pagination: {
            el: ".swiper-pagination",
            type: "custom",
            renderCustom: function (swiper, current, total) {
                return `${current} - ${total}`;
            },
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 32,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 32,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 32,
            }
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        on: {
            slideChange: function () {
                const currentIndex = this.realIndex + 1;
                document.querySelector(".swiper-pagination").innerHTML = `${currentIndex} / ${this.slides.length}`;

                this.slides.forEach(slide => {
                    slide.classList.remove('inactive-slide');
                    slide.style.opacity = 1;
                    const img = slide.querySelector('img');
                    if (img) {
                        img.style.height = '';
                    }
                });

                const activeSlide = this.slides[this.realIndex];
                this.slides.forEach((slide, index) => {
                    if (index !== this.realIndex) {
                        slide.classList.add('inactive-slide');
                        slide.style.opacity = 0.5;
                        const img = slide.querySelector('img');
                        img.style.height = '250px';
                        // if (img) {
                        //     if (window.innerWidth <= 425) {
                        //         img.style.height = '300px'; 
                        //     } else {
                        //     }
                        // }
                    }
                });
            },
        },
    });
</script>

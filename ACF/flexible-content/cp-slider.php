<?php
$subTitleSection = $cp->subtitle_section;
$titleSection = $cp->title_section;
$informationSection = $cp->information_section;
$slidesInformation = $cp->slides_information;
?>

<div class="container--slide-section">
    <div class="container--slide-information container_wrapper">
        <?php if ($subTitleSection): ?>
            <h4><?php echo $subTitleSection ?></h4>
        <?php endif; ?>
        <?php if ($titleSection): ?>
            <h3><?php echo $titleSection ?></h3>
        <?php endif; ?>

        <?php if ($informationSection): ?>
            <?php echo $informationSection ?>
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
        pagination: {
            el: ".swiper-pagination",
            type: "custom",
            renderCustom: function (swiper, current, total) {
                return `${current} - ${total}`; // Contador dinámico
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
                    slide.style.opacity = 1; // Restablecer la opacidad
                    const img = slide.querySelector('img');
                    if (img) {
                        img.style.height = ''; // Eliminar la altura personalizada
                    }
                });

                // Aplicar estilos a los slides no activos
                const activeSlide = this.slides[this.realIndex];
                this.slides.forEach((slide, index) => {
                    if (index !== this.realIndex) {
                        slide.classList.add('inactive-slide');
                        slide.style.opacity = 0.5;
                        const img = slide.querySelector('img');
                        if (img) {
                            img.style.height = '250px'; // Establecer la altura de la imagen en los slides inactivos
                        }
                    }
                });
            },
        },
    });
</script>

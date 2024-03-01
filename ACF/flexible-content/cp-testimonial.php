<section class="testimonial">
    <h2><?php echo $cp->section_title ?></h2>

    <div class="testimonial__cards container slider1 slider-testimonial">
        <?php foreach ($cp->testimonials as $testimonial) { ?>
                    <div class="card">
                        <div class="stars">
                        <?php
                        $starsCount = intval($testimonial['stars']); // Convierte a un número entero
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i <= $starsCount) {
                                echo file_get_contents(get_template_directory_uri() . '/assets/icons/icon-star.svg');
                                ;
                            } else {
                                echo '<i class="star-icon empty-star"></i>';
                            }
                        }
                        ?>
                        </div>

                        <div class="text">
                            <p><?php echo '"' . $testimonial['testimonial-content'] . '"' ?></p>

                            <div class="author">
                                <span><?php echo $testimonial['author'] ?></span>
                                <div class="spacer"></div>
                                <span><?php echo $testimonial['city'] ?></span>
                            </div>
                        </div>
                    </div>
        <?php } ?>
    </div>

    <div class="arrows1 arrow-testimonials">
        <button class="prev1 prev-testimonials" aria-label="previewArrowTestimonials">
        <?php echo file_get_contents(get_template_directory_uri() . '/assets/icons/icon-arrow.svg'); ?>
        </button>
        <button class="next1 next-testimonials" aria-label="nextArrowTestimonials">
        <?php echo file_get_contents(get_template_directory_uri() . '/assets/icons/icon-arrow.svg'); ?>
        </button>
    </div>
    <span class="check">Check More on <span>
    <?php if(isset($cp->social_media_link['url']) && !empty($cp->social_media_link['url'])) : ?>
        <a href="<?php echo esc_url($cp->social_media_link['url']); ?>" target="_blank">
            <?php echo esc_html($cp->social_media_link['title']); ?>
        </a>
    <?php endif; ?>
</span></span>


</section>


<script type="text/javascript">
  $(document).ready(function(){
        const slider = $('.slider-testimonial');
        slider.slick({
            slidesToShow: 3, // Change the number of logos to display per slide
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            customPaging: function(slider, i) {
                // Customize navigation buttons with icons
                return '<button class="nav-icon"></button>';
            },
            appendArrows: $('.arrows-testimonials'),
            prevArrow: $('.prev-testimonials'),
            nextArrow: $('.next-testimonials'),
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>
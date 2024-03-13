<?php
$title = $cp->title;
$testimonials = $cp->testimonials;
$cta = $cp->call_to_action;
?>

<section class="testimonial">
    <h2 class="testimonial__title"><?php echo $title ?></h2>

    <div class="testimonial__items">
        <?php if (isset($testimonials)): ?>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($testimonials as $item): ?>
                                <div class="swiper-slide">
                                    <div class="stars">
                                        <?php for ($i = 1; $i <= $item['stars']; $i++): ?>
                                            <span class="star <?php echo ($i <= $item['stars']) ? 'filled' : ''; ?>">★</span>
                                        <?php endfor ?>
                                    </div>
                                    <p class="content"><?php echo $item['testimonial-content'] ?></p>

                                    <div class="extra-info">
                                        <span class="author"><?php echo $item['author'] ?></span>
                                        <span class="city"><?php echo $item['city'] ?></span>
                                    </div>
                                </div>
                        <?php endforeach ?>
                    </div>

                    <div class="swiper-button-prev"><</div>
                    <div class="swiper-button-next">></div>
                </div>  
        <?php endif ?>
    </div>
</section>



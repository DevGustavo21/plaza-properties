<?php $key = spl_object_id($cp) ?>

<section class="client-slider <?php echo $cp->margins === 'Margin Top' ? "padding_top" : " " ?> <?php echo $cp->margins === 'Margin Bottom' ? "padding_bottom" : " " ?> <?php echo $cp->margins === "Both Margins" ? "padding_mix" : " " ?>">
    <h2><?php echo $cp->client_logo_title ?></h2>

    <div class="slider-wrapper">
    <div class="slider logoSlider-<?php echo $key ?> container">
    <?php foreach ($cp->client_logo_image as $image) { ?>

        <div class="slide">
            <?php if (!empty($image['logo_link']['url'])) { ?>
                <a href="<?php echo $image['logo_link']['url']?>" target="_blank">
                    <img  width="150" height="80" src="<?php echo $image['logo_client']['sizes']['medium'] ?>" alt="<?php echo $image['logo_client']['filename'] ?>"
                    loading="lazy">
                </a>
            <?php } else { ?>
                <img width="150" height="80" src="<?php echo $image['logo_client']['url'] ?>" alt="<?php echo $image['logo_client']['filename'] ?>">
            <?php } ?>
        </div>
    <?php } ?>
</div>

            
            <div class="arrows arrows-<?php echo $key ?>">
                <button class='prev prev-<?php echo $key ?>' aria-label="previewArrow">
                    <?php echo file_get_contents(get_template_directory_uri() . '/assets/icons/icon-arrow.svg'); ?>
                </button>
                <button class='next next-<?php echo $key ?>' aria-label="nextArrow">
                    <?php echo file_get_contents(get_template_directory_uri() . '/assets/icons/icon-arrow.svg'); ?>
                </button>
            </div>
        </div>
</section>

<div class="client-slide-mobile client-slider">
    <h2><?php echo $cp->client_logo_title ?></h2>

    <div class="slider-mobile container">
    <?php foreach ($cp->client_logo_image as $image) { ?>
        <?php if (!empty($image['logo_link']['url'])) { ?>
            <a href="<?php echo $image['logo_link']['url']?>">
                <div>
                    <img width="75" height="90" src="<?php echo $image['logo_client']['sizes']['thumbnail'] ?>" alt="<?php echo $image['logo_client']['filename']?>" loading="lazy">
                </div>
            </a>
        <?php } else { ?>
            <img width="75" height="90" src="<?php echo $image['logo_client']['url'] ?>" alt="<?php echo $image['logo_client']['filename'] ?>">
        <?php } ?>
    <?php } ?>
</div>

</div>

<script type="text/javascript">
  $(document).ready(function(){
    const key = "<?php echo $key; ?>";
    const slider = $('.logoSlider-' + key);

    // Check the specific classes or attributes here
    if (slider.hasClass('padding_top')) {
        // Initializes the slider with settings for padding_top
        slider.slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            customPaging: function(slider, i) {
                return '<button class="nav-icon"></button>';
            },
            appendArrows: $('.arrows-'+key),
            prevArrow: $('.prev-'+key),
            nextArrow: $('.next-'+key),
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 560,
                    settings:{
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 420,
                    settings:{
                        slidesToShow: 1
                    }
                }
            ]
        });
    } else if (slider.hasClass('padding_bottom')) {
        // Initializes the slider with settings for padding_bottom
        slider.slick({
            slidesToShow: 3, //Specific configuration for padding_bottom
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            customPaging: function(slider, i) {
                return '<button class="nav-icon"></button>';
            },
            appendArrows: $('.arrows-'+key),
            prevArrow: $('.prev-'+key),
            nextArrow: $('.next-'+key),
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
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 560,
                    settings:{
                        slidesToShow: 1
                    }
                }
            ]
        });
    } else {
        // Default setting if no condition is met
        slider.slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            customPaging: function(slider, i) {
                return '<button class="nav-icon"></button>';
            },
            appendArrows: $('.arrows-'+key),
            prevArrow: $('.prev-'+key),
            nextArrow: $('.next-'+key),
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 560,
                    settings:{
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 420,
                    settings:{
                        slidesToShow: 1
                    }
                }
            ]
        });
    }
  });
</script>

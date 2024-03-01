<section class="newsletter">
    <div class="wrapper">
        <div class="text">
            <?php if(isset($cp->newsletter_title)){?>
                <h2><?php echo $cp->newsletter_title?></h2>
            <?php }?>

            <?php if(isset($cp->newsletter_subtitle)){?>
                <p><?php echo $cp->newsletter_subtitle?></p>
            <?php }?>
        </div>

        <div class="form-newsletter">
            <?php if(isset($cp->shortcode)){
                echo do_shortcode($cp->shortcode);
            }?>
        
        </div>
    </div>
</section>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
 
    document.querySelector('.form-newsletter form').addEventListener('submit', function (event) {
        event.preventDefault();

        setTimeout(function () {
            document.querySelector('.form-newsletter form').style.display = 'none';
        }, 700)

    });
});

</script>
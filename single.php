<?php
get_header();

$content = get_the_content();
?>

<section class="blog-content">
    <h1><?php echo the_title(); ?></h1>

    <?php echo do_blocks($content); ?>
</section>

<?php
get_footer();
?>

<?php
get_header();
?>

<main id="main-content" class="site-main">
    <?php
    while (have_posts()):
        the_post();

        the_content();

    endwhile; // End of the loop.
    ?>

<?php include(get_template_directory() . '/ACF/acf-generate-page.php'); ?>

</main><!-- #main -->

<?php

get_footer();
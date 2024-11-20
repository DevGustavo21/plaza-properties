<?php
// Ensure WordPress is loaded
if (!defined('ABSPATH')) exit;

// Include the header
get_header(); 
?>

<main id="main-content">
    <?php if (have_posts()) : ?>
        <!-- Start the Loop to display posts -->
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <!-- Display the post content -->
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <!-- Message to display if no posts are found -->
        <p><?php esc_html_e('No content available to display.', 'textdomain'); ?></p>
    <?php endif; ?>
</main>

<?php
// Include the footer
get_footer(); 
?>

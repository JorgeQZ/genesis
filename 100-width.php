<?php
/**
 * Template Name: 100% Width
 */
get_header(); ?>

<div class="main-content w100">
    <?php
    while(have_posts()):
        the_post();
        the_content();
    endwhile;
    ?>
</div>

<?php get_footer(); ?>

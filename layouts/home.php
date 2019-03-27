<?php
/**
 * Template Name: Home Page
 * 
 *
 *
 * @package Black Box Cakery
 * @version 1.0
 */

get_header(); ?>

    <div class="featured-image">
    <?php  
        the_post_thumbnail('full');
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
        ?>
    </div>

<?php get_footer();
<?php
/**
 * Template Name: Cart and Checkout Page
 *
 *
 * @package Black Box Cakery
 * @version 1.0
 */

get_header(); ?>

<div class="container cart">
    <?php  
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    ?>
</div>

<?php get_footer();
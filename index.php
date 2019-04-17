<?php
/**
 * The main template file
 *
 *
 * @package Black Box Cakery
 * @version 1.0
 */

get_header(); ?>

<div class="container main">
    <h1 class="page-title"><?php the_title(); ?></h1>
        <?php  
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        ?>
</div>

<?php get_footer();
<?php
/**
 * Template Name: FAQ Page
 * 
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

                $repeater = get_field('faqs');
                if($repeater):

                    while ( have_rows('faqs') ) : the_row(); ?>

                        <details>
                            <summary><?php the_sub_field('question') ?></summary>    
                            <?php the_sub_field('answer') ?>
                        </details>
            
                    <?php endwhile;

                endif;
            ?>
</div>

<?php get_footer();
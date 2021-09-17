<?php
/**
 * Template Name: Home Page
 *
 * The template file for the front page of the site
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package License_Plate
 */

get_header();


?>
        <div class="home">
        
            <div class="hero">
                <?php /* The loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; // end of the loop. ?>      
            </div>
            
            
            <div id='app'></div>

            
            
        
        </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.1.18/jquery.backstretch.min.js"></script>

<?php get_footer(); ?>

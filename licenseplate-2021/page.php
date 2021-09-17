<?php
/**
 * Template Name: Content Page
 * 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package License_Plate
 */

get_header(); ?>

    <div class="page">
      <?php if (has_post_thumbnail() ) { ?>    
      <div class="hero" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat center center; background-size: cover;">
        <div class="container">
          <div class="row justify-content-md-center content">
            <div class="col-lg-7">
              <h1 class="title"><?php the_title() ?></h1>
              <div class="mustache"></div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>

      <div class="main">

        <?php /* The loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
          
      </div>
    </div>

<?php get_footer(); ?>
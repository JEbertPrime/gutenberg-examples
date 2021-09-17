<?php
/**
 * The template for displaying all single posts
 *
 * @package License_Plate
 */

get_header(); ?>

    <div class="post">

      <?php if ( get_field( 'show_featured_image_as_background' ) ): ?>
      <div class="wp-block-cover alignwide" style="background-image:url(<?php esc_url(the_post_thumbnail_url()); ?>)">
      </div>
      <?php endif; ?>
      
      <div class="content section">
        <div class="container">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <h1 class="title"><?php the_title(); ?></h1>
          <p class="pubdate"><?php echo get_the_date(); ?></p>
          <?php 
          $tags = get_the_tags();
          if ($tags) {
          ?>
          <div class="tags">
              <ul>
              <?php
              foreach($tags as $tag) {
                $tag_link = get_tag_link($tag->term_id);
                echo '<li><a href="' . $tag_link . '">' . $tag->name . '</a></li>';
              }
              ?>
              </ul>
          </div>
          <?php
          }
          ?>              
          <?php the_content(); ?>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>

    </div>
  
<?php get_footer(); ?>

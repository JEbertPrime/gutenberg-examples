<?php
/**
 * The template for displaying the Get Involved page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package License_Plate
 */

get_header(); ?>

    <div class="get-involved">
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

      <div class="main">

        <?php /* The loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
        
        <?php
        $args = array(
          'post_type' => 'opportunities', // enter custom post type
          'posts_per_page' => -1,
          'tax_query' => array(
            array(
                'taxonomy' => 'post_tag',
                'field'    => 'name',
                'terms'    => 'Join the network',
            ),
          ),
        );

        $loop = new WP_Query( $args );

        if($loop->have_posts()) {
        ?>
        <div class="section get-involved">
          <div class="container">
            <h2 class="title center">Join the network</h2>
            <div class="mustache"></div>
            <div class="row justify-content-md-center">
              <?php
              while($loop->have_posts()) {
                $loop->the_post();
                ?>
                <div class="col-md-6">
                  
                    <div class="card">
                      <div class="card-body">
                        <p class="card-category">
                        <?php
                        foreach((get_the_category()) as $category) { 
                            echo $category->cat_name . ' '; 
                        } 
                        ?>
                        </p>  
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <div class="card-text"><?php the_field('description'); ?></div>
                        
                        <?php 
                        $link = get_field('link');
                        $email = get_field('email');
                        if( $link ) { 
                        ?>
                        <p class="cta"><a href="<?php echo esc_url( $link ); ?>"><?php the_field('link_text') ?> <i class="fas fa-chevron-right" aria-hidden="true"></i></a></p>
                        <?php
                        } else if ($email) {
                        ?>
                        <p class="cta"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('link_text') ?> <i class="fas fa-chevron-right" aria-hidden="true"></i></a></p>
                        <?php
                        } else {
                        ?>
                        <p class="cta"><strong><?php the_field('link_text') ?></strong></p> 
                        <?php
                        }
                        ?>
                      </div>
                    </div>
                  
                </div>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
        
        
        <?php
        $args = array(
          'post_type' => 'opportunities', // enter custom post type
          'posts_per_page' => -1,
          'tax_query' => array(
            array(
                'taxonomy' => 'post_tag',
                'field'    => 'name',
                'terms'    => 'Contribute to our projects',
            ),
          ),
        );

        $loop = new WP_Query( $args );

        if($loop->have_posts()) {
        ?>
        <div class="section get-involved">
          <div class="container">
            <h2 class="title center">Contribute to our projects</h2>
            <div class="mustache"></div>
            <div class="row justify-content-md-center">
              <?php
              while($loop->have_posts()) {
                $loop->the_post();
                ?>
                <div class="col-md-6">
                  
                    <div class="card">
                      <div class="card-body">
                        <p class="card-category">
                        <?php
                        foreach((get_the_category()) as $category) { 
                            echo $category->cat_name . ' '; 
                        } 
                        ?>
                        </p>  
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <div class="card-text"><?php the_field('description'); ?></div>
                        
                        <?php 
                        $link = get_field('link');
                        $email = get_field('email');
                        if( $link ) { 
                        ?>
                        <p class="cta"><a href="<?php echo esc_url( $link ); ?>"><?php the_field('link_text') ?> <i class="fas fa-chevron-right" aria-hidden="true"></i></a></p>
                        <?php
                        } else if ($email) {
                        ?>
                        <p class="cta"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('link_text') ?> <i class="fas fa-chevron-right" aria-hidden="true"></i></a></p>
                        <?php
                        } else {
                        ?>
                        <p class="cta"><strong><?php the_field('link_text') ?></strong></p> 
                        <?php
                        }
                        ?>
                      </div>
                    </div>
                  
                </div>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>

<?php get_footer(); ?>
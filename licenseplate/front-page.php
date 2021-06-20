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

            
            <?php
            $args = array(
              'post_type' => 'activities', // enter custom post type
              'post_status' => 'publish',
              'meta_query' => array(
                  array(
                      'key'   => 'stick_to_front_page',
                      'value' => '1',
                  )
               )
            );
    
            $loop = new WP_Query( $args );
    
            if($loop->have_posts()) {
            ?>
            <div class="section activities" id="our-work">
              <div class="container">
                <h2 class="title center">Explore our work</h2>
                <div class="mustache"></div>
                <div class="row justify-content-md-center">
                  <?php
                  while($loop->have_posts()) {
                    $loop->the_post();
                    ?>
                    
                    <div class="col-md-6">
                        <div class="card">
                          <?php
                          if (has_post_thumbnail()) {
                            $image_id = get_post_thumbnail_id();
                            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                            $image_title = get_the_title($image_id);
                          ?>
                          <figure>
                            <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $image_alt; ?>">
                          </figure>
                          <?php
                          } // end if
                          ?>
                          <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <?php the_field('description'); ?>
                            
                            <?php 
                            $link = get_field('link');
                            $email = get_field('email');
                            if( $link ) { 
                            ?>
                            <p class="cta"><a href="<?php echo esc_url( $link ); ?>"><?php the_field('link_text') ?> <i class="fas fa-chevron-right" aria-hidden="true"></i></a></p>
                            <?php
                            } else if ($email) {
                            ?>
                            <p class="cta"><a target="_blank" href="mailto:<?php echo esc_url( $email ); ?>"><?php the_field('link_text') ?> <i class="fas fa-chevron-right" aria-hidden="true"></i></a></p>
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
                <p class="cta more"><a href="/our-work" aria-label="Explore more activities" class="gcp">Explore more activities <i class="fas fa-chevron-right" aria-hidden="true"></i></a></p>
              </div>
            </div>
            <?php
            }
            ?>
            
            
            <?php
            $args = array(
              'post_type' => 'opportunities', // enter custom post type
              'post_status' => 'publish',
              'meta_query' => array(
                  array(
                      'key'   => 'stick_to_front_page',
                      'value' => '1',
                  )
               )
            );
    
            $loop = new WP_Query( $args );
    
            if($loop->have_posts()) {
            ?>
            <div class="section get-involved" id="get-involved">
              <div class="container">
                <h2 class="title center">Engage with us</h2>
                <div class="mustache"></div>
                <div class="row justify-content-md-center">
                  <?php
                  while($loop->have_posts()) {
                    $loop->the_post();
                    ?>
                    
                    <div class="col-md-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <?php the_field('description'); ?>
                            
                            <?php 
                            $link = get_field('link');
                            $email = get_field('email');
                            if( $link ) { 
                            ?>
                            <p class="cta"><a href="<?php echo esc_url( $link ); ?>"><?php the_field('link_text') ?> <i class="fas fa-chevron-right" aria-hidden="true"></i></a></p>
                            <?php
                            } else if ($email) {
                            ?>
                            <p class="cta"><a target="_blank" href="mailto:<?php echo esc_url( $email ); ?>"><?php the_field('link_text') ?> <i class="fas fa-chevron-right" aria-hidden="true"></i></a></p>
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
                <p class="cta more"><a href="/get-involved" aria-label="Explore more activities" class="gcp">More ways to get involved <i class="fas fa-chevron-right" aria-hidden="true"></i></a></p>
              </div>
            </div>
            <?php
            }
            ?>
        
        </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.1.18/jquery.backstretch.min.js"></script>
<script>
  let main = function() {
    // carousel
    jQuery(".hero").backstretch(
      [
        "<?php echo $bg1['url'] ?>",
        "<?php echo $bg2['url'] ?>",
        "<?php echo $bg3['url'] ?>",
        "<?php echo $bg4['url'] ?>"
      ],
      {
        duration: 4000,
        transitionDuration: 1000,
      }
    );
  };

  jQuery(document).ready(main);
</script>
<?php get_footer(); ?>

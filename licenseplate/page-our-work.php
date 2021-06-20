<?php
/**
 * The template for displaying the Our Work page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package License_Plate
 */

get_header(); ?>

    <div class="our-work">
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

        <div class="mission section">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-lg-9">
                <p class="big-idea">The Georgia Climate Project is building a network of experts across the state to advance four strategic priorities.</p>
              </div>
            </div>
            
            <div class="row justify-content-md-center">
              <div class="col-md-3">
                <div class="card">
                  <img class="card-img img-fluid" src="https://georgiaclimateproject.org/wp-content/uploads/2020/02/microscope-solid.png" alt="Science">
                  <div class="card-body">
                    <h5 class="card-title">Science</h5>
                    <div class="card-text"><p>Synthesizing what is known and analyzing what is not in order to improve understanding of climate impacts and solutions in Georgia.</p></div>
                    <p class="cta"><a href="#science">Learn more <i class="fas fa-chevron-right" aria-hidden="true"></i></a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <img class="card-img img-fluid" src="https://www.georgiaclimateproject.org/wp-content/uploads/2020/02/comments-solid.png" alt="Stronger conversations">
                  <div class="card-body">
                    <h5 class="card-title">Stronger conversations</h5>
                    <div class="card-text"><p>Fostering a constructive, nonpartisan discussion about how climate change affects Georgia and what can be done about it.</p></div>
                    <p class="cta"><a href="#stronger-conversations">Learn more <i class="fas fa-chevron-right" aria-hidden="true"></i></a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <img class="card-img img-fluid" src="https://www.georgiaclimateproject.org/wp-content/uploads/2020/02/puzzle-piece-solid.png" alt="Solutions">
                  <div class="card-body">
                    <h5 class="card-title">Solutions</h5>
                    <div class="card-text"><p>Working with partners to enable Georgians to take practical steps to respond to climate change and its impacts.</p></div>
                    <p class="cta"><a href="#solutions">Learn more <i class="fas fa-chevron-right" aria-hidden="true"></i></a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <img class="card-img img-fluid" src="https://www.georgiaclimateproject.org/wp-content/uploads/2020/02/users-solid.png" alt="Stronger network">
                  <div class="card-body">
                    <h5 class="card-title">Stronger network</h5>
                    <div class="card-text"><p>Bringing together experts working to understand and act on climate.</p></div>
                    <p class="cta"><a href="#stronger-network">Learn more <i class="fas fa-chevron-right" aria-hidden="true"></i></a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          
          
        <?php
        $category_id = get_cat_ID('Science');
        
        $args = array(
          'post_type' => 'activities', // enter custom post type
          'post_status' => 'publish',
          'cat' => $category_id,
          'posts_per_page' => -1,
        );

        $loop = new WP_Query( $args );

        if($loop->have_posts()) {
        ?>
        <div class="section science" id="science">
          <div class="container">
            <h2 class="title center">Science</h2>
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
        $category_id = get_cat_ID('Stronger conversations');
        
        $args = array(
          'post_type' => 'activities', // enter custom post type
          'post_status' => 'publish',
          'cat' => $category_id,
          'posts_per_page' => -1,
        );

        $loop = new WP_Query( $args );

        if($loop->have_posts()) {
        ?>
        <div class="section stronger-conversations" id="stronger-conversations">
          <div class="container">
            <h2 class="title center">Stronger conversations</h2>
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
        $category_id = get_cat_ID('Solutions');
        
        $args = array(
          'post_type' => 'activities', // enter custom post type
          'post_status' => 'publish',
          'cat' => $category_id,
          'posts_per_page' => -1,
        );

        $loop = new WP_Query( $args );

        if($loop->have_posts()) {
        ?>
        <div class="section solutions" id="solutions">
          <div class="container">
            <h2 class="title center">Solutions</h2>
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
        $category_id = get_cat_ID('Stronger network');
        
        $args = array(
          'post_type' => 'activities', // enter custom post type
          'post_status' => 'publish',
          'cat' => $category_id,
          'posts_per_page' => -1,
        );

        $loop = new WP_Query( $args );

        if($loop->have_posts()) {
        ?>
        <div class="section stronger-network" id="stronger-network">
          <div class="container">
            <h2 class="title center">Stronger network</h2>
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
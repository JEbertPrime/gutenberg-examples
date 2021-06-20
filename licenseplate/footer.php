<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package License_Plate
 */

?>
    <div class="footer">
      <div class="social">
        <div class="container">
          <h5>Connect with us</h5>
          <?php dynamic_sidebar( 'social-menu' ); ?>
        </div>
      </div>
      
      <div class="activities">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <h5>Science</h5>
              <?php dynamic_sidebar( 'science-menu' ); ?>
            </div>
            <div class="col-lg-3">
              <h5>Stronger Conversations</h5>
              <?php dynamic_sidebar( 'stronger-conversations-menu' ); ?>
            </div>
            <div class="col-lg-3">
              <h5>Solutions</h5>
              <?php dynamic_sidebar( 'solutions-menu' ); ?>
            </div>
            <div class="col-lg-3">
              <h5>Stronger Network</h5>
              <?php dynamic_sidebar( 'stronger-network-menu' ); ?>
            </div>
          </div>
        </div>
      </div> 

      <div class="brand">
        <div class="container">
          <div class="logo">
            <a href="<?php bloginfo('url') ?>">
              <?php
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
              if (has_custom_logo()) {
                echo '<img class="img-fluid" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '">';
              }
              ?>
            </a>
          </div>


          <?php
          /* Start loop ------------- */
          $args = array(  
            'post_type' => 'partners',
            'orderby' => 'date', 
            'order' => 'ASC', 
          );

          $loop = new WP_Query( $args ); 

          if($loop->have_posts()) {
          ?>
          <div class="partners">
            <div class="row justify-content-md-center">
              <?php
              while($loop->have_posts()) {
                $loop->the_post();

                $image = get_field('logo_white');
                ?>
                <div class="col-sm-2">
                  <div class="card">
                    <div class="img-container center">
                      <img class="img-fluid" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                    </div>
                  </div>
                </div>
                <?php
              }
              ?>
            </div>
          </div>
          <?php
          }
          /* End loop --------------- */
          ?>


          <div class="links">
            <?php dynamic_sidebar( 'brand-menu' ); ?>
          </div>

        </div>
      </div> 
    </div>

    <?php wp_footer(); ?>
  </body>
</html>

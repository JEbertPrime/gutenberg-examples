<?php
/**
 * The template for displaying the About page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package License_Plate
 */

get_header(); 
$bg_video = get_field( 'bg_video' );
?>

    <div class="about">
      
      <div class="mobile">
        <div class="hero" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat center center; background-size: cover;">
          <div class="container">
            <div class="row justify-content-md-center content">
              <div class="col-lg-9">
                <h1 class="title"><?php the_title() ?></h1>
                <div class="mustache"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="vision section">
          <div class="container">
            <h2 class="title center">Vision</h2>
            <div class="mustache"></div>
            <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>          
          </div>
        </div>
      </div>

      <div class="desktop">
        <video class="hero-video" autoplay="" muted="" loop="" preload="auto">
          <source src="<?php echo $bg_video['url']; ?>" type="video/mp4">
        </video>
        <div class="hero">
          <div class="container">
            <div class="row justify-content-md-center content">
              <div class="col-lg-9">
                <h1 class="title"><?php the_title() ?></h1>
                <div class="mustache"></div>
                <?php /* The loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                  <?php the_content(); ?>
                <?php endwhile; // end of the loop. ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      

      <div class="partners section">
        <div class="container">
          <h2 class="title center">Partners</h2>
          <div class="mustache"></div>


          <?php
          /* Start loop ------------- */
          $args = array(  
            'post_type' => 'partners',
            'posts_per_page' => -1,
          );

          $loop = new WP_Query( $args ); 

          if($loop->have_posts()) {
          ?>
          <div class="row justify-content-md-center">
            <?php
            while($loop->have_posts()) {
              $loop->the_post();

              $name = get_field( 'name' );
              $type = get_field( 'type' );
              $image = get_field('logo');

              if ($type == 'Founding partner') {
              ?>
              <div class="col-md-4">
                <div class="card">
                  <div class="img-container center">
                    <img class="img-fluid" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                  </div>
                </div>
              </div>
              <?php
              }
            }
            ?>
          </div>
          <?php
          }
          /* End loop --------------- */
          ?>


          <?php
          /* Start loop ------------- */
          $args = array(  
            'post_type' => 'partners',
            'posts_per_page' => -1,
          );

          $loop = new WP_Query( $args ); 

          if($loop->have_posts()) {
          ?>
          <div class="row justify-content-md-center">
            <?php
            while($loop->have_posts()) {
              $loop->the_post();

              $name = get_field( 'name' );
              $type = get_field( 'type' );
              $image = get_field('logo');

              if ($type == 'Academic partner') {
              ?>
              <div class="col-md-3">
                <div class="card">
                  <div class="img-container center">
                    <img class="img-fluid" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                  </div>
                </div>
              </div>
              <?php
              }
            }
            ?>
          </div>
          <?php
          }
          /* End loop --------------- */
          ?>

        </div>
      </div>

      <div class="funders section">
        <div class="container">
          
          <?php
          /* Start loop ------------- */
          $args = array(  
            'post_type' => 'funders',
            'posts_per_page' => -1,
          );

          $loop = new WP_Query( $args ); 

          if($loop->have_posts()) {
          ?>
          <h2 class="title center">Funders</h2>
          <div class="mustache"></div>
          
          <div class="row justify-content-md-center">
            <?php
            while($loop->have_posts()) {
              $loop->the_post();

              $logo = get_field('logo');
              $name = get_field( 'name' );
              $description = get_field( 'description' );
              ?>
              <div class="col-md-4">
                <div class="card">
                  <?php
                  if( $logo ) {
                  ?>
                  <div class="img-container center">
                    <img class="img-fluid" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                  </div>
                  <?php
                  }
                  ?>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $name; ?></h5>
                    <p><?php echo $description; ?></p>
                  </div>
                </div>
              </div>
              <?php
            }
            ?>
          </div>
          <?php
          }
          /* End loop --------------- */
          ?>

        </div>
      </div>

      <div class="team section">
        <div class="container">
          <h2 class="title center">Team</h2>
          <div class="mustache"></div>

          <?php
          /* Start loop ------------- */
          $args = array(  
            'post_type' => 'people',
            'posts_per_page' => -1,
          );

          $loop = new WP_Query( $args ); 

          if($loop->have_posts()) {
          ?>
          <h3>Leadership team</h3>
          <div class="row justify-content-md-center">
            <?php
            while($loop->have_posts()) {
              $loop->the_post();

              $headshot = get_field('headshot');
              $name = get_field( 'name' );
              $title = get_field( 'title' );
              $team = get_field('team');

              if ($team == 'Leadership team') {
              ?>
              <div class="col-md-2">
                <div class="card">
                  <figure>
                    <img class="img-fluid center" src="<?php echo $headshot['url']; ?>" alt="<?php echo $headshot['alt']; ?>">
                  </figure>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $name; ?></h5>
                    <p><?php echo $title; ?></p>
                  </div>
                </div>
              </div>
              <?php
              }
            }
            ?>
          </div>
          <?php
          }
          /* End loop --------------- */
          ?>

          
          <?php
          /* Start loop ------------- */
          $args = array(  
            'post_type' => 'people',
            'posts_per_page' => -1,
          );

          $loop = new WP_Query( $args ); 

          if($loop->have_posts()) {
          ?>
          <h3>Academic partner representatives</h3>
          <div class="row justify-content-md-center">
            <?php
            while($loop->have_posts()) {
              $loop->the_post();

              $headshot = get_field('headshot');
              $name = get_field( 'name' );
              $title = get_field( 'title' );
              $team = get_field('team');

              if ($team == 'Academic partner representatives') {
              ?>
              <div class="col-md-2">
                <div class="card">
                  <figure>
                    <img class="img-fluid center" src="<?php echo $headshot['url']; ?>" alt="<?php echo $headshot['alt']; ?>">
                  </figure>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $name; ?></h5>
                    <p><?php echo $title; ?></p>
                  </div>
                </div>
              </div>
              <?php
              }
            }
            ?>
          </div>
          <?php
          }
          /* End loop --------------- */
          ?>


          <?php
          /* Start loop ------------- */
          $args = array(  
            'post_type' => 'people',
            'posts_per_page' => -1,
          );

          $loop = new WP_Query( $args ); 

          if($loop->have_posts()) {
          ?>
          <h3>Coordinating group</h3>
          <div class="row justify-content-md-center">
            <?php
            while($loop->have_posts()) {
              $loop->the_post();

              $headshot = get_field('headshot');
              $name = get_field( 'name' );
              $title = get_field( 'title' );
              $team = get_field('team');

              if ($team == 'Coordinating group') {
              ?>
              <div class="col-md-2">
                <div class="card">
                  <figure>
                    <img class="img-fluid center" src="<?php echo $headshot['url']; ?>" alt="<?php echo $headshot['alt']; ?>">
                  </figure>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $name; ?></h5>
                    <p><?php echo $title; ?></p>
                    <p><?php echo $team; ?></p>
                  </div>
                </div>
              </div>
              <?php
              }
            }
            ?>
          </div>
          <?php
          }
          /* End loop --------------- */
          ?>
        </div>
      </div>

    </div>

<?php get_footer(); ?>
<?php
/**
 * Header file for the License Plate WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package License_Plate
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php wp_head(); ?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/7096f0fe34.js" crossorigin="anonymous"></script>
  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="header fixed-top ">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <div class="left">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a href="<?php bloginfo('url') ?>">
              <?php
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
              if (has_custom_logo()) {
                echo '<img class="img-fluid logo" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '">';
              }
              ?>
            </a>

           
          </div>
          <div class="collapse navbar-collapse col" id="navbarNav">
              <?php 
                wp_nav_menu(
                  array(
                    'theme_location' => 'primary',
                    'menu_class' => 'navbar-nav',
                    'li_class'  => 'nav-item'
                  )
                );
              ?>
            </div>
          
          <span class="navbar-text">
            Contact
          </span>
        </div>

      </nav>
    </div>
    <div class="header-spacer"></div>

      
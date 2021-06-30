<?php
/**
 * License Plate functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link https://codex.wordpress.org/Plugin_API
 *
 * @package License_Plate
 */

function licenseplate_setup() {
  // Load regular editor styles into the new block-based editor.
  add_theme_support( 'editor-styles' );

  // Load default block styles.
  add_theme_support( 'wp-block-styles' );

  // Add support for full and wide align images.
  add_theme_support( 'align-wide' );

  // Add support for responsive embeds.
  add_theme_support( 'responsive-embeds' );

  // // Adds RSS feed links to <head> for posts and comments.
  // add_theme_support( 'automatic-feed-links' );

  add_theme_support(
    'custom-logo',
    array(
      'flex-height' => true,
      'flex-width'  => true,
    )
  );

  // This theme uses wp_nav_menu() in one location.
  register_nav_menu( 'primary', __( 'Header Nav', 'licenseplate' ) );

  /*
   * This theme uses a custom image size for featured images, displayed on
   * "standard" posts and pages.
   */
  add_theme_support( 'post-thumbnails' );
  // set_post_thumbnail_size( 604, 270, true );

  // Indicate widget sidebars can use selective refresh in the Customizer.
  add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'licenseplate_setup' );


/**
 * Enqueue scripts and styles for the front end.
 */
function licenseplate_scripts_styles() {
  // Loads our main stylesheet.
  wp_enqueue_style( 'licenseplate-style', get_stylesheet_uri() );

  wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array( 'jquery' ), '', true );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true );
  wp_enqueue_script( 'header-spacer', get_template_directory_uri() . '/js/header-spacer.js', array( 'jquery' ), '', true );
  if(is_front_page()){
    wp_enqueue_script('interactive', get_template_directory_uri() . '/js/bundle.js',false , false, true);
  };
}
add_action( 'wp_enqueue_scripts', 'licenseplate_scripts_styles' );

/**
 * Hide login error messages
 */
function hide_login_errors(){
  return 'Invalid username or password.';
}
add_filter( 'login_errors', 'hide_login_errors' );


/**
 * Remove Wordpress version number
 */
remove_action('wp_head', 'wp_generator');


/**
 * Add custom classes to nav menu li elements
 */
function add_classes_on_nav_li($classes, $item, $args) {
    if(isset($args->li_class)) {
        $classes[] = $args->li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_classes_on_nav_li', 1, 3);


/**
 * Register one widget area.
 * Source: https://stackoverflow.com/questions/23539586/wordpress-how-to-allow-header-and-footer-sections-to-be-edited
 */
function licenseplate_widgets_init() {
  register_sidebar(
    array(
      'name' => __( 'Activities Menu', 'licenseplate' ),
      'id' => 'activities-menu',
      'description' => __( "Appears in the activities menu header section of the site.", 'licenseplate' ),
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title' => '<span style="display: none;">',
      'after_title' => '</span>',
    )
  );

  register_sidebar(
    array(
      'name' => __( 'Social Menu', 'licenseplate' ),
      'id' => 'social-menu',
      'description' => __( "Appears in the 'Connect with us' menu in the footer of the site.", 'licenseplate' ),
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title' => '<span style="display: none;">',
      'after_title' => '</span>',
    )
  );

  register_sidebar(
    array(
      'name' => __( 'Science Menu', 'licenseplate' ),
      'id' => 'science-menu',
      'description' => __( "Appears in the Science menu in the footer of the site.", 'licenseplate' ),
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title' => '<span style="display: none;">',
      'after_title' => '</span>',
    )
  );

  register_sidebar(
    array(
      'name' => __( 'Stronger Conversations Menu', 'licenseplate' ),
      'id' => 'stronger-conversations-menu',
      'description' => __( "Appears in the Stronger Conversations menu in the footer of the site.", 'licenseplate' ),
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title' => '<span style="display: none;">',
      'after_title' => '</span>',
    )
  );

  register_sidebar(
    array(
      'name' => __( 'Solutions Menu', 'licenseplate' ),
      'id' => 'solutions-menu',
      'description' => __( "Appears in the Solutions menu in the footer of the site.", 'licenseplate' ),
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title' => '<span style="display: none;">',
      'after_title' => '</span>',
    )
  );

  register_sidebar(
    array(
      'name' => __( 'Stronger Network Menu', 'licenseplate' ),
      'id' => 'stronger-network-menu',
      'description' => __( "Appears in the Stronger Network menu in the footer of the site.", 'licenseplate' ),
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title' => '<span style="display: none;">',
      'after_title' => '</span>',
    )
  );

  register_sidebar(
    array(
      'name' => __( 'Brand Menu', 'licenseplate' ),
      'id' => 'brand-menu',
      'description' => __( "Appears at the very bottom of the footer.", 'licenseplate' ),
      // 'before_widget' => '<div>',
      // 'after_widget'  => '</div>',
      'before_title' => '<span style="display: none;">',
      'after_title' => '</span>',
    )
  );
}
add_action( 'widgets_init', 'licenseplate_widgets_init' );
function cc_mime_types($mimes) {
  $mimes['json'] = 'text/plain';
  $mimes['geojson'] = 'text/plain';
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
<?php

/* General Theme Functions */

add_theme_support( 'post-thumbnails' );

function excerpt_read_more_link($output) {
 global $post;
 return $output . '<a href="'. get_permalink($post->ID) . '" class="readmore">[ weiter lesen ]</a>';
}


add_filter('the_excerpt', 'excerpt_read_more_link');
function new_excerpt_length($length) {
	return 30;
}


add_filter('show_admin_bar', '__return_false');



/* Styles and Scripts */

function medialab_register_styles() {

  // Import FontAwesome
  wp_register_style( 'fontawesome', get_template_directory_uri() . '/assets/styles/font-awesome/4.4.0/font-awesome.min.css' );
  wp_enqueue_style( 'fontawesome' );

  // Import Cookie Script Stylesheets
  wp_register_style( 'cookie-style', get_template_directory_uri() . '/assets/styles/dywc-1.1/dywc.css' );
  wp_enqueue_style( 'cookie-style' );


  // Import style.css
  wp_register_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'style' );

}

add_action( 'wp_enqueue_scripts', 'medialab_register_styles' );






function medialab_register_scripts() {

  // Import JQery 1.4.3
  wp_register_script( 'jquery-1-4-3', get_template_directory_uri() . '/assets/scripts/jquery-1.4.3/jquery.min.js', '', null, true );
  wp_enqueue_script( 'jquery-1-4-3' );


  // Import JQery 1.11.0
  wp_register_script( 'jquery-1-11-0', '//code.jquery.com/jquery-1.11.0.min.js', '', null, true );
  wp_enqueue_script( 'jquery-1-11-0' );


  // Import JQery Migrate 1.2.1
  wp_register_script( 'jquery--migrate-1-2-1', '//code.jquery.com/jquery-migrate-1.2.1.min.js', '', null, true );
  wp_enqueue_script( 'jquery--migrate-1-2-1' );


  // Import Cookie Notice Scripts
  wp_register_script( 'dywc', get_template_directory_uri() . '/assets/scripts/dywc_1.1/dywc.js', '', null, true );
  wp_enqueue_script( 'dywc' );

  wp_register_script( 'cookie-notice', get_template_directory_uri() . '/assets/scripts/dywc_1.1/cookie-notice.js', '', null, true );
  wp_enqueue_script( 'cookie-notice' );

}

add_action( 'wp_enqueue_scripts', 'medialab_register_scripts' );





/* Custom Sidebars */

if ( function_exists('register_sidebar') )
 register_sidebar(array('name'=>'seitenleiste',
 'before_widget' => '<article class="widget">',
 'after_widget' => '</article>',
 'before_title' => '<h2>',
 'after_title' => '</h2>',
 ));

 register_sidebar( array(
'name' => 'Footer Sidebar 1',
'id' => 'footer-sidebar-1',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Footer Sidebar 2',
'id' => 'footer-sidebar-2',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Footer Sidebar 3',
'id' => 'footer-sidebar-3',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Footer Sidebar 4',
'id' => 'footer-sidebar-4',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Start-Links',
'id' => 'start-links-1',
'description' => 'Appears in the start area',
'before_widget' => '<div class="col-lg-4">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Start-Mitte',
'id' => 'start-mitte-1',
'description' => 'Appears in the start area',
'before_widget' => '<div class="col-lg-4">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Start-Rechts',
'id' => 'start-rechts-1',
'description' => 'Appears in the start area',
'before_widget' => '<div class="col-lg-4">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Button',
'id' => 'button',
'description' => 'Startseiten-Button',
'before_widget' => '<div class="startbutton">',
'after_widget' => '</div>',
'before_title' => '<h3 class="button">',
'after_title' => '</h3>',
) );

?>
<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
function theme_enqueue_scripts() {

//add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
//function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
//}

//function wp_enqueue_scripts() {

 // add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
 // function theme_enqueue_scripts() {

//  wp_enqueue_script( 'parent-js', get_template_directory_uri() . '/js/solopine.js' );
//  wp_enqueue_script( 'child-js', get_stylesheet_directory_uri() . '/js/solopine.js', array( 'child-js' ) );
  }
//}
?>

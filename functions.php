<?php
function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'template', get_template_directory_uri().'/css/template.css' );
    wp_enqueue_style( 'styleSticky', get_template_directory_uri().'/css/styleSticky.css' );
   
   
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
  add_theme_support( 'custom-header' );
?>
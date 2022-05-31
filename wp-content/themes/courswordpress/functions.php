<?php
/**
 * Les fonctionnalites du site
 */


// Ajout des css et js
function cw_scripts() { 
  // Ajout des fonts
    wp_enqueue_style('font_montserrat', 'https://fonts.googleapis.com/css?family=Montserrat');
    wp_enqueue_style('font_lato', 'https://fonts.googleapis.com/css?family=Lato');
    wp_enqueue_style('w3css', 'https://www.w3schools.com/w3css/4/w3.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('stylecss', get_stylesheet_uri(), ['w3css', 'font-awesome']);
    wp_enqueue_script('fslightbox', get_template_directory_uri() . "/js/fslightbox.js", [], '2.0', true);
}

add_action( 'wp_enqueue_scripts', 'cw_scripts' );


// ajout de la gestion du menu par le theme
function cw_add_manager(){
  add_theme_support('menus');
}

add_action('after_setup_theme', 'cw_add_manager');
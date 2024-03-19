<?php

function bebop_theme_scripts(){
    wp_enqueue_script('assets/js/bootstrap.bundle.js', get_template_directory_uri() . '/ 
    assets/js/bootstrap.bundle.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'bebop_theme_scripts');

function bebop_theme_styles(){
    wp_enqueue_style('style.css', get_template_directory_uri() . 
    '/style.css');
    wp_enqueue_style('bootstrap.css', get_template_directory_uri() .
    '/assets/css/bootstrap.css');

}

add_action('wp_enqueue_scripts', 'bebop_theme_styles');




?>
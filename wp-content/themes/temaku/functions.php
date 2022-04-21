<?php

function add_css()

{

   wp_register_style('first', get_template_directory_uri() . '/assets/style.css', false,'1.1','all');

   wp_enqueue_style( 'first');

}

add_action('wp_enqueue_scripts', 'add_css');

function add_script()

{

   wp_register_script('js-script', get_template_directory_uri() . '/assets/script.js', array ( 'jquery' ), 1.1, true);

   

}

add_action('wp_enqueue_scripts', 'add_script');
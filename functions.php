<?php

function cojiba_add_woocommerce_support(){
  add_theme_support('woocommerce');
};
add_action('after_setup_theme', 'cojiba_add_woocommerce_support');

function cojiba_css(){
  wp_register_style('cojiba-style', get_template_directory_uri() . '/style.css', [] ,'1.0.0', false);
  wp_enqueue_style('cojiba-style');
};
add_action('wp_enqueue_scripts', 'cojiba_css');
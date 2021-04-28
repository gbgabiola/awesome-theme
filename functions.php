<?php

function awesome_script_enqueue() {
  wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/awesome.css', array(), '1.0.0', 'all');
  wp_enqueue_script('custom-script', get_template_directory_uri() . '/css/awesome.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

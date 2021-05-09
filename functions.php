<?php

/*
  ==========================================
	 Include scripts
	==========================================
*/
function awesome_script_enqueue() {
  // css
  wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.4.1', 'all');
  wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/awesome.css', array(), '1.0.0', 'all');
  // js
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.4.1', true);
  wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

/*
	==========================================
	 Activate menus
	==========================================
*/
function awesome_theme_setup() {
  add_theme_support('menus');
  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'awesome_theme_setup');

/*
	==========================================
	 Theme support function
	==========================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));
add_theme_support('html5', array('search-form'));

/*
	==========================================
	 Sidebar function
	==========================================
*/
function awesome_widgets_init() {

	register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar-1',
    'class'	=> 'custom',
    'description' => 'Standard Sidebar',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>',
	));
}

add_action('widgets_init', 'awesome_widgets_init');

/*
	==========================================
	 Include Walker file
	==========================================
*/
require get_template_directory() . '/inc/walker.php';

/*
	==========================================
	 Head function
	==========================================
*/
function awesome_remove_version() {
  return '';
}

add_filter('the_generator', 'awesome_remove_version');

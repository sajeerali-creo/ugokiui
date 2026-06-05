<?php

// Enable theme features
function ugoki_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'ugoki_theme_setup');


// Load CSS & JS files
function ugoki_assets() {
  wp_enqueue_style('main-style', get_stylesheet_uri());

  // Example: add custom JS
  // wp_enqueue_script('main-js', get_template_directory_uri() . '/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'ugoki_assets');

function component_category_taxonomy() {

    register_taxonomy(
        'component_category',
        'animated_component',
        array(
            'label' => 'Component Categories',
            'hierarchical' => true,
            'show_in_rest' => true,
            'rewrite' => array('slug' => 'component-category'),
        )
    );

}
add_action('init', 'component_category_taxonomy');

?>
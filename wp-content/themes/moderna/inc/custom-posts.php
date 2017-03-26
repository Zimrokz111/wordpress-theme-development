<?php
  //register custom posts
  function theme_custom_posts(){
    $slide_args = array(
      'public' => true,
      'label'  => 'Slide',
      'menu_icon' => 'dashicons-slides',
      'labels' => array(
        'name' => 'Slides',
        'singular_name' => 'Singular name Slides',
        'add_new' => 'Add new slide',
        'add_new_item' => 'Add new slide',
        'edit_item' => 'Edit slide',
        'new_item' => 'New slide',
        'view_item' => 'View slide',
        'view_items' => 'View slides',
        'search_items' => 'Search slides',
        'not_found' => 'Slides not found',
        'not_found_in_trash' => 'Slides not found in trash',
        'all_items' => 'All Slides',
        'exclude_from_search' => true
      ),
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('slide', $slide_args);
    /*End slider custom post type*/


    /*Start services post type*/
    $service_arg = array(
      'public' => true,
      'label'  => 'Service',
      'menu_icon' => 'dashicons-admin-network',
      'labels' => array(
        'name' => 'Service',
        'singular_name' => 'Singular name Service',
        'add_new' => 'Add new service',
        'add_new_item' => 'Add new service',
        'edit_item' => 'Edit service',
        'new_item' => 'New service',
        'view_item' => 'View service',
        'view_items' => 'View service',
        'search_items' => 'Search service',
        'not_found' => 'Service not found',
        'not_found_in_trash' => 'Service not found in trash',
        'all_items' => 'All services',
        'exclude_from_search' => true
      ),
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('services', $service_arg);
     /*End services post type*/

    /*Start portfolio post type*/
    $portfolio_arg = array(
      'public' => true,
      'label'  => 'Portfolio',
      'menu_icon' => 'dashicons-portfolio',
      'labels' => array(
        'name' => 'Portfolio',
        'singular_name' => 'Singular name Portfolio',
        'add_new' => 'Add new Portfolio',
        'add_new_item' => 'Add new Portfolio',
        'edit_item' => 'Edit Portfolio',
        'new_item' => 'New Portfolio',
        'view_item' => 'View Portfolio',
        'view_items' => 'View Portfolio',
        'search_items' => 'Search Portfolio',
        'not_found' => 'Portfolio not found',
        'not_found_in_trash' => 'Portfolio not found in trash',
        'all_items' => 'All Portfolio',
        'exclude_from_search' => true
      ),
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes')
    );
    register_post_type('portfolios', $portfolio_arg);
    /*End portfolio post type*/
  }
  add_action('init', 'theme_custom_posts');

  /*ADd job custom plost*/
  $jobs_arg = array(
    'public' => true,
    'label'  => 'Job',
    'menu_icon' => 'dashicons-admin-network',
    'labels' => array(
      'name' => 'Job',
      'singular_name' => 'Job name Service',
      'add_new' => 'Add new Job',
      'add_new_item' => 'Add new Job',
      'edit_item' => 'Edit Job',
      'new_item' => 'New Job',
      'view_item' => 'View Job',
      'view_items' => 'View Job',
      'search_items' => 'Search Job',
      'not_found' => 'Job not found',
      'not_found_in_trash' => 'Job not found in trash',
      'all_items' => 'All Job',
      'exclude_from_search' => true
    ),
    'supports' => array('title', 'editor', 'excerpt', 'page-attributes')
    // 'supports' => array('title', 'editor', 'excerpt', 'custom-fields','page-attributes')
  );
  register_post_type('jobs', $jobs_arg);
?>

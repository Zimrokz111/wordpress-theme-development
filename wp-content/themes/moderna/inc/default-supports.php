<?php
  //add theme suppport

  add_theme_support( 'post-formats', array('aside', 'gallery', 'audio','video' ) );

  add_theme_support( 'post-thumbnails'); //thumb image

  add_image_size('slide_image', 1024, 360, true); //crop image szie
  add_image_size('portfolio_thumb', 400, 305, true); //crop image szie
  add_image_size('post_image', 800, 450, true); //crop image szie

  add_theme_support( 'title-tag' );
?>

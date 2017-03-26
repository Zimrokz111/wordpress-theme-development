<?php
  function my_theme_widgets(){
    register_sidebar(array(
      'name' => 'Footer Widgets',
      'id' => 'footer_wid',
      'description' => 'Use this widget for footer',
      'before_widget' => '<div class="col-lg-3"><div class="widget footer_widget">',
      'after_widget' => '</div></div>',
      'before_title' => '<h5 class="widgetheading">',
      'after_title' => '</h5>'
    ));

    register_sidebar(array(
      'name' => 'Sidebar Widgets',
      'id' => 'sidebar_widget',
      'description' => 'Use this widget for sidebar',
      'before_widget' => '<div class="widget sidebar_widget">',
      'after_widget' => '</div>',
      'before_title' => '<h5 class="widgetheading">',
      'after_title' => '</h5>'
    ));
  }
  add_action('widgets_init', 'my_theme_widgets');
?>

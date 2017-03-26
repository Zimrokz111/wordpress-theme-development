<?php
  function my_theme_widgets(){
    /*register_sidebar(array(
      'name' => 'Footer Widgets',
      'id' => 'footer_wid',
      'description' => 'Use this widget for footer',
      'before_widget' => '<div class="col-lg-3"><div class="widget footer_widget">',
      'after_widget' => '</div></div>',
      'before_title' => '<h5 class="widgetheading">',
      'after_title' => '</h5>'
    ));*/

    register_sidebar(array(
      'name' => 'Sidebar Widgets',
      'id' => 'sidebar_widget',
      'description' => 'Use this widget for sidebar',
      'before_widget' => '<div class="widget sidebar_widget">',
      'after_widget' => '</div>',
      'before_title' => '<h5 class="widgetheading">',
      'after_title' => '</h5>'
    ));

    /*Footer widget one*/
    register_sidebar(array(
      'name' => 'Footer Widget One',
      'id' => 'footer_widget_one',
      'description' => 'This is footer widget one',
      'before_widget' => '<div class="widget footer_widget">',
      'after_widget' => '</div>',
      'before_title' => '<h5 class="widgetheading">',
      'after_title' => '</h5>'
    ));
    /*End footer widget one*/

    /*Footer widget two*/
    register_sidebar(array(
      'name' => 'Footer Widget Two',
      'id' => 'footer_widget_two',
      'description' => 'This is footer widget two',
      'before_widget' => '<div class="widget footer_widget">',
      'after_widget' => '</div>',
      'before_title' => '<h5 class="widgetheading">',
      'after_title' => '</h5>'
    ));
    /*End footer widget two*/

    /*Footer widget three*/
    register_sidebar(array(
      'name' => 'Footer Widget Three',
      'id' => 'footer_widget_three',
      'description' => 'This is footer widget three',
      'before_widget' => '<div class="widget footer_widget">',
      'after_widget' => '</div>',
      'before_title' => '<h5 class="widgetheading">',
      'after_title' => '</h5>'
    ));
    /*End footer widget three*/

    /*Footer widget four*/
    register_sidebar(array(
      'name' => 'Footer Widget four',
      'id' => 'footer_widget_four',
      'description' => 'This is footer widget four',
      'before_widget' => '<div class="widget footer_widget">',
      'after_widget' => '</div>',
      'before_title' => '<h5 class="widgetheading">',
      'after_title' => '</h5>'
    ));
    /*End footer widget four*/
  }
  add_action('widgets_init', 'my_theme_widgets');
?>

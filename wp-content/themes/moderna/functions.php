<?php
  //all styles and scripts here
  include_once('/inc/theme-scripts.php');

  /*Add menue in this theme*/
  include_once('/inc/theme-menu.php');
  /*end theme menue*/

  // default supports
  include_once('/inc/default-supports.php');

  // Custom post
  include_once('/inc/custom-posts.php');

  // Theme Widgets
  include_once('/inc/theme-widgets.php');

  // Theme shortcodes
  include_once('/inc/shortcodes.php');

  // Add icon in editor and dropdown shortcode lists
  include_once('/inc/add_button_tinimc.php');


  /*theme ooption*/
  /**
 * Required: set 'ot_theme_mode' filter to true.
 */
  add_filter( 'ot_theme_mode', '__return_true' );

  /**
   * Required: include OptionTree.
   */
  require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );

  include_once('/inc/theme-options.php');


  /*Start Theme meta boxes*/
  include_once('/inc/theme-meta-boxes.php');


?>

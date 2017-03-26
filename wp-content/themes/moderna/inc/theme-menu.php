<?php
    function theme_menues(){
      register_nav_menus(array(
        'main_menu' => 'Main Menu'
      ));

      register_nav_menus(array(
        'footer_menu' => 'Footer Menu'
      ));
    }
    add_action('init', 'theme_menues');

    function fallback_menu(){
      echo "<ul class='nav navbar-nav'>";
      if('page' != get_option('show_on_front')){
        echo '<li><a href="'.site_url().'/">Home</a></li>';
      }
      wp_list_pages('title_li=');
      echo "</ul>";
    }

 ?>

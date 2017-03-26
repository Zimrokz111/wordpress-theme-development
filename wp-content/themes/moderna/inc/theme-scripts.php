<?php
    function wpthemedev_script_enqueue(){
      wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '3.1.0', 'all');
      wp_register_style('fancybox', get_template_directory_uri().'/css/fancybox/jquery.fancybox.css', array(), '2.1.4', 'all');
      wp_register_style('flexslider', get_template_directory_uri().'/css/flexslider.css', array(), '2.0', 'all');
      wp_register_style('main', get_template_directory_uri().'/css/style.css', array(), '1.0', 'all');
      wp_register_style('skin', get_template_directory_uri().'/skins/default.css', array(), '1.0', 'all');


      wp_enqueue_style('bootstrap');
      wp_enqueue_style('fancybox');
      wp_enqueue_style('flexslider');
      wp_enqueue_style('main');
      wp_enqueue_style('skin');

      wp_enqueue_script('jquery');

      wp_enqueue_script('easing', get_template_directory_uri().'/js/jquery.easing.1.3.js', array('jquery'), '1.3', true);
      wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '3.1.0', true);
      wp_enqueue_script('fancybox-pack-js', get_template_directory_uri().'/js/jquery.fancybox.pack.js', array('jquery'), '1.0', true);
      wp_enqueue_script('fancybox-media-js', get_template_directory_uri().'/js/jquery.fancybox-media.js', array('jquery'), '1.0', true);
      wp_enqueue_script('prettify-js', get_template_directory_uri().'/js/google-code-prettify/prettify.js', array('jquery'), '1.0', true);
      wp_enqueue_script('portfolio-js', get_template_directory_uri().'/js/portfolio/jquery.quicksand.js', array('jquery'), '1.0', true);
      wp_enqueue_script('portfolio-setting-js', get_template_directory_uri().'/js/portfolio/setting.js', array('jquery'), '1.0', true);
      wp_enqueue_script('flexslider-js', get_template_directory_uri().'/js/jquery.flexslider.js', array('jquery'), '1.0', true);
      wp_enqueue_script('animate-js', get_template_directory_uri().'/js/animate.js', array('jquery'), '1.0', true);
      wp_enqueue_script('custom-js', get_template_directory_uri().'/js/custom.js', array('jquery'), '1.0', true);
    }

    add_action('wp_enqueue_scripts', 'wpthemedev_script_enqueue');

    /*this scripts include only for admin panel*/
    function admin_scripts_enqueue(){
        wp_register_style('mce-icons', get_template_directory_uri().'/css/mce-icons.css', array(), '1.0', 'all');
        wp_enqueue_style('mce-icons');
    }
    add_action('admin_enqueue_scripts', 'admin_scripts_enqueue');
?>

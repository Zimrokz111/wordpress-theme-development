<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<!-- <title><?php //wp_title('|',true,'right'); ?></title> -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- =======================================================
    Theme Name: Moderna
    Theme URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url(); ?>"><span>KIT</span> LLC</a>
                </div>
                <div class="navbar-collapse collapse ">
										<?php
											wp_nav_menu(array(
												'theme_location' => 'main_menu',
												'menu_class' => 'nav navbar-nav',
												'fallback_cb' => 'fallback_menu'

											));
										?>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->

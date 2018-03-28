<!DOCTYPE html>
<html>
      <head>
        <meta charset="utf-8">
        <title>La Pizaria</title>
        <?php wp_head(); ?>
      </head>
      <body class="container">
          <div class="image-holder">
                  <a href="<?php echo esc_url(home_url("/")); ?>" >
                      <img class="logo-image" src="<?php echo get_template_directory_uri()."/img/logo.svg"; ?>" alt="Pizzaria Logo">
                  </a>
          </div>
          <div class="header-sidebar">
              Test
          </div>
          <?php
              $args = array(
                  //'menu'              => '2',
                  'theme_location'    => 'header_menu',
                  'container'         => 'nav',
                  'container_class'   => 'site-nav',
                  'menu_class'        => 'site-nav-menu',
              );
              wp_nav_menu($args);
          ?>

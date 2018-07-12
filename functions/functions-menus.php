<?php
/*********************************************
 *   Menus
 **********************************************/
  function theme_addmenus() {
    register_nav_menus(
      array(
        'main_sub_nav' => 'Main Sub Menu',
        'footer_nav' => 'Footer Menu',
        'footer_copyright_nav' => 'Footer Copyright Menu',
      )
    );
  }
  add_action( 'init', 'theme_addmenus' );

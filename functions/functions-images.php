<?php
/*********************************************
 *   Images
 **********************************************/
  add_theme_support( 'post-thumbnails' );
  if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'sliderimg', 200, 150, true );
    add_image_size( 'featuredThumb', 380, 200, true );
    add_image_size( 'featuredNews', 281, 185, true );
    add_image_size( 'featuredEvent', 263, 175, true );
  }

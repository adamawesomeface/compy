<?php
/*********************************************
 *   Shortcodes
 **********************************************/
  add_filter('the_content', 'do_shortcode', 11);
  add_filter('widget_text', 'do_shortcode');
  add_filter('get_ept_value', 'do_shortcode');
    <footer class="footer">
      <div class="columns is-multiline">
        <div class="column is-12">
          <?php
          // Footer Menu
          $args = array(
            'menu'      => '3',
            'container'     => '',
            'menu_class'      => 'footer-menu', 
            'menu_id'         => 'footer-menu',
            'echo'            => true,
            'depth'           => 1
            );
          wp_nav_menu($args);
        ?>
        </div>
      </div>
      <div class="footer-logo">
        <img src="<?php bloginfo('template_url'); ?>/images/img-dc-logo.png" alt="">
      </div>
    </footer>
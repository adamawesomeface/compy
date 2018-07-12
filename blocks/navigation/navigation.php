<nav class="navbar is-transparent">
  <div class="navbar-brand">
    <a class="navbar-item navbar-logo" href="/">
      <img src="<?php bloginfo('template_url'); ?>/images/img-dc-logo.png" alt="<?php bloginfo('name'); ?>" width="300">
    </a>
    <!-- SEARCH ICONS -->
    <a class="navbar-item is-hidden-tablet navbar-search" href="">
      <span class="icon">
        <i class="fa fa-search"></i>
      </span>
    </a>
    <div class="navbar-burger burger" data-target="navbar-menu">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="navbar-end">
    <?php $args = array(
      'menu'      => '2',
      'container'     => '',
      'menu_class'      => 'navbar-menu', 
      'menu_id'         => 'navbar-menu',
      'echo'            => true,
      'depth'           => 4
      );
    ?>
    <?php wp_nav_menu($args); ?>
  </div>
</nav>
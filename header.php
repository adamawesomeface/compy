<?php
/**
 * @package Compy
 * @subpackage Compy
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>  prefix="og: http://ogp.me/ns#">
<head>
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <!-- FAVICONS -->
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico?3" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="<?php bloginfo('template_url'); ?>/images/source/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/images/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <!-- STYLESHEET -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
  <!-- <link href="<?php // bloginfo('template_url'); ?>/css/bulma.min.css" rel="stylesheet" type="text/css" /> -->
  <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet" type="text/css" />
  <?php wp_head(); ?>

  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<?php
  $classes = 'wrapper wrapper-';
  $classes .= (is_home()) ? 'home' : 'inner';
  if(!is_404()){
    $classes .= ' wrapper-' . $post->post_name;
  }
?>
<body <?php body_class($classes); ?>>
	<?php get_template_part('blocks/header/header'); ?>
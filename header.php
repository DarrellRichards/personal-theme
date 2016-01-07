<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('title'); ?></title>
	<link rel="stylesheet" href='<?php bloginfo('template_directory'); ?>/css/main.css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,300,100' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,100' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<div id="sidemenu">
  <div id="logo">
    <a href="/"><h3>Darrell Richards</h3></a>
  </div>
  <div id="mobile_menu">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <?php 
$defaults = array(
  'theme_location'  => '',
  'menu'            => '',
  'container'       => '',
  'container_class' => '',
  'container_id'    => '',
  'menu_class'      => '',
  'menu_id'         => '',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth'           => 0,
  'walker'          => ''
);

wp_nav_menu( $defaults );

?>
</div>


<!-- 
<nav id="sidemenu">
  <ul>
    <li><a href="#">About</a></li>
    <li><a href="#">Work</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav> -->



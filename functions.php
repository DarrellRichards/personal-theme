<?php 
	// Thumbnail Support
	add_theme_support( 'post-thumbnails' ); 

	// Added Menu Support
	function register_menu() {
  		register_nav_menu('header-menu',__( 'Header Menu' ));
	}
	add_action( 'init', 'register_menu' );

<?php 
	// Thumbnail Support
	add_theme_support( 'post-thumbnails' ); 

	// Added Menu Support
	function register_menu() {
  		register_nav_menu('header-menu',__( 'Header Menu' ));
	}
	add_action( 'init', 'register_menu' );

	// widget area 
	function personal_site_init() {

	register_sidebar( array(
		'name'          => 'Blog Sidebar',
		'id'            => 'blog_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'personal_site_init' );
?>

<?php
function register_my_menu() {
	register_nav_menu( 'primary', 'Menu do cabeçalho' );

	// Register custom navigation walker - https://github.com/twittem/wp-bootstrap-navwalker
	require_once('inc/wp_bootstrap_navwalker.php');
}
add_action( 'after_setup_theme', 'register_my_menu' );

function egomotos_scripts_styles() {
	//jQuery
	wp_enqueue_script( 'jquery');
	
	/*
	 * Bootstrap
	 * url: http://getbootstrap.com/
	 */
	wp_enqueue_script( 'egomotos-bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array('jquery'), '3.3.5', false);
	wp_enqueue_style( 'egomotos-bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), '3.3.5');

	//Navbar-default overide
	wp_enqueue_style( 'egomotos-nav', get_template_directory_uri() . '/css/navbar-default.css', array('egomotos-bootstrap'), '1.0');
	
	//Theme js scripts
	wp_enqueue_script( 'egomotos-scripts', get_template_directory_uri() . '/js/main.js', array('jquery'));

}
add_action( 'wp_enqueue_scripts', 'egomotos_scripts_styles' );
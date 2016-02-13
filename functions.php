<?php require_once 'custom-post-type.php' ?>
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
	 * jQuery Mask Plugin
	 * url: https://igorescobar.github.io/jQuery-Mask-Plugin/
	 */
	wp_enqueue_script('egomotos-jquery-mask', get_template_directory_uri() . '/js/jQuery-Mask-Plugin-master/src/jquery.mask.js', array('jquery'), '1.13.4', false);

	/*
	 * Bootstrap
	 * url: http://getbootstrap.com/
	 */
	wp_enqueue_script( 'egomotos-bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array('jquery'), '3.3.5', false);
	wp_enqueue_style( 'egomotos-bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), '3.3.5');

	/*
	 * Owl Carousel 2
	 * url: http://www.owlcarousel.owlgraphic.com/
	 */
	$owlCarouselFolder = get_template_directory_uri() . "/js/owl.carousel/";
	wp_enqueue_style( 'egomotos-owl-carousel', $owlCarouselFolder . "assets/owl.carousel.css", array(), '2.0.0');
	wp_enqueue_script( 'egomotos-owl-carousel', $owlCarouselFolder . "owl.carousel.min.js", array('jquery'), '2.0.0', false);
	
	/*
	 * Magnific Popup
	 * url: http://dimsemenov.com/plugins/magnific-popup/
	 */
	$magnificFolder = get_template_directory_uri() . "/js/Magnific-Popup-master/dist/";
	wp_enqueue_style( 'egomotos-magnific-popup', $magnificFolder . "magnific-popup.css", array(), '1.0.1');
	wp_enqueue_script( 'egomotos-magnific-popup', $magnificFolder . 'jquery.magnific-popup.min.js', array('jquery'), '1.0.1', true);
	
	/*
	 * Masonry
	 * url: http://masonry.desandro.com/
	 */
	wp_enqueue_script( 'egomotos-masonry', get_template_directory_uri() . "/js/Masonry/masonry.pkgd.min.js", array('jquery'), '3.3.2' );
	wp_enqueue_script( 'egomotos-imagesloaded', get_template_directory_uri() . "/js/Masonry/imagesloaded.pkgd.min.js", array('jquery', 'egomotos-masonry'), '4.1.0' );

	//Navbar-default overide
	wp_enqueue_style( 'egomotos-nav', get_template_directory_uri() . '/css/navbar-default.css', array('egomotos-bootstrap'), '1.0');

	//Theme js scripts
	wp_enqueue_script( 'egomotos-scripts', get_template_directory_uri() . '/js/main.js', array('jquery'));

}
add_action( 'wp_enqueue_scripts', 'egomotos_scripts_styles' );

add_theme_support( 'post-thumbnails' );
add_image_size('modelo-thumbnail', 1000, 55);
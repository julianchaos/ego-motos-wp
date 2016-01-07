<?php
add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts() {
	$labels = array(
		"name" => "Slides da home",
		"singular_name" => "Slide da home",
		);

	$args = array(
		"labels" => $labels,
		"description" => "Slides que são apresentados na home",
		"public" => true,
		"show_ui" => true,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "home-slider", "with_front" => true ),
		"query_var" => true,
				
		"supports" => array( "title" ),		
	);
	register_post_type( "home-slider", $args );

	$labels = array(
		"name" => "Modelos",
		"singular_name" => "Modelo",
		"menu_name" => "Modelos 0Km",
		);

	$args = array(
		"labels" => $labels,
		"description" => "Modelos 0km",
		"public" => true,
		"show_ui" => true,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "modelo", "with_front" => true ),
		"query_var" => true,
				
		"supports" => array( "title", "thumbnail" ),		
	);
	register_post_type( "modelo", $args );

	$labels = array(
		"name" => "Acessórios",
		"singular_name" => "Acessório",
		"menu_name" => "Acessórios",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "acessorio", "with_front" => true ),
		"query_var" => true,
				
		"supports" => array( "title", "thumbnail" ),		
	);
	register_post_type( "acessorio", $args );

// End of cptui_register_my_cpts()
}

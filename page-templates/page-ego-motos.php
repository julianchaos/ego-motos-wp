<?php
// Template Name: A Ego Motos

get_header();

while ( have_posts() ) {
	the_post();
				
	get_template_part('page-templates/general', 'header');
	get_template_part('page-templates/ego-motos', 'content');
}

get_footer();
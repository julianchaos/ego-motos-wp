<?php
// Template Name: Oficina

get_header();

while ( have_posts() ) {
	the_post();

	get_template_part('page-templates/general', 'header');
	get_template_part('page-templates/oficina', 'content');
}

get_footer();
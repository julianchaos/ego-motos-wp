<?php
// Template Name: Peças

get_header();

while ( have_posts() ) {
	the_post();

	get_template_part('page-templates/general', 'header');
	get_template_part('page-templates/pecas', 'content');
}

get_footer();
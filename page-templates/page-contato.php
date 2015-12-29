<?php
// Template Name: Contato

get_header();

get_template_part('page-templates/general', 'header');
get_template_part('page-templates/contato', 'mapa');
get_template_part('page-templates/contato', 'nossos-contatos');
get_template_part('page-templates/contato', 'formulario-contato');
get_template_part('page-templates/contato', 'mailing-list');

get_footer();
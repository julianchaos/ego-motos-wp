<section id="modelos-content">
<?php

//Super Sport
set_query_var( 'tipoMotoSlug', 'super-sport' );
get_template_part('page-templates/modelos', 'lista-tipo');

//Street
set_query_var( 'tipoMotoSlug', 'street' );
get_template_part('page-templates/modelos', 'lista-tipo');

//Couston
set_query_var( 'tipoMotoSlug', 'couston' );
get_template_part('page-templates/modelos', 'lista-tipo');

//Dual Purpose
set_query_var( 'tipoMotoSlug', 'dual-purpose' );
get_template_part('page-templates/modelos', 'lista-tipo');

//Scooter
set_query_var( 'tipoMotoSlug', 'scooter' );
get_template_part('page-templates/modelos', 'lista-tipo');

?>
</section>
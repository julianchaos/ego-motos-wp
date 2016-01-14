<?php
$tipoMoto = array(
	'super-sport' => 'Super Sport',
	'street' => 'Street',
	'couston' => 'Couston',
	'dual-purpose' => 'Dual Purpose',
	'scooter' => 'Scooter'
);
?>
<section id="modelo-footer">
	<div class="container">
		<div class="row">
			<div id="modelo-footer-links" class="col-xs-12 col-md-4">
				<a href="<?php the_field('release') ?>" target="_blank" class="release">Download Release</a>
				<a href="javascript: void(0)" class="acessorios">Peças e Acessórios</a>
			</div>
			<div id="modelo-footer-local" class="col-xs-12 col-md-7 col-md-offset-1">
				<div>Você Está em</div>
				<div>Modelo</div>
				<div><?= $tipoMoto[get_field('tipo_de_moto')] ?></div>
				<div class="<?php the_field('tipo_de_moto') ?>"><?php the_title() ?></div>
			</div>
		</div>
	</div>
</section>
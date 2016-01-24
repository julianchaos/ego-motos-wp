<?php
$tipoMoto = array(
	'super-sport' => 'Super Sport',
	'street' => 'Street',
	'couston' => 'Couston',
	'dual-purpose' => 'Dual Purpose',
	'scooter' => 'Scooter'
);
?>
<section id="modelo-footer" class="init-hide">
	<div class="container">
		<div class="row">
			<div id="modelo-footer-links" class="col-xs-12 col-md-4">
				<?php if(get_field('release')) { ?>
					<a href="<?php the_field('release') ?>" target="_blank" class="release">Download Release</a>
				<?php } ?>
				<a href="<?php echo esc_url(home_url('acessorios')) ?>" class="acessorios">Peças e Acessórios</a>
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
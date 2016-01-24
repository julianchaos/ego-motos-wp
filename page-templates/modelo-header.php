<section id="modelo-header" class="init-hide">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
				<?= is_string(get_field('imagem_modelo')) ? "<img src='".get_field('imagem_modelo')."' />" : null ?>
				<p><?php the_field('chamada_curta') ?></p>
			</div>
		</div>
	</div>
</section>



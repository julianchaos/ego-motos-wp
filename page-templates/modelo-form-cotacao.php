<section id="modelo-form-cotacao" class="init-hide">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div>
					<a href="#form-cotacao-popup" class="btn-cotacao open-popup-link">Faça sua cotação</a>
					<div id="form-cotacao-popup" class="mfp-hide white-popup-block">
						<h3>Ficou interessado?</h3>
						<p>Preencha o formulário que a Ego Motos retornará o mais breve possível</p>
						<?php echo do_shortcode('[contact-form-7 id="126" title="Formulário Cotação"]') ?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	jQuery(function(){
		jQuery('input[name=modelo]').val('<?php the_title() ?>');
		jQuery('input[name=pessoal-tel]').mask('(00) 0000-00000');
		jQuery('input[name=financiamento-entrada]').mask('000.000.000,00', {reverse: true});
	});
</script>
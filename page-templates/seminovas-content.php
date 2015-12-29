<section id="seminovas-content">
	<div class="container">
		<div class="row">
			<div class="estoque-botafogo col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
				<h2>Estoque Botafogo</h2>
<?php
				set_query_var( 'unidade', 'botafogo' );
				get_template_part('page-templates/seminovas', 'lista-motos');
?>
			</div>
			<div class="estoque-tijuca col-xs-12 col-sm-6 col-md-5">
				<h2>Estoque Tijuca</h2>
<?php
				set_query_var( 'unidade', 'tijuca' );
				get_template_part('page-templates/seminovas', 'lista-motos');
?>
				<div class="informacoes">
					<a href="contato">Entre em contato<br/>para mais informações</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="modelo-fotos">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div id="modelo-fotos-carousel">
<?php
while( have_rows('imagens_slider'))
{
	the_row();
	$imagem = get_sub_field('imagem');
	$thumbnail = $imagem['sizes']['medium'];
	$link = $imagem['url'];
?>
					<a href="<?= $link ?>">
						<img src="<?= $thumbnail ?>" alt="" />
					</a>
<?php
} ?>
				</div>
			</div>
		</div>
	</div>
</section>
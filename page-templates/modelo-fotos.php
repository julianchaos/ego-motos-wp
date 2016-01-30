<section id="modelo-fotos" class="init-hide">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div id="modelo-fotos-carousel">
<?php
while( have_rows('imagens_slider'))
{
	the_row();
	$imagem = get_sub_field('imagem');
	$thumbnail = $imagem['sizes']['modelo-thumbnail'];
	$thumbnailWidth = $imagem['sizes']['modelo-thumbnail-width'];
	$link = $imagem['url'];
?>
					<a href="<?= $link ?>" target="_blank">
						<img src="<?= $thumbnail ?>" alt="" />
					</a>
<?php
} ?>
				</div>
			</div>
		</div>
	</div>
</section>
<div id="modelo-fotos-container"></div>
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
					<img class="item" src="<?= $thumbnail ?>" alt="" style="width: <?php echo $thumbnailWidth ?>px" data-url="<?php echo $link ?>"  />
<?php
} ?>
</div>
<div id="modelo-fotos-container"></div>
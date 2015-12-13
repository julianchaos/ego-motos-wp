<?php
while (have_rows('nossos_contatos'))
{
	the_row();

	$imagem = get_sub_field('imagem');
	$titulo = get_sub_field('titulo');
	$conteudo = get_sub_field('conteudo');
?>
<div class="nossos-contatos-item col-xs-12 col-sm-6 col-md-3">
	<img src="<?php echo $imagem ?>" alt="<?php echo $titulo ?>" />
	<h3><?php echo $titulo ?></h3>
	<p><?php echo $conteudo ?></p>
</div>
<?php
}
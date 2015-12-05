<?php
$estoque = "estoque_$unidade";
if( have_rows($estoque) )
{
	while( have_rows($estoque) )
	{
		the_row();
		
		$titulo = get_sub_field('titulo');
		$imagem = get_sub_field('imagem');
		$valor = get_sub_field('valor');
?>
<div class="moto">
	<img src="<?php echo $imagem ?>" alt="<?php echo $titulo ?>" />
	<div class="seminova-info">
		<span class="titulo"><?php echo $titulo ?></span>
		<span class="valor">R$ <?php echo $valor ?></span>
	</div>
</div>
<?php
	}
}
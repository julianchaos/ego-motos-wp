<?php
$listaModelos = array();
while( have_rows('listagem_cores'))
{
	the_row();
	
	$listaModelos[] = array(
		'imagem' => get_sub_field('imagem_modelo'),
		'cor' => get_sub_field('cor_modelo')
	);
}
?>
<div class="animacao-imagens">
<?php
foreach($listaModelos as $key => $modelo)
{
	$active = ($key === 0 ? 'active' : null);
	echo "<img src='{$modelo['imagem']}' class='$active' id='imagem-$key' />";
}
?>
</div>
<div class="animacao-cores">
	<p>cores</p>
<?php
foreach($listaModelos as $key => $modelo)
{
	$active = ($key === 0 ? 'active' : null);
	echo "<a href='javascript: void(0)' class='$active' id='cor-$key'><span style='background-color: {$modelo['cor']}'>.</span></a>";
}
?>
</div>
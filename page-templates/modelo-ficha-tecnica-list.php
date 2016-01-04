<?php
$lista = array();
while(have_rows('ficha_tecnica'))
{
	the_row();
	
	$titulo = get_sub_field('titulo');
	$descricao = get_sub_field('descricao');
	
	$lista[] = "<div class='col-xs-12 col-sm-6'><span>$titulo</span>$descricao</div>";
}

foreach($lista as $index => $item)
{
	echo ($index % 2) === 0 ? "<div class='row'>" : null;
	echo $item;
	echo ($index % 2) === 1 ? "</div>" : null;
}
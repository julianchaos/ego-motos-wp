<?php
$query = new WP_Query(array(
	'post_type' => 'modelo',
	'posts_per_page' => -1,
	'meta_key' => 'tipo_de_moto',
	'meta_value' => $tipoMotoSlug
));

$tipoMotoTitulo = array(
	'super-sport' => 'Super Sport',
	'street' => 'Street'
);

if($query->have_posts())
{ ?>
<div class="container <?= $tipoMotoSlug ?>">
	<div class="row">
		<h2 class="col-xs-12"><?= $tipoMotoTitulo[$tipoMotoSlug] ?></h2>

<?php
	while($query->have_posts())
	{
		$query->the_post(); ?>
		
		<div class="col-xs-12">
			<?php the_title() ?>
		</div>
<?php		
	}
?>

	</div>
</div>
<?php
}

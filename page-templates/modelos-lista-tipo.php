<?php
$query = new WP_Query(array(
	'post_type' => 'modelo',
	'posts_per_page' => -1,
	'meta_key' => 'tipo_de_moto',
	'meta_value' => $tipoMotoSlug
));

$tipoMotoTitulo = array(
	'super-sport' => 'Super Sport',
	'street' => 'Street',
	'couston' => 'Couston',
	'dual-purpose' => 'Dual Purpose',
	'scooter' => 'Scooter'
);

if($query->have_posts())
{ ?>
<div class="container <?= $tipoMotoSlug ?>">
	<h2><?= $tipoMotoTitulo[$tipoMotoSlug] ?></h2>
	<div class="row">

<?php
	while($query->have_posts())
	{
		$query->the_post(); ?>
		
		<div class="col-xs-12 col-sm-6 col-md-4">
			<a href="javascript: void(0)">
				<?php the_post_thumbnail() ?>
				<p><?php the_title() ?></p>
			</a>
		</div>
<?php		
	}
?>

	</div>
</div>
<?php
}

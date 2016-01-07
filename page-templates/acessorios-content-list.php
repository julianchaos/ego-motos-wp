<?php
$query = new WP_Query(array(
	'post_type' => 'acessorio',
	'posts_per_page' => -1
));

if($query->have_posts())
{
	while($query->have_posts())
	{
		$query->the_post(); ?>

		<div class="acessorio-item-container">
			<div class="acessorio-item">
				<?php the_post_thumbnail() ?>
				<div class="acessorio-item-detalhes">
					<h3><?php the_title() ?></h3>
					<p> Modelo
						<?php // var_dump(get_field('modelo')) ?>
						<?php
							if(get_field('ano') !== '')
							{
								echo " | ";
								the_field('ano');
							}
						?>
					</p>
				</div>
			</div>
		</div>
<?php
	}
} ?>



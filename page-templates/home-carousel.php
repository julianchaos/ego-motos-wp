<?php
$sliderItens = array();

$query = new WP_Query(array(
	'post_type' => 'home-slider',
	'posts_per_page' => -1
));
while($query->have_posts())
{
	$query->the_post();
	
	$sliderItens[] = array(
		'titulo' => get_the_title(),
		'legenda' => get_field('legenda'),
		'link' => get_field('link'),
		'img-mobile' => get_field('imagem_mobile'),
		'img-desktop' => get_field('imagem_desktop')
	);
}

?>
<section class="home-carousel">
	<div id="carousel-main" class="carousel slide" data-ride="carousel">
		
		<!-- Indicators -->
		<ol class="carousel-indicators">
<?php
for ($i = 0; $i < count($sliderItens); $i++) {
	$active = $i === 0 ? "class='active'" : null;
	echo "<li data-target='#carousel-main' data-slide-to='$i' $active ></li>";
}
?>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
<?php
foreach($sliderItens as $i => $item)
{
	$active = $i === 0 ? "active" : null;
	echo "<div class='item $active'>";
		echo "<img src='{$item['img-mobile']}' alt='{$item['titulo']}' class='img-mobile' />";
		echo "<img src='{$item['img-desktop']}' alt='{$item['titulo']}' class='img-desktop' />";
		
		echo "<div class='carousel-caption'>";
		echo "</div>";
	echo "</div>";
}
?>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-main" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-main" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>
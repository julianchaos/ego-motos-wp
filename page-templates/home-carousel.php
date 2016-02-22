<?php
$sliderItens = array();

$query = new WP_Query(array(
	'post_type' => 'home-slider',
	'posts_per_page' => -1
));
while($query->have_posts())
{
	$query->the_post();
	
	$banner = array(
		'titulo' => get_the_title(),
		'legenda' => get_field('legenda'),
		'link' => get_field('link'),
		'img-mobile' => get_field('imagem_mobile'),
		'img-desktop' => get_field('imagem_desktop'),
		'half-width' => false
	);
	if(get_field('imagem_com_dois_links'))
	{
		$banner['half-width'] = true;
		$banner['link-2'] = get_field('link_2');
		$banner['img-mobile-2'] = get_field('imagem_mobile_2');
		$banner['img-desktop-2'] = get_field('imagem_desktop_2');
	}
	
	$sliderItens[] = $banner;
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
?>
			
			<div class="item <?php echo $active ?>">
				<a href="<?php echo $item['link'] ?>" class="<?php echo ($item['half-width'] ? 'half-width' : null) ?>">
					<img src="<?php echo $item['img-mobile'] ?>" class="img-mobile" alt="" />
					<img src="<?php echo $item['img-desktop'] ?>" class="img-desktop" alt="" />
				</a>
<?php
	if($item['half-width'])
	{
?>
				<a href="<?php echo $item['link-2'] ?>" class="half-width">
					<img src="<?php echo $item['img-mobile-2'] ?>" class="img-mobile" alt="" />
					<img src="<?php echo $item['img-desktop-2'] ?>" class="img-desktop" alt="" />
				</a>
<?php
	}
?>
			</div>
<?php
} ?>
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
<?php 
$pageModelos = get_page_by_title('Modelos');
$pageUrl = get_page_link($pageModelos->ID);
?>
<section id="home-content" class="init-hide">
	<div class='container'>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<a href="<?php echo esc_url($pageUrl) ?>#super-sport" class="moto super-sport">
					<img src="<?php echo get_template_directory_uri() ?>/images/home/01.super-sport.png" alt="Super Sport" />
					<h2>Super Sport</h2>
				</a>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<a href="<?php echo esc_url($pageUrl) ?>#street" class="moto street">
					<img src="<?php echo get_template_directory_uri() ?>/images/home/02.street.png" alt="Street" />
					<h2>Street</h2>
				</a>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<a href="<?php echo esc_url($pageUrl) ?>#couston" class="moto couston">
					<img src="<?php echo get_template_directory_uri() ?>/images/home/03.couston.png" alt="Street" />
					<h2>Couston</h2>
				</a>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<a href="<?php echo esc_url($pageUrl) ?>#dual-purpose" class="moto dual-purpose">
					<img src="<?php echo get_template_directory_uri() ?>/images/home/04.dual-purpose.png" alt="Street" />
					<h2>Dual Purpose</h2>
				</a>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<a href="<?php echo esc_url($pageUrl) ?>#scooter" class="moto scooter">
					<img src="<?php echo get_template_directory_uri() ?>/images/home/05.scooter.png" alt="Street" />
					<h2>Scooter</h2>
				</a>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<a href="<?php echo esc_url($pageUrl) ?>" class="moto conheca-linha">
					<!--<img src="<?php echo get_template_directory_uri() ?>/images/home/transparent.png" alt="" />-->
					<h2>Conheça toda a linha</h2>
				</a>
			</div>
		</div>
	</div>
</section>
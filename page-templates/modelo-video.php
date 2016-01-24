<?php
if(get_field('video_embed') !== '') {
	$pageEncodedUrl = urlencode(get_permalink());
	$sharerUrl = "https://www.facebook.com/dialog/share?app_id=1538517343132107&display=popup&href=$pageEncodedUrl&redirect_uri=$pageEncodedUrl";
?>
<section id="modelo-video" class="init-hide">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="video-container">
					<?php the_field('video_embed') ?>
					<div class="btn-container">
						<a href="https://www.facebook.com/EgoMotos" target="_blank" class="btn-curtir"></a>
						<a href="<?php the_field('video_url') ?>" target="_blank" class="btn-ver-depois"></a>
						<a href="<?php echo $sharerUrl ?>" class="btn-compartilhar"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
}
<?php get_header() ?>
<section class="commom-content">
	<div id="primary" class="container">
		<div id="content" role="main">
			<h1><?php the_title() ?></h1>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
</section>
<?php get_footer() ?>

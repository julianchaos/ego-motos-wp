<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
		<meta name="viewport" content="width=device-width" />

		<?php wp_head() ?>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="container">
				<nav class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div id="headerimg" class="navbar-brand">
							<h1>
								<a href="<?php echo home_url() ?>/" title="<?php bloginfo('name') ?>">
									<img src="<?php bloginfo('template_directory') ?>/images/header/logo-egomotos.png" alt="<?php bloginfo('name') ?>" />
									<img src="<?php bloginfo('template_directory') ?>/images/header/logo-suzuki.png" alt="<?php bloginfo('name') ?>" />
								</a>
							</h1>
						</div>
						<a href="https://www.facebook.com/EgoMotos" title="Facebook" class="facebook-link">
							<img src="<?php bloginfo('template_directory') ?>/images/header/facebook.png" alt="Facebook" />
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-collapse">
<?php
wp_nav_menu( array( 
	'menu' => 'primary',
	'depth' => 1,
	'container' => false,
	'menu_class' => 'nav navbar-nav',
	//process nav menu using our custom nav walker
	'walker' => new wp_bootstrap_navwalker() 
	) );
?>
					</div><!-- #navbar-collapse -->
				</nav><!-- site-navigation -->
			</div>
		</header>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css"
	integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ=="
	crossorigin=""/>

	<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"
	integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log=="
	crossorigin=""></script>
	<link href="https://fonts.googleapis.com/css?family=Kanit:200" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
</head>
<body>


<header>
	<div class="barra_navegacion">
		<div class="container">
			<div class="row">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<img src="<?php echo get_stylesheet_directory_uri('')?>/assets/images/agroturismo.png" class="img-responsive logo" >

				</div>
				<div class="navbar-right">

					<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
						<?php wp_nav_menu( array(
							 'theme_location' => 'header-menu',
							 'container_class' => 'header_menu collapse navbar-collapse',
							 "container_id" => "navbar",
							 "menu_class" => "nav navbar-nav navbar-right"

						 ) ); ?>

					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</header>

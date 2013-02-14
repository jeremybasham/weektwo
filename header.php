<!DOCTYPE html>
<html>
<head>
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
	<!--usually adds meta details from original html file, which we didnt have-->
	
	<!--<link rel="stylesheet" href="wp-content/themes/weektwo/style.css"/>-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
	<!--added wp_head function for default wp extras-->
	<?php wp_head(); ?>
	<!--book shows extra ways to add title functions ch 5-6-->
	<title><?php bloginfo('name'); ?></title>
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
</head>
    <!--added body_class funtion to add more specific styles to admin bar, etc-->
	<body <?php body_class( $class ); ?>>
		<header>
			<h1><?php bloginfo('name'); ?></h1>
			<nav>
				<ul>
					<li>Home</li>
					<li>Wordpress</li>
				</ul>
			</nav>
		</header>
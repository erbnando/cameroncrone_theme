<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title>Cameron Crone</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" />
	<?php wp_head(); ?>
</head>

<body>
	<header>
		<a href="#" id="menu-icon"></a>
		<nav>
			<?php wp_nav_menu(array(
				'theme_location' => 'main-menu'
			)); ?>
		</nav>
	</header>
	<div class="placeholder"></div>
	<div class="spacer"></div>
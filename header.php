<?php
/**
* The head, opening body, and menu that will carry from page to page
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<?php wp_head(); ?>
</head>
<body>
	<header id="menu">
		<button id="menu-button">Menu</button>

		<?php
		wp_nav_menu(array(
			'theme_location' => 'primary',
			'container' => null
		));
		?>
	</header>

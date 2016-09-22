<?php

if (!function_exists('dsmworkers_setup')):

function dsmworkers_setup() {
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('custom-logo');

	register_nav_menus(array(
		'primary' => __('Header Menu')
	));
}

endif;

add_action('after_setup_theme', 'dsmworkers_setup');
?>

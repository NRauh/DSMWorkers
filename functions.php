<?php

if (!function_exists('dsmworkers_setup')) {
	function dsmworkers_setup() {
		add_theme_support('post-thumbnails');
		add_theme_support('title-tag');
		add_theme_support('custom-logo');

		register_nav_menus(array(
			'primary' => __('Header Menu')
		));
	}
}
add_action('after_setup_theme', 'dsmworkers_setup');

function dsmworkers_scripts() {
	wp_enqueue_script('dsmworkers', get_template_directory_uri() . '/js/dsmworkers.js', null, 1.0, false);
}
add_action('wp_enqueue_scripts', 'dsmworkers_scripts');

function next_posts_attributes() {
	return 'class="next"';
}
function previous_posts_attributes() {
	return 'class="prev"';
}
add_filter('next_posts_link_attributes', 'next_posts_attributes');
add_filter('previous_posts_link_attributes', 'previous_posts_attributes');

?>

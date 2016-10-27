#Des Moines Workers' Alliance Wordpress Theme

This is a Wordpress theme built for the Des Moines Workers' Alliance.

This theme doesn't use comments, and leverages a custom post type for projects.

##TODO
* Fix big logo issue
* Add analytics
* Check for standards compliances
* Clean head tag

##Projects plugin

```
<?php
/*
Plugin Name: Project Content Type
Description: A plugin for adding the project content type
Version: 1.0
Author: Nate Rauh
License: GPL2
*/

add_action('init', 'register_project_type');

function register_project_type() {
	$labels = array(
		'name' => 'Projects',
		'singular_name' => 'Project',
		'menu_name' => 'Projects',
		'name_admin_bar' => 'Project',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Project',
		'new_item' => 'New Project',
		'edit_item' => 'Edit Project',
		'view_item' => 'View Project',
		'all_items' => 'All Projects',
		'search_items' => 'Search Projects',
		'parent_item_colon' => 'Parent Project',
		'not_found' => 'No Projects Found',
		'not_found_in_trash' => 'No Projects Found in Trash'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-megaphone',
		'heirarchical' => false,
		'supports' => array('title', 'thumbnail', 'excerpt', 'editor'),
		'has_archive' => true,
		'rewrite' => array('slug' => 'projects'),
		'query_var' => true
	);

	register_post_type('projects', $args);
}
?>
```

##License
GPL-v2

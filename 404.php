<?php
/**
* Template to show a 404 error
*/
get_header();
?>

<style>
p, .searchform {
	text-align: center;
}
</style>

<div class="page-body">
	<h1 class="page-title">404 Error</h1>
	<p>The post or page you were looking for wasn't found.</p>
	<p>Why don't you search for it?</p>
	<?php get_search_form(); ?>
</div>

<?php get_footer(); ?>

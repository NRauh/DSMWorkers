<?/**
* The generic page for pages without themes
* TODO: Make this be the listings template
*/?>
<?php get_header(); ?>

<div id="posts">
	<div class="post-list">
		<?php while (have_posts()): the_post(); ?>
			<?php get_template_part('template-parts/listings'); ?>
		<?php endwhile; ?>
	</div>
</div>

<?php get_footer(); ?>

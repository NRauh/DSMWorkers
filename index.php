<?/**
* The generic page for pages without themes
* TODO: Make this be the listings template
*/?>
<?php get_header(); ?>

<div id="posts">
	<?php if (have_posts()): ?>
		<div class="post-list">
			<?php while (have_posts()): the_post(); ?>
				<?php get_template_part('template-parts/listings'); ?>
			<?php endwhile; ?>
		</div>
	<?php else: ?>
		<div class="page-body">
			<h1 class="page-title">No Posts Found.</h1>
		</div>
	<?php endif; ?>
</div>

<?php get_footer(); ?>

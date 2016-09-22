<?php
/**
* Template for single projects (custom type)
*/
get_header();
?>

<div id="project-body" class="two-column-container">
	<?php while (have_posts()): the_post(); ?>
		<div class="left-col">
			<?php
			the_post_thumbnail();
			get_template_part('template-parts/social');
			?>
		</div>

		<div class="right-col">
			<h1 class="page-title"><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>

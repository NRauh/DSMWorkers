<?php
/**
* Listing of the projects custom post type
*/
get_header();
?>

<h1 class="page-title">Projects</h1>

<div class="project-list">
	<?php while (have_posts()): the_post(); ?>
		<div class="two-column-container">
			<div class="left-col">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
				</a>
			</div>

			<div class="right-col">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_excerpt(); ?>
				<a class="continue-link" href="<?php the_permalink(); ?>">More Info</a>
			</div>
		</div>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>

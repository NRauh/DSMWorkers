<?php
/**
* Template for single pages
*/
get_header();
?>

<article class="page-body">
	<?php while (have_posts()): the_post(); ?>
		<header>
			<h1 class="page-title"><?php the_title(); ?></h1>
			<?php
			if (has_post_thumbnail()) {
				the_post_thumbnail('large', 'class=head-image');
			}
			?>
		</header>

		<?php the_content(); ?>
	<?php endwhile; ?>
</article>

<?php get_footer(); ?>

<?php
/**
* Template for showing single posts
*/
get_header();
?>

<article class="post page-body">
	<?php while (have_posts()): the_post(); ?>
		<header class="byline">
			<h1 class="page-title"><?php the_title(); ?></h1>
			<h2><?php the_author(); ?> - <?php the_date(); ?></h2>
			<?php if (has_post_thumbnail()) {
				the_post_thumbnail('large', 'class=head-image');
			}
			?>
		</header>

		<?php the_content(); ?>

		<footer class="post-footer">
			<?php
			get_template_part('template-parts/social');
			the_tags('<ul><li>', '</li><li>', '</li></ul>');
			?>
		</footer>
	<?php endwhile; ?>
</article>

<?php get_footer(); ?>

<?php
/**
* This is the post listings page, i.e. the newspaper
* Set from the post page in reading settings
* TODO: Check that pagination is right after first page
*/
get_header();
?>

<h1 class="page-title">The Radical Worker</h1>

<?php if (get_query_var('paged') < 1): ?>
	<div id="featured-post" class="two-column-container">
		<?php
		$args = array(
			'posts_per_page' => 1,
			'category_name' => 'featured'
		);
		$featured = new WP_Query($args);
		?>

		<?php while ($featured->have_posts()): $featured->the_post(); ?>
			<?php
			$firstPosts = array();
			$firstPosts[] = get_the_ID();
			?>
			<div class="left-col">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
				</a>
			</div>

			<div class="right-col">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<h3><?php the_author(); ?> - <?php the_date(); ?></h3>
				<?php the_excerpt(); ?>
				<a class="post-link" href="<?php the_permalink(); ?>">Continue Reading</a>
			</div>
		<?php endwhile; ?>
	</div>

	<div id="posts">
		<div class="three-item-container">
			<?php
			$args = array(
				'post__not_in' => $firstPosts,
				'posts_per_page' => 3
			);
			$recent = new WP_Query($args);
			?>

			<?php while ($recent->have_posts()): $recent->the_post(); ?>
				<?php $firstPosts[] = get_the_ID(); ?>
				<div class="item">
					<?php if (has_post_thumbnail()): ?>
						<a href="<?php the_permalink(); ?>">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
						</a>
					<?php endif; ?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<h3><?php the_author(); ?> - <?php the_date(); ?></h3>
					<?php the_excerpt(); ?>
					<a class="post-link" href="<?php the_permalink(); ?>">Continue Reading</a>
				</div>
			<?php endwhile; ?>
		</div>

		<div class="post-list">
			<?php
			$args = array(
				'post__not_in' => $firstPosts,
				'posts_per_page' => 4
			);
			$posts = new WP_Query($args);
			?>

			<?php while ($posts->have_posts()): $posts->the_post(); ?>
				<div class="post">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<h3><?php the_author(); ?> - <?php the_date(); ?></h3>

					<?php if (has_post_thumbnail()): ?>
						<div class="post-excerpt image-excerpt">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
							</a>
					<?php else: ?>
						<div class="post-excerpt">
					<?php endif; ?>
							<div class="excerpt-text">
								<?php the_excerpt(); ?>
								<a class="post-link" href="<?php the_permalink(); ?>">Continue Reading</a>
							</div>
						</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
<?php else: ?>
	<div id="posts">
		<?php
		$args = array(
			'offset' => 8
		);
		$posts = new WP_Query($args);
		?>

		<?php while ($posts->have_posts()): $posts->the_post(); ?>
			<?php get_template_part('template-parts/listings'); ?>
		<?php endwhile; ?>
	</div>
<?php endif; ?>

<div class="pagination">
	<?php previous_posts_link('&lt; Previous Page', $posts->max_num_pages); ?>
	<?php next_posts_link('Next Page &gt;', $posts->max_num_pages); ?>
</div>

<?php get_footer(); ?>

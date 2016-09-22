<?php
/**
* The front page of the website
*/
get_header();
?>

<div id="hero">
	<!--img src="/theme/dsmworkers/css/Logo.png" alt="Des Moines Workers' Alliance Logo"-->
	<?php the_custom_logo(); ?>
	<h1>Des Moines Workers' Alliance</h1>
</div>

<div id="aims">
	<div class="aim-image">
	</div>
	<div class="aim-list">
		<div class="aims-list-content">
			<p>This will be the page content</p>
			<?php while (have_posts()): the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>

<div id="projects" class="three-item-container">
	<div class="item">
		<?php
		$args = array('post_type' => 'projects');
		$projects = new WP_Query($args);

		while ($projects->have_posts()): $projects->the_post(); ?>
			<a href="<?php the_permalink(); ?>">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
			</a>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
			<a class="continue" href="<?php the_permalink(); ?>">More Info</a>
		<?php endwhile;
		?>
	</div>
</div>

<?php get_footer(); ?>

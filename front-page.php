<?php
/**
* The front page of the website
*/
get_header();
?>

<div id="hero">
	<?php
	$logoID = get_theme_mod('custom_logo');
	$logoImage = wp_get_attachment_image_src($logoID);
	?>
	<img src="<?php echo $logoImage[0]; ?>" alt="Des Moines Workers' Alliance Logo">
	<h1>Des Moines Workers' Alliance</h1>
</div>

<div id="aims">
	<div class="aim-image">
	</div>
	<div class="aim-list">
		<div class="aims-list-content">
			<?php while (have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>

<div id="projects" class="three-item-container">
	<?php
	$args = array('post_type' => 'projects');
	$projects = new WP_Query($args);
	?>

	<?php while ($projects->have_posts()): $projects->the_post(); ?>
		<div class="item">
			<a href="<?php the_permalink(); ?>">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
			</a>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
			<a class="continue" href="<?php the_permalink(); ?>">More Info</a>
		</div>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>

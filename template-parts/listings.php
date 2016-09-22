<?php
/**
* Generic post listings
* Currently used in pages after the first for home.php
*/
?>
<div class="post">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<h3><?php the_author(); ?> - <?php the_date(); ?></h3>

	<?php if (has_post_thumbnail()): ?>
		<div class="post-excerpt image-excerpt">
			<a class="image-link" href="<?php the_permalink(); ?>">
				<img src="<?php the_thumbnail(); ?>" alt="<?php the_title_attribute(); ?>">
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


<?php
/**
* The footer, and closing body and html tags that are for each page
*/
?>
	<?php //TODO: query address and center bit ?>
	<footer id="page-footer">
		<div class="container">
			<div class="left">
				<address>
					dsmworkers@riseup.net<br>
					(515) 505-3242<br>
				</address>
				<span class="social">
					<a class="facebook" href="https://www.facebook.com/DSMWorkers">
						<img src="<?php bloginfo('template_url'); ?>/images/fb-logo.svg" alt="Facebook">
					</a>
					<a class="twitter" href="https://twitter.com/dsmworkers">
						<img src="<?php bloginfo('template_url'); ?>/images/twitter-logo.svg" alt="Twitter">
					</a>
				</span>
			</div>

			<div class="center">
				<h4><?php echo get_bloginfo('description'); ?></h4>
			</div>

			<div class="right">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'container' => null
				));
				?>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>

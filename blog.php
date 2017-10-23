	<?php get_header(); ?>

	<?php if (have_posts()): while (have_posts()): the_post(); ?>
			<section class="row">
				<div class="one-third column">
					<div class="post-preview">
						<img src="<?php the_post_thumbnail('thumbnail'); ?>">

							<h4><?php the_title(); ?></h4>

							<p><?php the_content(); ?></p>
								
							<p><small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></small></p>	
					</div>
				</div>
			</section>

<?php endwhile; else: ?>
	<p><?php _e('sorry, this page does not exist'); ?></p>
<?php endif; ?>

	<?php get_footer(); ?>

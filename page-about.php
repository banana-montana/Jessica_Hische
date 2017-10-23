<?php get_header(); ?>
   
	<div class="row">
		<div class="header-image twelve column">
			<div id='home' class='widgets-area'>
				<?php dynamic_sidebar('widget-home') ?>
			</div>
		</div>
	</div>

   <?php
   if(have_posts()):
        while( have_posts()): the_post();?>
                <?php get_template_part('components/content',get_post_format()); ?>  
                <!-- if get post format is empty get template returns "content" and will just show content.php_ini_loaded_file
                but if get post is "aside" or "video" get template will return 'content-aside.php' -->
        <?php  endwhile;
    endif; 
    ?>

<?php get_footer(); ?>
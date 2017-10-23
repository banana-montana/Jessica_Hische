<?php get_header(); ?>
   
	<div class="row">
		<div class="header-image twelve column">
			<div id='home1' class='widgets-area'>
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

   	<div class="row">
		<div class="header-image twelve column">
			<div id='home1' class='widgets-area'>
				<?php dynamic_sidebar('widget-home') ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>

		<!-- <img class="aligncenter size-full wp-image-19" src="http://127.0.0.1/wordpress/wp-content/uploads/2017/10/headerimage.png" alt="" width="1000" height="429">
		<div class="image-text">
			<h4><mark>My two cents on a few topics</mark>
			<a href="http://127.0.0.1/wordpress/blog/"><button>recent posts</button></a></h4>
		</div>

		**** code for back-up of image 
		to be put in widget area ****

		-->
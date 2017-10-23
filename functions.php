<!-- Import primary and secondary menu's -->

<?php register_nav_menu('primary', 'Primary Menu'); ?>
<?php register_nav_menu('secondary', 'Secondary Menu'); ?>


<!-- Import support for image thumbnails -->
<?php add_theme_support('post-thumbnails'); ?>


<!-- link to JavaScript -->
<?php function javascript_scripts() {
	wp_enqueue_script( 'jellybean', get_theme_file_uri( 'js/main.js' ), array( 'jquery' ), '1.0', true ); 
}
	add_action( 'wp_enqueue_scripts', 'javascript_scripts' ); 

?>

<!-- Import widget area for Home page -->
<?php function home_widget_setup(){
    register_sidebar( array(
        'name'          => 'home1',
        'id'            => 'widget-home',
        'class'         => 'widget-home',
        'description'   => 'Home widget for header',
        'before_title'  => '<h4 class="image-text"><mark>',
        'after_title'   => '</mark></h1>',
    )
	);}
	add_action( 'widgets_init', 'home_widget_setup');

?>1
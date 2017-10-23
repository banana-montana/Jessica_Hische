<!DOCTYPE html>
<html <?php language_attributes(); ?> />
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="admin panel">
	<meta name="author" content="Leandra de Sousa">
	<title>
		<?php wp_title("|","right"); bloginfo("Jessica Hische"); ?>	
	</title>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700" rel="stylesheet">

	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<!-- mobile nav -->
		<div id="mySidenav" class="sidenav">
			 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			 <?php 
					$defaults = array('theme_location' => 'secondary',
						'conatiner' => 'false',
						'menu_class' => 'nav',
						'echo' => true,
						'fallback_cb' => 'wp_page-menu', );

						wp_nav_menu($defaults);
				?>
		</div> 
		
		<span class="open-nav" onclick="openNav()">&#9776;</span>

		<div class="header-title">
			<h1>Jessica Hische</h1>
			<h5>designer // typographer // speaker // artist</h5>
		</div>

		<nav class="nav">
			<hr>
			<ul>
				<?php 
					$defaults = array('theme_location' => 'primary',
						'conatiner' => 'false',
						'menu_class' => 'nav',
						'echo' => true,
						'fallback_cb' => 'wp_page-menu', );

						wp_nav_menu($defaults);
				?>
			</ul>	
			<hr>
		</nav>

	</header>

	<main id="main" class="site-main" role="main">









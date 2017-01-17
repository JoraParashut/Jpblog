<!doctype html>
<html>
<head>
		
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet"> 

	
</head>




	<header class="header">
		
		<section class="header_item_container">
			<div class="header_logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/svg/superlogov4.svg"></div>
			<h1 class="main_headline headlines">Тут должен быть остроумный заголовок</h1>
		</section>
		
		<div class="gradient">
			<div class="red cell"></div>
			<div class="orange cell"></div>
			<div class="softorange cell"></div>
			<div class="yellow cell"></div>
			<div class="acidgreen cell"></div>
			<div class="green cell"></div>
			<div class="azure cell"></div>
			<div class="blue cell"></div>
			<div class="red cell"></div>
			<div class="orange cell"></div>
			<div class="softorange cell"></div>
			<div class="yellow cell"></div>

		</div>
		<nav class="nav">
			<?php
				wp_nav_menu(array('theme_location' => 'primary',
				 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				 'container' =>'nav',
				 'menu_class' => 'nav_list',
				 'depth' => 0));
			?>
			
		</nav>
		
	</header>

</html>









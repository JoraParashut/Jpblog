<?php
/*
Template Name: contacts page
*/
?>
<?php get_header(); ?>
	

<body>

<main class="back">
	<article class="homepage_main">
	<section class="contacts_wrap">
		<div class="contacts_form_container">
			<?php if (have_posts())
			 		{while (have_posts()) {the_post();  ?>
			<h2 class="headlines">Обратная связь</h2>
			<div class="story">
				
				<div><?php the_content(''); ?></div>

			</div>
		</div>
		<?php }
		} ?>
		
	<div class="my_social_contacts">
		<div class="my_social_contacts_item">
			<div class="contacts_icon"><a href="https://vk.com/id58339776"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/vkantachk.png"></a></div>
			<div class="contacts_description">
			<p><a href="https://vk.com/id58339776">Страница Вконтачкт</a></p></div>
		</div>
		<div class="my_social_contacts_item">
			<div class="contacts_icon"><a href="https://www.facebook.com/profile.php?id=100013359376604"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/facebk.png"></a></div>
			<div class="contacts_description">
			
			<p><a href="https://www.facebook.com/profile.php?id=100013359376604">Аккаунт Facebook</a></p></div>
		</div>
		<div class="my_social_contacts_item">
			<div class="contacts_icon"><a href="https://github.com/JoraParashut"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/githubicon.png"></a></div>
			<div class="contacts_description">
			
			<p><a href="https://github.com/JoraParashut">Аккаунт GitHub</a></p></div>
		</div>
	</div>
	</section>
		
<?php get_sidebar(); ?>		
	</article>
</main>
<?php get_footer(); ?>
</body>

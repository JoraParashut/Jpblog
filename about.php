
<?php
/*
Template Name: About page
*/
?>

<?php get_header(); ?>
	

<body>

<main class="back">
	<article class="homepage_main">
		<article class="about_container">
			<?php if (have_posts())
			 	{while (have_posts()) {the_post();  ?>
			
			<section class="story">

				<?php the_content(''); ?>
				
			</section>
		</article>
		<?php }
			}?>
			
		
		
<?php get_sidebar(); ?>		
	</article>
</main>
<?php get_footer(); ?>
</body>




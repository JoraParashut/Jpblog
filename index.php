<?php get_header(); ?>
<main class="back">
<article class="homepage_main">
		<article class="news_container">
<!--Fuck the rugheads-->
		<?php
		
		 if (have_posts())
			 {while (have_posts()) {the_post();  ?>
			
		<article class="news">
		
			<section class="news_headline">
				<h2 class="headlines"><a href="<?php the_permalink(); ?>"><?php the_title() ;?></a></h2>
				
			</section>
			<section class="news_item_info">
				<div class="news_item_info_svg_container"><img src="<?php echo get_stylesheet_directory_uri() ?>/svg/paperclip.svg"></div>
				<div class="news_item_info_text_left"><?php the_time('F, j, Y'); ?></div>
				<div class="news_item_info_text_right"><?php the_category(); ?></div>
			</section>
			<section class="news_image">
				<?php the_post_thumbnail(); ?>
			</section>
			<section class="textblock">
				<p>
				
				<?php

				 the_content ($more_link_text = 'далее'); ?>
					
				
				</p>
			</section>
			
			
		</article>
		<?php } ?>
		<?php wp_pagenavi(); ?>
		<?php } ?>

		</article>

		<?php get_sidebar(); ?>
</article>
</main>
<?php get_footer(); ?>
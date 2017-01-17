<aside class="homepage_aside">
			<section class="search_form">
				<?php get_search_form(); ?>
			</section>
			<article class="aside_width_fix">
			<section class="aside_categories">
				<h3 class="aside_headline">Категории</h3>
				<ul class="categories">
					<?php $args = array(
						
						'hide_empty' => 0,
						'title_li' =>''

					)?>
					<?php wp_list_categories($args); ?>
				</ul>
			</section>
			<section class="recentPosts">
				<h3 class="aside_headline">Последние публикации</h3>
				<ul class="rs_posts">
					<?php $rspost = array(
						'numberposts' => 6,
						'post_status' => 'publish'
					 ); 

				    $result_rspost = wp_get_recent_posts($rspost);

					foreach ($result_rspost as $p){ ?>

						 <a href="<?php echo get_permalink($p['ID']) ?>"><?php echo $p['post_title'] ?></a>

					<?php	 
					}
					?>
					

				</ul>
			</section>
			</article>
</aside>
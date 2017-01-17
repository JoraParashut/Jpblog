<section>
				<form action="<?php echo home_url('/') ?>" method="get" class="searchForm" role="search">
	  				<input type="text" name="s" id="s" placeholder="Search here..." class="search_form_input" value="<?php echo get_search_query() ?>" />
					<button type="submit" class="search_button" id="searchsubmit" value="search here">
						<img src="<?php echo get_stylesheet_directory_uri(); ?> /svg/loupe.svg">
					</button>
				</form>
			</section>
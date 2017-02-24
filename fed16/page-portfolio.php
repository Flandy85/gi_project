<?php
/* 
*Template Name: Portfolio
* Show all posts of project type
*/
get_header();

?>
<main>
	<div id="wrapper">
		<?php

		$portfolio = new WP_Query(	array(
			'post_type'		=> 'fed16_cpt_portfolio',
			'posts_status'	=> 'published',
			'orderby'		=> 'title',
			'order'			=> ASC
			) );

		// Counts how many posts been added before it breaks over to add-banner.
		$counter = 0;

		if($portfolio ->have_posts()) {
			?>
		
			      <ul class="gallery">

			      <?php
					while( $portfolio->have_posts() ){

						$portfolio->the_post();

						$bildurl = get_the_post_thumbnail_url();
						?>
						<li>
				          <a href="<?php echo the_permalink(); ?>">
				            <img src="<?php echo $bildurl; ?>" alt="">
				            <p><?php the_excerpt(); ?></p>
				          </a>
				        </li>
						<?php
						$counter++;
						if($counter == 3) {

							?>
						      <li class="add-banner">
						        <a href="http://medieinstitutet.se/front-end-developer/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>../src/img/medieinstitutet-header.png" class="add-banner"></a>
						      </li>
							<?php
						}
					}

					?>
					</ul>
				<?php 
		}
		?>	
	</div>
</main>


<?php get_footer(); ?>





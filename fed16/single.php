<?php get_header();

if(have_posts()) {
	while(have_posts()){
		the_post();
		?>
		<div class="single-container">
			<?php
			if( has_post_thumbnail()) {
				?>
				<div class="single-title"><?php the_title(); ?></div>
					
				<?php
			}
				?>
				<div class="single-content-img"><?php the_post_thumbnail('large'); ?></div>
				<div class="single-content"><?php the_content(); ?></div>
		</div>
		<?php
	}
}

get_footer();

?>
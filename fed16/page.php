<?php get_header(); ?>
<?php
if(have_posts()) {
	while(have_posts()){
		the_post();

		if( has_post_thumbnail()) {
			the_post_thumbnail('large');
		}
		?>
		<div class="single-title"><?php the_title(); ?></div>
		<?php
		the_content();
	}
}

get_footer();

?>
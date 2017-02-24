<?php 
/* 
* Template Name: About 
*/ 
?>
<?php get_header(); ?>
<?php
if(have_posts()) { 
	while(have_posts()) {
		the_post();
		?>
		<div class="container">

			<div class="left-side">
				<img src="<?php the_field('bild'); ?>" class="profile-picture">
			</div>
				<div class="right-side">
					<h3><?php the_title(); ?></h3>
					<div class="about-info"><?php echo get_field('general_information'); ?></div>
				</div>
			<?php
			
			
			?>
		</div>
		<?php
		
	}
}

get_footer();

?>
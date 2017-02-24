<?php
/*
Template Name: Archives
*/
get_header(); ?>
<main>
<div class="container">
	<div class="content">
	<?php
		if(have_posts() ){
			while(have_posts()) {

				?>
				<h1><?php the_title(); ?></h1>
				<div><?php the_post(); ?></div>
				<div><?php the_excerpt(); ?></div>
				<a href="<?php the_permalink();?>">Read more </a>
				<?php  			
			}
		}
		?>

	</div><!-- #content -->
</div><!-- #container -->
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
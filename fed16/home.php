<?php
/*
* Template Name: Home
*/
?>
<?php get_header(); ?>
<article>
	<section>
		<div class="blog-container">
			<div class="blog-background">				
				<?php
					if(have_posts()) {
						while(have_posts()) {

							the_post();
							dynamic_sidebar( 'footer1' );
							if( has_post_thumbnail()) {
								the_post_thumbnail('large');
							}

							?>
							
							<div class="blog-title"><?php //the_title(); ?></div> 
							<a href="<?php the_permalink(); ?>"><div class="blog-content"><?php the_content(); ?></div></a>
							<?php
						}
					}
				?>
			</div>					
		</div>
	</section>
</article>

<?php get_footer(); ?>
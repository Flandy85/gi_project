<?php
/* 
* Template Name: Left sidebar
*/
?>
<?php get_header(); ?>
<section>
	<?php
	if(have_posts()) {
		while(have_posts()) {
			the_post();

			// if( has_post_thumbnail()) {
			// 	the_post_thumbnail('medium');
			// }
			
			the_title();
			the_content();
		}
	}
	?>
	
</section>
<?php
get_footer();

?>
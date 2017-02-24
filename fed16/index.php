<?php 

get_header(); 
?>
		<?php
		if(have_posts() ){
			while(have_posts()) {
				the_post(); // hämtar ut sidan/inlägget som ett objekt 
							// måste vara med för att man ska ej fastan i en evighetsloop samt för att man ska kunna skriva ut egenskaper som hör till inlägget
				echo "<h1>";
				the_title();
				echo "</h1>";
				the_excerpt();
				?>
				<a href="<?php the_permalink();?>">Läs mer </a>
				<?php  			
			}
		}
		?>
		</div>
	</div>
</section>

<?php get_footer(); ?> 

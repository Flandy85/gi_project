<?php
/* 
* Template Name: Contact 
*/

get_header();

if(have_posts()) {
	while(have_posts()){
		the_post();
		?>
			<div class="contact-box">
				<div class="contact-info"><?php the_field('contact_information'); ?>
			        <ul>
			          <li class="phone"><a href="tel:0768505328">0768505328</a></li>
			          <li class="mail"><a href="mailto:a.gustavsson85@gmail.com">a.gustavsson85@gmail.com</a></li>
			        </ul>
			    </div>
				<div class="contact-form"><?php echo do_shortcode( '[contact-form-7 id="74" title="Contact form 1"]' ); ?></div>
			</div>
		<?php
	}
}
get_footer();
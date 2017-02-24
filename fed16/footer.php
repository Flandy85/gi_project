
		<footer>
			<!-- <div id="cookie-notifaction" class="cookie-notiffaction">
				This site is using cookies for a better experience
				<button id="hide-notifaction">OK, got it!</button>	
			</div> -->
			<div class="social-links-meny"><?php wp_nav_menu(array('theme_location' => 'footer')); ?></div>     
			<?php wp_footer(); ?>
			<p>&copy;<?php echo date('Y'); ?> Anders Gustavsson.</p> 
		</footer>
	</body>
</html>
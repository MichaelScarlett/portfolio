<footer>
	<section class="footer"></section>
	  <div class="container" id="footer_container">

		<div class="myFooter">

		    <!-- <div class="email">
		    </div> -->

			
		        <div class="arrow_up">  
		    		<a href="#home"><?php the_field('arrow_up'); ?></a>	    
		        </div>


			
		  	<div class="footer_name">
		    	<p>&copy; Design by MD. Developed by MichaelScarlett <?php echo date('Y'); ?></p>
		    	<?php the_field('email_footer'); ?>
		    	<?php the_field('headshot_credit'); ?>
		    	<?php the_field('photo_credit'); ?>
		    	<?php the_field('logo_credit'); ?>
		    </div>

		    

		<div class="footer_stuff">
			<div class="footer_links">
			    <?php // Start the loop ?>
			    <?php if ( have_rows('footer_social') ) while ( have_rows('footer_social') ) : the_row(); ?>

			    <?php the_sub_field('footer_link'); ?>


			    <?php the_content(); ?>
			    <?php endwhile; ?>
			</div>

	  </div>
		</div>
		</div>
	</section>  

</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>
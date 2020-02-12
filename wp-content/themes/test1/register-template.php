<?php

/*
Template Name: Register Layout
*/

get_header();


?>

<div class="container">


<div class="contact-us">

	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
	?>
		<article class="post page">
		<h2><?php the_title(); ?></h2>
		
		<!-- info-box -->
		<div class="info-box">
			
		</div><!-- /info-box -->

		<?php the_content(); ?>

		
	</article>

		
	<?php	
		endwhile;
	?>
	
	
	
<?php
	
get_footer();

?>
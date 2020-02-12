<?php

/*
Template Name: About Layout
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
			<h4>Disclaimer Title</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaaaa.</p>
		</div><!-- /info-box -->

		<?php the_content(); ?>

		
	</article>

		
	<?php	
		endwhile;
	?>
	
	
	
<?php
	
get_footer();

?>
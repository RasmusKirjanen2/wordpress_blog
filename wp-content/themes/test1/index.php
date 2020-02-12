<?php

get_header();

?>

<div class="container">

<div class="secondary-column">
	<?php dynamic_sidebar('sidebar1');// sinu widgets sidebar ?> 
</div>

<div class="post-content">

<?php

if (have_posts()) :
	while (have_posts()) : the_post();
	
	get_template_part('content', get_post_format());  // dynamically include the post format - get_post_format() - lubab sul sinu enda nullist üles ehitatud posti lisada. Näide: content-aside.php  

	endwhile;

	else :
		echo '<p>No content found</p>';
	
	endif;

?>

	<div class="pagination">
		<?php
			echo paginate_links();
		?>
	</div>

<?php
	
get_footer();

?>
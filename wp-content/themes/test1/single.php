<?php

get_header();

?>

<div class="container">

<div class="secondary-column">
		<?php dynamic_sidebar('sidebar1'); ?>
</div>

<div class="post-content">

<?php

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	
	<article class="post">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
		<p class="post-info"><?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in
			
			<?php
			
			$categories = get_the_category();
			$separator = ", ";
			$output = '';
			
			if ($categories) {
				
				foreach ($categories as $category) {
				
					$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;
					
				}
				
				echo trim($output, $separator);
				
			}
			
			?>
			<div class="post-image">
				<?php the_content(); ?>
			</div>	
			</p>
		
	</article>
	
	<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
	
	endif;

	// If comments are open or we have at least one comment, load up the comment template.  // COMMENT
	if ( comments_open() || get_comments_number() ) {
				comments_template();
	}
	
get_footer();

?>
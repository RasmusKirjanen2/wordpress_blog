<?php

function learningWordPress_resources() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
	
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');


// Navigation Menus



// Does page have children?
function has_children() {
	
	global $post;
	
	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);
	
}

// Customize excerpt word count length
function custom_excerpt_length() {
	return 20;
}

add_filter('excerpt_length', 'custom_excerpt_length');

 

function learningWordPress_setup() {    // see on 6ige viis

	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu'),
	));
	
	add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'video', 'status', 'audio', 'chat'), 'post-thumbnails');
	add_theme_support('post-thumbnails');
	
//add_theme_support('post-thumbnails','post-formats', array('aside', 'gallery', 'link')); // see annab errori
}

add_action('after_setup_theme', 'learningWordPress_setup');


function ourWidgetsInit() {
	
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));

}
add_action('widgets_init', 'ourWidgetsInit'); // l2heb vaja et widgetit kasutada


/*
	 * Switch default core markup for search form, comment form, and comments  // COMMENTS
	 * to output valid HTML5.
*/
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );


if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {  // COMMENTS
		wp_enqueue_script( 'comment-reply' );
}




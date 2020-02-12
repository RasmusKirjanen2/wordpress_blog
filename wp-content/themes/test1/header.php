<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
	
	
		<!-- site-header -->
		<header class="site-header">
			
			<div class="header-container">
				<nav class="site-nav">

					<h1 class ="head-title">Title</h1>

						<!-- hd-search -->
					<div class="hd-search">
						<?php get_search_form(); ?>
					</div><!-- /hd-search -->

					<?php
					
					$args = array(
						'theme_location' => 'primary'
					);
					
					?>
					
					<?php wp_nav_menu(  $args ); ?> 

				
				</nav>


			</div>
			
		</header><!-- /site-header -->

	
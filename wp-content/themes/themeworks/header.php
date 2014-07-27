<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<!-- <title><?php the_title(); ?> | <?php bloginfo('name'); ?></title> -->
	<title><?php tw_title(); ?></title>
	<?php global $themeworks_config; ?>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $themeworks_config['opt-favicon']['url']; ?>">
	<!-- Touch icon-->
	<link rel="apple-touch-icon" href="<?php echo $themeworks_config['opt-favicon']['url']; ?>">
	<?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<header class="row">
			<div class="col-lg-4">
				<h1 class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $themeworks_config['opt-logo']['url']; ?>" alt="Themeworks Logo"></a></h1>
			</div>
			<div class="col-lg-8">
			<br>
			<?php
				$defaults = array(
					'theme_location'  => 'main_menu',
					'container'       => 'nav',
					'container_id'    => 'main_nav',
					'menu_class'      => 'list-inline',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				);

				wp_nav_menu( $defaults );
			 ?>
			</div>
			<?php if($themeworks_config['opt-searchbar']){ ?>
			<div class="search_wrapper col-lg-12">
				<?php get_search_form(); ?>
			</div>
			<?php } ?>
		
			<?php if($themeworks_config['opt-breadcrumb']){ ?>
			<div class="col-lg-12">
				<?php get_template_part( 'module', 'breadcrumb' ) ?>
			</div>
			<?php } ?>
		</header>
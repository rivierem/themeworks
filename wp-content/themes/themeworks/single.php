<?php
//Call the header
get_header();
?>
	<div class="blog_img_wrapper">
		<?php if(has_post_thumbnail()){
			the_post_thumbnail('large', array('class' => 'single-img-blog'));
		} ?>
	</div>

	<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

		<h2 class="section-title"><?php the_title(); ?></h2>
		<?php the_content(); ?>

	<?php endwhile; endif; ?>
<?php
//Call the footer
get_footer();
?>
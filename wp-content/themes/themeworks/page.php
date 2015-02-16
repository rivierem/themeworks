<?php
//Call the header
get_header();
?>
<div class="row content_wrapper">
	<h1><?php the_title(); ?></h1>
	<?php 
	if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_post_thumbnail('thumbnail', array('class' => 'alignleft')) ?>
		<?php the_content(); ?> 
	<?php endwhile; 
	else : ?>
		<p class="bg-info">À venir...</p>
	<?php endif; ?>
</div>
<?php
//Call the footer
get_footer();
?>
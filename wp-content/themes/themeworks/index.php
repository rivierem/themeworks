<?php
//Call the header
get_header();
?>
<div class="row">
	<h1><?php tw_title(); ?></h1>
	<?php 
	if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg active" role="button">Voir l'article</a>
	</article>	
	<?php endwhile; else :?>
		<p>Aucun article. Revenez plus tard...</p>		
	<?php endif; ?>
</div>
<?php
//Call the footer
get_footer();
?>
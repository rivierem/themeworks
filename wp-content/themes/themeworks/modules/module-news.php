<h3>Nouvelles</h3>
<?php $news_query = new WP_Query( 'posts_per_page=3' ); ?>
<?php if ($news_query->have_posts()) : while ($news_query->have_posts()) : $news_query->the_post();  ?>
<article id="<?php echo $post->post_name; ?>">
	<h2><?php the_title(); ?></h2>
	<?php if(has_post_thumbnail()){
		the_post_thumbnail('thumbnail', array( 'class' => 'alignleft' ));
	} ?>
	<?php the_excerpt(); ?>
	<a class="btn btn-primary" href="<?php the_permalink(); ?>" title="">Lire +</a>
	<div class="clearfix"></div>
</article>
<?php 
	endwhile;
endif; ?>
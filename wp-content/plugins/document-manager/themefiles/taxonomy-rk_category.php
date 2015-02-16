<?php
//Call the header
get_header();
?>
<div class="row content_wrapper">
	<h1><?php tw_title(); ?></h1>
	<ul class="doc_list">
	<?php 
	if (have_posts()) : while (have_posts()) : the_post(); 
	$acf_doc = get_field('document_upload');
	$get_file_info = pathinfo($acf_doc['url']);
	$extension = $get_file_info['extension'];
	?>
		<li class="<?php echo 'rk-'.$extension; ?>">
			<h2><?php the_title(); ?></h2>
			<p><strong>Description :</strong></p> <?php the_excerpt(); ?>
			<p>
			<?php

			$taxonomy = 'rk_category';
			$post_id = $post->ID;
			$categories = wp_get_post_terms( $post_id, $taxonomy);
			$display_category = '';
			$count = count($categories);

			echo 'Catégories : ';
			foreach ($categories as $categorie) {
				$category_id = $categorie->term_id;
				$category_name = $categorie->name;
				$category_link = get_term_link($categorie->slug, 'rk_category');
				$display_category .= '<a href="'.$category_link.'" title="'.$category_name.'">'.$category_name.'</a>';
				if ($count > 1) {
					$display_category.= " | ";
				}
			}
			if($count > 1){
				$display_category = substr($display_category, 0, -3);
			}
			echo $display_category;
			?>
			</p>
			<div class="rk-alignright">
				<div class="rk-icon"><!-- do not touch ! --></div>
				<a class="btn btn-success btn-lg" href="<?php echo $acf_doc['url']; ?>" title="<?php the_title(); ?>">Télécharger</a>
			</div>
		</li>
	<?php endwhile; 
	else : ?>
		<p class="bg-info">À venir...</p>
	<?php endif; ?>
	</ul>
</div>
<?php
//Call the footer
get_footer();
?>
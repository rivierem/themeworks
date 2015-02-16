<?php get_header(); ?>

<section class="cd-faq"2>
	<ul class="cd-faq-categories">
		<?php
		$terms = get_terms("faq_category");
		foreach ( $terms as $term ) {
			echo '<li data-filter="' . $term->slug . '"><a href="#'.$term->slug.'">' . $term->name . '</a></li>';
		} ?>
	</ul> <!-- cd-faq-categories -->

	<div class="cd-faq-items">
	<?php
	foreach ($terms as $term) {
		$current_group = $term->slug;
		$cat_query = null;
		$args = array (
					'post_type' => 'question',
					'tax_query' => array(
						array(
							'taxonomy' => 'faq_category',
							'field'    => 'slug',
							'terms'    => $current_group,
							'orderby'  => 'parent'
						),
					),
					'order' 	=> 'ASC',
					'orderby' 	=> 'parent'
				);
		$cat_query = new WP_Query( $args );
		?>
		<ul id="<?php echo $term->slug; ?>" class="cd-faq-group">
			<li class="cd-faq-title"><h2><?php echo $term->name; ?></h2></li>
			<?php
			if ( $cat_query->have_posts() ) {

				while ( $cat_query->have_posts() ) : $cat_query->the_post(); ?>
				<li>
					<a class="cd-faq-trigger" href="#0"><?php the_title(); ?></a>
					<div class="cd-faq-content">
						<p><?php the_content(); ?></p>
					</div> <!-- cd-faq-content -->
				</li>
				<?php
				endwhile;
			} ?>
		</ul>
		<?php } ?>
	</div> <!-- cd-faq-items -->
	<a href="#0" class="cd-close-panel">Close</a>
</section> <!-- cd-faq -->
<?php get_footer(); ?>
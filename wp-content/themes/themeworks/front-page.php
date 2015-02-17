<?php
//Call the header
//!-- <li><img src="<?php echo wp_get_attachment_url( $value ) //?//>"></li> -->
get_header();
?>
	<div class="row">
	<?php
	if ($themeworks_config['opt-slider_gallery']) {
		$slider = explode(',', $themeworks_config['opt-slider_gallery']);
	}
	?>
	<?php if($themeworks_config['opt-slider']){ ?>
	<div class="slider_wrapper">
		<ul class="bxslider">
			<?php 
			if(!empty($slider)){ 
				foreach ($slider as $slide => $value) {
			?>
					<li><?php echo wp_get_attachment_image( $value, 'image-slider' ); ?></li>
			<?php
				}
			 } 
			 ?>
		</ul>
	</div>
	<?php } ?>
	<!-- Zone de test accueil -->
	<div class="row">
		<h1><?php tw_title(); ?></h1>
		<div class="col-lg-8">
			<?php tw_get_news_module(); ?>
		</div>
		<div class="col-lg-4">
			<h3>Newsletter</h3>
			<?php echo do_shortcode( '[mc4wp_form]' ); ?>
		</div>
	</div>
	<!-- END Zone de test accueil -->
</div>
<?php
//Call the footer
get_footer();
?>
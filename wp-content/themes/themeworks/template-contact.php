<?php
/*
Template Name: Page de contact
*/

//Call the header
get_header();
?>
<div class="row content_wrapper">
	<h1><?php the_title(); ?></h1>
	<div class="col-lg-8">
		<!-- Formulaire ici : Fonction qui appelle la valeur d'un champ contenant le shortcode -->
		<?php tw_get_display_cf7(); ?>
	</div>
	<div class="col-lg-4">
		<h2>Coordonnées</h2>
		<!-- Coordonnées ici : Valeur d'un textarea -->
		<?php tw_get_display_address(); ?>

		<h2>Carte</h2>
		<!-- Code Google Maps ici : il faut convertir une adresse en coordonnées et afficher la map -->
		<?php tw_get_display_gmap(); ?>
	</div>
</div>
<?php
//Call the footer
get_footer();
?>
<?php

function rk_register_cpt() {

	$labels = array(
		'name'                => _x( 'Documents', 'Post Type General Name', 'rk_docmanager' ),
		'singular_name'       => _x( 'Document', 'Post Type Singular Name', 'rk_docmanager' ),
		'menu_name'           => __( 'Mes documents', 'rk_docmanager' ),
		'parent_item_colon'   => __( 'Document parent : ', 'rk_docmanager' ),
		'all_items'           => __( 'Tous les documents', 'rk_docmanager' ),
		'view_item'           => __( 'Voir', 'rk_docmanager' ),
		'add_new_item'        => __( 'Ajouter', 'rk_docmanager' ),
		'add_new'             => __( 'Ajouter un document', 'rk_docmanager' ),
		'edit_item'           => __( 'Modifier', 'rk_docmanager' ),
		'update_item'         => __( 'Mettre à jour', 'rk_docmanager' ),
		'search_items'        => __( 'Rechercher un document', 'rk_docmanager' ),
		'not_found'           => __( 'Non trouvé', 'rk_docmanager' ),
		'not_found_in_trash'  => __( 'Non trouvé dans la corbeille', 'rk_docmanager' ),
	);

	$args = array(
		'label'               => __( 'rk_document', 'rk_docmanager' ),
		'description'         => __( 'Documents de tous types', 'rk_docmanager' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'revisions', ),
		'taxonomies'          => array(),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	register_post_type( 'rk_document', $args );

}

add_action( 'init', 'rk_register_cpt', 0 );

// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'rk_create_document_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function rk_create_document_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Catégories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Catégorie', 'taxonomy singular name' ),
		'search_items'      => __( 'Rechercher une catégories' ),
		'all_items'         => __( 'Toutes les catégories' ),
		'parent_item'       => __( 'Parent catégorie' ),
		'parent_item_colon' => __( 'Parent catégorie :' ),
		'edit_item'         => __( 'Modifier une catégorie' ),
		'update_item'       => __( 'Mettre à jour catégorie' ),
		'add_new_item'      => __( 'Ajouter une nouvelle catégorie' ),
		'new_item_name'     => __( 'Nouveau nom de catégorie' ),
		'menu_name'         => __( 'Catégorie' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'categorie' ),
	);

	register_taxonomy( 'rk_category', array( 'rk_document' ), $args );
}

?>
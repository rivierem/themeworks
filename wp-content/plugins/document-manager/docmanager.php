<?php
/*
Plugin Name: Documents Manager by Risk
Plugin URI: http://mathieuriviere.com
Description: Un gestionnaire de documents pour Wordpress
Version: 0.1
Author: Risk974
Author URI: http://mathieuriviere.com
License: Private
*/

// Convertir en POO (OOP) pour l'exercice ! 

//Path to plugin folder
$plugindir = plugin_dir_path( __FILE__ );

//Include file that recreate my CPT
include_once $plugindir.'/register/register_cpt_documents.php';
// include_once $plugindir.'/classes/templater.class.php';
// add_action( 'plugins_loaded', array( 'PageTemplater', 'get_instance' ) );

//Activation du plugin
function rk_activate_plugin() {
	$my_page = get_page_by_title('Documentation');
	$document_page = array(
		'post_title'     => 'Documentation',
		'post_status'    => 'publish',
		'post_type'      => 'page'
		// 'page_template'	 => 'Page de documents'
	);

	if(empty($my_page)){
		wp_insert_post($document_page);
		$my_page = get_page_by_title('Documentation');
		$page_id = $my_page->ID;
		// update_post_meta( $page_id, '_wp_page_template', 'Page de documents' );
	} else {
		echo 'La page existe déjà !';
	}
}
register_activation_hook( __FILE__, 'rk_activate_plugin' );

//Désactivation du plugin
function rk_deactivate_plugin() {
	$my_page = get_page_by_title('Documentation');
	$page_id = $my_page->ID;
	wp_delete_post( $page_id, true );
}
register_deactivation_hook( __FILE__, 'rk_deactivate_plugin' );

//Template Document
add_action("template_redirect", 'my_theme_redirect');

function my_theme_redirect() {
    global $wp;
    $plugindir = dirname( __FILE__ );
    //A Simple Page
    if (is_page('documentation')) {
       $templatefilename = 'documents.php';
       if (file_exists(TEMPLATEPATH . '/' . $templatefilename)) {
            $return_template = TEMPLATEPATH . '/' . $templatefilename;
        } else {
            $return_template = $plugindir . '/themefiles/' . $templatefilename;
        }
        do_theme_redirect($return_template);
   	//A Custom Taxonomy Page
    } elseif (is_tax('rk_category')){//($wp->query_vars['taxonomy'] == 'rk_category') {
        $templatefilename = 'taxonomy-rk_category.php';
        if (file_exists(TEMPLATEPATH . '/' . $templatefilename)) {
            $return_template = TEMPLATEPATH . '/' . $templatefilename;
        } else {
            $return_template = $plugindir . '/themefiles/' . $templatefilename;
        }
        do_theme_redirect($return_template);
    }

}

function do_theme_redirect($url) {
    global $post, $wp_query;
    if (have_posts()) {
        include($url);
        die();
    } else {
        $wp_query->is_404 = true;
    }
}
// Register CSS
add_action( 'wp_enqueue_scripts', 'rk_register_css' );
function rk_register_css() {
	$plugindir = plugin_dir_path( __FILE__ );
	wp_register_style( 'doc_manager', plugins_url('css/file_icons.css', __FILE__));
	wp_enqueue_style('doc_manager');
}


// add_filter('template_include', 'tax_template_rk_document');

// function tax_template_rk_document( $template ){

//     //Add option for plug-in to turn this off? If so just return $template

//     //Check if the taxonomy is being viewed 
//     //Suggested: check also if the current template is 'suitable'

//     if( is_tax('rk_category') && !rk_doc_is_template($template)){
//         $template = plugin_dir_url(__FILE__ ).'themefiles/taxonomy-rk_category.php';
//       }

//     return $template;
// }

// function rk_doc_is_template( $template_path ){

//     //Get template name
//     $template = basename($template_path);

//     //Check if template is taxonomy-event-venue.php
//     //Check if template is taxonomy-event-venue-{term-slug}.php
//     if( 1 == preg_match('/^taxonomy-rk_category((-(\S*))?).php/',$template) )
//          return true;

//     return false;
// }
?>
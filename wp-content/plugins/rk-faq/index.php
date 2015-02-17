<?php
/*
Plugin Name: FAQ - Frequently Asked Questions
Plugin URI: http://mathieuriviere.com
Description: Créer une Foire aux questions facilement
Version: 1.0
Author: Mathieu Rivière
Author URI: http://mathieuriviere.com
*/


/* This calls register_cpt_question() function when wordpress initializes and creates the custom post type : Question */
add_action( 'init', 'register_cpt_question' );

function register_cpt_question() {

    $labels = array( 
        'name' => _x( 'Questions', 'question' ),
        'singular_name' => _x( 'Question', 'question' ),
        'add_new' => _x( 'Ajouter', 'question' ),
        'add_new_item' => _x( 'Ajouter une nouvelle Question', 'question' ),
        'edit_item' => _x( 'Modifier', 'question' ),
        'new_item' => _x( 'Nouveau', 'question' ),
        'view_item' => _x( 'Voir', 'question' ),
        'search_items' => _x( 'Rechercher', 'question' ),
        'not_found' => _x( 'Aucune question trouvée', 'question' ),
        'not_found_in_trash' => _x( 'Aucune question trouvée dans la corbeille', 'question' ),
        'parent_item_colon' => _x( 'Question Parent :', 'question' ),
        'menu_name' => _x( 'FAQ', 'question' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'You can create Q and A easily !',
        'supports' => array( 'title', 'editor', 'revisions' ),
        'taxonomies' => array( 'faq-category' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-editor-help',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'question', $args );
}

/* This calls register_cpt_question() function when wordpress initializes and creates a custom taxonomy */
add_action( 'init', 'register_taxonomy_faq_category' );

function register_taxonomy_faq_category() {

    $labels = array( 
        'name' => _x( 'Catégories', 'faq-category' ),
        'singular_name' => _x( 'Catégorie', 'faq-category' ),
        'search_items' => _x( 'Rechercher des catégories', 'faq-category' ),
        'popular_items' => _x( 'Catégories populaires', 'faq-category' ),
        'all_items' => _x( 'All Catégories', 'faq-category' ),
        'parent_item' => _x( 'Parent Catégorie', 'faq-category' ),
        'parent_item_colon' => _x( 'Parent Catégorie:', 'faq-category' ),
        'edit_item' => _x( 'Edit Catégorie', 'faq-category' ),
        'update_item' => _x( 'Mettre à jour une catégorie', 'faq-category' ),
        'add_new_item' => _x( 'Ajouter une nouvelle catégorie', 'faq-category' ),
        'new_item_name' => _x( 'Nouvelle catégorie', 'faq-category' ),
        'separate_items_with_commas' => _x( 'Separate catégories with commas', 'faq-category' ),
        'add_or_remove_items' => _x( 'Ajouter ou supprimer une catégories', 'faq-category' ),
        'choose_from_most_used' => _x( 'Choisir la catégorie la plus utilisée', 'faq-category' ),
        'menu_name' => _x( 'Catégories', 'faq-category' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => true,
        'hierarchical' => true,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'faq_category', array('question'), $args );
}

//Class to manage template from plugin
class PageTemplater {

        /**
         * A Unique Identifier
         */
         protected $plugin_slug;

        /**
         * A reference to an instance of this class.
         */
        private static $instance;

        /**
         * The array of templates that this plugin tracks.
         */
        protected $templates;


        /**
         * Returns an instance of this class.
         */
        public static function get_instance() {

                if( null == self::$instance ) {
                        self::$instance = new PageTemplater();
                }

                return self::$instance;

        }

        /**
         * Initializes the plugin by setting filters and administration functions.
         */
        private function __construct() {

                $this->templates = array();


                // Add a filter to the attributes metabox to inject template into the cache.
                add_filter(
                    'page_attributes_dropdown_pages_args',
                     array( $this, 'register_project_templates' )
                );


                // Add a filter to the save post to inject out template into the page cache
                add_filter(
                    'wp_insert_post_data',
                    array( $this, 'register_project_templates' )
                );


                // Add a filter to the template include to determine if the page has our
                // template assigned and return it's path
                add_filter(
                    'template_include',
                    array( $this, 'view_project_template')
                );


                // Add your templates to this array.
                $this->templates = array(
                        'faq-template.php'     => 'FAQ'
                );

        }


        /**
         * Adds our template to the pages cache in order to trick WordPress
         * into thinking the template file exists where it doens't really exist.
         *
         */

        public function register_project_templates( $atts ) {

                // Create the key used for the themes cache
                $cache_key = 'page_templates-' . md5( get_theme_root() . '/' . get_stylesheet() );

                // Retrieve the cache list.
                // If it doesn't exist, or it's empty prepare an array
                $templates = wp_get_theme()->get_page_templates();
                if ( empty( $templates ) ) {
                        $templates = array();
                }

                // New cache, therefore remove the old one
                wp_cache_delete( $cache_key , 'themes');

                // Now add our template to the list of templates by merging our templates
                // with the existing templates array from the cache.
                $templates = array_merge( $templates, $this->templates );

                // Add the modified cache to allow WordPress to pick it up for listing
                // available templates
                wp_cache_add( $cache_key, $templates, 'themes', 1800 );

                return $atts;

        }

        /**
         * Checks if the template is assigned to the page
         */
        public function view_project_template( $template ) {

                global $post;

                if (!isset($this->templates[get_post_meta(
                    $post->ID, '_wp_page_template', true
                )] ) ) {

                        return $template;

                }

                $file = plugin_dir_path(__FILE__). get_post_meta(
                    $post->ID, '_wp_page_template', true
                );

                // Just to be safe, we check if the file exist first
                if( file_exists( $file ) ) {
                        return $file;
                }
                else { echo $file; }

                return $template;

        }


}

add_action( 'plugins_loaded', array( 'PageTemplater', 'get_instance' ) );


// Register style sheet.
add_action( 'wp_enqueue_scripts', 'register_faq_styles' );

/**
 * Register style sheet.
 */
function register_faq_styles() {
	wp_register_style( 'faq-reset', plugins_url( 'rk-faq/css/reset.css' ) );
	wp_register_style( 'faq-style', plugins_url( 'rk-faq/css/style.css' ) );
	wp_enqueue_style( array('faq-reset','faq-style'));
}



    /**
	 * Enqueue scripts
	 *
	 * @param string $handle Script name
	 * @param string $src Script url
	 * @param array $deps (optional) Array of script names on which this script depends
	 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
	 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
	 */
	function register_faq_scripts() {
		wp_register_script( 
			'jquery-mobile-custom', 
			plugins_url( 'rk-faq/js/jquery.mobile.custom.min.js'),
			 array( 'jquery' ),
			 false,
			 true
		);

		wp_register_script( 
			'main',
			plugins_url( 'rk-faq/js/main.js'),
			array( 'jquery' ),
			false,
			true
		);

		wp_register_script( 
			'modernizr',
			plugins_url( 'rk-faq/js/modernizr.js'),
			false,
			false
		);

		wp_enqueue_script( 
            array( 
                'jquery', 
                //'jquery-mobile-custom',
                'main',
                'modernizr'
            )
        );
	}

	add_action('wp_enqueue_scripts', 'register_faq_scripts' );




























?>
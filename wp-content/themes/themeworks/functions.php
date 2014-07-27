<?php
// Initialise les options du thème
    include( dirname( __FILE__ ) . '/admin/admin-init.php' );

// Ajout des fichiers CSS
    add_action( 'wp_enqueue_scripts', 'tw_register_css' );
    function tw_register_css() {
        if(!is_admin()){
           
            wp_register_style( 'bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.css' );                  //Boostrap
            wp_register_style( 'elusive-webfont', get_stylesheet_directory_uri().'/css/elusive-webfont.css', 'bootstrap' );
            wp_register_style( 'elusive-webfont-ie7', get_stylesheet_directory_uri().'/css/elusive-webfont-ie7.css', 'bootstrap' );
            wp_register_style( 'themeworks', get_stylesheet_directory_uri().'/css/themeworks.css', 'bootstrap' );   //Style de base
            wp_register_style( 'output', get_stylesheet_directory_uri().'/admin/output.css', 'themeworks' );        //Output css theme
            if (is_front_page()) {

            }
            if (is_page('page-id')) {

            }
            wp_enqueue_style( 
                array('bootstrap', 'elusive-webfont', 'elusive-webfont-ie7', 'themeworks', 'output')
            );
        }
    }

// Ajout des fichiers JS
    add_action( 'wp_enqueue_scripts', 'tw_register_scripts' );
    function tw_register_scripts() {
        if(!is_admin()){
           
            wp_register_script( 'autocompletion', get_stylesheet_directory_uri().'/js/autocompletion.js' );                  //Autocompletion
            if (is_front_page()) {

            }
            if (is_page('page-id')) {

            }
            wp_enqueue_script( 
                array('autocompletion')
            );
        }
    }

// Register les emplacements menu
    register_nav_menus( array(
        'top_menu' => 'Top menu',
        'main_menu' => 'Main menu',
        'footer_menu' => 'Footer menu',
    ));

// Ajout d'un text domain pour la traduction
    add_action('after_setup_theme', 'tw_load_theme_langages');
    function tw_load_theme_langages(){
        load_theme_textdomain('redux-framework-demo', get_stylesheet_directory() . '/lang/');
    }

// Add theme supports
    add_theme_support('post-formats');
    add_theme_support('post-thumbnails');
    //add_theme_support('custom-background');
    //add_theme_support('custom-header');
    add_theme_support('automatic-feed-links');
    add_theme_support('menus');

// Autorise l'éxécutoin de shortcodes dans les widgets
    if ( !is_admin() ) {
        add_filter('widget_text', 'do_shortcode', 11);
    }

// Prevent duplicate Content +1 for SEO
    add_action('wp', 'baw_non_duplicate_content' );
    function baw_non_duplicate_content( $wp ){
    	global $wp_query;
            // Si le nom de catégorie trouvée est différente entre le rewrite match et la variable requetée, alors on redirige
    	if( isset( $wp_query->query_vars['category_name'], $wp_query->query['category_name'] )
    		&& $wp_query->query_vars['category_name'] != $wp_query->query['category_name'] ):
                    // L'URL correcte dans laquelle on remplace la catégorie requetée par son véritable nom
    		$correct_url = str_replace( $wp_query->query['category_name'], $wp_query->query_vars['category_name'], $wp->request );
                    // Redirection 301
    		wp_redirect( home_url( $correct_url ), 301 );
            // Toujours die() après une redirection
    		die();
    	endif;
    }

// Remplace le texte d'image  à la une
    add_filter('gettext', 'custom_gettext_equipe', 10, 2);
    function custom_gettext_equipe( $translated, $text ) {
         global $typenow;
        //Pour un custom post type spécifique décommenter la condition
        // if( $typenow == 'equipe' || get_post_type($_REQUEST['post_id']) == 'equipe' ) {
         	$translated = str_ireplace("Utiliser comme image à la une",  "Utiliser comme une photo",  $translated );
         	$translated = str_ireplace("Mettre une image à la une",  "Ajouter une photo",  $translated );
         	$translated = str_ireplace("Supprimer l’image à la une",  "Supprimer la photo",  $translated );
         	$translated = str_ireplace("Image à la Une",  "Photo",  $translated );
        // }
         return $translated;
    }

// Désactive les dashboard widgets
    function remove_dashboard_widgets() {
        global $wp_meta_boxes;

        // Tableau de bord général
        //unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); // Presse-Minute
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // Commentaires récents
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']); // Extensions
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); // Liens entrant
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']); // Billets en brouillon
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); // Blogs WordPress
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); // Autres actualités WordPress
    }
    add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

//Custom fields dans les profils WP
    function custom_contact_info($contactmethods) {
        unset($contactmethods['aim']); // Suppression du champ "Aim"
        unset($contactmethods['yim']); // Suppression du champ "Yahoo IM"
        unset($contactmethods['jabber']); // Suppression du champ "Jabber / Google Talk"

        $contactmethods['facebook'] = 'Facebook'; // Ajout d'un champ "Facebook"
        $contactmethods['twitter'] = 'Twitter'; // Ajout d'un champ "Twitter"

        return $contactmethods;
    }
    add_filter('user_contactmethods', 'custom_contact_info');

//Ajouter un colorTheme à WP
    //add_action('admin_init', 'admin_color_scheme');
    function admin_color_scheme() {
        wp_admin_css_color(
            'green', // Nom unique du Thème
            __('Green'), // Nom du Thème dans l'administration (prise en charge de la traduction grâce à __())
            get_template_directory_uri() . '/css/colors-green.css', // Le chemin vers le fichier CSS du Thème
            array('#6cfdc6 ', '#93fed5', '#b9fee4', '#e0fff3') // Les couleurs que l'on souhaite afficher dans la pré-visualisation du thème
        );
    }

//Supprime la version de WP dans le footer
    add_filter( 'update_footer', create_function('', 'return;'), 999);

//Change la longueur de l'extrait
    function custom_excerpt_length($length) {
    	return 25;
    }
    add_filter('excerpt_length', 'custom_excerpt_length');

//Remove meta tag generator in Header
    remove_action('wp_head', 'wp_generator');

// Gestion des titres
function tw_title(){
    if(is_front_page()){
        echo 'Accueil - ';
    } elseif(function_exists('is_tag') && is_tag()) {
        echo 'Archive de tag : &quot;'.$tag.'&quot; - ';
    } elseif (is_archive()) {
        wp_title(''); echo ' Archive - ';
    } elseif (is_search()) {
        echo 'Recherche pour : &quot;'.esc_html($_GET['s']).'&quot; - ';
    } elseif (!(is_404()) && (is_single()) || (is_page())) {
        wp_title(''); echo ' - ';
    } elseif (is_404()) {
        echo 'Page non trouvée - ';
    } elseif(is_home()){
        echo 'Blog - ';
    }
    bloginfo('name');
}
?>
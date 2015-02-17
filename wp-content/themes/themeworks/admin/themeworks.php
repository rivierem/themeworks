<?php
    // GENERAL OPTIONS
    $this->sections[] = array(
        'title'   => 'Options générales',
        'icon'    => 'el-icon-adjust-alt',
        'heading' => 'Options générales',
        'desc'    => '<br />Réglages basiques du thème<br />',
        'fields'  => array(
            array(
                'id'    => 'opt-favicon',
                'type'    => 'media',
                'title'     => __('Upload du Favicon', 'redux-framework-demo'),
                'compiler'  => false,
                'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'      => __('32 x 32 pixels - Format PNG ou GIF', 'redux-framework-demo'),
                'subtitle'  => __('Upload de votre favicon', 'redux-framework-demo')
            ),
             array(
                'id'    => 'opt-backtotop',
                'type'    => 'switch',
                'title'     => __('Activer le bouton "Haut de page"', 'redux-framework-demo'),
                'compiler'  => false,
                'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'subtitle'  => __('Affiche un bouton de retour vers le haut de la page dans le bas du navigateur.', 'redux-framework-demo'),
                'on' => 'On',
                'off' => 'Off'
            ),
             array(
                'id'    => 'opt-analytics',
                'type'    => 'text',
                'title'     => __('Google Analytics', 'redux-framework-demo'),
                'compiler'  => false,
                'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'      => __('Code UA-xxxxxx', 'redux-framework-demo'),
                'subtitle'  => __('Entrez votre de suivi Google Analytics', 'redux-framework-demo')
            ),
             array(
                'id'    => 'opt-universal_analytics',
                'type'    => 'switch',
                'title'     => __('Suivi avec Universal Analytics', 'redux-framework-demo'),
                'compiler'  => false,
                'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'subtitle'  => __('Activer les fonctionnalités de la <a href="https://support.google.com/analytics/answer/3450482">Publicité Display</a>', 'redux-framework-demo'),
                'on' => 'On',
                'off' => 'Off'
            )
        )
    );

    // DIVIDE
    $this->sections[] = array(
        'type' => 'divide',
    );

    // HEADER
    $this->sections[] = array(
        'title'     => __('Options de l\'entête', 'redux-framework-demo'),
        'desc'      => __('Texte à venir', 'redux-framework-demo'),
        'icon'      => 'el-icon-website',
        // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
        'fields'    => array(
            array(
                'id'        => 'opt-logo',
                'type'      => 'media',
                'title'     => __('Logo', 'redux-framework-demo'),
                'compiler'  => false,
                'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'      => __('Texte à venir', 'redux-framework-demo'),
                'subtitle'  => __('Upload de votre logo', 'redux-framework-demo'),
                'hint'      => array(
                    'title'     => 'Aide',
                    'content'   => 'Texte à venir'
                )
            ),
            array(
                'id'    => 'opt-breadcrumb',
                'type'    => 'switch',
                'title'     => __('Activer le fil d\'Ariane', 'redux-framework-demo'),
                'compiler'  => false,
                'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'subtitle'  => 'Le fil d\'Ariane est utile afin de vous repérer sur le site et retrouver votre chemin.',
                'on' => 'On',
                'off' => 'Off'
            ),
            array(
                'id'    => 'opt-searchbar',
                'type'    => 'switch',
                'title'     => __('Activer la barre de recherche', 'redux-framework-demo'),
                'compiler'  => false,
                'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'on' => 'On',
                'off' => 'Off'
            )
        )
    );
    // FOOTER
    $this->sections[] = array(
        'title'     => __('Options de Pied de page', 'redux-framework-demo'),
        'desc'      => __('Personnalisez le pied de page comme bon vous semble.', 'redux-framework-demo'),
        'icon'      => 'el-icon-website',
        // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
        'fields'    => array(

            array(
                'id'        => 'opt-copyright',
                'type'      => 'textarea',
                'title'     => __('Texte Droits d\'auteur', 'redux-framework-demo'),
                'compiler'  => false,
                'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'placeholder' => '<a href="#">Ma compagnie &copy; 2014 - Tous droits réservés</a>'
            ), 
            array(
                'id'       => 'opt-footer_layout',
                'type'     => 'image_select',
                'title'    => __('Segmentation du pied de page', 'redux-framework-demo'), 
                'subtitle' => '',
                'options'  => array(
                    '1'      => array(
                        'alt'   => '1 Column', 
                        'img'   => ReduxFramework::$_url.'assets/img/1col.png'
                    ),
                    '2'      => array(
                        'alt'   => '2 Column Left', 
                        'img'   => ReduxFramework::$_url.'assets/img/2cl.png'
                    ),
                    '3'      => array(
                        'alt'   => '2 Column Right', 
                        'img'  => ReduxFramework::$_url.'assets/img/2cr.png'
                    ),
                    '4'      => array(
                        'alt'   => '3 Column Middle', 
                        'img'   => ReduxFramework::$_url.'assets/img/3cm.png'
                    )
                ),
                'default' => '2'
            ),
            array(
                'id'    => 'opt-footer_social_menu',
                'type'    => 'switch',
                'title'     => __('Activer le menu social dans le pied de page', 'redux-framework-demo'),
                'compiler'  => false,
                'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'subtitle'  => '',
                'on' => 'On',
                'off' => 'Off'
            )
        )
    );

    // DIVIDE
    $this->sections[] = array(
        'type' => 'divide',
    );

    // TYPOGRAPHIE
    $this->sections[] = array(
        'title'   => 'Typographie',
        'icon'    => 'el-icon-font',
        'heading' => 'Typographie',
        'desc'    => 'Description à venir',
        'fields'  => array(
            array(
                'id'          => 'opt-typography',
                'type'        => 'typography',
                'title'       => 'Police d\'écriture générale',
                'google'      => true,
                'font-backup' => true,
                'units'       =>'px',
                'subtitle'    => 'Texte à venir',
                'text-align'    => false,
                'subsets'    => false,
                'compiler'    => array('p'),
                'output'    => 'body',
                'default'     => array(
                    'color'       => '#333',
                    'font-style'  => '700',
                    'font-family' => 'Open Sans',
                    'google'      => true,
                    'font-size'   => '33px',
                    'line-height' => '40'
                )
            ),
            array(
                'id'       => 'opt-link-color',
                'type'     => 'link_color',
                'title'    => 'Couleurs des liens',
                'subtitle' => 'Choix d\'une couleur pour les liens',
                'desc'     => 'Choisissez les bonnes',
                'compiler' => true,
                'output'   => 'a',
                'default'  => array(
                    'regular'  => '#1e73be', // blue
                    'hover'    => '#dd3333', // red
                    'active'   => '#8224e3',  // purple
                    'visited'  => '#8224e3'  // purple
                )
            ),
            array(
                'id'          => 'opt-title',
                'type'        => 'typography',
                'title'       => 'Style des titres',
                'google'      => true,
                'font-backup' => true,
                'units'       =>'px',
                'subtitle'    => 'Texte à venir',
                'text-align'    => false,
                'font-size'    => false,
                'font-weight'    => false,
                'font-style'    => false,
                'subsets'    => false,
                'compiler'    => array('h1, h2, h3, h4, h5, h6'),
                // 'output'    => 'body',
                'default'     => array(
                    'color'       => '#333',
                    'font-style'  => '700',
                    'font-family' => 'Open Sans',
                    'google'      => true,
                    // 'font-size'   => '33px',
                    'line-height' => '40'
                )
            ),
            array(
                'id'          => 'opt-h1',
                'type'        => 'typography',
                'title'       => 'H1',
                'google'      => false,
                'font-backup' => false,
                'units'       =>'px',
                'subtitle'    => 'Texte à venir',
                'text-align'    => false,
                'font-size'    => true,
                'font-weight'    => false,
                'font-family'    => false,
                'color'    => false,
                'font-style'    => false,
                'subsets'    => false,
                'compiler'    => array('h1'),
                // 'output'    => 'body',
                'default'     => array(
                    //Default settings
                )
            ),
            array(
                'id'          => 'opt-h2',
                'type'        => 'typography',
                'title'       => 'H2',
                'google'      => false,
                'font-backup' => false,
                'units'       =>'px',
                'subtitle'    => 'Texte à venir',
                'text-align'    => false,
                'font-size'    => true,
                'font-weight'    => false,
                'font-family'    => false,
                'color'    => false,
                'font-style'    => false,
                'subsets'    => false,
                'compiler'    => array('h2'),
                // 'output'    => 'body',
                'default'     => array(
                    //Default settings
                )
            ),
            array(
                'id'          => 'opt-h3',
                'type'        => 'typography',
                'title'       => 'H3',
                'google'      => false,
                'font-backup' => false,
                'units'       =>'px',
                'subtitle'    => 'Texte à venir',
                'text-align'    => false,
                'font-size'    => true,
                'font-weight'    => false,
                'font-family'    => false,
                'color'    => false,
                'font-style'    => false,
                'subsets'    => false,
                'compiler'    => array('h3'),
                // 'output'    => 'body',
                'default'     => array(
                    //Default settings
                )
            ),
            array(
                'id'          => 'opt-h4',
                'type'        => 'typography',
                'title'       => 'H4',
                'google'      => false,
                'font-backup' => false,
                'units'       =>'px',
                'subtitle'    => 'Texte à venir',
                'text-align'    => false,
                'font-size'    => true,
                'font-weight'    => false,
                'font-family'    => false,
                'color'    => false,
                'font-style'    => false,
                'subsets'    => false,
                'compiler'    => array('h4'),
                // 'output'    => 'body',
                'default'     => array(
                    //Default settings
                )
            ),
            array(
                'id'          => 'opt-h5',
                'type'        => 'typography',
                'title'       => 'H5',
                'google'      => false,
                'font-backup' => false,
                'units'       =>'px',
                'subtitle'    => 'Texte à venir',
                'text-align'    => false,
                'font-size'    => true,
                'font-weight'    => false,
                'font-family'    => false,
                'color'    => false,
                'font-style'    => false,
                'subsets'    => false,
                'compiler'    => array('h5'),
                // 'output'    => 'body',
                'default'     => array(
                    //Default settings
                )
            ),
            array(
                'id'          => 'opt-h6',
                'type'        => 'typography',
                'title'       => 'H6',
                'google'      => false,
                'font-backup' => false,
                'units'       =>'px',
                'subtitle'    => 'Texte à venir',
                'text-align'    => false,
                'font-size'    => true,
                'font-weight'    => false,
                'font-family'    => false,
                'color'    => false,
                'font-style'    => false,
                'subsets'    => false,
                'compiler'    => array('h6'),
                // 'output'    => 'body',
                'default'     => array(
                    //Default settings
                )
            )
        )
    );

     // SOCIAL MEDIAS
    $this->sections[] = array(
        'title' => 'Réseaux sociaux',
        'icon'    => 'el-icon-facebook',
        'heading' => 'Réseaux sociaux',
        'desc'    => 'Entrez vos ID et profils à afficher sur le site',
        'fields'  => array(
            array(
                'id'       => 'opt-facebook',
                'type'     => 'text',
                'title'    => '<i class="el-icon-facebook"></i> Facebook',
                'validate' => 'url',
                'msg'      => 'Erreur votre lien doit commencer par http://',
                'placehold'  => 'URL de la page Facebook'
            ),
            array(
                'id'       => 'opt-twitter',
                'type'     => 'text',
                'title'    => '<i class="el-icon-twitter"></i> Twitter',
                'validate' => 'url',
                'msg'      => 'Erreur votre lien doit commencer par http://',
                'placehold'  => 'URL de la page Twitter'
            ),
            array(
                'id'       => 'opt-googleplus',
                'type'     => 'text',
                'title'    => '<i class="el-icon-googleplus"></i> Google +',
                'validate' => 'url',
                'msg'      => 'Erreur votre lien doit commencer par http://',
                'placehold'  => 'URL de la page Google +'
            ),
            array(
                'id'       => 'opt-youtube',
                'type'     => 'text',
                'title'    => '<i class="el-icon-youtube"></i> Youtube',
                'validate' => 'url',
                'msg'      => 'Erreur votre lien doit commencer par http://',
                'placehold'  => 'URL de la chaîne Youtube'
            ),
            array(
                'id'       => 'opt-linkedin',
                'type'     => 'text',
                'title'    => '<i class="el-icon-linkedin"></i> LinkedIn',
                'validate' => 'url',
                'msg'      => 'Erreur votre lien doit commencer par http://',
                'placehold'  => 'URL de la page LinkedIn'
            ),
            array(
                'id'      => 'opt-social_medias',
                'type'    => 'sorter',
                'title'   => 'Gestionnaire de réseaux sociaux',
                'desc'    => 'Organisez vos réseaux sociaux comme vous le voulez !',
                'options' => array(
                    'enabled'  => array(

                    ),
                    'disabled' => array(
                        'facebook' => 'Facebook',
                        'twitter'     => 'Twitter',
                        'googleplus' => 'Google +',
                        'linkedin'   => 'LinkedIn',
                        'youtube'   => 'Youtube'
                    )
                )
            )
        )
    );
    
 // DIVIDE
    $this->sections[] = array(
        'type' => 'divide',
    );

// ACCUEIL
$this->sections[] = array(
    'title'     => 'Page d\'Accueil',
    'desc'      => '',
    'icon'      => 'el-icon-home',
    'submenu' => true, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
    'fields'    => array(
         array(
            'id'    => 'opt-slider',
            'type'    => 'switch',
            'title'     => __('Activer le slider sur l\'accueil', 'redux-framework-demo'),
            'compiler'  => false,
            'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
            'on' => 'On',
            'off' => 'Off'
        ),
        array(
            'id'       => 'opt-slider_gallery',
            'type'     => 'gallery',
            'title'    => 'Ajouter/Modifier les images du slider',
            'subtitle' => 'Créer une nouvelle galerie en sélectionnant un image de la librairie ou une nouvelle en utilisant l\'upload natif de Wordpress',
            'desc'     => 'Infos additionnelles',
        )
    )
);

// CONTACT
$this->sections[] = array(
    'title'     => 'Page Contact',
    'desc'      => '',
    'icon'      => 'el-icon-address-book',
    'submenu' => true, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
    'fields'    => array(
        array(
            'id'        => 'opt-name',
            'type'      => 'text',
            'title'     => 'Nom',
            'subtitle'  => 'Votre nom complet ou nom d\'entreprise à afficher sur la page de contact',
            'compiler'  => false,
            'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
        ),
        array(
            'id'        => 'opt-email',
            'type'      => 'text',
            'title'     => 'E-mail',
            'subtitle'  => 'Votre adresse E-mail à afficher sur la page de contact',
            'compiler'  => false,
            'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
            'validate'  => 'email'
        ),
        array(
            'id'        => 'opt-phone',
            'type'      => 'text',
            'title'     => 'Téléphone',
            'subtitle'  => 'Votre numéro de téléphone à afficher sur la page de contact',
            'compiler'  => false,
            'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
            'validate'  => 'phone'
        ),
        array(
            'id'        => 'opt-address_map',
            'type'      => 'textarea',
            'title'     => 'Adresse',
            'subtitle'  => 'Votre adresse à afficher sur la page de contact ',
            'compiler'  => false,
            'mode'      => false // Can be set to false to allow any media type, or can also be set to any mime type.

        ),
        array(
                'id'    => 'opt-map_marker',
                'type'    => 'media',
                'title'     => __('Upload du marqueur personnalisé', 'redux-framework-demo'),
                'compiler'  => false,
                'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'      => __('32 x 32 pixels - Format PNG', 'redux-framework-demo'),
                'subtitle'  => __('Upload de votre marqueur personnalisé', 'redux-framework-demo')
        ),
        array(
            'id'        => 'opt-marker_title',
            'type'      => 'text',
            'title'     => 'Titre - infobulle de la carte interactive',
            'subtitle'  => 'Le titre qui apparaîtra dans la bulle lors du clique sur le marqueur',
            'compiler'  => false,
            'mode'      => false // Can be set to false to allow any media type, or can also be set to any mime type.

        ),
        array(
            'id'        => 'opt-marker_desc',
            'type'      => 'textarea',
            'title'     => 'Texte - infobulle de la carte interactive',
            'subtitle'  => 'Le texte qui apparaîtra dans la bulle lors du clique sur le marqueur',
            'compiler'  => false,
            'mode'      => false // Can be set to false to allow any media type, or can also be set to any mime type.

        ),
        array(
            'id'        => 'opt-zoom_map',
            'type'      => 'text',
            'title'     => 'Zoom sur la carte',
            'subtitle'  => 'Changez le niveau de zoom sur la carte',
            'compiler'  => false,
            'mode'      => false // Can be set to false to allow any media type, or can also be set to any mime type.

        ),
        array(
            'id'        => 'opt-map_width',
            'type'      => 'text',
            'title'     => 'Largeur de la carte',
            'subtitle'  => 'Entrez une valeur en pourcentage (%) ou en pixels (px)',
            'compiler'  => false,
            'mode'      => false // Can be set to false to allow any media type, or can also be set to any mime type.

        ),
        array(
            'id'        => 'opt-map_height',
            'type'      => 'text',
            'title'     => 'Hauteur de la carte',
            'subtitle'  => 'Entrez une valeur en pourcentage (%) ou en pixels (px)',
            'compiler'  => false,
            'mode'      => false // Can be set to false to allow any media type, or can also be set to any mime type.

        ),
        array(
            'id'        => 'opt-contact_form',
            'type'      => 'text',
            'title'     => 'Shortcode fourni par Contact Form 7',
            'compiler'  => false,
            'mode'      => false // Can be set to false to allow any media type, or can also be set to any mime type.
        )
    )
);

?>
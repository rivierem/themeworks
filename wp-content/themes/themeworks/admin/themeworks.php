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

// CONTACT
$this->sections[] = array(
    'title'     => 'Page Contact',
    'desc'      => '',
    'icon'      => 'el-icon-address-book',
    'submenu' => true, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
    'fields'    => array(
        array(
            'id'        => 'opt-email',
            'type'      => 'text',
            'title'     => 'E-mail',
            'compiler'  => false,
            'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
            'validate'  => 'email'
        ),
        array(
            'id'        => 'opt-latitude',
            'type'      => 'text',
            'title'     => 'Adresse Google Maps',
            'compiler'  => false,
            'mode'      => false // Can be set to false to allow any media type, or can also be set to any mime type.
        ),
        array(
            'id'        => 'opt-longitude',
            'type'      => 'text',
            'title'     => 'Zoom - Google Maps',
            'compiler'  => false,
            'mode'      => false // Can be set to false to allow any media type, or can also be set to any mime type.
        )
    )
);

?>
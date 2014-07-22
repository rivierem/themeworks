<?php

    $this->sections[] = array(
        'title'   => 'Options générales',
        'icon'    => 'el-icon-cogs',
        'heading' => 'Favicon',
        'desc'    => '<br />Téléversez votre favicon au format PNG ou GIF<br />',
        'fields'  => array(
            array(
                'id'    => 'opt-favicon',
                'type'    => 'media',
                'title'     => __('Upload du Favicon', 'redux-framework-demo'),
                'compiler'  => 'true',
                'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'      => __('32 x 32 pixels - Format PNG ou GIF', 'redux-framework-demo'),
                'subtitle'  => __('Upload de votre favicon', 'redux-framework-demo')
            )
        )
    );
    $this->sections[] = array(
        'type' => 'divide',
    );
    $this->sections[] = array(
        'title'     => __('Options de l\'entête', 'redux-framework-demo'),
        'desc'      => __('Texte à venir', 'redux-framework-demo'),
        'icon'      => 'el-icon-home',
        // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
        'fields'    => array(

            array(
                'id'        => 'opt-logo',
                'type'      => 'media',
                'title'     => __('Logo', 'redux-framework-demo'),
                'compiler'  => 'true',
                'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'      => __('Texte à venir', 'redux-framework-demo'),
                'subtitle'  => __('Upload de votre logo', 'redux-framework-demo'),
                'hint'      => array(
                    'title'     => 'Aide',
                    'content'   => 'Texte à venir',
                )
            )
        )
    );

    //DIVIDE
    // $this->sections[] = array(
    //     'type' => 'divide',
    // );

     $this->sections[] = array(
        'title'   => 'New Section',
        'icon'    => 'el-icon-cogs',
        'heading' => 'Expanded New Section Title',
        'desc'    => '<br />This is the section description.  HTML is permitted.<br />',
        'fields'  => array()
    );

?>
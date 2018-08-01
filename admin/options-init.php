<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "redux";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'redux',
        'use_cdn' => TRUE,
        'display_name' => 'Panel opcji',
        'page_title' => 'Panel opcji',
        'update_notice' => TRUE,
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'Panel opcji',
        'allow_sub_menu' => TRUE,
        'page_parent_post_type' => 'your_post_type',
        'customizer' => TRUE,
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */


    Redux::setSection( $opt_name, array(
        'title' => __( 'General', 'redux-framework-demo' ),
        'id'    => 'General',
        'desc'  => __( 'Basic fields as subsections.', 'redux-framework-demo' ),
        'icon'  => 'el el-home'
    ) );

        Redux::setSection( $opt_name, array(
        'title'      => __( 'Colors', 'redux-framework-demo' ),
        'id'         => 'color-Color',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-color-title',
                'type'     => 'color',
                'output'   => array( '.site-title' ),
                'title'    => __( 'Site Title Color', 'redux-framework-demo' ),
                'subtitle' => __( 'Pick a title color for the theme (default: #000).', 'redux-framework-demo' ),
                'default'  => '#000000',
            ),
        ),
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Typography', 'redux-framework-demo' ),
        'id'     => 'typography',
        'subsection' => true,
        'icon'   => 'el el-font',
        'fields' => array(
            array(
                'id'       => 'opt-typography-body',
                'type'     => 'typography',
                'title'    => __( 'Body Font', 'redux-framework-demo' ),
                'subtitle' => __( 'Specify the body font properties.', 'redux-framework-demo' ),
                'google'   => true,
                'default'  => array(
                    'color'       => '#dd9933',
                    'font-size'   => '30px',
                    'font-family' => 'Arial,Helvetica,sans-serif',
                    'font-weight' => 'Normal',
                ),
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'ACE Editor', 'redux-framework-demo' ),
        'id'         => 'editor-ace',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'editor-ace2',
                'type'     => 'ace_editor',
                'title'    => __( 'CSS Code', 'redux-framework-demo' ),
                'subtitle' => __( 'Paste your own CSS code here.', 'redux-framework-demo' ),
                'mode'     => 'css',
                'theme'    => 'monokai',
                'default'  => ' '
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Media', 'redux-framework-demo' ),
        'id'         => 'media-media',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'media-no-url',
                'type'     => 'media',
                'title'    => __( 'Media w/o URL', 'redux-framework-demo' ),
                'desc'     => __( 'This represents the minimalistic view. It does not have the preview box or the display URL in an input box. ', 'redux-framework-demo' ),
                'subtitle' => __( 'Upload any media using the WordPress native uploader', 'redux-framework-demo' ),
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Head & Footer code', 'redux-framework-demo' ),
        'id'         => 'basic-Textarea',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-textarea',
                'type'     => 'textarea',
                'title'    => __( 'Textarea Option - HTML Validated Custom', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                'default'  => 'Default Text',
            ),
            array(
                'id'       => 'opt-textarea2',
                'type'     => 'textarea',
                'title'    => __( 'Textarea Option - HTML Validated Custom', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                'default'  => 'Default Text',
            ),
        )
    ) );

    /* Slider *** */

    Redux::setSection( $opt_name, array(
        'title' => __( 'Slider', 'redux-framework-demo' ),
        'id'    => 'Slider',
        'desc'  => __( 'Basic fields as subsections.', 'redux-framework-demo' ),
        'icon'  => 'el el-home'
    ) );

        Redux::setSection( $opt_name, array(
        'title'      => __( 'Slider', 'redux-framework-demo' ),
        'id'         => 'Slider2',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-color-title',
                'type'     => 'color',
                'output'   => array( '.site-title' ),
                'title'    => __( 'Site Title Color', 'redux-framework-demo' ),
                'subtitle' => __( 'Pick a title color for the theme (default: #000).', 'redux-framework-demo' ),
                'default'  => '#000000',
            ),
        ),
    ) );

    /* About *** */

    Redux::setSection( $opt_name, array(
        'title' => __( 'About', 'redux-framework-demo' ),
        'id'    => 'About',
        'desc'  => __( 'Basic fields as subsections.', 'redux-framework-demo' ),
        'icon'  => 'el el-home'
    ) );

        Redux::setSection( $opt_name, array(
        'title'      => __( 'About', 'redux-framework-demo' ),
        'id'         => 'About2',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-color-title',
                'type'     => 'color',
                'output'   => array( '.site-title' ),
                'title'    => __( 'Site Title Color', 'redux-framework-demo' ),
                'subtitle' => __( 'Pick a title color for the theme (default: #000).', 'redux-framework-demo' ),
                'default'  => '#000000',
            ),
        ),
    ) );

    /* Features *** */

    Redux::setSection( $opt_name, array(
        'title' => __( 'Features', 'redux-framework-demo' ),
        'id'    => 'Features',
        'desc'  => __( 'Basic fields as subsections.', 'redux-framework-demo' ),
        'icon'  => 'el el-home'
    ) );

        Redux::setSection( $opt_name, array(
        'title'      => __( 'Features', 'redux-framework-demo' ),
        'id'         => 'Features2',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-color-title',
                'type'     => 'color',
                'output'   => array( '.site-title' ),
                'title'    => __( 'Site Title Color', 'redux-framework-demo' ),
                'subtitle' => __( 'Pick a title color for the theme (default: #000).', 'redux-framework-demo' ),
                'default'  => '#000000',
            ),
        ),
    ) );

    /* Offer *** */

    Redux::setSection( $opt_name, array(
        'title' => __( 'Offer', 'redux-framework-demo' ),
        'id'    => 'Offer',
        'desc'  => __( 'Basic fields as subsections.', 'redux-framework-demo' ),
        'icon'  => 'el el-home'
    ) );

        Redux::setSection( $opt_name, array(
        'title'      => __( 'Offer', 'redux-framework-demo' ),
        'id'         => 'Offer2',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-color-title',
                'type'     => 'color',
                'output'   => array( '.site-title' ),
                'title'    => __( 'Site Title Color', 'redux-framework-demo' ),
                'subtitle' => __( 'Pick a title color for the theme (default: #000).', 'redux-framework-demo' ),
                'default'  => '#000000',
            ),
        ),
    ) );

    /* Projects *** */

    Redux::setSection( $opt_name, array(
        'title' => __( 'Projects', 'redux-framework-demo' ),
        'id'    => 'Projects',
        'desc'  => __( 'Basic fields as subsections.', 'redux-framework-demo' ),
        'icon'  => 'el el-home'
    ) );

        Redux::setSection( $opt_name, array(
        'title'      => __( 'Projects', 'redux-framework-demo' ),
        'id'         => 'Projects2',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-color-title',
                'type'     => 'color',
                'output'   => array( '.site-title' ),
                'title'    => __( 'Site Title Color', 'redux-framework-demo' ),
                'subtitle' => __( 'Pick a title color for the theme (default: #000).', 'redux-framework-demo' ),
                'default'  => '#000000',
            ),
        ),
    ) );

    /* Blog *** */

    Redux::setSection( $opt_name, array(
        'title' => __( 'Blog', 'redux-framework-demo' ),
        'id'    => 'Blog',
        'desc'  => __( 'Basic fields as subsections.', 'redux-framework-demo' ),
        'icon'  => 'el el-home'
    ) );

        Redux::setSection( $opt_name, array(
        'title'      => __( 'Blog', 'redux-framework-demo' ),
        'id'         => 'Blog2',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-color-title',
                'type'     => 'color',
                'output'   => array( '.site-title' ),
                'title'    => __( 'Site Title Color', 'redux-framework-demo' ),
                'subtitle' => __( 'Pick a title color for the theme (default: #000).', 'redux-framework-demo' ),
                'default'  => '#000000',
            ),
        ),
    ) );

    /* Contact *** */

    Redux::setSection( $opt_name, array(
        'title' => __( 'Contact', 'redux-framework-demo' ),
        'id'    => 'Contact',
        'desc'  => __( 'Basic fields as subsections.', 'redux-framework-demo' ),
        'icon'  => 'el el-home'
    ) );

        Redux::setSection( $opt_name, array(
        'title'      => __( 'Contact', 'redux-framework-demo' ),
        'id'         => 'Contact2',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-color-title',
                'type'     => 'color',
                'output'   => array( '.site-title' ),
                'title'    => __( 'Site Title Color', 'redux-framework-demo' ),
                'subtitle' => __( 'Pick a title color for the theme (default: #000).', 'redux-framework-demo' ),
                'default'  => '#000000',
            ),
        ),
    ) );

    /*
     * <--- END SECTIONS
     */

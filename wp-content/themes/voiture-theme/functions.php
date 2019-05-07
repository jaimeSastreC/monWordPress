<?php
// add posts pictures - thumbnails | problem with dimension of picture
    add_theme_support( 'post-thumbnails' );

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function dr_scripts()
{
    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style('styles_principaux', get_stylesheet_uri() );
    // Add javascript from Assets
    //wp_enqueue_script('scripts_principaux', get_stylesheet_directory_uri()."/assets/js/main.js" );
}

add_action( 'wp_enqueue_scripts', 'dr_scripts' );

// This theme uses wp_nav_menu() in two locations.*********************************************
register_nav_menus( array(
    'footer' => __( 'Footer'),
    'header_gauche' => __( 'Header_gauche'),
    'header_droite' => __( 'Header_droite'),
) );


/* fonctions pour twig ***********************************************************************/
// fonction pour créer des variables globales, accessibles dans tous les fichiers twig
function add_to_context($data){

    $data['header_gauche'] = new  \Timber\Menu('header_gauche');
    $data['header_droite'] = new  \Timber\Menu('header_droite');
    $data['footer'] = new  \Timber\Menu('footer');

    return $data;
}

// On ajoute le résultat  à notre fonction au contexte de twig
add_filter('timber_context', 'add_to_context');

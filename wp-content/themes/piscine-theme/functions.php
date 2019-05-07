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
    wp_enqueue_script('scripts_principaux', get_stylesheet_directory_uri()."/assets/js/main.js" );

}

add_action( 'wp_enqueue_scripts', 'dr_scripts' );


// This theme uses wp_nav_menu() in two locations.
// ajout menu secondaire -> on le retrouve dans Apparence-Menu
register_nav_menus( array(
    'header' => __( 'Header'),
    'secondaire' => 'Menu secondaire',
    'footer' => __( 'Footer'),
) );

/*cacher  barre d’outils du tableau de bord*/
add_filter('show_admin_bar', '__return_false');

/* version pour traduction
 * register_nav_menus( array(
    'header' => __( 'Header', 'piscine' ),
    'footer' => __( 'Footer', 'piscine' ),
) );*/

/*Création de sidebars*/
if (function_exists('register_sidebar')) {
    register_sidebar([
            'id' => 'gauche',
            'name' => 'Emplacement gauche',
            'description' => 'Emplacement à gauche des Widgets',
            'before_widget' => '',
            'after_widget' => '' ,
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ]
    );
    register_sidebar([
            'id' => 'droite',
            'name' => 'Emplacement droite',
            'description' => 'Emplacement à droite des Widgets',
            'before_widget' => '',
            'after_widget' => '' ,
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ]
    );
}
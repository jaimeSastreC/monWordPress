<?php
/**
 * Trigger this file on Plugin uninstall
 *
 * @package JaimePlugin
 *
 */


// security check - if ccess outside admin it's blocked
if ( !defined('WP_UNINSTALL_PLUGIN')){
    die;
}

// Clear Database stored data

/*$books = get_posts(array('post_t ype' => 'book', 'numberposts' => -1));

foreach ( $books as $book) {
    wp_delete_post( $book ->ID, true);
}*/

// Access the database via SQL
global $wpdb;

//concerned posts to delete , here books
$wpdb->query("DELETE   FROM wp_posts WHERE post_type = 'book'");

//all meta that have no relationa nymore to posts after deleteing posts
$wpdb->query( "DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts) ");
$wpdb->query( "DELETE FROM wp_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts) ");
<?php
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) )
	exit();

function gmap_uninstall(){

    global $wpdb;  
    
    $table_site = $wpdb->prefix.'mygmap'; 
    
  if($wpdb->get_var("SHOW TABLES LIKE '$table_site'") == $table_site){    
        $sql = "DROP TABLE `$table_site`";  
        $wpdb->query($sql);
  } 
}

gmap_uninstall();  
?>
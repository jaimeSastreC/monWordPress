<?php
/**
 * @package JaimePlugin
 */

/*
Plugin Name: My Plugin
Plugin URI: http://monsite_jaime.com
Description: Premier Plugin.
Version: 1.0
Author: Jaime Sastre Cantano
Author URI: http://jaime.com
License: GPLv2 or later
Text Domain: jaime-plugin

*/

/*
 * This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright {année} {mon_nom} (email : {mon_email}) 
*/

//namespace JaimePlugin;


defined('ABSPATH') or die('Hey, you can\'t access the file, you silly boy!');

/*alternative security mesure*/
if (!function_exists('add_action')){
    echo 'Hey, you can\'t access the file, you silly boy!';
    exit;
}



class MyPlugin
{
    public function __construct()
    {
        add_action( 'init', array($this, 'custom_post_type'));
    }

    function register(){
        // ici backend -  option wp_enqueue_scripts pour front end
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    public function activate(){
        // generate CPT - custom post type
        $this->custom_post_type();
        // flush rewrite rules
        flush_rewrite_rules();
    }

    public function deactivate(){
        flush_rewrite_rules();

    }

    /*public function uninstall(){

    }*/

    function custom_post_type(){
        register_post_type( 'book', ['public' => true, 'label' => 'Books']);
    }

    function enqueue(){
        // all my scripts - css
        wp_enqueue_style('mypluginstyle', plugins_url('/assets/mystyle.css', __FILE__));
        wp_enqueue_script('mypluginscript', plugins_url('/assets/myscript.js', __FILE__));
    }

}
if (class_exists("MyPlugin")) {
    $myplugin = new MyPlugin();
    $myplugin ->register();
}
//var_dump($myplugin);die;


register_activation_hook(__FILE__, array(  $myplugin, 'activate'));

register_deactivation_hook(__FILE__, array($myplugin, 'deactivate'));


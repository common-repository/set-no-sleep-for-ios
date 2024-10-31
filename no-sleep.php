<?php
/**
 * Plugin Name: Set No sleep For IOS
 * Description: Set No Sleep Mode for IOS and Your PWA using Wordpress Widgets.
 * Version:     1.10.0
 * Author:      Mehran Goudarzi
 * License:     GPLv2
 */

if(!defined('ABSPATH')){
    exit();
}

require_once(plugin_dir_path(__FILE__).'/includes/no-sleep-scripts.php');
require_once(plugin_dir_path(__FILE__).'/includes/no-sleep-class.php');

// Register Stuff
function register_NoSleep(){
    register_widget('NoSleep_Widget');
}

add_action('widgets_init', 'register_NoSleep');
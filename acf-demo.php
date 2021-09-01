<?php
/*
Plugin Name: ACF Demo
Plugin URI: http://example.com/
Description: acf plugin
Version: 1.0
Author: sadat himel
Author URI: http://example.com/
License: GPLv2 or later
Text Domain: acf-demo
Domain Path: /languages
*/

require_once(plugin_dir_path(__FILE__)."/libs/class-tgm-plugin-activation.php");
function acfd_bootstrap(){
    load_plugin_textdomain("acf-demo",false,dirname(__FILE__)."/languages");
}
add_action( 'plugin_loaded', 'acfd_bootstrap');
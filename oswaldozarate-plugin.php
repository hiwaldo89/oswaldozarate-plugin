<?php
/*
Plugin Name:       Oswaldo Zárate Plugin
Plugin URI:        https://github.com/hiwaldo89/oswaldozarate-plugin.git
Description:       This plugin registers a new custom post type and retrieves the user's IP Address
Version: 1.0
Author:            Oswaldo Zárate
Author URI:        https://oswaldozarate.com
License:           GPL v2 or later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:       oswaldozarate-plugin
*/

if ( !defined('WPINC') ) {
    die;
}

include( plugin_dir_path(__FILE__) . 'includes/register-cpt.php' );
include( plugin_dir_path(__FILE__) . 'includes/register-shortcode.php' );
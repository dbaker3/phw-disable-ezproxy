<?php
/*
Plugin Name: PHW Disable EZproxy
Description: Disables proxy of URLs that are using OCLC's EZproxy. Enable this plugin when EZproxy server is down for some reason.
Version: 1.0
Plugin URI: https://github.com/dbaker3/phw-disable-ezproxy
Author: David Baker - Milligan College
Author URI: https://github.com/dbaker3
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

/*
* @author David Baker
* @copyright 2015 Milligan College
* @license https://www.gnu.org/licenses/gpl-2.0.html GNU Public License v2
*/

function phwdprox_enqueue_script() {
    wp_enqueue_script('phwdprox_js', plugins_url('phw-disable-ezproxy.js', __FILE__), array('jquery'), filemtime(dirname(__FILE__) . '/phw-disable-ezproxy.js'), false);
}

add_action('wp_enqueue_scripts', 'phwdprox_enqueue_script');
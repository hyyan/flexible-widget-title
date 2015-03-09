<?php

/*
 * Plugin Name: Hyyan Flexible Widget Title
 * Plugin URI: https://github.com/hyyan/flexible-widget-title/
 * Description: The plugin will enable you to hide widgets title in the front end while they still visible in the backend by surrounding the widgets title in "[]" brackets. for example : [widget tilte]
 * Author: Hyyan Abo Fakher
 * Version: 2.0
 * Author URI: https://github.com/hyyan
 * GitHub Plugin URI: hyyan/flexible-widget-title
 * License: MIT License
 */

if (!defined('ABSPATH')){
    exit('restricted access');
}
   
require __DIR__ . '/vendors/class.settings-api.php';
require __DIR__ . '/src/Hyyan/FWP/Settings.php';
require __DIR__ . '/src/Hyyan/FWP/Plugin.php';

// setup settings page
new Hyyan\FWP\Settings();

// register the plugin
new Hyyan\FWP\Plugin();

<?php

/*
 * Plugin Name: Hyyan Flexible Widget Title
 * Plugin URI: https://github.com/hyyan/flexible-widget-title/
 * Description: The plugin will enable you to hide widgets title in the front end while they still visible in the backend by surrounding the widgets title in "[]" brackets. for example : [widget tilte]
 * Author: Hyyan Abo Fakher
 * Version: 1.0.0
 * Author URI: https://github.com/hyyan
 * GitHub Plugin URI: hyyan/flexible-widget-title
 * License: MIT License
 */

add_filter('widget_title', function($widget_title) {
    // get rid of any leading and trailing spaces
    $title = trim($widget_title);
    
    if (strlen($title) < 2)
        return;
    
    // check the first and last character, if [ and ] set the title to empty
    if (
            ($title[0] == '[') &&
            ($title[strlen($title) - 1] == ']')
    ) {
        $title = '';
    }
    return $title;
});


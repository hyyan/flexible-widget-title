<?php

/**
 * This file is part of the hyyan/flexible-widget-title plubin.
 * (c) Hyyan Abo Fakher <tiribthea4hyyan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hyyan\FWP;

/**
 * @author Hyyan
 */
class Plugin
{

    /**
     * Build the plugin
     */
    public function __construct()
    {
        add_filter('widget_title', array($this, 'handle'));
    }

    /**
     * Handle the widget title
     *
     * @param string $title
     *
     * @return string the widget title
     */
    public function handle($title)
    {

        $start = Settings::getOption('hyyan_fwp_start_mark', '[');
        $end = Settings::getOption('hyyan_fwp_end_mark', ']');

        if (empty($start) && empty($end)) {
            return $title;
        }

        // get rid of any leading and trailing spaces
        $ft = trim($title);

        if (empty($start) && $ft[strlen($ft) - 1] == $end) {
            $title = '';
        } elseif (empty($end) && ($ft[0] == $start)) {
            $title = '';
        } elseif (($ft[0] == $start) && ($ft[strlen($ft) - 1] == $end)) {
            $title = '';
        }

        return $title;
    }

}

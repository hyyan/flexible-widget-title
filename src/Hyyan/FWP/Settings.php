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
 * Hyyan_FWT_Settings
 *
 * @author Hyyan Abo Fakher
 */
class Settings
{
    private $settings;

    /**
     * Constrcut the admin panel
     */
    public function __construct()
    {
        $this->settings = new \WeDevs_Settings_API();

        add_action('admin_init', array($this, 'adminInit'));
        add_action('admin_menu', array($this, 'adminMenu'));
    }

    /**
     * Admin init hook
     */
    public function adminInit()
    {
        //set the settings
        $this->settings->set_sections($this->getSettingsSections());
        $this->settings->set_fields($this->getSettingsFields());

        //initialize settings
        $this->settings->admin_init();
    }

    /**
     * Admin menu hook
     */
    public function adminMenu()
    {
        add_options_page(
                __('Flexible Widget Title', 'fwp')
                , __('Flexible Widget Title', 'fwp')
                , 'manage_options'
                , 'hyyan_fwt'
                , array($this, 'pluginPage')
        );
    }

    /**
     * Get the setting sections
     *
     * @return array
     */
    public function getSettingsSections()
    {
        $sections = array(
            array(
                'id' => 'hyyan_fwt',
                'title' => __('Flexible Widget Title Settings', 'fwp')
            ),
        );

        return $sections;
    }

    /**
     * Returns all the settings fields
     *
     * @return array settings fields
     */
    public function getSettingsFields()
    {
        $settings_fields = array(
            'hyyan_fwt' => array(
                array(
                    'name' => 'hyyan_fwp_start_mark',
                    'label' => __('Start Mark', 'fwp'),
                    'desc' => __('Set the default start mark'),
                    'type' => 'text',
                    'default' => '[',
                ),
                array(
                    'name' => 'hyyan_fwp_end_mark',
                    'label' => __('End Mark', 'fwp'),
                    'desc' => __('Set the default end mark'),
                    'type' => 'text',
                    'default' => ']',
                ),
            )
        );

        return $settings_fields;
    }

    /**
     * Build the plugin page
     */
    public function pluginPage()
    {
        echo '<div class="wrap">';
        $this->settings->show_navigation();
        $this->settings->show_forms();
        echo '</div>';
    }

    /**
     * Get the value of a settings field
     *
     * @param string $option  settings field name
     * @param string $default default text if it's not found
     * @param string $section the section name this field belongs to
     *
     * @return mixed
     */
    public static function getOption($option, $default = '')
    {

        $options = get_option('hyyan_fwt');

        if (isset($options[$option])) {
            return $options[$option];
        }

        return $default;
    }

}

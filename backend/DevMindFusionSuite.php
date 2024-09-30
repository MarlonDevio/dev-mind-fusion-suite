<?php

namespace DevMindFusionSuite;

use DevMindFusionSuite\Config\Config;

class DevMindFusionSuite
{
    public function __construct()
    {
        add_action('plugins_loaded', [$this, 'init']);
    }

    public function init()
    {
        if (is_admin()) {
            wp_enqueue_script('DevMindFusionSuite', Config::getJSURI());
        }
    }
}

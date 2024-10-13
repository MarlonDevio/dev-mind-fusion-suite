<?php

namespace DevMindFusionSuite;

use DevMindFusionSuite\Utils\DebugHelper;

class DevMindFusionSuite
{
    private static DevMindFusionSuite $instance;

    private function __construct()
    {
        add_action('plugins_loaded', [$this, 'init']);
    }
    
    public static function getInstance(): DevMindFusionSuite
    {
        if (!isset(self::$instance)) {
            self::$instance = new DevMindFusionSuite();
        }
        return self::$instance;
    }

    public function init()
    {
        DebugHelper::debug(Config::PLUGINS_URI);
    }
}

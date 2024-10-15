<?php

namespace DevMindFusionSuite;

use DevMindFusionSuite\BulkMyWooVariations\BulkMyWooVariations;
use DevMindFusionSuite\Factories\PluginFactory;
use DevMindFusionSuite\Utils\DebugHelper;

class DevMindFusionSuite
{
    private PluginFactory $pluginFactory;
    /**
     * @var PluginBase[]
     */
    private array $plugins = [];
    private static DevMindFusionSuite $instance;

    private function __construct()
    {
        add_action('plugins_loaded', [$this, 'init']);
        $this->pluginFactory = new PluginFactory();
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
        try {
            $this->plugins[] = $this->pluginFactory->create(BulkMyWooVariations::class, []);
            foreach ($this->plugins as $plugin) {
                $plugin->init();
            }
        } catch (\Exception $e) {
            DebugHelper::debug($e->getMessage());
        }
    }
}

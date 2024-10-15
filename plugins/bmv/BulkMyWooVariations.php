<?php

namespace DevMindFusionSuite\BulkMyWooVariations;

use DevMindFusionSuite\Interfaces\PluginBase;

class BulkMyWooVariations extends PluginBase
{
    public function __construct()
    {
        parent::__construct("Bulk My Woo Variations", basename(__DIR__), basename(__DIR__));
    }

    public function init(): void
    {
        echo $this->getUri();
        echo $this->getPath();
        echo "HELLLLOOO";
    }
}

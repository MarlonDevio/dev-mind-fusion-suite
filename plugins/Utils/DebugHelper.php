<?php

namespace DevMindFusionSuite\Utils;

class DebugHelper
{
    public static function debug($data) : void
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}

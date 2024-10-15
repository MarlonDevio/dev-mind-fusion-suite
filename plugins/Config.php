<?php

namespace DevMindFusionSuite;

define("DEVMINDFUSION_ROOT_PATH", realpath(plugin_dir_path(__FILE__) . '../'). '/');
define("DEVMINDFUSION_ROOT_URI", plugins_url() . '/dev-mind-fusion-suite/');

define("PLUGINS_DIR", DEVMINDFUSION_ROOT_PATH . basename(__DIR__) . '/');

define("PLUGINS_URI", DEVMINDFUSION_ROOT_URI . basename(__DIR__) . '/');


class Config
{
    const ROOT_PATH = DEVMINDFUSION_ROOT_PATH;
    const ROOT_URI = DEVMINDFUSION_ROOT_URI;
    const PLUGINS_DIR = PLUGINS_DIR;
    const PLUGINS_URI = PLUGINS_URI;
}

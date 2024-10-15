<?php

 namespace DevMindFusionSuite\BulkMyWooVariations\App\Config;

define("DEVMINDFUSION_ROOT_PATH", realpath(plugin_dir_path(__FILE__) . '../../'). '/');
define("DEVMINDFUSION_ROOT_URI", plugins_url() . '/dev-mind-fusion-suite/');
define("DEVMINDFUSION_ASSETS_URI", DEVMINDFUSION_ROOT_URI . 'frontend/assets/');
define("DEVMINDFUSION_ASSETS_PATH", DEVMINDFUSION_ROOT_PATH . 'frontend/assets/');
define("DEVMINDFUSION_FRONTEND_PATH", DEVMINDFUSION_ROOT_PATH . 'frontend/');
define("DEVMINDFUSION_FRONTEND_URI", DEVMINDFUSION_ROOT_URI . 'frontend/');
define("DEVMINDFUSION_BACKEND_PATH", DEVMINDFUSION_ROOT_PATH . 'backend/');
define("DEVMINDFUSION_BACKEND_URI", DEVMINDFUSION_ROOT_URI . 'backend/');
define("DEVMINDFUSION_MANIFEST_PATH", DEVMINDFUSION_ASSETS_PATH . '.vite/manifest.json');
define("DEVMINDFUSION_MANIFEST_URI", DEVMINDFUSION_ASSETS_URI . '.vite/manifest.json');
define("DEVMINDFUSION_VIEWS_PATH", DEVMINDFUSION_BACKEND_PATH . 'Views/');

class Config
{
    private const DEVMINDFUSION_ROOT_PATH = DEVMINDFUSION_ROOT_PATH;
    private const DEVMINDFUSION_ROOT_URI = DEVMINDFUSION_ROOT_URI;
    private const DEVMINDFUSION_ASSETS_URI = DEVMINDFUSION_ASSETS_URI;
    private const DEVMINDFUSION_ASSETS_PATH = DEVMINDFUSION_ASSETS_PATH;
    private const DEVMINDFUSION_FRONTEND_PATH = DEVMINDFUSION_FRONTEND_PATH;
    private const DEVMINDFUSION_FRONTEND_URI = DEVMINDFUSION_FRONTEND_URI;
    private const DEVMINDFUSION_BACKEND_PATH = DEVMINDFUSION_BACKEND_PATH;
    private const DEVMINDFUSION_BACKEND_URI = DEVMINDFUSION_BACKEND_URI;
    private const DEVMINDFUSION_MANIFEST_PATH = DEVMINDFUSION_MANIFEST_PATH;
    private const DEVMINDFUSION_MANIFEST_URI = DEVMINDFUSION_MANIFEST_URI;
    private const DEVMINDFUSION_VIEWS_PATH = DEVMINDFUSION_VIEWS_PATH;
    private static Config $instance;

    private function __construct()
    {
    }

    public static function getViewsPath(): string
    {
        return self::DEVMINDFUSION_VIEWS_PATH;
    }

    public static function getInstance(): Config
    {
        if (!isset(self::$instance)) {
            self::$instance = new Config();
        }
        return self::$instance;
    }
    public static function getManifest(): string
    {
        return json_decode(file_get_contents(self::DEVMINDFUSION_MANIFEST_PATH), true);
    }

    public static function getRootPath(): string
    {
        return self::DEVMINDFUSION_ROOT_PATH;
    }

    public static function getRootUri(): string
    {
        return self::DEVMINDFUSION_ROOT_URI;
    }

    public static function getAssetsUri()
    {
        return self::DEVMINDFUSION_ASSETS_URI;
    }
    
    public static function getAssetsPath()
    {
        return self::DEVMINDFUSION_ASSETS_PATH;
    }
    
    public static function getFrontendPath()
    {
        return self::DEVMINDFUSION_FRONTEND_PATH;
    }
    
    public static function getFrontendUri()
    {
        return self::DEVMINDFUSION_FRONTEND_URI;
    }
    
    public static function getBackendPath()
    {
        return self::DEVMINDFUSION_BACKEND_PATH;
    }

    public static function getBackendUri()
    {
        return self::DEVMINDFUSION_BACKEND_URI;
    }

    public static function getJSFile()
    {
        $manifest = json_decode(file_get_contents(self::DEVMINDFUSION_MANIFEST_PATH), true);
        return $manifest['src/main.tsx']['file'];
    }

    public static function getCSSFile()
    {
        $manifest = json_decode(file_get_contents(self::DEVMINDFUSION_MANIFEST_PATH), true);
        return $manifest['src/main.tsx']['css'][0];
    }

    public static function getJSURI()
    {
        return self::getAssetsUri() . self::getJSFile();
    }

    public static function getCSSURI()
    {
        return self::getAssetsUri() . self::getCSSFile();
    }
}

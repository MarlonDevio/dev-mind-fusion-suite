<?php

/*
 * Plugin Name:       MarlonDev DevMindFusion Suite
 * Plugin URI:        https://marlondev.io
 * Description:       This plugin is a suite of tools for the DevMindFusion project.
 * Version:           1.0.0
 * Author:            Marlon Hamaekers
 * Author URI:        https://marlondev.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Requires at least: 6.0
 * PHP version:       8.3
 *
*/

use DevMindFusionSuite\DevMindFusionSuite;

if (! defined('ABSPATH')) {
    exit;
}

require_once __DIR__ . '/vendor/autoload.php';

$devMindFusionSuite = new DevMindFusionSuite();

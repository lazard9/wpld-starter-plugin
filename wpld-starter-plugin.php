<?php

/**
 * @wordpress-plugin
 * Plugin Name: WPLD Starter Plugin
 * Version: 1.0.0
 * Text Domain: wpld-starter-plugin
 * Domain Path: /languages
 * Description: Starter plugin with basic setup for WordPress plugin development.
 * Requires PHP: 7.4
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * 
 * @package WPLD Starter Plugin
 */

use WPLDStarterPlugin\PluginInit;

/**
 * Exit if accessed directly.
 */
defined('ABSPATH') || exit;

/**
 * Currently plugin version.
 */
define('PLUGIN_NAME_VERSION', '1.0.0');

define('WPLD_STARTER_PLUGIN_URL', plugin_dir_url(__FILE__));
define('WPLD_STARTER_PLUGIN_PATH', plugin_dir_path(__FILE__));

require plugin_dir_path(__FILE__) . 'vendor/autoload.php';

// Register activation and deactivation hooks
register_activation_hook(__FILE__, ['WPLDStarterPlugin\PluginInit', 'activate']);
register_deactivation_hook(__FILE__, ['WPLDStarterPlugin\PluginInit', 'deactivate']);

add_action('plugins_loaded', function () {
    PluginInit::getInstance()->setInstances();
}, 20);

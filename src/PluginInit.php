<?php

namespace WPLDStarterPlugin;

use WPLDStarterPlugin\Traits\SingletonTrait;

final class PluginInit
{
    use SingletonTrait;

    private function __construct()
    {
        // Init code if needed
    }

    public function setInstances(): void
    {
        // Register hooks, initialize classes, etc.
    }

    /**
     * Run on plugin activation
     */
    public static function activate(): void
    {
        // Activation logic here, e.g. create DB tables, set options
        // Example:
        // if ( ! get_option('wpld_starter_plugin_version') ) {
        //     update_option('wpld_starter_plugin_version', PLUGIN_NAME_VERSION);
        // }
    }

    /**
     * Run on plugin deactivation
     */
    public static function deactivate(): void
    {
        // Deactivation logic here, e.g. clean temporary data
    }
}

# WPLD Starter Plugin

A clean and minimal boilerplate for modern WordPress plugin development. Includes Composer autoloading, PSR-4 namespace structure, Singleton pattern, and plugin lifecycle hooks (activation/deactivation).

## 🧩 Plugin Details

- **Name:** WPLD Starter Plugin
- **Version:** 1.0.0
- **Requires PHP:** 7.4+
- **License:** GPL v2 or later
- **Text Domain:** wpld-starter-plugin
- **Domain Path:** `/languages`

## 📁 Directory Structure

```css
wpld-starter-plugin/
├── src/
│   ├── PluginInit.php
│   └── Traits/
│       └── SingletonTrait.php
├── vendor/
├── composer.json
├── wpld-starter-plugin.php
└── README.md
```

## ⚙️ Installation

1. Clone or download the plugin to your `wp-content/plugins/` directory:

   ```bash
   git clone https://github.com/yourname/wpld-starter-plugin.git
   cd wpld-starter-plugin
   ```

2. Install dependencies with Composer:

   ```bash
   composer install
   ```

3. Activate the plugin in the WordPress admin panel.

## 🚀 Features

- Composer-based autoloading (PSR-4)
- Namespaced structure for clean architecture
- Singleton pattern for main plugin logic
- Hooks for activation and deactivation
- Minimal, extensible setup

## 🧪 Development

To add a new class:

- Create a class under the `src/` directory with the `WPLDStarterPlugin` namespace.
- Use the `SingletonTrait` if you want a singleton instance.
- Register it in `PluginInit::setInstances()` if it needs to be instantiated on `plugins_loaded`.

Example:

```php
namespace WPLDStarterPlugin;

class MyFeature {
    public function __construct() {
        add_action('init', [$this, 'init']);
    }

    public function init() {
        // Your feature logic
    }
}
```

```php
// PluginInit.php
public function setInstances() {
    new MyFeature();
}
```

## Plugin Lifecycle

- `activate()` is called once on plugin activation.
- `deactivate()` is called on deactivation.

You can add DB table creation, options setup, or flushing rewrite rules here.

## 📝 License

This plugin is licensed under the GPL v2 or later.

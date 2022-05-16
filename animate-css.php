<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/elfedali
 * @since             1.0.0
 * @package           Animate_Css
 *
 * @wordpress-plugin
 * Plugin Name:       animate.css
 * Plugin URI:        https://github.com/elfedali/animate-css
 * Description:       Animate.css is a library of ready-to-use, cross-browser animations for use in your web projects. Great for emphasis, home pages, sliders, and attention-guiding hints.
 * Version:           1.0.0
 * Author:            Abdessamad EL FEDALI
 * Author URI:        https://github.com/elfedali
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       animate-css
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('ANIMATE_CSS_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-animate-css-activator.php
 */
function activate_animate_css()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-animate-css-activator.php';
	Animate_Css_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-animate-css-deactivator.php
 */
function deactivate_animate_css()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-animate-css-deactivator.php';
	Animate_Css_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_animate_css');
register_deactivation_hook(__FILE__, 'deactivate_animate_css');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-animate-css.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_animate_css()
{

	$plugin = new Animate_Css();
	$plugin->run();
}
run_animate_css();
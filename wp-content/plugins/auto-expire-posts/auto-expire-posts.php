<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wordpress.org/plugins/auto-expire-posts/
 * @since             1.0.0
 * @package           Auto_Expire_Posts
 *
 * @wordpress-plugin
 * Plugin Name:       Auto Expire Posts
 * Plugin URI:        https://wordpress.org/plugins/auto-expire-posts/
 * Description:       Automatically expire posts at a given date
 * Version:           1.0.0
 * Author:            lerougeliet
 * Author URI:				https://profiles.wordpress.org/lerougeliet/#content-plugins
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       auto-expire-posts
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-activator.php
 */
function activate_auto_expire_posts() {
	require_once plugin_dir_path(__FILE__) . 'includes/class-activator.php';
	Auto_Expire_Posts_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-deactivator.php
 */
function deactivate_auto_expire_posts() {
	require_once plugin_dir_path(__FILE__) . 'includes/class-deactivator.php';
	Auto_Expire_Posts_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_auto_expire_posts');
register_deactivation_hook(__FILE__, 'deactivate_auto_expire_posts');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-main.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_auto_expire_posts() {
	$plugin = new Auto_Expire_Posts();
	$plugin->run();
}
run_auto_expire_posts();

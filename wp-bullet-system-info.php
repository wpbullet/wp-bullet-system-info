<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://justinfrydman.com
 * @since             1.0.0
 * @package           Wp_Bullet_System_Info
 *
 * @wordpress-plugin
 * Plugin Name:       WP Bullet System Info
 * Plugin URI:        https://wp-bullet.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Justin Frydman
 * Author URI:        https://justinfrydman.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-bullet-system-info
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-bullet-system-info-activator.php
 */
function activate_wp_bullet_system_info() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-bullet-system-info-activator.php';
	Wp_Bullet_System_Info_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-bullet-system-info-deactivator.php
 */
function deactivate_wp_bullet_system_info() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-bullet-system-info-deactivator.php';
	Wp_Bullet_System_Info_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_bullet_system_info' );
register_deactivation_hook( __FILE__, 'deactivate_wp_bullet_system_info' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-bullet-system-info.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_bullet_system_info() {

	$plugin = new Wp_Bullet_System_Info();
	$plugin->run();

}
run_wp_bullet_system_info();

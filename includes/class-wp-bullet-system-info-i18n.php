<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://justinfrydman.com
 * @since      1.0.0
 *
 * @package    Wp_Bullet_System_Info
 * @subpackage Wp_Bullet_System_Info/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Bullet_System_Info
 * @subpackage Wp_Bullet_System_Info/includes
 * @author     Justin Frydman <justin.frydman@gmail.com>
 */
class Wp_Bullet_System_Info_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-bullet-system-info',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

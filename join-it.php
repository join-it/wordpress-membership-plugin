<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.joinit.org/sync/wordpress
 * @since             1.0.0
 * @package           Join_It
 *
 * @wordpress-plugin
 * Plugin Name:       Join It Membership Management
 * Plugin URI:        https://github.com/join-it/wordpress-membership-plugin
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Join It
 * Author URI:        https://www.joinit.org/sync/wordpress
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       join-it
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-join-it-activator.php
 */
function activate_join_it() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-join-it-activator.php';
	Join_It_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-join-it-deactivator.php
 */
function deactivate_join_it() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-join-it-deactivator.php';
	Join_It_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_join_it' );
register_deactivation_hook( __FILE__, 'deactivate_join_it' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-join-it.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_join_it() {

	$plugin = new Join_It();
	$plugin->run();

}
run_join_it();

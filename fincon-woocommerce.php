<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.kri8it.com
 * @since             1.0.0
 * @package           Fincon_Woocommerce
 *
 * @wordpress-plugin
 * Plugin Name:       Fincon For Woocommerce
 * Plugin URI:        https://github.com/kri8itdigital/fincon-woocommerce
 * Description:       Connects your Fincon accounting system WebAPI to Woocommerce.
 * Version:           1.1.0
 * Author:            Hilton Moore
 * Author URI:        https://www.kri8it.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fincon-woocommerce
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'FINCON_WOOCOMMERCE_VERSION', '1.1.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-fincon-woocommerce-activator.php
 */
function activate_fincon_woocommerce() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fincon-woocommerce-activator.php';
	Fincon_Woocommerce_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-fincon-woocommerce-deactivator.php
 */
function deactivate_fincon_woocommerce() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fincon-woocommerce-deactivator.php';
	Fincon_Woocommerce_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_fincon_woocommerce' );
register_deactivation_hook( __FILE__, 'deactivate_fincon_woocommerce' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-fincon-woocommerce.php';



add_action( 'plugins_loaded', 'fincon_woocommerce_check_for_update' );
function fincon_woocommerce_check_for_update(){

	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fincon-woocommerce-updater.php';


	  $config = array(
	        'slug'               => plugin_basename( __FILE__ ),
	        'proper_folder_name' => 'fincon-woocommerce',
	        'api_url'            => 'https://api.github.com/repos/kri8itdigital/fincon-woocommerce',
	        'raw_url'            => 'https://raw.github.com/kri8itdigital/fincon-woocommerce/master',
	        'github_url'         => 'https://github.com/kri8itdigital/fincon-woocommerce',
	        'zip_url'            => 'https://github.com/kri8itdigital/fincon-woocommerce/archive/master.zip',
	        'homepage'           => 'https://github.com/kri8itdigital/fincon-woocommerce',
	        'sslverify'          => true,
	        'requires'           => '4.0',
	        'tested'             => '5.4',
	        'readme'             => 'README.md',
	        'version'			 => '1.1.0'
	    );

	    new fincon_updater( $config );

}

		



/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_fincon_woocommerce() {

	$plugin = new Fincon_Woocommerce();
	$plugin->run();

}
run_fincon_woocommerce();

<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://www.kri8it.com
 * @since      1.0.0
 *
 * @package    Fincon_Woocommerce
 * @subpackage Fincon_Woocommerce/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Fincon_Woocommerce
 * @subpackage Fincon_Woocommerce/includes
 * @author     Hilton Moore <hilton@kri8it.com>
 */
class Fincon_Woocommerce_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {

		/* CRON FOR SYNCING PRODUCTS */
		wp_clear_scheduled_hook('fincon_woocommerce_sync_products');

		/* CRON FOR SYNCING USERS */
		wp_clear_scheduled_hook('fincon_woocommerce_sync_accounts');

	}

}

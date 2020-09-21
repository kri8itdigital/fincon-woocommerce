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

		/* REMOVE IT FROM BEING ACTIVE */
		delete_option('fincon_woocommerce_active');
		delete_option('fincon_woocommerce_sync_orders');
		delete_option('fincon_woocommerce_sync_stock');
		delete_option('fincon_woocommerce_sync_users');

		/* STATUS CRON */
		wp_clear_scheduled_hook('fincon_woocommerce_check_status');
		delete_option('fincon_woocommerce_admin_message_text');
		delete_option('fincon_woocommerce_admin_message_type');
		delete_option('fincon_woocommerce_admin_message_date');

		/* CRON FOR SYNCING PRODUCTS */
		wp_clear_scheduled_hook('fincon_woocommerce_sync_products');
		delete_option('fincon_woocommerce_last_product_update');
		delete_option('fincon_woocommerce_product_sync_running');
		delete_option('fincon_woocommerce_do_inital_product_sync');
		delete_option('fincon_woocommerce_do_inital_product_sync_date');

		/* CRON FOR SYNCING USERS */
		wp_clear_scheduled_hook('fincon_woocommerce_sync_accounts');
		delete_option('fincon_woocommerce_last_user_update');
		delete_option('fincon_woocommerce_user_sync_running');
		delete_option('fincon_woocommerce_do_inital_user_sync');
		delete_option('fincon_woocommerce_do_inital_user_sync_date');

		/* CRON FOR LOG CLEANING */
		wp_clear_scheduled_hook('fincon_woocommerce_clean_logs');

		/* BATCH PROCESSING */
		delete_option('fincon_woocommerce_product_sync_eof');
		delete_option('fincon_woocommerce_user_sync_eof');
	
		

	}

}

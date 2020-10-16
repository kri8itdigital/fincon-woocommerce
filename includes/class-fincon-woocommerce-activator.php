<?php

/**
 * Fired during plugin activation
 *
 * @link       https://www.kri8it.com
 * @since      1.0.0
 *
 * @package    Fincon_Woocommerce
 * @subpackage Fincon_Woocommerce/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Fincon_Woocommerce
 * @subpackage Fincon_Woocommerce/includes
 * @author     Hilton Moore <hilton@kri8it.com>
 */
class Fincon_Woocommerce_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		if ( ! is_plugin_active( 'woocommerce/woocommerce.php' ) and current_user_can( 'activate_plugins' ) ):
	    
	    	wp_die('Sorry, but the Fincon Woocommerce plugin requires woocommerce to be enabled. <br><a href="' . admin_url( 'plugins.php' ) . '">&laquo; Return to Plugins</a>');

	    else:
	    	/* VERSION 1.3.0 UPDATES */
	    	if(FINCON_WOOCOMMERCE_VERSION == '1.3.0'):
	    		if(get_option('fincon_woocommerce_location')):

					$_LOCATION = get_option('fincon_woocommerce_location');
					update_option('fincon_woocommerce_stock_location', $_LOCATION);
					update_option('fincon_woocommerce_order_location', $_LOCATION);
					delete_option('fincon_woocommerce_location');

				endif;


				if(!get_option('fincon_woocommerce_product_batch')):
					update_option('fincon_woocommerce_product_batch', 500);
				endif;

				if(!get_option('fincon_woocommerce_user_batch')):
					update_option('fincon_woocommerce_user_batch', 500);
				endif;

			endif;

	    endif;
	}

}

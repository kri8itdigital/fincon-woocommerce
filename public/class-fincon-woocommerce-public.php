<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.kri8it.com
 * @since      1.0.0
 *
 * @package    Fincon_Woocommerce
 * @subpackage Fincon_Woocommerce/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Fincon_Woocommerce
 * @subpackage Fincon_Woocommerce/public
 * @author     Hilton Moore <hilton@kri8it.com>
 */
class Fincon_Woocommerce_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/fincon-woocommerce-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/fincon-woocommerce-public.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Validate stock live when added to cart
	 *
	 * @since    1.0.0
	 */
	public function add_to_cart_validation($_VALID, $_PROD_ID, $_QTY){
	

		$_PROD = new WC_Product($_PROD_ID);

		$_NAME		= $_PROD->get_name();
		$_STOCK 	= $_PROD->get_stock_quantity();
		$_SKU 		= $_PROD->get_sku();

		$_FINCON = new WC_Fincon();
		$_FINCON->LogIn();
		$_STOCKQTY = $_FINCON->GetStockItemQTY($_SKU);
		$_FINCON->LogOut();

		if($_STOCKQTY && $_STOCKQTY > 0):

			if($_STOCKQTY >= $_QTY):
				$_VALID = true;
			else:
				$_VALID = false;
				wc_add_notice('Our apologies - we do not have enough of '.$_NAME.' in stock ('.$_STOCKQTY.')', 'error');

				$_PROD->set_stock_quantity($_STOCKQTY);

				if ($_STOCKQTY > 0):
					$_PROD->set_stock_status('instock');
				else:
					$_PROD->set_stock_status('outofstock');
				endif;

				$_PROD->save();

			endif;

		else:
			wc_add_notice('Our apologies - we do not have enough of '.$_NAME.' in stock ('.$_STOCKQTY.')', 'error');
			$_VALID = false;

			$_PROD->set_stock_quantity($_STOCKQTY);

			if ($_STOCKQTY > 0):
				$_PROD->set_stock_status('instock');
			else:
				$_PROD->set_stock_status('outofstock');
			endif;

			$_PROD->save();
			
		endif;

		return $_VALID;
	}

	/**
	 * Validate stock on checkout
	 *
	 * @since    1.0.0
	 */
	public function check_cart_items($_ORDER_ID){

		if( is_cart() || is_checkout() ):

			$_FINCON = new WC_Fincon();

			$_FINCON->LogIn();

			foreach(WC()->cart->get_cart() as $_ID => $_ITEM):

				$_SKU = $_ITEM['data']->get_sku();
				$_QTY = $_ITEM['quantity'];

				$_STOCKQTY = $_FINCON->GetStockItemQTY($_SKU);


				if($_STOCKQTY && $_STOCKQTY > 0):

					if($_STOCKQTY >= $_QTY):
						// FINE
					else:
						WC()->cart->remove_cart_item($_ID);
						wc_add_notice('Our apologies - we do not have enough of '.$_NAME.' in stock', 'error');

						$_ITEM['data']->set_stock_quantity($_STOCKQTY);

						if ($_STOCKQTY > 0):
							$_ITEM['data']->set_stock_status('instock');
						else:
							$_ITEM['data']->set_stock_status('outofstock');
						endif;

						$_ITEM['data']->save();

					endif;

				else:
					WC()->cart->remove_cart_item($_ID);
					wc_add_notice('Our apologies - we do not have enough of '.$_NAME.' in stock', 'error');

					$_ITEM['data']->set_stock_quantity($_STOCKQTY);

					if ($_STOCKQTY > 0):
						$_ITEM['data']->set_stock_status('instock');
					else:
						$_ITEM['data']->set_stock_status('outofstock');
					endif;

					$_ITEM['data']->save();
				endif;



			endforeach;

			$_FINCON->LogOut();

		endif;
	}

	/**
	 * USER REGISTRATION - SEND TO FINCON
	 *
	 * @since    1.0.0
	 */
	public function user_register($user_id){

		$_USER = get_user_by('id', $user_id);

		$_FINCON = new WC_Fincon();

		$_FINCON->LogIn();

		$_TESTER = $_FINCON->GetDebAccount($_USER->user_login);

		if(!$_TESTER):

			$_ACC = $_FINCON->UpdateDebAccount($_USER->user_login);	
			
			if($_ACC && $_ACC->AccNo != ''):

				global $wpdb;

				$wpdb->update($wpdb->users, array('user_login' => $_ACC->AccNo), array('ID' => $user_id));
				update_user_meta($user_id, '_fincon_account_number', $_ACC->AccNo);


			endif;	

		endif;

		$_FINCON->LogOut();

	}

}

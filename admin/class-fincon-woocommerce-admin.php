<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.kri8it.com
 * @since      1.0.0
 *
 * @package    Fincon_Woocommerce
 * @subpackage Fincon_Woocommerce/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Fincon_Woocommerce
 * @subpackage Fincon_Woocommerce/admin
 * @author     Hilton Moore <hilton@kri8it.com>
 */
class Fincon_Woocommerce_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/fincon-woocommerce-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/fincon-woocommerce-admin.js', array( 'jquery' ), $this->version, false );

		$params = array(
			'ajax_url' => get_bloginfo('url').'/wp-admin/admin-ajax.php'
		);

		wp_localize_script( $this->plugin_name, 'fincon_params', $params );  

	}



	/**
	 * Creating Settings Tab Page
	 *
	 * @since    1.0.0
	 */
	public function get_settings_pages($settings){


		include plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-fincon-woocommerce-settings.php';

		$settings[] = new fincon_woocommerce_settings();


		return $settings;

	}

	/**
	 * Get Cron Schedules
	 *
	 * @since    1.0.0
	 */
	public function cron_schedules($schedules){

		$schedules['twohours'] = array(
	        'interval' => 7200,
	        'display'  => esc_html__( 'Every Two Hours' ),
	    );

		return $schedules;

	}

	/**
	 * Set Cron Schedules
	 *
	 * @since    1.0.0
	 */
	public function setup_cron_schedules(){


		if (! wp_next_scheduled( 'fincon_woocommerce_check_status')):


			$_INTERVAL = get_option('fincon_woocommerce_interval');

			wp_schedule_event(time(), $_INTERVAL, 'fincon_woocommerce_check_status');


		endif;


		if(get_option('fincon_woocommerce_sync_stock') == 'yes'):


			if (! wp_next_scheduled( 'fincon_woocommerce_sync_products')):


				$_INTERVAL = get_option('fincon_woocommerce_interval');

				wp_schedule_event(time(), $_INTERVAL, 'fincon_woocommerce_sync_products');


			endif;

		else:

			if (wp_next_scheduled( 'fincon_woocommerce_sync_products')):

				wp_clear_scheduled_hook('fincon_woocommerce_sync_products');
				
			endif;

		endif;
			

		if(get_option('fincon_woocommerce_sync_users') == 'yes'):


			if (! wp_next_scheduled( 'fincon_woocommerce_sync_accounts')):


				$_INTERVAL = get_option('fincon_woocommerce_interval');

				wp_schedule_event(time(), $_INTERVAL, 'fincon_woocommerce_sync_accounts');


			endif;

		else:

			if (wp_next_scheduled( 'fincon_woocommerce_sync_accounts')):

				wp_clear_scheduled_hook('fincon_woocommerce_sync_accounts');
				
			endif;

		endif;

	}

	/**
	 * Add Columns to shop order table for the Fincon Sales Order Number
	 *
	 * @since    1.0.0
	 */
	public static function shop_order_columns($columns){

	    $reordered_columns = array();

	    // Inserting columns to a specific location
	    foreach( $columns as $key => $column){
	        $reordered_columns[$key] = $column;
	        if( $key ==  'order_status' ){
	            // Inserting after "Status" column
	            $reordered_columns['order_fincon_so'] = __( 'Fincon Sales Order','woocommerce');
	        }
	    }
	    return $reordered_columns;

	}

	/**
	 * Outputs Column Data for Fincon Sales Order Number on the shop order table
	 *
	 * @since    1.0.0
	 */
	public static function shop_order_posts_custom_column($column){

		global $post;

		if ( 'order_fincon_so' === $column ):
			if(get_post_meta($post->ID, '_fincon_sales_order', true)):
				echo '<div class="fincon-woocommerce-column-_content"><div class="fincon_sales_order">'.get_post_meta($post->ID, '_fincon_sales_order', true).'</div></div>';
			elseif(get_post_meta($post->ID, '_fincon_sales_error', true)):
				echo '<div class="fincon-woocommerce-column-_content">';
				echo '<em class="error_title">ERRORS:</em><ol>';
				foreach(get_post_meta($post->ID, '_fincon_sales_error', true) as $ERR):
					echo '<li>'.$ERR.'</li>';
				endforeach;
				echo '</ol>';
				echo '</div>';
				echo '<a class="fincon_woocommerce_ajax_create_sales_order button wc-action-button" data-o="'.$post->ID.'">Send</a>';
			else:

				if($post->post_status == 'wc-processing' || $post->post_status == 'wc-completed'):

					echo '<div class="k8_sync_column_content"></div>';
					echo '<a class="fincon_woocommerce_ajax_create_sales_order button wc-action-button" data-o="'.$post->ID.'">Send</a>';
					
				endif;
			endif;
		endif;
	
	}

	/**
	 * Once an order is marked as paid - send to fincon
	 *
	 * @since    1.0.0
	 */
	public function order_status_processing($order_id){

		if(!$this->order_is_deploy($order_id)):

			$_FINCON = new fincon();
			$_FINCON->LogIn();
			$_FINCON->SendSOToFincon($order_id);
			$_FINCON->LogOut();

		endif;

	}

	/**
	 * Helper function for checking whether an order has already been sent
	 *
	 * @since    1.0.0
	 */
	public function order_is_deploy($order_id){

		if(get_post_meta($order_id, '_fincon_sales_order', true)):
			return true;
		else:
			return false;
		endif;
	}

	/**
	 * Ajax function for manually sending a Sales Order to Fincon
	 *
	 * @since    1.0.0
	 */
	public function ajax_create_so(){

		$O = $_POST['o'];

		$_FINCON = new fincon();

		$_FINCON->LogIn();
		$_FINCON->SendSOToFincon($O);
		$_FINCON->LogOut();

		sleep(1);

		$_RETURN = array();

		if(get_post_meta($O, '_fincon_sales_order', true)):

			$_RETURN['status'] = 'yes';
			$_RETURN['so'] = get_post_meta($O, '_fincon_sales_order', true);
			$_RETURN['text'] = '<div class="fincon_sales_order">'.$_RETURN['so'].'</div>';

		else:
			$_RETURN['status'] = 'no';

			$_ERRORS = get_post_meta($O, '_fincon_sales_error', true);
			$_ERRORS_LIST = '';
			$_ERRORS_LIST.= '<em class="error_title">ERRORS:</em><ol>';
				foreach($_ERRORS as $ERR):
					$_ERRORS_LIST.= '<li>'.$ERR.'</li>';
				endforeach;
				$_ERRORS_LIST.= '</ol>';

			$_RETURN['errors'] = $_ERRORS_LIST;
		endif;

		echo json_encode($_RETURN);			

		exit;
	}

	/**
	 * Checks whether the Fincon Connection is active
	 *
	 * @since    1.1.1
	 */
	public static function check_details($URL, $UN, $PW, $DATA, $EXT){

		$_FINCON = new fincon();
		$_LIVE = $_FINCON->ValidateCustom($URL, $UN, $PW, $DATA, $EXT);

		$GLOBALS['finconactivemsg'] = '';
		$GLOBALS['fincondownmsg'] = '';

		if($_LIVE['return']):
			update_option('fincon_woocommerce_admin_message_text', 'Fincon <strong><em>is</em></strong> connected.');
			update_option('fincon_woocommerce_admin_message_type', 'notice-info');
		else:
			update_option('fincon_woocommerce_admin_message_text', 'Fincon is <strong><em>not</em></strong> connected: '.$_LIVE['ErrorString']);
			update_option('fincon_woocommerce_admin_message_type', 'notice-error');
		endif;

	}

	/**
	 * Checks whether the Fincon Connection is active
	 *
	 * @since    1.0.0
	 */
	public function check_api(){

		$_FINCON = new fincon();
		$_LIVE = $_FINCON->Validate();

		$GLOBALS['finconactivemsg'] = '';
		$GLOBALS['fincondownmsg'] = '';

		if($_LIVE['return']):
			update_option('fincon_woocommerce_admin_message_text', 'Fincon <strong><em>is</em></strong> connected.');
			update_option('fincon_woocommerce_admin_message_type', 'notice-info');
		else:
			update_option('fincon_woocommerce_admin_message_text', 'Fincon is <strong><em>not</em></strong> connected: '.$_LIVE['ErrorString']);
			update_option('fincon_woocommerce_admin_message_type', 'notice-error');

			update_option('fincon_woocommerce_active', 'no');

			if(get_option('fincon_woocommerce_enable_emails') == 'yes'):
				$this->do_email_notification($_LIVE['ErrorString']);
			endif;

		endif;

	}

	/**
	 * Checks whether the Fincon Connection is active
	 *
	 * @since    1.1.1
	 */
	public function do_email_notification($_ERROR){

		$_SEND_TO = get_option('fincon_woocommerce_email_list');
		$_SUBJECT = get_option('fincon_woocommerce_email_subject');

		$_MESSAGE = '<p>To whom it may concern, </p>';
		$_MESSAGE .= '<p>This is a courtesy email to inform you that the Fincon connection on your website <strong>'.get_bloginfo('name').'</strong> has gone down.</p>';
		$_MESSAGE .= '<p>The error that has been logged is: <strong>'.$_ERROR.'</strong></p>';
		$_MESSAGE .= '<p>The sync has been disabled automatically for now. Please check your settings and adjust accordingly.</p>';
		$_MESSAGE .= '<p>Fincon Accounting.</p>';

		$_HEADERS = array('Content-Type: text/html; charset=UTF-8');

		wp_mail($_SEND_TO, $_SUBJECT, $_MESSAGE, $_HEADERS);

	}

	/**
	 * Displays message based on Fincon Connection
	 *
	 * @since    1.0.0
	 */
	public function display_api_notice() {

		$_MESSAGE 	= get_option('fincon_woocommerce_admin_message_text');
		$_TYPE		= get_option('fincon_woocommerce_admin_message_type');


		if($_MESSAGE != ''):
			?>
			<div class="notice <?php echo $_TYPE; ?> is-dismissible"><p> <?php _e($_MESSAGE); ?></p></div>
			<?php
		endif;
	}

	/**
	 * Adds loading overlay
	 *
	 * @since    1.0.0
	 */
	public function in_admin_header(){
		?>
	  
		  <div id="the-overlay">
		  	<img src="<?php echo plugins_url('woocommerce' . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'wpspin-2x.gif'); ?>" />
		  </div>
	  
	  	<?php
	}

	/**
	 * Custom Date helper function
	 *
	 * @since    1.0.0
	 */
	public static function dateTimeToDouble($date){
		if (empty($date)) {
			$date = '1899-12-30 00:00:00';
		}
		$dt = new DateTime($date);
		$d = $dt->format('Y-m-d');
		$t = $dt->format('H:i:s');
		$timeArr = explode(':', $t);
		if (count($timeArr) == 3) {
			$decTime = ($timeArr[0]/24) + ($timeArr[1]/1440) + ($timeArr[2]/86400);
		}
		$DateArr = explode('-', $d);
		$greg_start = gregoriantojd(12, 30, 1899);
		$date = gregoriantojd($DateArr[1], $DateArr[2], $DateArr[0]);
		$datediff = date($date - $greg_start);
		$datediff += $decTime;
		return $datediff;
	}

	/**
	 * Helper Function for Creating Taxonomies
	 *
	 * @since    1.0.0
	 */
	public static function get_category_id($_NAME, $_DESC, $_TAX = 'product_cat'){


      	if(get_term_by( 'name', $_NAME, $_TAX, ARRAY_A )):

      		$_TERM = get_term_by( 'name', $_NAME, $_TAX, ARRAY_A );
      		$_ID =  $_TERM['term_id'];

		else:
			$_TERM = wp_insert_term($_NAME, $_TAX, array('description'=> $_DESC,'slug' => $_NAME));

			if(!is_wp_error($_TERM)):
		    	$_ID =  $_TERM['term_id'];
		    else:
		    	$_ID = false;
		    endif;
		endif;

		return $_ID;


	}

	/**
	 * Function to manage import and update of stock.
	 *
	 * @since    1.0.0
	 */
	public static function sync_stock_items(){
			

		if(get_option('fincon_woocommerce_product_sync_running') == 'no'):

			set_time_limit(0);

			update_option('fincon_woocommerce_product_sync_running', 'yes');

			$_LAST_UPDATE = get_option('fincon_woocommerce_last_product_update');

			$_FINCON = new fincon();

			$_FINCON->LogIn();

			if($_LAST_UPDATE):

				$_DATE_TO_WORK_WITH = self::dateTimeToDouble($_LAST_UPDATE);

				self::fincon_product_sync_partial($_FINCON, $_DATE_TO_WORK_WITH);

			else:

				self::fincon_product_sync_full($_FINCON);

			endif;


			$_FINCON->LogOut();
			update_option('fincon_woocommerce_last_product_update', date_i18n('Y/m/d H:i:s'));
			update_option('fincon_woocommerce_product_sync_running', 'no');

		endif;

		

	}

	/**
	 * Function to manage import and update of Users.
	 *
	 * @since    1.0.0
	 */
	public static function sync_user_items(){		
		
		if(get_option('fincon_woocommerce_user_sync_running') == 'no'):
			

			set_time_limit(0);

			update_option('fincon_woocommerce_user_sync_running', 'yes');

			$_LAST_UPDATE = get_option('fincon_woocommerce_last_user_update');

			$_FINCON = new fincon();

			$_FINCON->LogIn();

			if($_LAST_UPDATE):

				$_DATE_TO_WORK_WITH = self::dateTimeToDouble($_LAST_UPDATE);

				echo 'GOING INTO UPDATE';

				self::fincon_user_sync_partial($_FINCON, $_DATE_TO_WORK_WITH);

			else:

				echo 'GOING INTO FULL';

				self::fincon_user_sync_full($_FINCON);

			endif;

			$_FINCON->LogOut();

			update_option('fincon_woocommerce_last_user_update', date_i18n('Y/m/d H:i:s'));
			update_option('fincon_woocommerce_user_sync_running', 'no');

		endif;

		

	}

	/**
	 * Function to manage import and update of Products.
	 *
	 * @since    1.0.0
	 */
	public static function fincon_product_sync_full($_FINCON ){

		$_EOF = false;

		$_FIRST = $_FINCON->GetStockFirst($_EOF);
		$_EOF = $_FIRST['Eof'];

		if(!$_EOF):

			self::insert_update_product($_FIRST, $_FINCON->_LOC, $_FINCON->_EXCLUDE);

		endif;

		while(!$_EOF):

			$_STOCK = $_FINCON->GetStockNext($_EOF);

			self::insert_update_product($_STOCK, $_FINCON->_LOC, $_FINCON->_EXCLUDE);

			$_EOF = $_STOCK['Eof'];


		endwhile;



	}

	/**
	 * Run a partial import of products based on the last date the import ran.
	 *
	 * @since    1.0.0
	 */
	public static function fincon_product_sync_partial($_FINCON, $_DATE_TO_WORK_WITH){
		
		$_DATA = $_FINCON->GetStockChanged($_DATE_TO_WORK_WITH);

		$_LIST = $_DATA['StockList'];

		if(is_array($_LIST)):
			foreach($_LIST as $_ITEM):

				$_SKU = $_ITEM->ItemNo;

				$_FDATA = $_FINCON->GetStockItem($_SKU, true);

				self::insert_update_product($_FDATA, $_FINCON->_LOC, $_FINCON->_EXCLUDE);

			endforeach;
		endif;


	}

	/**
	 * Insert or update Woocommerce Product from Fincon
	 *
	 * @since    1.0.0
	 */
	public static function insert_update_product($_STOCK, $_FLOC, $_FEXCLUDE){

		$_DATA 		= $_STOCK['StockBuf'];

		$_NEW 		= false;

		if($_DATA->WebList == 'Y' && $_DATA->Active == 'Y' && $_DATA->CatWebList == 'Y'):

			$_LOC 		= $_STOCK['StockLoc'];
			$_SKU 		= $_DATA->ItemNo;
			$_ID 		= wc_get_product_id_by_sku($_SKU);
			$_PRICE 	= 'SellingPrice'.get_option('fincon_woocommerce_price');

			$_CATS = array();

			$_CAT_ID  	= self::get_category_id($_DATA->Category,$_DATA->CatDescription);
			if($_CAT_ID):
				$_CATS[] = $_CAT_ID;
			endif;

			$_BRAND_ID 	= self::get_category_id($_DATA->Brand,$_DATA->BrandDescription, 'pa_brand');
			if($_BRAND_ID):
				//$_CATS[] = $_BRAND_ID;
			endif;

			$_GROUP_ID 	= self::get_category_id($_DATA->Group,$_DATA->GroupDescription);
			if($_GROUP_ID):
				$_CATS[] = $_GROUP_ID;
			endif;

			$_CLASS_ID 	= self::get_category_id($_DATA->ItemClass, $_DATA->ItemClassDescription);
			if($_CLASS_ID):
				$_CATS[] = $_CLASS_ID;
			endif;

			if ($_ID !== 0):

				/* UPDATE */
				$_PROD = wc_get_product($_ID);

			else:

				/* INSERT */
				$_PROD = new WC_Product();
				$_PROD->set_sku($_SKU);

				$_NEW = true;

			endif;

			$_STOCKQTY = $_LOC[intval($_FLOC)]->InStock;

			if($_FEXCLUDE):

				$_STOCKQTY -= $_LOC[intval($_FLOC)]->SalesOrders;	

			endif;

			if($_NEW):

				$_PROD->set_name($_DATA->Description);

				$_PROD->set_status(get_option('fincon_woocommerce_product_status')); 

				$_PROD->set_catalog_visibility('visible');

				$_PROD->set_description($_DATA->Description);

				$_PROD->set_manage_stock(true);

				$_PROD->set_backorders('no');

				$_PROD->set_reviews_allowed(true);

				$_PROD->set_sold_individually(false);

			endif;

			

			$_PROD->set_category_ids($_CATS);
	 
			$_PROD->set_price($_DATA->$_PRICE);

			$_PROD->set_regular_price($_DATA->$_PRICE);
			

			$_PROD->set_stock_quantity($_STOCKQTY);

			if ($_STOCKQTY > 0):
				$_PROD->set_stock_status('instock');
			else:
				$_PROD->set_stock_status('outofstock');
			endif;			

			$_PROD->set_weight($_DATA->Weight);

			$_PROD->set_length($_DATA->BoxLength);

			$_PROD->set_width($_DATA->BoxWidth);

			$_PROD->set_height($_DATA->BoxHeight);
			
			$_PROD->save();


			echo $_SKU.' -- '.$_DATA->Description.'<br/>';

		endif;



	}

	/**
	 * Run an Import of Users
	 *
	 * @since    1.0.0
	 */
	public static function fincon_user_sync_full($_FINCON){

		$_FIRST = $_FINCON->GetDebAccountFirst();

		$_EOF = $_FIRST['Eof'];

		

		if(!$_EOF):

			self::insert_update_user($_FIRST);

		endif;

		while(!$_EOF):

			$_USER = $_FINCON->GetDebAccountNext($_EOF);

			self::insert_update_user($_USER);

			$_EOF = $_USER['Eof'];


		endwhile;

		

	}

	/**
	 * Run a partial import of users based on the last date the import ran.
	 *
	 * @since    1.0.0
	 */
	public static function fincon_user_sync_partial($_FINCON, $_DATE_TO_WORK_WITH){
		
		$_DATA = $_FINCON->GetAccountsChanged($_DATE_TO_WORK_WITH);
		var_dump($_DATA);
		$_LIST = $_DATA['AccountList'];
		if(is_array($_LIST)):
			foreach($_LIST as $_ITEM):

				$_ACC_NO = $_ITEM->AccNo;

				$_FDATA = $_FINCON->GetDebAccount($_ACC_NO);

				self::insert_update_user($_FDATA, $_FINCON->_LOC, $_FINCON->_EXCLUDE);

			endforeach;

		endif;


	}

	/**
	 * Insert or update User from Fincon
	 *
	 * @since    1.0.0
	 */
	public static function insert_update_user($_USER){

		$_ACC = $_USER['AccountBuf'];

		if ($_ACC->WebList == 'Y' && $_ACC->Active == 'Y'):

			$_ID = username_exists($_ACC->AccNo);

			if($_ID == 0):

				$_ID = wp_create_user($_ACC->AccNo, $_ACC->EMail, $_ACC->Password);
				$_USER = new WP_User($_ID);
				$_USER->set_role('customer');

			endif;

			update_user_meta( $_ID, "billing_company", $_ACC->DebName);
			update_user_meta( $_ID, "billing_address_1", $_ACC->Addr1);
			update_user_meta( $_ID, "billing_address_2", $_ACC->Addr2);
			update_user_meta( $_ID, "billing_city", $_ACC->Addr3);
			update_user_meta( $_ID, "billing_postcode", $_ACC->PCode);
			update_user_meta( $_ID, "billing_country", 'ZA' );
			update_user_meta( $_ID, "billing_state", '' );
			update_user_meta( $_ID, "billing_email", $_ACC->StatementMail);
			update_user_meta( $_ID, "billing_phone", $_ACC->TelNo);

			update_user_meta( $_ID, "shipping_first_name",$_ACC->DelName);
			update_user_meta( $_ID, "shipping_last_name", '' );
			update_user_meta( $_ID, "shipping_company", $_ACC->DebName );
			update_user_meta( $_ID, "shipping_address_1", $_ACC->DelAddr1 );
			update_user_meta( $_ID, "shipping_address_2", $_ACC->DelAddr2 );
			update_user_meta( $_ID, "shipping_city", $_ACC->DelAddr3 );
			update_user_meta( $_ID, "shipping_postcode", $_ACC->DelPCode );
			update_user_meta( $_ID, "shipping_country", 'ZA' );
			update_user_meta( $_ID, "shipping_state", $_ACC->DelAddr4 );

		endif;
	}

}

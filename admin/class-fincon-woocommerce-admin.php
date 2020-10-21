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
	 * Set Cron Schedules for intial import
	 *
	 * @since    1.1.2
	 */
	public function setup_initial_schedules(){


		if(get_option('fincon_woocommerce_active') == 'yes'):

			if(get_option('fincon_woocommerce_sync_stock') == 'yes' && !get_option('fincon_woocommerce_do_inital_product_sync')):

				if(!get_option('fincon_woocommerce_product_sync_running') || get_option('fincon_woocommerce_product_sync_running') == 'no'):

					wp_schedule_single_event(time(), 'fincon_woocommerce_sync_products');

				endif;
				
			endif;

			if(get_option('fincon_woocommerce_sync_accounts') == 'yes' && !get_option('fincon_woocommerce_do_inital_user_sync')):

				if(!get_option('fincon_woocommerce_user_sync_running') || get_option('fincon_woocommerce_user_sync_running') == 'no'):

					wp_schedule_single_event(time(), 'fincon_woocommerce_sync_accounts');

				endif;

			endif;

		endif;

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

	    $schedules['fiveseconds'] = array(
        	'interval' => 5,
        	'display'  => esc_html__( 'Every Five Seconds' ), 
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


		if (! wp_next_scheduled( 'fincon_woocommerce_clean_logs')):

			wp_schedule_event(time(), 'daily', 'fincon_woocommerce_clean_logs');

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

			$_FINCON = new WC_Fincon();
			$_FINCON->LogIn();
			$_FINCON->SendSOToFincon($order_id);
			$_FINCON->LogOut();


			if(get_option('fincon_woocommerce_enable_so_email') == 'yes' && get_post_meta($order_id, '_fincon_sales_error', true)):
				$this->do_email_notification('so', $_FINCON->_ERRORS, $order_id);
			endif;

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

		$_FINCON = new WC_Fincon();

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

		$_LIVE = WC_Fincon::ValidateCustom($URL, $UN, $PW, $DATA, $EXT);

		$GLOBALS['finconactivemsg'] = '';
		$GLOBALS['fincondownmsg'] = '';

		if($_LIVE['return']):
			update_option('fincon_woocommerce_admin_message_text', 'Fincon <strong><em>is</em></strong> connected.');
			update_option('fincon_woocommerce_admin_message_type', 'notice-info');
		else:
			update_option('fincon_woocommerce_admin_message_text', 'Fincon is <strong><em>not</em></strong> connected: '.$_LIVE['ErrorString']);
			update_option('fincon_woocommerce_admin_message_type', 'notice-error');
		endif;

		update_option('fincon_woocommerce_admin_message_date', wp_date('Y/m/d H:i:s'));

	}

	/**
	 * Checks whether the Fincon Connection is active
	 *
	 * @since    1.0.0
	 */
	public static function check_api(){

		$_FINCON = new WC_Fincon();
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

			if(get_option('fincon_woocommerce_enable_connection_email') == 'yes'):
				self::do_email_notification('connection', $_LIVE['ErrorString']);
			endif;

		endif;

		update_option('fincon_woocommerce_admin_message_date', wp_date('Y/m/d H:i:s'));

	}

	/**
	 * Cleans Old Logs
	 *
	 * @since    1.2.0
	 */
	public static function clean_logs(){
		WC_Fincon_Logger::clean();
	}

	/**
	 * Email Notifications
	 *
	 * @since    1.1.1
	 */
	public function do_email_notification($TYPE, $_ERROR = null, $_ID = null){

		$_SEND_TO = get_option('fincon_woocommerce_email_list');

		$_LOG_FILE = WC_Fincon_Logger::attachment();

		$_ATTACHMENTS = array($_LOG_FILE);

		$_MESSAGE = '<p>To whom it may concern, </p>';


		$_HAS_ERRORS = false;
		$_ERROR_TEXT = '';

		if(is_string($_ERROR) && strlen($_ERROR) > 0):
			$_HAS_ERRORS = true;
			$_ERROR_TEXT .= '<p>The error that has been logged is: <strong>'.$_ERROR.'</strong></p>';
		endif;

		if(is_array($_ERROR) && count($_ERROR) > 0):
			$_HAS_ERRORS = true;

			$_ERROR_TEXT .= '<p><em>The errors encountered were:</em></p>';
			$_ERROR_TEXT .= '<ul>';
			foreach($_ERROR as $_ERR):
				$_ERROR_TEXT .= '<li>'.$_ERR.'</li>';
			endforeach;
			$_ERROR_TEXT .= '</ul>';
		endif;








		switch($TYPE):

			case "connection":

				$_SUBJECT = 'Fincon Connection on '.get_bloginfo('name').' has gone down';
				
				$_MESSAGE .= '<p>This is a courtesy email to inform you that the Fincon connection on your website <strong>'.get_bloginfo('name').'</strong> has gone down.</p>';

				$_MESSAGE .= '<p>The sync has been disabled automatically for now. Please check your settings and adjust accordingly.</p>';

			break;

			case "products":

				if($_HAS_ERRORS):

					$_SUBJECT = 'Product Sync on '.get_bloginfo('name').' has completed with errors';

				else:

					$_SUBJECT = 'Product Sync on '.get_bloginfo('name').' has completed successfully';

				endif;

				$_MESSAGE .= '<p>This is a courtesy email to inform you that a Fincon product sync on your website <strong>'.get_bloginfo('name').'</strong> has completed.</p>';

			break;

			case "users":

				if($_HAS_ERRORS):

					$_SUBJECT = 'User Sync on '.get_bloginfo('name').' has completed with errors';

				else:

					$_SUBJECT = 'User Sync on '.get_bloginfo('name').' has completed successfully';

				endif;

				$_MESSAGE .= '<p>This is a courtesy email to inform you that a Fincon user sync on your website <strong>'.get_bloginfo('name').'</strong> has completed.</p>';


			break;

			case "so":

				$_SUBJECT = 'Sales Order Creation failure on '.get_bloginfo('name');

				$_MESSAGE .= '<p>This is a courtesy email to inform you that a Fincon Sales Order failed to be created for Order #'.$_ID.' on your website <strong>'.get_bloginfo('name').'</strong>.</p>';

			break;

		endswitch;

		if($_HAS_ERRORS && strlen($_ERROR_TEXT) > 0):
			$_MESSAGE .= $_ERROR_TEXT;
		endif;

		$_MESSAGE .= '<p>The log file for today is attached. You can also view it on your Fincon status page.</p>';

		$_MESSAGE .= '<p>Fincon Accounting.</p>';


		$_HEADERS = array('Content-Type: text/html; charset=UTF-8');

		wp_mail($_SEND_TO, $_SUBJECT, $_MESSAGE, $_HEADERS, $_ATTACHMENTS);

	}

	/**
	 * Admin hook for custom pages
	 *
	 * @since    1.2.0
	 */
	public function admin_menu(){

		add_submenu_page( 'woocommerce', 'Fincon Status', 'Fincon Status', 'manage_woocommerce', 'fincon-status', array($this, 'admin_menu_stats_display'));

	}

	/**
	 * Status page
	 *
	 * @since    1.2.0
	 */
	public function admin_menu_stats_display(){

    	$_FILES = WC_Fincon_Logger::fetch();

		$_ARRAY_OF_FINCON_VARIABLES = array(
			'fincon_woocommerce_active' => get_option('fincon_woocommerce_active'),
			'fincon_woocommerce_admin_message_text' => get_option('fincon_woocommerce_admin_message_text'),
			'fincon_woocommerce_admin_message_type' => get_option('fincon_woocommerce_admin_message_type'),
			'fincon_woocommerce_admin_message_date' => get_option('fincon_woocommerce_admin_message_date'),
			'fincon_woocommerce_do_inital_product_sync' => get_option('fincon_woocommerce_do_inital_product_sync'),
			'fincon_woocommerce_do_inital_product_sync_date' => get_option('fincon_woocommerce_do_inital_product_sync_date'),
			'fincon_woocommerce_do_inital_user_sync' => get_option('fincon_woocommerce_do_inital_user_sync'),
			'fincon_woocommerce_do_inital_user_sync_date' => get_option('fincon_woocommerce_do_inital_user_sync_date'),
			'fincon_woocommerce_product_sync_running' => get_option('fincon_woocommerce_product_sync_running'),
			'fincon_woocommerce_last_product_update' => get_option('fincon_woocommerce_last_product_update'),
			'fincon_woocommerce_user_sync_running' => get_option('fincon_woocommerce_user_sync_running'),
			'fincon_woocommerce_last_user_update' => get_option('fincon_woocommerce_last_user_update'),
			'fincon_woocommerce_logged_in_session' => get_option('fincon_woocommerce_logged_in_session')
		);
		extract($_ARRAY_OF_FINCON_VARIABLES);


		$_CRON_URL = FINCON_WOOCOMMERCE_CRON_BASE;

		?>
		<div class="wrap fincon-status-page">

       	<h1>Fincon Status</h1>
		<div id="FC30SECONDS" class="fincon-admin-info-block"><small><em>This page will refresh every 30 seconds</em></small></div>

		<div class="fincon-admin-status-block">
			<h2>Server Variables</h2>

			<div class="fincon-admin-status-item"> <span>PHP Version:</span> <strong><?php echo phpversion(); ?></strong></div>
		</div>

    	<div class="fincon-admin-status-block">
    		<h2>Fincon Status</h2>

    		<div class="fincon-admin-status-item">
    			<span>Is Fincon Activated:</span> 
				<?php if($fincon_woocommerce_active == 'yes'): ?>
					<strong class="fincon-admin-success">Yes</strong>
				<?php else: ?>
					<strong class="fincon-admin-failure">No</strong>
				<?php endif; ?>
    		</div>

    		<?php if($fincon_woocommerce_logged_in_session != ''): ?>
    			<div class="fincon-admin-status-item">
	    			<span>Current Logged In Session:</span> 
	    			<strong><?php echo $fincon_woocommerce_logged_in_session; ?></strong>
	    		</div>
    		<?php endif; ?>
			
			<?php if($fincon_woocommerce_admin_message_text != ''): ?>
	    		<div class="fincon-admin-status-item">
	    			<span>Fincon Connection Text:</span> 
	    			<strong class="<?php echo $fincon_woocommerce_admin_message_type; ?>"><?php echo $fincon_woocommerce_admin_message_text; ?></strong>
	    		</div>
    		<?php endif; ?>

    		<?php if($fincon_woocommerce_admin_message_date): ?>
				<div class="fincon-admin-status-item">
	    			<span>Last Connection Check:</span> <strong><?php echo $fincon_woocommerce_admin_message_date; ?></strong>
	    		</div>
    		<?php endif; ?>

	    	<?php if(wp_next_scheduled('fincon_woocommerce_check_status')): ?>
				<div class="fincon-admin-status-item">
	    			<span>Next Connection Check:</span> <strong><?php echo wp_date('Y/m/d H:i:s', wp_next_scheduled('fincon_woocommerce_check_status')); ?></strong>
	    		</div>
	    	<?php endif; ?>



    	</div>

    	<div class="fincon-admin-status-block">
    		<h2>Sync Status</h2>

    		<h4>Initial Syncs</h4>

    		<div class="fincon-admin-status-item">
    			<span>Did Initial Product Sync Run:</span> 
				<?php if($fincon_woocommerce_do_inital_product_sync == 'yes'): ?>
					<strong class="fincon-admin-success">Yes</strong>
				<?php else: ?>
					<strong class="fincon-admin-failure">No</strong>
				<?php endif; ?>
    		</div>
    		<?php if($fincon_woocommerce_do_inital_product_sync_date): ?>
	    		<div class="fincon-admin-status-item">
	    			<span>Initial Product Sync:</span> <strong><?php echo $fincon_woocommerce_do_inital_product_sync_date; ?></strong>
	    		</div>
	    	<?php endif; ?>

    		<div class="fincon-admin-status-item">
    			<span>Did Initial User Sync Run:</span>
				<?php if($fincon_woocommerce_do_inital_user_sync == 'yes'): ?>
					<strong class="fincon-admin-success">Yes</strong>
				<?php else: ?>
					<strong class="fincon-admin-failure">No</strong>
				<?php endif; ?>
    		</div>
    		<?php if($fincon_woocommerce_do_inital_user_sync_date): ?>
	    		<div class="fincon-admin-status-item">
	    			<span>Initial User Sync:</span> <strong><?php echo $fincon_woocommerce_do_inital_user_sync_date; ?></strong>
	    		</div>
	    	<?php endif; ?>

    		<h4>Product Syncs</h4>

    		<div class="fincon-admin-status-item">
    			<span>Is a Product Sync Running:</span>
    			<?php if($fincon_woocommerce_product_sync_running == 'yes'): ?>
					<strong class="fincon-admin-success">Yes</strong>
				<?php else: ?>
					<strong class="fincon-admin-failure">No</strong>
				<?php endif; ?>
    		</div>

			<?php if($fincon_woocommerce_product_sync_running == 'yes'): ?>
				<div class="fincon-admin-status-item">
	    			<span>Last Product Sync:</span> <strong class="fincon-admin-success">In Progress</strong>
	    		</div>
    		<?php elseif($fincon_woocommerce_last_product_update): ?>
	    		<div class="fincon-admin-status-item">
	    			<span>Last Product Sync:</span> <strong><?php echo $fincon_woocommerce_last_product_update; ?></strong>
	    		</div>
	    	<?php endif; ?>

	    	<?php if(wp_next_scheduled('fincon_woocommerce_sync_products')): ?>
				<div class="fincon-admin-status-item">
	    			<span>Next Product Sync:</span> <strong><?php echo wp_date('Y/m/d H:i:s', wp_next_scheduled('fincon_woocommerce_sync_products')); ?></strong>
	    		</div>
	    	<?php endif; ?>

    		<h4>User Syncs</h4>

    		<div class="fincon-admin-status-item">
    			<span>Is a User Sync Running:</span>
    			<?php if($fincon_woocommerce_user_sync_running == 'yes'): ?>
					<strong class="fincon-admin-success">Yes</strong>
				<?php else: ?>
					<strong class="fincon-admin-failure">No</strong>
				<?php endif; ?>
    		</div>

    		<?php if($fincon_woocommerce_user_sync_running == 'yes'): ?>
				<div class="fincon-admin-status-item">
	    			<span>Last Product Sync:</span> <strong class="fincon-admin-success">In Progress</strong>
	    		</div>
    		<?php elseif($fincon_woocommerce_last_user_update): ?>
	    		<div class="fincon-admin-status-item">
	    			<span>Last User Sync:</span> <strong><?php echo $fincon_woocommerce_last_user_update; ?></strong>
	    		</div>
	    	<?php endif; ?>

	    	<?php if(wp_next_scheduled('fincon_woocommerce_sync_accounts')): ?>
				<div class="fincon-admin-status-item">
	    			<span>Next User Sync:</span> <strong><?php echo wp_date('Y/m/d H:i:s', wp_next_scheduled('fincon_woocommerce_sync_accounts')); ?></strong>
	    		</div>
	    	<?php endif; ?>


    	</div>



    	<div class="fincon-admin-status-block">
    		<h2>WP Cron Status</h2>

    		<div class="fincon-admin-status-item">
    			<span>Is WP CRON enabled:</span>
    			<?php if(defined('DISABLE_WP_CRON')): ?>
					<?php if(DISABLE_WP_CRON == true || DISABLE_WP_CRON == 1 || DISABLE_WP_CRON == "true"): ?>
					<strong class="fincon-admin-success">No</strong>
					<?php else: ?>
					<strong class="fincon-admin-success">Yes</strong>
					<?php endif; ?>
    			<?php else: ?>
					<strong class="fincon-admin-success">Yes</strong>
    			<?php endif; ?>
    		</div>
			

    		<h2>External Crons</h2>
    		<div class="fincon-admin-status-item">
    			<span>Sync Connection: </span><br/><strong><?php echo $_CRON_URL; ?>?type=connection</strong>
    		</div>
    		<div class="fincon-admin-status-item">
    			<span>Sync Products: </span><br/><strong> <?php echo $_CRON_URL; ?>?type=stock</strong>
    		</div>
    		<div class="fincon-admin-status-item">
    			<span>Sync Users: </span><br/><strong> <?php echo $_CRON_URL; ?>?type=users</strong>
    		</div>
    		<div class="fincon-admin-status-item">
    			<span>Clean Logs: </span><br/><strong> <?php echo $_CRON_URL; ?>?type=logs</strong>
    		</div>
    		<div class="fincon-admin-status-item">
    			<span>Run All: </span><br/><strong> <?php echo $_CRON_URL; ?>?type=all</strong>
    		</div>


    	</div>

    	<?php if(is_array($_FILES) && count($_FILES) > 0): ?>

    	<div class="fincon-admin-status-block">
    		<h2>Logs</h2>

    		<?php foreach($_FILES as $_FILE): ?>
			
				<div class="fincon-admin-status-item">
	    			<a target="_blank" href="<?php WC_Fincon_Logger::link($_FILE); ?>"><?php echo $_FILE; ?></a>
	    		</div>

    		<?php endforeach; ?>

    	</div>

    	<?php endif; ?>

    	<div class="fincon-admin-trigger-block">
    		<a class="fincon-admin-trigger" data-trigger="fincon_admin_trigger_product_sync"><span class="dashicons dashicons-cart"></span> Trigger Product Sync</a> | <a class="fincon-admin-trigger" data-trigger="fincon_admin_trigger_user_sync"><span class="dashicons dashicons-admin-users"></span> Trigger User Sync</a> | <a class="fincon-admin-trigger" data-trigger="fincon_admin_trigger_connection_sync"><span class="dashicons dashicons-admin-tools"></span> Trigger Connection Sync</a>
    	</div>
        </div>

        <?php
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

      	elseif(get_term_by( 'name', $_DESC, $_TAX, ARRAY_A )):

      		$_TERM = get_term_by( 'name', $_DESC, $_TAX, ARRAY_A );
      		$_ID =  $_TERM['term_id'];

      		wp_update_term($_ID, $_TAX, array('name' => $_NAME));

		    WC_Fincon_Logger::log('Category Update: Name Changed From '.$_DESC.' to '.$_NAME);

		else:
			$_TERM = wp_insert_term($_NAME, $_TAX, array('description'=> '' ,'slug' => $_NAME));

			if(!is_wp_error($_TERM)):
		    	$_ID =  $_TERM['term_id'];

		    	WC_Fincon_Logger::log('Category Created: '.$_NAME);

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
	public static function sync_stock_items($ISCRON = false){

		$DOWORK = $ISCRON;
			
		if(!get_option('fincon_woocommerce_product_sync_running') || get_option('fincon_woocommerce_product_sync_running') == 'no'):
			$DOWORK = true;
		endif;

		if($DOWORK):

			set_time_limit(0);
			@ini_set('max_execution_time',0);

			update_option('fincon_woocommerce_product_sync_running', 'yes');

			$_LAST_UPDATE = get_option('fincon_woocommerce_last_product_update');

			/* 1.3.0 - add images flag */
			$_DO_IMAGES = false;

			if(get_option('fincon_woocommerce_sync_product_images') == 'yes'):

				$_DO_IMAGES = true;

			endif;

			if(!get_option('fincon_woocommerce_product_sync_eof')):
				WC_Fincon_Logger::log('Product Sync Started');
			endif;

			$_FINCON = new WC_Fincon();

			$_FINCON->LogIn();

			$_COUNT = 0;

			if($_LAST_UPDATE && !get_option('fincon_woocommerce_product_sync_eof')):

				$_DATE_TO_WORK_WITH = self::dateTimeToDouble($_LAST_UPDATE);

				$_COUNT = self::fincon_product_sync_partial($_FINCON, $_DATE_TO_WORK_WITH, $_DO_IMAGES);

			else:

				if(!get_option('fincon_woocommerce_do_inital_product_sync')):
					update_option('fincon_woocommerce_do_inital_product_sync', 'yes');
					update_option('fincon_woocommerce_do_inital_product_sync_date', wp_date('Y/m/d H:i:s'));
				endif;

				$_COUNT = self::fincon_product_sync_full($_FINCON, $_DO_IMAGES);

			endif;


			$_FINCON->LogOut();

			update_option('fincon_woocommerce_product_sync_running', 'no');

			if(!get_option('fincon_woocommerce_product_sync_eof')):
			
				update_option('fincon_woocommerce_last_product_update', wp_date('Y/m/d H:i:s'));

				WC_Fincon_Logger::log('Product Sync Ended');
				
				if(get_option('fincon_woocommerce_enable_product_email') == 'yes' && $_COUNT > 0):
					self::do_email_notification('products', $_FINCON->_ERRORS);
				endif;

			else:

				if($ISCRON):
					self::sync_stock_items($ISCRON);
				else:
					wp_schedule_single_event(time(), 'fincon_woocommerce_sync_products');
				endif;

			endif;

		endif;

		

	}

	/**
	 * Function to manage import and update of Users.
	 *
	 * @since    1.0.0
	 */
	public static function sync_user_items($ISCRON = false){	

		$DOWORK = $ISCRON;

		if(!get_option('fincon_woocommerce_user_sync_running') || get_option('fincon_woocommerce_user_sync_running') == 'no'):
			$DOWORK = true;
		endif;

		
		if($DOWORK):

			set_time_limit(0);
			@ini_set('max_execution_time',0);

			update_option('fincon_woocommerce_user_sync_running', 'yes');

			$_LAST_UPDATE = get_option('fincon_woocommerce_last_user_update');

			if(!get_option('fincon_woocommerce_user_sync_eof')):
				WC_Fincon_Logger::log('User Sync Started');
			endif;

			$_FINCON = new WC_Fincon();

			$_FINCON->LogIn();

			$_COUNT = 0;

			if($_LAST_UPDATE && !get_option('fincon_woocommerce_user_sync_eof')):

				$_DATE_TO_WORK_WITH = self::dateTimeToDouble($_LAST_UPDATE);

				$_COUNT = self::fincon_user_sync_partial($_FINCON, $_DATE_TO_WORK_WITH);

			else:

				if(!get_option('fincon_woocommerce_do_inital_user_sync')):
					update_option('fincon_woocommerce_do_inital_user_sync', 'yes');
					update_option('fincon_woocommerce_do_inital_user_sync_date', wp_date('Y/m/d H:i:s'));
				endif;

				$_COUNT = self::fincon_user_sync_full($_FINCON);

			endif;

			$_FINCON->LogOut();

			update_option('fincon_woocommerce_user_sync_running', 'no');

			if(!get_option('fincon_woocommerce_user_sync_eof')):
			
				update_option('fincon_woocommerce_last_user_update', wp_date('Y/m/d H:i:s'));

				WC_Fincon_Logger::log('User Sync Ended');
			
				if(get_option('fincon_woocommerce_enable_user_email') == 'yes' && $_COUNT > 0):
					self::do_email_notification('users', $_FINCON->_ERRORS);
				endif;

			else:

				if($ISCRON):
					self::sync_user_items($ISCRON);
				else:
					wp_schedule_single_event(time(), 'fincon_woocommerce_sync_accounts');
				endif;

			endif;

		endif;

		

	}

	/**
	 * Function to manage import and update of Products.
	 *
	 * @since    1.0.0
	 */
	public static function fincon_product_sync_full(&$_FINCON,$_DO_IMAGES){

		$_COUNT = 0;

		$_COUNTER = 0; $_BATCH = (int)get_option('fincon_woocommerce_product_batch');

		$RESUME = false;

		$_EOF = false;

		WC_Fincon_Logger::log('--Product Full Sync Batch Start--');

		if(get_option('fincon_woocommerce_product_sync_eof')):
			$RESUME = true;

			$_CONTINUE = get_option('fincon_woocommerce_product_sync_eof');

			$_FIRST = $_FINCON->GetStockItem($_CONTINUE, true);
			if($_FIRST['Eof']):
				$_EOF = $_FIRST['Eof'];
			endif;

		else:			

			$_FIRST = $_FINCON->GetStockFirst($_EOF);
			$_EOF = $_FIRST['Eof'];

		endif;

		if(!$_EOF && !$RESUME):

			$_COUNT += self::insert_update_product($_FIRST, $_FINCON,$_DO_IMAGES);

		endif;

		while(!$_EOF && ($_COUNTER < $_BATCH)):

			$_STOCK = $_FINCON->GetStockNext($_EOF);

			$_COUNT += self::insert_update_product($_STOCK, $_FINCON,$_DO_IMAGES);

			$_EOF = $_STOCK['Eof'];

			update_option('fincon_woocommerce_product_sync_eof', $_STOCK['StockBuf']->ItemNo);

			$_COUNTER++;

		endwhile;

		if(!$_EOF && $_COUNTER == $_BATCH):
			update_option('fincon_woocommerce_product_sync_eof', $_STOCK['StockBuf']->ItemNo);
			WC_Fincon_Logger::log('--Product Full Sync Batch End--');
		endif;

		if($_EOF):
			delete_option('fincon_woocommerce_product_sync_eof');
		endif;

		return $_COUNT;



	}

	/**
	 * Run a partial import of products based on the last date the import ran.
	 *
	 * @since    1.0.0
	 */
	public static function fincon_product_sync_partial(&$_FINCON, $_DATE_TO_WORK_WITH,$_DO_IMAGES){

		$_COUNT = 0;
		
		$_DATA = $_FINCON->GetStockChanged($_DATE_TO_WORK_WITH);

		$_LIST = $_DATA['StockList'];

		if(is_array($_LIST) && count($_LIST) > 0):

			WC_Fincon_Logger::log('--Product Partial Sync Start--');

			foreach($_LIST as $_ITEM):

				$_SKU = $_ITEM->ItemNo;

				$_FDATA = $_FINCON->GetStockItem($_SKU, true);

				$_COUNT += self::insert_update_product($_FDATA, $_FINCON,$_DO_IMAGES);

			endforeach;

			WC_Fincon_Logger::log('--Product Partial Sync End--');

		else:

			WC_Fincon_Logger::log('Product Sync: no products changes to sync ('.$_DATE_TO_WORK_WITH.')');

		endif;

		return $_COUNT;


	}

	/**
	 * Insert or update Woocommerce Product from Fincon
	 *
	 * @since    1.0.0
	 */
	public static function insert_update_product($_STOCK, &$_FINCON,$_DO_IMAGES){

		$_FLOC 		= $_FINCON->_S_LOC;
		$_FEXCLUDE 	= $_FINCON->_EXCLUDE;

		$_DATA 		= $_STOCK['StockBuf'];

		$_NEW 		= false;

		if($_DATA->WebList == 'Y' && $_DATA->Active == 'Y' && $_DATA->CatWebList == 'Y'):

			$_LOC 		= $_STOCK['StockLoc'];
			$_SKU 		= $_DATA->ItemNo;
			$_ID 		= wc_get_product_id_by_sku($_SKU);
			$_PRICE 	= 'SellingPrice'.get_option('fincon_woocommerce_price');

			$_CATS = array();

			$_ATTS = array();

			$_CAT_ID  	= self::get_category_id($_DATA->CatDescription, $_DATA->Category);
			if($_CAT_ID):
				$_CATS[] = $_CAT_ID;
			endif;

			$_BRAND_ID 	= self::get_category_id($_DATA->BrandDescription, $_DATA->Brand);
			if($_BRAND_ID):
				$_CATS[] = $_BRAND_ID;
			endif;

			$_GROUP_ID 	= self::get_category_id($_DATA->GroupDescription, $_DATA->Group);
			if($_GROUP_ID):
				$_CATS[] = $_GROUP_ID;
			endif;

			$_CLASS_ID 	= self::get_category_id($_DATA->ItemClassDescription, $_DATA->ItemClass);
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

			$_LOCATIONS = str_replace(" ", "", $_FLOC);
			$_LOCATIONS = explode(",", $_LOCATIONS);

			$_STOCKQTY = 0;

			foreach($_LOCATIONS as $_LOCATION):

				$_THIS_STOCK = $_LOC[intval($_LOCATION)]->InStock;

				if($_FEXCLUDE):
					$_THIS_STOCK -= $_LOC[intval($_LOCATION)]->SalesOrders;
				endif;

				$_STOCKQTY += $_THIS_STOCK;

			endforeach;

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


			/* 1.3.0 -- sync images */

			if($_DO_IMAGES):

				$_IMAGE = $_FINCON->GetStockImage($_SKU);

				if($_IMAGE):

					$_ATTACHMENT_ID = self::fincon_upload_attach_image($_SKU, $_IMAGE);

					$_PROD->set_image_id($_ATTACHMENT_ID);

				endif;

			endif;
			
			$_PROD->save();

			$_ID = $_PROD->get_id();

			if((int)$_ID > 0):

				if($_NEW):

					WC_Fincon_Logger::log('Product ('.$_SKU.'): Insert');

				return 1;

				else:

					WC_Fincon_Logger::log('Product ('.$_SKU.'): Updated');

				return 1;

				endif;
			

			else:


				if($_NEW):

					$_FINCON->_ERRORS[] = 'Product ('.$_SKU.'): Insert Failed';
					WC_Fincon_Logger::log('Product ('.$_SKU.'): Insert Failed');

					return 0;

				else:

					$_FINCON->_ERRORS[] = 'Product ('.$_SKU.'): Update Failed';
					WC_Fincon_Logger::log('Product ('.$_SKU.'): Updated Failed');

					return 0;

				endif;
				

			endif;

		else:

			$_SKU 		= $_DATA->ItemNo;
			$_ID 		= wc_get_product_id_by_sku($_SKU);

			if ($_ID !== 0):

				$_DELETE = wc_get_product($_ID);
                $_DELETE->delete();

                if('trash' === $_DELETE->get_status()):
                	wc_delete_product_transients($_ID);
                	WC_Fincon_Logger::log('Product ('.$_SKU.'): Deleted');
                	return 1;
                else:
                	WC_Fincon_Logger::log('Product ('.$_SKU.'): Deleted Failed');
                	return 0;
                endif;

			else:

				return 0;

			endif;	



		endif;


		return 0;



	}

	/**
	 * Run an Import of Users
	 *
	 * @since    1.0.0
	 */
	public static function fincon_user_sync_full(&$_FINCON){


		$_COUNT = 0;

		$_COUNTER = 0; $_BATCH = (int)get_option('fincon_woocommerce_user_batch');

		$RESUME = false;

		$_EOF = false;

		WC_Fincon_Logger::log('--User Full Sync Batch Start--');

		if(get_option('fincon_woocommerce_user_sync_eof')):
			$RESUME = true;

			$_CONTINUE = get_option('fincon_woocommerce_user_sync_eof');

			$_FIRST = $_FINCON->GetDebAccount($_CONTINUE, true);
			$_EOF = $_FIRST['Eof'];

		else:			

			$_FIRST = $_FINCON->GetDebAccountFirst();
			$_EOF = $_FIRST['Eof'];		

		endif;		

		if(!$_EOF && !$RESUME):

			$_COUNT += self::insert_update_user($_FIRST, $_FINCON, true);

		endif;

		while(!$_EOF && ($_COUNTER < $_BATCH)):

			$_USER = $_FINCON->GetDebAccountNext($_EOF);

			$_COUNT += self::insert_update_user($_USER, $_FINCON, true);

			$_EOF = $_USER['Eof'];

			update_option('fincon_woocommerce_user_sync_eof', $_USER['AccountBuf']->AccNo);

			$_COUNTER++;

		endwhile;

		if(!$_EOF && $_COUNTER == $_BATCH):
			update_option('fincon_woocommerce_user_sync_eof', $_USER['AccountBuf']->AccNo);
			WC_Fincon_Logger::log('--User Full Sync Batch End--');
		endif;

		if($_EOF):
			delete_option('fincon_woocommerce_user_sync_eof');
		endif;

		return $_COUNT;

		

	}

	/**
	 * Run a partial import of users based on the last date the import ran.
	 *
	 * @since    1.0.0
	 */
	public static function fincon_user_sync_partial(&$_FINCON, $_DATE_TO_WORK_WITH){

		$_COUNT = 0;
		
		$_DATA = $_FINCON->GetAccountsChanged($_DATE_TO_WORK_WITH);
		$_LIST = $_DATA['AccountList'];

		if(is_array($_LIST) && count($_LIST) > 0):

			WC_Fincon_Logger::log('--User Partial Sync Start--');

			foreach($_LIST as $_ITEM):

				$_ACC_NO = $_ITEM->AccNo;

				$_FDATA = $_FINCON->GetDebAccount($_ACC_NO);

				$_COUNT += self::insert_update_user($_FDATA, $_FINCON, false);

			endforeach;

			WC_Fincon_Logger::log('--User Partial Sync End--');

		else:

			WC_Fincon_Logger::log('User Sync: no user changes to sync ('.$_DATE_TO_WORK_WITH.')');

		endif;

		return $_COUNT;


	}

	/**
	 * Insert or update User from Fincon
	 *
	 * @since    1.0.0
	 */
	public static function insert_update_user($_USER, &$_FINCON, $LOOP){

		if($LOOP):
			$_ACC = $_USER['AccountBuf'];
		else:
			$_ACC = $_USER;
		endif;

		if ($_ACC->WebList == 'Y' && $_ACC->Active == 'Y'):

			$_DO_INSERT = true;

			if(!validate_username($_ACC->AccNo)):

				WC_Fincon_Logger::log('User ('.$_ACC->AccNo.') Insert Failed: Invalid Username.');
				$_FINCON->_ERRORS[] = 'User ('.$_ACC->AccNo.') Insert Failed: Invalid Username.';
				$_DO_INSERT = false;
				
			else:

				$_ID = username_exists($_ACC->AccNo);

				if($_ID == 0):

					$_ID = wp_create_user($_ACC->AccNo, $_ACC->Password, $_ACC->EMail);

					if(is_wp_error($_ID)):

						$_DO_INSERT = false;

						WC_Fincon_Logger::log('User ('.$_ACC->AccNo.') Insert Failed: '.$_ID->get_error_message());

						$_FINCON->_ERRORS[] = 'User ('.$_ACC->AccNo.') Insert Failed: '.$_ID->get_error_message();

					else:

						$_USER = new WP_User($_ID);
						$_USER->set_role('customer');

						WC_Fincon_Logger::log('User ('.$_ACC->AccNo.'): Insert');

					endif;				

				else:

					WC_Fincon_Logger::log('User ('.$_ACC->AccNo.'): Update');

				endif;

			endif;

			if($_DO_INSERT):

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

				return 1;

			else:

				return 0;

			endif;

		else:

			if($_ID > 0):
				wp_delete_user($_ID);
				WC_Fincon_Logger::log('User ('.$_ACC->AccNo.'): Deleted');
				return 1;
			else:

				return 0;

			endif;

		endif;
	}

	/**
	 * AJAX Function to run a product sync
	 *
	 * @since    1.2.0
	 */
	public static function fincon_admin_trigger_product_sync(){

		if(!get_option('fincon_woocommerce_product_sync_running') || get_option('fincon_woocommerce_product_sync_running') == 'no'):

			wp_schedule_single_event(time(), 'fincon_woocommerce_sync_products');

		endif;

		echo 'yes';

		exit;

	}

	/**
	 * AJAX Function to run a user sync
	 *
	 * @since    1.2.0
	 */
	public static function fincon_admin_trigger_user_sync(){

		if(!get_option('fincon_woocommerce_user_sync_running') || get_option('fincon_woocommerce_user_sync_running') == 'no'):

			wp_schedule_single_event(time(), 'fincon_woocommerce_sync_accounts');

		endif;

		echo 'yes';

		exit;
	}

	/**
	 * AJAX Function to check the FINCON connection
	 *
	 * @since    1.2.0
	 */
	public static function fincon_admin_trigger_connection_sync(){

		$this->check_api();

		echo 'yes';

		exit;
	}

	/**
	 * UPLOAD AND ATTACH PRODUCT IMAGE
	 *
	 * @since    1.3.0
	 */
	public static function fincon_upload_attach_image($SKU, $DATA){

		$post_id = wc_get_product_id_by_sku($SKU);

	    $image_data       	= base64_decode($DATA);

	    $file_info = self::fincon_mime_extension($SKU, $DATA);

	    if($file_info):

		    $image_name       	= $SKU.'.'.$file_info['ext'];
		    $upload_dir       	= wp_upload_dir();

		    $unique_file_name 	= wp_unique_filename( $upload_dir['path'], $image_name );
		    $filename         	= basename( $unique_file_name );

		    if( wp_mkdir_p( $upload_dir['path'] ) ) {
		        $file = $upload_dir['path'] . '/' . $filename;
		    } else {
		        $file = $upload_dir['basedir'] . '/' . $filename;
		    }

		    file_put_contents( $file, $image_data );

		    $attachment = array(
		        'post_mime_type' => $file_info['mime'],
		        'post_title'     => sanitize_file_name( $filename ),
		        'post_content'   => '',
		        'post_status'    => 'inherit'
		    );

		    $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
		    
		    require_once(ABSPATH . 'wp-admin/includes/image.php');

		    $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

		    wp_update_attachment_metadata( $attach_id, $attach_data );

		    return $attach_id;

		else:

			return false;

		endif;


	}

	/**
	 * SORT OUT MIME AND EXTENSION
	 *
	 * @since    1.3.0
	 */
	public static function fincon_mime_extension($SKU, $DATA){

	    $image_data       	= base64_decode($DATA);

	    $file_info = finfo_open();

		$mime_type = finfo_buffer($file_info, $image_data, FILEINFO_MIME_TYPE);

		finfo_close($file_info);

		$mimes = get_allowed_mime_types();

		$the_extension = false;

		foreach ( $mimes as $ext => $mime ):

		   if($mime == $mime_type):

		   	$_extensions = explode("|", $ext);

		   	$the_extension = $_extensions[0];

		   endif;

		endforeach;

		if($the_extension):

			return array('mime'=> $mime_type, 'ext' => $the_extension);

		else:

			WC_Fincon_Logger::log('Image for '.$SKU.' has failed to upload.');

			return false;

		endif;


	}

	/**
	 * REMOVE AND LIMIT CHECKOUT FIELDS 
	 *
	 * @since    1.3.0
	 */
	public static function woocommerce_default_address_fields($fields){


        unset($fields['address_2']);

        $fields['address_1']['maxlength'] 	= 40;
        $fields['city']['maxlength'] 		= 40;
        $fields['state']['maxlength'] 		= 40;
        $fields['postcode']['maxlength'] 	= 4;

        return $fields;

	}





}

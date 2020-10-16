<?php
/**
 * WooCommerce Account Settings.
 *
 * @package WooCommerce/Admin
 */
/**
 * WC_Settings_Accounts.
 */
class fincon_woocommerce_settings extends WC_Settings_Page {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->id    = 'fincon-woocommerce';
		$this->label = __( 'Fincon Settings', 'fincon-woocommerce' );
		parent::__construct();
	} 


	public function get_sections() {
		$sections = array(
			''                => __( 'General Settings', 'fincon-woocommerce' ),
			'products'            => __( 'Products', 'fincon-woocommerce' ),
			'orders'            => __( 'Orders', 'fincon-woocommerce' ),
			'users'        => __( 'Users', 'fincon-woocommerce' ),
			'emails'        => __( 'Emails', 'fincon-woocommerce' )
		);

		return apply_filters( 'woocommerce_get_sections_' . $this->id, $sections );
	}

	

	/**
	 * Get settings array.
	 *
	 * @return array
	 */
	public function get_settings($current_section = '') {

		$kri8it_settings = array();

		if(isset($_GET['section'])):
			$current_section = $_GET['section'];
		endif;


		switch($current_section):

			case '':

				$kri8it_settings = array(
					array(
						'title' => __( 'Fincon General Settings', 'fincon-woocommerce' ),
						'type'  => 'title',
						'id'    => 'fincon_woocommerce_settings',
					),
					array(
						'title'         => __( 'Section Options', 'fincon-woocommerce' ),
						'desc'          => __( 'Activate Fincon', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_active',
						'default'       => 'no',
						'checkboxgroup' => 'start',
						'type'          => 'checkbox'
					),
					array(
						'desc'          => __( 'Use Fincon Alternate Extension', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_ext',
						'default'       => 'no',
						'checkboxgroup' => '',
						'type'          => 'checkbox'
					),
					array(
						'title'         => __( 'Fincon URL', 'fincon-woocommerce' ),
						'desc'          => __( 'The Fincon WEB API Location', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_url',
						'default'       => '',
						'type'          => 'text'
					),
					array(
						'title'         => __( 'Fincon Username', 'fincon-woocommerce' ),
						'desc'          => __( 'The Fincon Username', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_username',
						'default'       => '',
						'type'          => 'text'
					),
					array(
						'title'         => __( 'Fincon Password', 'fincon-woocommerce' ),
						'desc'          => __( 'The Fincon Password', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_password',
						'default'       => '',
						'type'          => 'text'
					),
					array(
						'title'         => __( 'Fincon Data ID', 'fincon-woocommerce' ),
						'desc'          => __( 'The Fincon Data Set ', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_data',
						'default'       => '',
						'type'          => 'text'
					),
					array (
							'title' 	=> __('Time Interval', 'fincon-woocommerce'),
							'desc' 		=> __('Time interval at which sync should update the accounts and stock items.', 'fincon-woocommerce' ),
							'type' 		=> 'select',
							'default' 	=> '',
							'id' 		=> 'fincon_woocommerce_interval',
							'default' 	=> 'None',
							'options'   => array(
								'hourly'	=> __( 'Hourly', 'fincon-woocommerce' ),
								'twohours'	=> __( 'Every 2 Hours', 'fincon-woocommerce' ),
								'daily'	=> __( 'Once Daily', 'fincon-woocommerce' ),
								'twicedaily' => __( 'Twice Daily', 'fincon-woocommerce' ),
							)
					),
					array(
						'type' => 'sectionend',
						'id'   => 'fincon_woocommerce_settings',
					),
				);

			break;

			case 'orders':
				$kri8it_settings = array(
					array(
						'title' => __( 'Fincon Order Settings', 'fincon-woocommerce' ),
						'type'  => 'title',
						'id'    => 'fincon_woocommerce_settings',
					),						
					array(
						'title'			=> 'Section Options',
						'desc'          => __( 'Create Orders in Fincon', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_sync_orders',
						'default'       => 'no',
						'checkboxgroup' => 'start',
						'type'          => 'checkbox'
					),
					array(
						'desc'          => __( 'Use Guest Details as Debtor Details on Guest orders', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_pass_guest_user_info',
						'default'       => 'no',
						'checkboxgroup' => '',
						'type'          => 'checkbox'
					),
					array(
						'desc'          => __( 'Assign All Orders To Main Debtor Account', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_one_debtor_account',
						'default'       => 'no',
						'checkboxgroup' => 'end',
						'type'          => 'checkbox'
					),
					array(
						'title'         => __( 'Fincon Debtor Account', 'fincon-woocommerce' ),
						'desc'          => __( 'The Account used for logging orders. Will be used for all orders or just for Guest orders', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_account',
						'default'       => '',
						'type'          => 'text'
					),
					array(
						'title'         => __( 'Fincon Order Location', 'fincon-woocommerce' ),
						'desc'          => __( 'The Fincon Order Location ', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_order_location',
						'default'       => '00',
						'type'          => 'text'
					),				
					array(
						'type' => 'sectionend',
						'id'   => 'fincon_woocommerce_settings',
					)
				);

			break;

			case 'products':

				$kri8it_settings = array(
					array(
						'title' => __( 'Fincon Product Settings', 'fincon-woocommerce' ),
						'type'  => 'title',
						'id'    => 'fincon_woocommerce_settings',
					),
					array(
						'title'         => __( 'Section Options', 'fincon-woocommerce' ),
						'desc'          => __( 'Sync Stock', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_sync_stock',
						'default'       => 'no',
						'checkboxgroup' => 'start',
						'type'          => 'checkbox'
					),
					array(
						'desc'          => __( 'Validate Stock When Added To Cart', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_validate_add',
						'default'       => 'no',
						'checkboxgroup' => '',
						'type'          => 'checkbox'
					),
					array(
						'desc'          => __( 'Validate Stock At Cart/Checkout', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_validate_checkout',
						'default'       => 'no',
						'checkboxgroup' => '',
						'type'          => 'checkbox'
					),
					array(
						'desc'          => __( 'Sync Product Images', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_sync_product_images',
						'default'       => 'no',
						'checkboxgroup' => '',
						'type'          => 'checkbox'
					),
					array(
						'desc'          => __( 'Exclude Stock Assigned to Sales Orders when calculating stock', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_exclude_order',
						'default'       => 'no',
						'checkboxgroup' => 'end',
						'type'          => 'checkbox'
					),
					array(
						'title'         => __( 'Fincon Stock Location(s)', 'fincon-woocommerce' ),
						'desc'          => __( 'The Fincon Stock Location (comma separated to use multiple)', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_stock_location',
						'default'       => '00',
						'type'          => 'text'
					),
					array (
						'title' 		=> __('Initial Product Import Batch Size', 'fincon-woocommerce'),
						'desc' 			=> __('The batch size for importing the first time.', 'fincon-woocommerce' ),
						'type' 			=> 'number',
						'default' 		=> 500,
						'custom_attributes' => array(
								'min' 	=> 1,
								'max' 	=> 500,
								'step' 	=> 1,
						),
						'id' 			=> 'fincon_woocommerce_product_batch',
					),
					array (
						'title' 		=> __('Price structure', 'fincon-woocommerce'),
						'desc' 			=> __('The stock item price type (1 – 6) to be used for selling prices.', 'fincon-woocommerce' ),
						'type' 			=> 'number',
						'default' 		=> 1,
						'custom_attributes' => array(
								'min' 	=> 1,
								'max' 	=> 6,
								'step' 	=> 1,
						),
						'id' 			=> 'fincon_woocommerce_price',
					),
					array (
							'title' 	=> __('Product Status', 'fincon-woocommerce'),
							'desc' 		=> __('Set added product status to', 'fincon-woocommerce' ),
							'type' 		=> 'select',
							'default' 	=> '',
							'id' 		=> 'fincon_woocommerce_product_status',
							'default' 	=> 'None',
							'options'   => array(
								'draft'	=> __( 'Draft', 'fincon-woocommerce' ),
								'publish'	=> __( 'Published', 'fincon-woocommerce' )
							)
					),
					array(
						'title'         => __( 'Fincon Delivery SKU', 'fincon-woocommerce' ),
						'desc'          => __( 'The Fincon Delivery SKU', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_delivery',
						'default'       => '',
						'type'          => 'text'
					),
					array(
						'title'         => __( 'Fincon Coupon SKU', 'fincon-woocommerce' ),
						'desc'          => __( 'The Fincon Coupon SKU', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_coupon',
						'default'       => '',
						'type'          => 'text'
					),
					array(
						'type' => 'sectionend',
						'id'   => 'fincon_woocommerce_settings',
					),
				);

			break;

			case 'users':

				$kri8it_settings = array(
					array(
						'title' => __( 'Fincon Settings', 'fincon-woocommerce' ),
						'type'  => 'title',
						'id'    => 'fincon_woocommerce_settings',
					),
					array(
						'title'         => __( 'Section Options', 'fincon-woocommerce' ),
						'desc'          => __( 'Sync Users', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_sync_users',
						'default'       => 'no',
						'checkboxgroup' => 'start',
						'type'          => 'checkbox'
					),/*
					array(
						'desc'          => __( 'Create Users in Fincon', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_create_users',
						'default'       => 'no',
						'checkboxgroup' => '',
						'type'          => 'checkbox'
					),*/
					/*
					array(
						'title'         => __( 'Sales Rep Code', 'fincon-woocommerce' ),
						'desc'          => __( 'For New Users', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_sales_rep',
						'default'       => '',
						'type'          => 'text'
					),
					*/
					array (
						'title' 		=> __('Initial User Import Batch Size', 'fincon-woocommerce'),
						'desc' 			=> __('The batch size for importing the first time.', 'fincon-woocommerce' ),
						'type' 			=> 'number',
						'default' 		=> 500,
						'custom_attributes' => array(
								'min' 	=> 1,
								'max' 	=> 500,
								'step' 	=> 1,
						),
						'id' 			=> 'fincon_woocommerce_user_batch',
					),
					array(
						'type' => 'sectionend',
						'id'   => 'fincon_woocommerce_settings',
					),
				);

			break;


			case 'emails':

				$kri8it_settings = array(
					array(
						'title' => __( 'Fincon Settings', 'fincon-woocommerce' ),
						'type'  => 'title',
						'id'    => 'fincon_woocommerce_settings',
					),
					array(
						'title'         => __( 'Section Options', 'fincon-woocommerce' ),
						'desc'          => __( 'Enable Connection Failure Email', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_enable_connection_email',
						'default'       => 'no',
						'checkboxgroup' => 'start',
						'type'          => 'checkbox'
					),
					array(
						'desc'          => __( 'Enable Product Sync Completion Email', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_enable_product_email',
						'default'       => 'no',
						'checkboxgroup' => '',
						'type'          => 'checkbox'
					),
					array(
						'desc'          => __( 'Enable User Sync Completion Email', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_enable_user_email',
						'default'       => 'no',
						'checkboxgroup' => '',
						'type'          => 'checkbox'
					),
					array(
						'desc'          => __( 'Enable Sales Order Failure Email', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_enable_so_email',
						'default'       => 'no',
						'checkboxgroup' => 'end',
						'type'          => 'checkbox'
					),
					array(
						'title'         => __( 'Email Address', 'fincon-woocommerce' ),
						'desc'          => __( 'The email address that will be notified', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_email_list',
						'default'       => '',
						'type'          => 'text'
					),
					array(
						'type' => 'sectionend',
						'id'   => 'fincon_woocommerce_settings',
					),
				);

			break;

		endswitch;
		

		$settings = apply_filters(
			'woocommerce_' . $this->id . '_settings',
			$kri8it_settings
		);

		return apply_filters( 'woocommerce_get_settings_' . $this->id, $settings );
	}

	

	/**
	 * Save settings.
	 *
	 * @return array
	 */
	public function save(){

		$settings = $this->get_settings();

		if(isset($_GET['section'])):
			$_SECTION = $_GET['section'];
		else:
			$_SECTION = '';
		endif;


		switch($_SECTION):

			case "":



				$_ERRORS = false;

				/* GENERAL SETTINGS */

				if($_POST['fincon_woocommerce_url'] == ''):
					$_POST['fincon_woocommerce_active'] = 0;
					WC_Admin_Settings::add_error('Fincon URL is required');
							$_ERRORS = true;
				endif;

				if($_POST['fincon_woocommerce_username'] == ''):
					$_POST['fincon_woocommerce_active'] = 0;
					WC_Admin_Settings::add_error('Fincon USERNAME is required');
							$_ERRORS = true;
				endif;

				if($_POST['fincon_woocommerce_password'] == ''):
					$_POST['fincon_woocommerce_active'] = 0;
					WC_Admin_Settings::add_error('Fincon PASSWORD is required');
							$_ERRORS = true;
				endif;

				if($_POST['fincon_woocommerce_data'] == ''):
					$_POST['fincon_woocommerce_active'] = 0;
					WC_Admin_Settings::add_error('Fincon DATA ID is required');
							$_ERRORS = true;
				endif;

				if(isset($_POST['fincon_woocommerce_active']) && $_POST['fincon_woocommerce_active'] == 1):

					$URL 	= $_POST['fincon_woocommerce_url'];
					$UN 	= $_POST['fincon_woocommerce_username'];
					$PW 	= $_POST['fincon_woocommerce_password'];
					$DATA 	= $_POST['fincon_woocommerce_data'];

					if(isset($_POST['fincon_woocommerce_ext'])):
						$EXT 	= $_POST['fincon_woocommerce_ext'];
					else:
						$EXT 	= 0;
					endif;

					if($EXT == 1):
						$EXT = true;
					else:
						$EXT = false;
					endif;

					Fincon_Woocommerce_Admin::check_details($URL, $UN, $PW, $DATA, $EXT);

					if(get_option('fincon_woocommerce_admin_message_type') == 'notice-error'):

						$_POST['fincon_woocommerce_active'] = 0;
						$_ERRORS = true;

						WC_Admin_Settings::add_error('Could not connect to FINCON - please check the details');

					endif;

					if(!$_ERRORS):

						if(get_option('fincon_woocommerce_sync_stock') == 'yes' && !get_option('fincon_woocommerce_do_inital_product_sync')):

							WC_Admin_Settings::add_message('Initial Product Sync will begin soon - this may take a while to complete.');

							update_option('fincon_woocommerce_do_inital_product_sync', 'yes');
							update_option('fincon_woocommerce_do_inital_product_sync_date', wp_date('Y/m/d H:i:s'));

						endif;

						if(get_option('fincon_woocommerce_sync_users') == 'yes' && !get_option('fincon_woocommerce_do_inital_user_sync')):

							WC_Admin_Settings::add_message('Initial User Sync will begin soon - this may take a while to complete.');

							update_option('fincon_woocommerce_do_inital_user_sync', 'yes');
							update_option('fincon_woocommerce_do_inital_user_sync_date', wp_date('Y/m/d H:i:s'));

						endif;
					endif;

				endif;
				

			break;

			case "products":

				$_ERRORS = false;
				
				/* PRODUCT SETTINGS */

				if(get_option('fincon_woocommerce_active') == 'yes'):

					if(isset($_POST['fincon_woocommerce_sync_stock']) && $_POST['fincon_woocommerce_sync_stock'] == 1):

						if($_POST['fincon_woocommerce_stock_location'] == ''):
							$_POST['fincon_woocommerce_sync_stock'] = 0;
							WC_Admin_Settings::add_error('Stock location is required');
							$_ERRORS = true;
						endif;

						if($_POST['fincon_woocommerce_delivery'] == ''):
							$_POST['fincon_woocommerce_sync_stock'] = 0;
							WC_Admin_Settings::add_error('SKU for delivery item required');
							$_ERRORS = true;
						endif;

						if($_POST['fincon_woocommerce_coupon'] == ''):
							$_POST['fincon_woocommerce_sync_stock'] = 0;
							WC_Admin_Settings::add_error('SKU for coupon item required');
							$_ERRORS = true;
						endif;


						if(!$_ERRORS && !get_option('fincon_woocommerce_do_inital_product_sync')):
							WC_Admin_Settings::add_message('Initial Product Sync will begin soon - this may take a while to complete.');

							update_option('fincon_woocommerce_do_inital_product_sync', 'yes');
							update_option('fincon_woocommerce_do_inital_product_sync_date', wp_date('Y/m/d H:i:s'));
						endif;


					else:

						delete_option('fincon_woocommerce_last_product_update');
						delete_option('fincon_woocommerce_product_sync_running');
						delete_option('fincon_woocommerce_do_inital_product_sync');
						delete_option('fincon_woocommerce_do_inital_product_sync_date');


					endif;

					else:

						$_POST['fincon_woocommerce_sync_stock'] = 0;
						$_POST['fincon_woocommerce_validate_add'] = 0;
						$_POST['fincon_woocommerce_validate_checkout'] = 0;
						$_POST['fincon_woocommerce_exclude_order'] = 0;
						$_POST['fincon_woocommerce_delivery'] 	= '';
						$_POST['fincon_woocommerce_coupon'] 	= '';

						delete_option('fincon_woocommerce_last_product_update');
						delete_option('fincon_woocommerce_product_sync_running');
						delete_option('fincon_woocommerce_do_inital_product_sync');
						delete_option('fincon_woocommerce_do_inital_product_sync_date');


						WC_Admin_Settings::add_error('Cannot save Product settings - please ensure Fincon is correctly enabled first.');
				endif;

			break;

			case "orders":

				$_ERRORS = false;

				if(get_option('fincon_woocommerce_active') == 'yes'):

					if(isset($_POST['fincon_woocommerce_sync_orders']) && $_POST['fincon_woocommerce_sync_orders'] == 1):

						if($_POST['fincon_woocommerce_account'] == ''):
							$_POST['fincon_woocommerce_sync_orders'] = 0;
							$_ERRORS = true;
							WC_Admin_Settings::add_error('DEBTOR account required for Guest orders');
						endif;

						if($_POST['fincon_woocommerce_order_location'] == ''):
							$_POST['fincon_woocommerce_sync_orders'] = 0;
							$_ERRORS = true;
							WC_Admin_Settings::add_error('Order Location required for creating orders.');
						endif;

					endif;

				else:

					$_POST['fincon_woocommerce_sync_orders'] 		= 0;

					WC_Admin_Settings::add_error('Cannot save Order settings - please ensure Fincon is correctly enabled first.');

				endif;

				


				
			break;

			case "users":

				$_ERRORS = false;
				
				/* USER SETTINGS */

				if(get_option('fincon_woocommerce_active') == 'yes'):

					if(isset($_POST['fincon_woocommerce_sync_users']) && $_POST['fincon_woocommerce_sync_users'] == 1):
				


						if(!$_ERRORS && !get_option('fincon_woocommerce_do_inital_user_sync')):
							WC_Admin_Settings::add_message('Initial User Sync will begin soon - this may take a while to complete.');

							update_option('fincon_woocommerce_do_inital_user_sync', 'yes');
							update_option('fincon_woocommerce_do_inital_user_sync_date', wp_date('Y/m/d H:i:s'));
						endif;

					else:

						
						delete_option('fincon_woocommerce_last_user_update');
						delete_option('fincon_woocommerce_user_sync_running');
						delete_option('fincon_woocommerce_do_inital_user_sync');
						delete_option('fincon_woocommerce_do_inital_user_sync_date');

					endif;

				else:

					$_POST['fincon_woocommerce_sync_users'] 		= 0;

					WC_Admin_Settings::add_error('Cannot save User settings - please ensure Fincon is correctly enabled first.');

					
					delete_option('fincon_woocommerce_last_user_update');
					delete_option('fincon_woocommerce_user_sync_running');
					delete_option('fincon_woocommerce_do_inital_user_sync');
					delete_option('fincon_woocommerce_do_inital_user_sync_date');


				endif;



			break;


			case "emails":

				if($_POST['fincon_woocommerce_enable_emails'] == 1):

					if($_POST['fincon_woocommerce_email_list'] == ''):
						$_POST['fincon_woocommerce_enable_emails'] = 0;
						WC_Admin_Settings::add_error('Email address is required');
					endif;

					if($_POST['fincon_woocommerce_email_subject'] == ''):
						$_POST['fincon_woocommerce_enable_emails'] = 0;
						WC_Admin_Settings::add_error('Subject is required');
					endif;

				endif;

			break;

		endswitch;



		WC_Admin_Settings::save_fields( $settings );

	}
	
}

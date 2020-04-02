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
			''                => __( 'General Settings', 'woocommerce' ),
			'products'            => __( 'Products', 'woocommerce' ),
			'users'        => __( 'Users', 'woocommerce' )
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
						'desc'          => __( 'Create Orders in Fincon', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_sync_orders',
						'default'       => 'no',
						'checkboxgroup' => 'end',
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
						'desc'          => __( 'Exclude Stock Assigned to Sales Orders when calculating stock', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_exclude_order',
						'default'       => 'no',
						'checkboxgroup' => 'end',
						'type'          => 'checkbox'
					),
					array(
						'title'         => __( 'Fincon Stock Location', 'fincon-woocommerce' ),
						'desc'          => __( 'The Fincon Stock Location ', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_location',
						'default'       => '00',
						'type'          => 'text'
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
					),
					array(
						'desc'          => __( 'Create Users in Fincon', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_create_users',
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
						'desc'          => __( 'The Account used for logging orders', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_account',
						'default'       => '',
						'type'          => 'text'
					),
					array(
						'title'         => __( 'Sales Rep Code', 'fincon-woocommerce' ),
						'desc'          => __( 'For New Users', 'fincon-woocommerce' ),
						'id'            => 'fincon_woocommerce_sales_rep',
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

	/*
	public function save(){

		$settings = $this->get_settings( );

		var_dump($_POST);

		if($_POST['fincon_woocommerce_active'] == '1'):

			if(!isset($_POST['fincon_woocommerce_url']) || $_POST['fincon_woocommerce_url'] = ""):
				WC_Admin_Settings::add_error("Fincon URL is required");
			endif;

			if(!isset($_POST['fincon_woocommerce_username']) || $_POST['fincon_woocommerce_username'] = ""):
				WC_Admin_Settings::add_error("Fincon Username is required");
			endif;

			if(!isset($_POST['fincon_woocommerce_password']) || $_POST['fincon_woocommerce_password'] = ""):
				WC_Admin_Settings::add_error("Fincon Password is required");
			endif;

			if(!isset($_POST['fincon_woocommerce_data']) || $_POST['fincon_woocommerce_data'] = ""):
				WC_Admin_Settings::add_error("Fincon Data ID is required");
			endif;

		endif;

		WC_Admin_Settings::save_fields( $settings );

	}
	*/
}

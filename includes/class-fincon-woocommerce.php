<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://www.kri8it.com
 * @since      1.0.0
 *
 * @package    Fincon_Woocommerce
 * @subpackage Fincon_Woocommerce/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Fincon_Woocommerce
 * @subpackage Fincon_Woocommerce/includes
 * @author     Hilton Moore <hilton@kri8it.com>
 */
class Fincon_Woocommerce {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Fincon_Woocommerce_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		if ( defined( 'FINCON_WOOCOMMERCE_VERSION' ) ) {
			$this->version = FINCON_WOOCOMMERCE_VERSION;
		} else {
			$this->version = '1.0.1';
		}
		$this->plugin_name = 'fincon-woocommerce';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Fincon_Woocommerce_Loader. Orchestrates the hooks of the plugin.
	 * - Fincon_Woocommerce_i18n. Defines internationalization functionality.
	 * - Fincon_Woocommerce_Admin. Defines all hooks for the admin area.
	 * - Fincon_Woocommerce_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {


		/**
		 * FINCON CLASSES
		 */
		foreach (glob(plugin_dir_path( dirname( __FILE__ ) ) . 'fincon/*.php') as $filename):
			include $filename;
		endforeach;




		/**
		 * FINCON CLASSES
		 */
		
		/*
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'fincon/fincon-woocommerce-debtor-class.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'fincon/fincon-woocommerce-accountlist-class.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'fincon/fincon-woocommerce-salesorder-class.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'fincon/fincon-woocommerce-salesorderdetail-class.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'fincon/fincon-woocommerce-stock-class.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'fincon/fincon-woocommerce-stocklist-class.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'fincon/fincon-woocommerce-class.php';
		
		*/
	


		/**
		 * Fincon Handler Class
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-fincon-woocommerce-handler.php';

		/**
		 * GitHub Updater Class
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-fincon-woocommerce-updater.php';

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-fincon-woocommerce-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-fincon-woocommerce-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-fincon-woocommerce-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-fincon-woocommerce-public.php';

		$this->loader = new Fincon_Woocommerce_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Fincon_Woocommerce_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Fincon_Woocommerce_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		

		$plugin_admin = new Fincon_Woocommerce_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'plugins_loaded', $plugin_admin, 'check_for_update' );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

		$this->loader->add_filter( 'woocommerce_get_settings_pages', $plugin_admin, 'get_settings_pages' );

		$this->loader->add_filter( 'cron_schedules', $plugin_admin, 'cron_schedules', 999, 1 );

		$this->loader->add_action( 'init', $plugin_admin, 'setup_cron_schedules', 999);


		if(get_option('fincon_woocommerce_active') == 'yes'):

			//$this->loader->add_action( 'admin_menu', $plugin_admin, 'check_api' );
			//$this->loader->add_action( 'admin_notices', $plugin_admin, 'display_api_notice');

			$this->loader->add_filter( 'in_admin_header', $plugin_admin, 'in_admin_header');

			$this->loader->add_filter( 'manage_edit-shop_order_columns', $plugin_admin, 'shop_order_columns', 999, 1);
			$this->loader->add_action( 'manage_shop_order_posts_custom_column', $plugin_admin, 'shop_order_posts_custom_column', 999, 1);

			$this->loader->add_action( 'wp_ajax_fincon_woocommerce_ajax_create_sales_order', $plugin_admin, 'ajax_create_so');
			$this->loader->add_action( 'wp_ajax_nopriv_fincon_woocommerce_ajax_create_sales_order', $plugin_admin, 'ajax_create_so');

			$this->loader->add_action( 'fincon_woocommerce_sync_products', $plugin_admin, 'sync_stock_items');
			$this->loader->add_action( 'fincon_woocommerce_sync_accounts', $plugin_admin, 'sync_user_items');

			if(get_option('fincon_woocommerce_sync_orders') == 'yes'):

				$this->loader->add_action( 'woocommerce_order_status_processing', $plugin_admin, 'order_status_processing', 999, 1 );

			endif;

		endif;

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Fincon_Woocommerce_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );


		if(get_option('fincon_woocommerce_active') == 'yes'):

			if(get_option('fincon_woocommerce_validate_add') == 'yes'):
				$this->loader->add_filter('woocommerce_add_to_cart_validation', $plugin_public, 'add_to_cart_validation', 999, 3);
			endif;

			if(get_option('fincon_woocommerce_validate_checkout') == 'yes'):
				$this->loader->add_filter('woocommerce_check_cart_items', $plugin_public, 'check_cart_items', 999, 1);
			endif;

		endif;

		if(get_option('fincon_woocommerce_create_users') == 'yes'):
			$this->loader->add_action('user_register', $plugin_public, 'user_register', 999, 1);
		endif;

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Fincon_Woocommerce_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}

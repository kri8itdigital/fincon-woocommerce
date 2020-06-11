<?php


/* THIS FILE IS PURELY FOR EXTERNAL CRONTAB MANAGEMENT */

include "../../../wp-blog-header.php";


if(isset($_GET['type']) && $_GET['type'] != ''):

	switch($_GET['type']):

		case "connection":
			Fincon_Woocommerce_Admin::check_api();
		break;

		case "stock":
			Fincon_Woocommerce_Admin::sync_stock_items();
		break;

		case "users":
			Fincon_Woocommerce_Admin::sync_user_items();
		break;

		case "logs":
			Fincon_Woocommerce_Admin::clean_logs();
		break;

		case "all":
			Fincon_Woocommerce_Admin::check_api();
			Fincon_Woocommerce_Admin::sync_stock_items();
			Fincon_Woocommerce_Admin::sync_user_items();
			Fincon_Woocommerce_Admin::clean_logs();
		break;

		default:
			echo "Oops - you got that one wrong.";
			break;
	endswitch;

else:


	

endif; 


?>
<?php


/* THIS FILE IS PURELY FOR EXTERNAL CRONTAB MANAGEMENT */

include "../../../wp-blog-header.php";


if(isset($_GET['type']) && $_GET['type'] != ''):

	switch($_GET['type']):

		case "connection":
			echo 'Doing Connection Sync<br/>';
			Fincon_Woocommerce_Admin::check_api();
			echo 'Finished Connection Sync<br/>';
		break;

		case "stock":
			echo 'Doing Stock Sync<br/>';
			Fincon_Woocommerce_Admin::sync_stock_items(true);
			echo 'Finished Stock Sync<br/>';
		break;

		case "users":
			echo 'Doing User Sync<br/>';
			Fincon_Woocommerce_Admin::sync_user_items(true);
			echo 'Finished User Sync<br/>';
		break;

		case "logs":
			echo 'Doing Log Clean<br/>';
			Fincon_Woocommerce_Admin::clean_logs();
			echo 'Finished Log Clean<br/>';
		break;

		case "all":
			echo 'Doing Connection Sync<br/>';
			Fincon_Woocommerce_Admin::check_api();
			echo 'Finished Connection Sync<br/>';
			echo '<br/>Doing Stock Sync<br/>';
			Fincon_Woocommerce_Admin::sync_stock_items(true);
			echo 'Finished Stock Sync<br/>';
			echo '<br/>Doing User Sync<br/>';
			Fincon_Woocommerce_Admin::sync_user_items(true);
			echo 'Finished User Sync<br/>';
			echo '<br/>Doing Log Clean<br/>';
			Fincon_Woocommerce_Admin::clean_logs();
			echo 'Finished Log Clean<br/>';
		break;

		default:
			echo "Oops - you got that one wrong.";
			break;
	endswitch;

else:


	

endif; 


?>
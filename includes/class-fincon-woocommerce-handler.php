<?php



class fincon{

	var $_ID = 0;
	var $_URL = '';
	var $_UN  = '';
	var $_PW = '';
	var $_D = '';
	var $_EXT = '';
	var $_SOAP = null;
	var $_ERR = '';
	var $_ERRORS = array();
	var $_ACC = '';
	var $_SHIPPING = '';
	var $_LOC = '';
	var $_COUPON = '';
	var $_ONE_ACC = '';
	var $_EXCLUDE = '';
	var $_REP = '';
	var $_PRICE = '';
	var $_CREATE = '';










	/*
	CONSTRUCTOR
	 */
	public function __construct(){

		$this->init();

	}









	
	/*
	INIT ALL OPTIONS
	 */
	public function init(){
		$this->_URL 		= get_option('fincon_woocommerce_url');
		$this->_UN 			= get_option('fincon_woocommerce_username');
		$this->_PW 			= get_option('fincon_woocommerce_password');
		$this->_D 			= get_option('fincon_woocommerce_data');
		$this->_ACC 		= get_option('fincon_woocommerce_account');
		$this->_SHIP 		= get_option('fincon_woocommerce_delivery');
		$this->_LOC 		= get_option('fincon_woocommerce_location');
		$this->_COUPON 		= get_option('fincon_woocommerce_coupon');
		$this->_REP 		= get_option('fincon_woocommerce_sales_rep');
		$this->_PRICE 		= get_option('fincon_woocommerce_price');

		if(get_option('fincon_woocommerce_ext') == 'yes'):
			$this->_EXT = true;
		else:
			$this->_EXT = false;
		endif;

		if(get_option('fincon_woocommerce_one_debtor_account') == 'yes'):
			$this->_ONE_ACC = true;
		else:
			$this->_ONE_ACC = false;
		endif;

		if(get_option('fincon_woocommerce_exclude_order') == 'yes'):
			$this->_EXCLUDE = true;
		else:
			$this->_EXCLUDE = false;
		endif;

		if(get_option('fincon_woocommerce_create_users') == 'yes'):
			$this->_CREATE = true;
		else:
			$this->_CREATE = false;
		endif;

		$this->_SOAP = new SoapClient($this->_URL);

	}









	
	/*
	HELPER - VALIDATE
	 */
	public function Validate(){

		$_LOGIN = $this->_SOAP->LogIn($this->_D, $this->_UN, $this->_PW, $this->_ID, $this->_ERR, $this->_EXT);
		
		$this->LogOut();

		return $_LOGIN;

	}









	
	/*
	HELPER - VALIDATE
	 */
	public function ValidateCustom($URL, $UN, $PW, $DATA, $EXT){

		$_TEST_SOAP = new SoapClient($URL); 

		$_LOGIN = $_TEST_SOAP->LogIn($DATA, $UN, $PW, 0, array(), $EXT);
		
		$_TEST_SOAP->LogOut();

		return $_LOGIN;

	}









	
	/*
	HELPER - LOGIN
	 */
	public function LogIn(){

		

		$_LOGIN = $this->_SOAP->LogIn($this->_D, $this->_UN, $this->_PW, $this->_ID, $this->_ERR, $this->_EXT);

		if($_LOGIN['return']):
			$this->_ID = $_LOGIN['ConnectID'];		
		else:
			$this->_ERRORS[] = 'Could not login. Check Credentials.';
		endif;

	}









	
	/*
	HELPER - LOGOUT
	 */
	public function LogOut(){

		$_LOGOUT = $this->_SOAP->LogOut($this->_ID, $this->_ERR);
		
	}









	
	/*
	HELPER - KILL USERS
	 */
	public function KillUsers(){

		if(!$this->_ID):
			$this->_ID = '0.0';
		endif;

		$_KILL = $this->_SOAP->KillUsers($this->_ID);
		
	}









	
	/*
	HELPER - GET ACCOUNT
	 */
	public function GetDebAccount($_DACC = null){

		$_F = false;

		$_DEP = new TDebAccountRecord();

		if($_DACC):
			$_ACC_TO_USE = $_DACC;
		else:
			$_ACC_TO_USE = $this->_ACC;
		endif;

		$_RETURN = $this->_SOAP->GetDebAccount($this->_ID, $_ACC_TO_USE, $_DEP, $_F, $this->_ERR);

		$_FOUND = $_RETURN['Found'];

		if($_FOUND):
			return $_RETURN['AccountBuf'];
		else:
			
			if($_RETURN['ErrorString'] != ""):
				$this->_ERRORS[] = $_RETURN['ErrorString'];
			else:
				$this->_ERRORS[] = 'Account '.$_ACC_TO_USE.' not found on Fincon.';
			endif;
			
			return false;
		endif;
	}









	
	/*
	HELPER - GET ACCOUNT
	 */
	public function GetDebAccountFirst(){

		$_EOF = false;

		$_POSITION = '';

		$_DEP = new TDebAccountRecord();

		$_RETURN = $this->_SOAP->GetDebAccountFirst($this->_ID, $_POSITION, $_DEP, $_EOF, $this->_ERR);

		if($_RETURN['return']):
			return $_RETURN;
		else:
			
			if($_RETURN['ErrorString'] != ""):
				$this->_ERRORS[] = $_RETURN['ErrorString'];
			else:
				$this->_ERRORS[] = 'Could not load first Deb Account.';
			endif;
			
			return false;
		endif;
	}









	
	/*
	HELPER - GET ACCOUNT
	 */
	public function GetDebAccountNext($_EOF){


		$_POSITION = '';

		$_DEP = new TDebAccountRecord();

		$_RETURN = $this->_SOAP->GetDebAccountNext($this->_ID, $_DEP, $_EOF, $this->_ERR);

		if($_RETURN['return']):
			return $_RETURN;
		else:
			
			$this->_ERRORS[] = $_RETURN['ErrorString'];
						
			return false;

		endif;
	}









	
	/*
	HELPER - GET ACCOUNT
	 */
	public function GetAccountsChanged($_FROM_DATE_TIME){


		$_POSITION = '';

		$_ACC_LIST = new TAccountListRecord();
		$_ACC_LIST_ARR = (array)$_ACC_LIST;

		$_RETURN = $this->_SOAP->GetAccountsChanged($this->_ID, $_FROM_DATE_TIME, 'D', $_ACC_LIST_ARR, $this->_ERR);

		if($_RETURN['return']):
			return $_RETURN;
		else:
			
			$this->_ERRORS[] = $_RETURN['ErrorString'];
						
			return false;
			
		endif;
	}









	
	/*
	HELPER - UPDATE ACCOUNT
	 */
	public function UpdateDebAccount($_DACC){

		$_C = false;

		$_DEP = new TDebAccountRecord();
		$_DEP->DebName 		= $_DACC;
		$_DEP->RepCode 		= $this->_REP;
		$_DEP->PriceStruc 	= $this->_PRICE;

		$_ACC = $this->_SOAP->UpdateDebAccount($this->_ID, $_DEP, $this->_CREATE, $_C, $this->_ERR);

		$_CREATED = $_ACC['return'];

		if($_CREATED):
			return $_ACC['AccountBuf'];
		else:
			
			if($_RETURN['ErrorString'] != ""):
				$this->_ERRORS[] = $_RETURN['ErrorString'];
			else:
				$this->_ERRORS[] = 'Account '.$_DACC.' could not be updated.';
			endif;
			
			return false;
		endif;
	}









	
	/*
	HELPER - GET STOCK ITEM
	 */
	public function GetStockItem($_SKU, $_FULL = false){

		$_F = false;

		$_STOCK = new TStockRecord();
		$_STOCKLIST = new TStockListRecord();
		$_STOCKLOC = (array)$_STOCKLIST;

		$_RETURN = $this->_SOAP->GetStockItem($this->_ID, $_SKU, $_STOCK, $_STOCKLOC, $_F, $this->_ERR);
		$_FOUND = $_RETURN['Found'];

		if($_FOUND):
			if($_FULL):
				return $_RETURN;
			else:
				return $_RETURN['StockBuf'];
			endif;
		else:
			
			if($_RETURN['ErrorString'] != ""):
				$this->_ERRORS[] = $_RETURN['ErrorString'];
			else:
				$this->_ERRORS[] = 'Item '.$_SKU.' not found on Fincon.';
			endif;
			
			return false;
		endif;
	}









	
	/*
	HELPER - GET STOCK ITEM
	 */
	public function GetStockFirst($_EOF){

		$_POSITION = '';

		$_STOCK = new TStockRecord();
		$_STOCKLIST = new TStockListRecord();
		$_STOCKLOC = (array)$_STOCKLIST;

		$_RETURN = $this->_SOAP->GetStockFirst($this->_ID, $_POSITION, $_STOCK, $_STOCKLOC, $_EOF, $this->_ERR);

		if($_RETURN['ErrorString'] == ""):
			return $_RETURN;
		else:
				
			$this->_ERRORS[] = $_RETURN['ErrorString'];
			
			return false;

		endif;
	}









	
	/*
	HELPER - GET STOCK ITEM
	 */
	public function GetStockNext($_EOF){

		$_POSITION = '';

		$_STOCK = new TStockRecord();
		$_STOCKLIST = new TStockListRecord();
		$_STOCKLOC = (array)$_STOCKLIST;

		$_RETURN = $this->_SOAP->GetStockNext($this->_ID, $_STOCK, $_STOCKLOC, $_EOF, $this->_ERR);

		if($_RETURN['ErrorString'] == ""):
			return $_RETURN;
		else:
			
			$this->_ERRORS[] = $_RETURN['ErrorString'];
			
			return false;

		endif;
	}









	
	/*
	HELPER - GET STOCK ITEM
	 */
	public function GetStockChanged($_FROM_DATE_TIME){

		
		$_POSITION = '';

		$_STOCK = new TStockRecord();
		$_STOCKLIST = new TStockListRecord();
		$_STOCKLOC = (array)$_STOCKLIST;

		$_RETURN = $this->_SOAP->GetStockChanged($this->_ID, $_FROM_DATE_TIME, $_STOCKLOC, $this->_ERR);

		if($_RETURN['ErrorString'] == ""):
			return $_RETURN;
		else:
			
			if($_RETURN['ErrorString'] != ""):
				$this->_ERRORS[] = $_RETURN['ErrorString'];
			endif;
			
			return false;
		endif;
	}









	
	/*
	HELPER - GET STOCK QUANTITY
	 */
	public function GetStockItemQTY($_SKU){

		$_F = false;

		$_STOCK = new TStockRecord();
		$_STOCKLIST = new TStockListRecord();
		$_STOCKLOC = (array)$_STOCKLIST;

		$_RETURN = $this->_SOAP->GetStockItem($this->_ID, $_SKU, $_STOCK, $_STOCKLOC, $_F, $this->_ERR);

		$_FOUND = $_RETURN['Found'];

		if($_FOUND):
			
			$_F_S = $_RETURN['StockBuf'];
			$_F_L = $_RETURN['StockLoc'];

			$_STOCK = $_F_L[intval($this->_LOC)]->InStock;

			if($this->_EXCLUDE):
				$_STOCK -= $_F_L[intval($this->_LOC)]->SalesOrders;
			endif;

			return $_STOCK;

		else:
			
			if($_RETURN['ErrorString'] != ""):
				$this->_ERRORS[] = $_RETURN['ErrorString'];
			else:
				$this->_ERRORS[] = 'Could not retrieve stock for Item '.$_SKU.' in Location '.$this->_LOC;
			endif;
			
			return false;
		endif;
	}









	
	/*
	HELPER - GET SHIPPING
	 */
	public function GetShipping($_ORDER){

		$_F = false;

		$_STOCK = new TStockRecord();
		$_STOCKLIST = new TStockListRecord();
		$_STOCKLOC = (array)$_STOCKLIST;

		$_RETURN = $this->_SOAP->GetStockItem($this->_ID, $this->_SHIP, $_STOCK, $_STOCKLOC, $_F, $this->_ERR);

		$_FOUND = $_RETURN['Found'];

		if($_FOUND):
			$_ITEM = $_RETURN['StockBuf'];

			$_DETAIL = new TSalesOrderDetailRecord();

			$_DETAIL->ItemNo 		= $this->_SHIP;
			$_DETAIL->Quantity 		= 1;
			$_DETAIL->LineTotalExcl = number_format($_ORDER->get_shipping_total(), 2);
			$_DETAIL->TaxCode 		= $_ITEM->TaxCode;
			$_DETAIL->LineTotalIncl = number_format($_ORDER->get_shipping_total() + $order->get_shipping_tax(), 2);
			$_DETAIL->Description 	= $_ITEM->Description.'-'.$_ORDER->get_shipping_method();

			return $_DETAIL;

		else:
			
			if($_RETURN['ErrorString'] != ""):
				$this->_ERRORS[] = $_RETURN['ErrorString'];
			else:
				$this->_ERRORS[] = 'Could not find Shipping item '.$this->_SHIP.' on Fincon.';
			endif;
			
			return false;
		endif;
	}









	
	/*
	HELPER - GET COUPON
	 */
	public function GetCoupon($_COUPON){

		$_F = false;

		$_STOCK = new TStockRecord();
		$_STOCKLIST = new TStockListRecord();
		$_STOCKLOC = (array)$_STOCKLIST;

		$_RETURN = $this->_SOAP->GetStockItem($this->_ID, $this->_COUPON, $_STOCK, $_STOCKLOC, $_F, $this->_ERR);

		$_FOUND = $_RETURN['Found'];

		if($_FOUND):
			$_ITEM = $_RETURN['StockBuf'];

			$_DETAIL = new TSalesOrderDetailRecord();

			$_AMT_E = number_format($_COUPON['discount_amount'], 2, ".", "");
			$_AMT_I = number_format($_COUPON['discount_amount'] + $_COUPON['discount_tax'], 2, ".", "");

			$_DETAIL->ItemNo 		= $this->_COUPON;
			$_DETAIL->Quantity 		= 1;
			$_DETAIL->LineTotalExcl = number_format($_AMT_E, 2, ".", "")*-1;
			$_DETAIL->TaxCode 		= $_ITEM->TaxCode;
			$_DETAIL->LineTotalIncl = number_format($_AMT_I, 2, ".", "")*-1;
			$_DETAIL->Description 	= $_ITEM->Description.'-'.$_COUPON->get_name();

			return $_DETAIL;

		else:
			
			if($_RETURN['ErrorString'] != ""):
				$this->_ERRORS[] = $_RETURN['ErrorString'];
			else:
				$this->_ERRORS[] = 'Could not find Coupon item '.$this->_COUPON.' on Fincon.';
			endif;

			return false;

		endif;

	}	









	
	/*
	HELPER - CREATE SALES ORDER
	 */
	public function CreateSalesOrder($_SO, $_SALES_ORDER_DETAILS, $_OID){

		$_SO_NUMBER = '';
		$_SO_DONE = false;

		$_RETURN = $this->_SOAP->CreateSalesOrder($this->_ID, $_SO, $_SALES_ORDER_DETAILS, $_SO_NUMBER,$_SO_DONE, $this->_ERR);

		$_DONE = $_RETURN['Done'];

		if($_DONE):
			return $_RETURN['SalesOrderNo'];
		else:

			if($_RETURN['ErrorString'] != ""):
				$this->_ERRORS[] = $_RETURN['ErrorString'];
			else:
				$this->_ERRORS[] = 'Could not create Sales Order.';
			endif;

			return false;
		endif;
	}









	
	/*
	GENERATE SALES ORDER BASED ON PAYMENT
	 */
	public function SendSOToFincon($_ORDER_ID){

		if(count($this->_ERRORS) > 0):
			update_post_meta($_ORDER_ID, '_fincon_sales_error', $this->_ERRORS);
			return;
		endif;


		$_ORDER = new WC_Order($_ORDER_ID);

		$_SO = new TSalesOrderRecord();
		

		$_SALES_ORDER_DETAILS = array();

		if($this->_ONE_ACC):

			$_ACC_TO_USE = $this->_ACC;

		else:

			$_CUST_ID 		= $_ORDER->get_customer_id();

			if($_CUST_ID != 0):

				$_CUST  		= new WC_Customer($_CUST_ID);
				$_ACC_TO_USE 	= $_CUST->get_username();

			else:

				$_ACC_TO_USE = $this->_ACC;

			endif;

		endif;

		$_DEP = $this->GetDebAccount($_ACC_TO_USE);

		if(!$_DEP):
			$_DEP = $this->GetDebAccount($this->_ACC);
			$_ACC_TO_USE = $this->_ACC;
		endif;


		$_NOTE = $_ORDER->get_customer_note();

		$_NOTE_1 = '.';
		$_NOTE_2 = '.';
		$_NOTE_3 = '.';


		if(strlen($_NOTE) > 0):

			$_NOTE_BLOCK = str_split($_NOTE, 40);
			$_NOTE_COUNT = count($_NOTE_BLOCK);

			if(count($_NOTE_BLOCK) >= 3):
				$_NOTE_1 = $_NOTE_BLOCK[0];
				$_NOTE_2 = $_NOTE_BLOCK[1];
				$_NOTE_3 = $_NOTE_BLOCK[2];
			elseif(count($_NOTE_BLOCK) == 2):
				$_NOTE_1 = $_NOTE_BLOCK[0];
				$_NOTE_2 = $_NOTE_BLOCK[1];
			elseif(count($_NOTE_BLOCK) == 1):
				$_NOTE_1 = $_NOTE_BLOCK[0];
			endif;

		endif;


		$_METHODS = $_ORDER->get_shipping_methods();
		$_THIS_METHOD = '';

		foreach($_METHODS as $_METHOD):

			if($_METHOD['method_id'] == 'local_pickup'):
				$_THIS_METHOD = 'C';
			else:
				$_THIS_METHOD = 'R';
			endif;

		endforeach;

		if($_DEP):

			$_SO->AccNo 			= $_ACC_TO_USE;
			$_SO->LocNo 			= $this->_LOC;
			$_SO->TotalExcl			= number_format($_ORDER->get_total() - $_ORDER->get_total_tax(), 2, ".", "");
			$_SO->TotalIncl			= number_format($_ORDER->get_total(), 2, ".", "");
			$_SO->CustomerRef 		= $_ORDER_ID;
			$_SO->DebName 			= $_DEP->DebName;
			$_SO->Addr1 			= $_DEP->Addr1;
			$_SO->Addr2 			= $_DEP->Addr2;
			$_SO->Addr3 			= $_DEP->Addr3;
			$_SO->PCode 			= $_DEP->PCode;
			$_SO->DelName 			= $_ORDER->get_formatted_shipping_full_name();
			$_SO->DelAddr1 			= $_ORDER->get_shipping_address_1();
			$_SO->DelAddr2 			= $_ORDER->get_shipping_address_2();
			$_SO->DelAddr3 			= $_ORDER->get_shipping_city();
			$_SO->DelAddr4 			= $_ORDER->get_shipping_state().' '.$_ORDER->get_shipping_country();
			$_SO->DelPCode 			= $_ORDER->get_shipping_postcode();
			$_SO->DelInstruc1 		= $_NOTE_1;
			$_SO->DelInstruc2 		= $_NOTE_2;
			$_SO->DelInstruc3 		= $_NOTE_3;
			$_SO->DelInstruc4 		= $_DEP->DelInstruc4;
			$_SO->DelInstruc5 		= $_DEP->DelInstruc5;
			$_SO->DelInstruc6 		= $_DEP->DelInstruc6;
			$_SO->DeliveryMethod 	= $_THIS_METHOD;
			$_SO->RepCode 			= $_DEP->RepCode;
			$_SO->TaxNo 			= $_DEP->TaxNo;

		endif;

		foreach($_ORDER->get_items() as $_ID => $_ITEM):

			if ($_ITEM['variation_id'] > 0 ):
				$_PRODUCT_ID = $_ITEM['variation_id'];
			else:
				$_PRODUCT_ID = $_ITEM['product_id'];
			endif;

			$_PROD = wc_get_product($_PRODUCT_ID);

			$_SKU = $_PROD->get_sku();

			$_STOCKITEM = $this->GetStockItem($_SKU);

			if($_STOCKITEM && $_STOCKITEM->ItemNo):

				$_DETAIL = new TSalesOrderDetailRecord();

				$_DETAIL->ItemNo = $_STOCKITEM->ItemNo;
				$_DETAIL->Quantity = $_ITEM->get_quantity();
				$_DETAIL->LineTotalExcl = number_format($_ITEM->get_subtotal(), 2, ".", "");
				$_DETAIL->TaxCode = $_STOCKITEM->TaxCode;
				$_DETAIL->LineTotalIncl = number_format($_ITEM->get_subtotal() + $_ITEM->get_subtotal_tax(), 2, ".", "");
				$_DETAIL->Description = $_STOCKITEM->Description;

				$_SALES_ORDER_DETAILS[] =  $_DETAIL;	

			endif;


		endforeach;

		if(count($_SALES_ORDER_DETAILS) > 0):

			if($_THIS_METHOD == 'R'):
				$_SHIPPING_LINE = $this->GetShipping($_ORDER);

				if($_SHIPPING_LINE && $_SHIPPING_LINE->ItemNo):
					$_SALES_ORDER_DETAILS[] = $_SHIPPING_LINE;
				endif;

			endif;

			$_COUPONS = $_ORDER->get_items( array( 'coupon' ) );

			foreach ( $_COUPONS as $_ID => $_ITEM ):
				$_COUPON_LINE = $this->GetCoupon($_ITEM);

				if($_COUPON_LINE && $_COUPON_LINE->ItemNo):
					$_SALES_ORDER_DETAILS[] = $_COUPON_LINE;
				endif;

			endforeach;
			
			$_SALES_ORDER_NUMBER = $this->CreateSalesOrder($_SO, $_SALES_ORDER_DETAILS, $_ORDER_ID);

			if($_SALES_ORDER_NUMBER):
				update_post_meta($_ORDER_ID, '_fincon_sales_order', $_SALES_ORDER_NUMBER);
				$_ORDER->add_order_note('<strong>Fincon Sales Order:</strong><br/>'.$_SALES_ORDER_NUMBER);
			endif;
			
		endif;



		if(count($this->_ERRORS) > 0):
			update_post_meta($_ORDER_ID, '_fincon_sales_error', $this->_ERRORS);
		endif;

	}


}


?>
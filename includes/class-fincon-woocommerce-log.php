<?php

define('WC_LOG_FOLDER', ABSPATH.'wp-content/fc-logs');









	
/* CLASS FOR LOGGING EVENTS */
/**
* @since    1.2.0
*/
class WC_Fincon_Logger{










	/*
	LOG TO FILE
	 */
	public static function log($_MSG){

		$_LOG = self::file();
		self::write($_LOG, $_MSG);

	}









	
	/*
	MANAGE FILE - CREATE/FETCH
	 */
	public static function file(){

		if (!file_exists(WC_LOG_FOLDER)):
		    mkdir(WC_LOG_FOLDER, 0777, true);
		endif;

		$_FILE_DATE = date('Y-m-d');

		$_FILE_NAME = $_FILE_DATE.'.txt';

		$_LOG = trailingslashit(WC_LOG_FOLDER).$_FILE_NAME;

		if(!is_file($_LOG)):
			self::write($_LOG, '-- FINCON LOG FOR '.$_FILE_DATE.' --');
		endif;

		return $_LOG;

	}









	
	/*
	HANDLE WRITE FUNCTIONS
	 */
	public static function write($_LOG, $_MSG){

		$_WRITER 	= fopen($_LOG, 'a+');

		$_DATE 		= wp_date('Y-m-d H:i:s');

		if($_MSG == ''):
			fwrite($_WRITER,"\r\n");
		else:
			fwrite($_WRITER,$_DATE.' :: '.$_MSG."\r\n");
		endif;


		unset($_WRITER);

	}









	
	/*
	HANDLE FETCH OF FILES
	 */
	public static function fetch($_AMT = 10){

		$_EXCLUDES = array('.', '..');

		if (file_exists(WC_LOG_FOLDER)):

			$_FILES = scandir(WC_LOG_FOLDER, SCANDIR_SORT_DESCENDING);

			if(is_array($_FILES)):
				foreach($_FILES as $_KEY => $_FILE):
					if(in_array($_FILE, $_EXCLUDES)):
						unset($_FILES[$_KEY]);
					endif;
				endforeach;

				if(count($_FILES) > $_AMT):

					$_DATA = array_chunk($_FILES, $_AMT);

					return $_DATA[0];

				else:

					return $_FILES;

				endif;

			else:

				return false;

			endif;

		else:

			return false;

		endif;

	}









	
	/*
	HANDLE LATEST FILE
	 */
	public static function latest(){

		$_EXCLUDES = array('.', '..');

		if (file_exists(WC_LOG_FOLDER)):

			$_FILES = scandir(WC_LOG_FOLDER, SCANDIR_SORT_DESCENDING);

			if(is_array($_FILES)):

				foreach($_FILES as $_KEY => $_FILE):
					if(in_array($_FILE, $_EXCLUDES)):
						unset($_FILES[$_KEY]);
					endif;
				endforeach;

				return $_FILES[0];

			else:

				return false;

			endif;

		else:

			return false;

		endif;



	}









	
	/*
	HANDLE LATEST FILE
	 */
	public static function clean(){

		$_EXCLUDES = array('.', '..');

		if (file_exists(WC_LOG_FOLDER)):

			$_FILES = scandir(WC_LOG_FOLDER, SCANDIR_SORT_DESCENDING);

			foreach($_FILES as $_KEY => $_FILE):
				if(in_array($_FILE, $_EXCLUDES)):
					unset($_FILES[$_KEY]);
				endif;
			endforeach;

			if(count($_FILES) > 10):

				$_DATA = array_chunk($_FILES, $_AMT);

				$_COUNT = 0;

				foreach($_DATA as $_FILES):

					if($_COUNT > 0):

						foreach($_FILES as $_FILE):
							$_LINK = trailingslashit(WC_LOG_FOLDER).$_FILE;
							unlink($_LINK);
						endforeach;

					endif;

					$_COUN++;

				endforeach;

			endif;

		else:

			return false;

		endif;

	}









	
	/*
	HANDLE LINK TO FILE
	 */
	public static function link($_LINK, $_RETURN = false){

		$_FILE = trailingslashit(WC_LOG_FOLDER).$_LINK;

		$_SITE = trailingslashit(get_site_url());

		$_CONTENT = trailingslashit(ABSPATH);

		$_URL = str_replace($_CONTENT, $_SITE, $_FILE);

		if($_RETURN):
			return $_URL;
		else:
			echo $_URL;
		endif;

	}









	
	/*
	HANDLE LATEST FILE AS ATTACHMENT
	 */
	public static function attachment(){

		$_LINK = self::latest();

		$_FILE = trailingslashit(WC_LOG_FOLDER).$_LINK;

		return $_FILE;

	}





}
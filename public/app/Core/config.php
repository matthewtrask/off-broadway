<?php
namespace core;

use Dotenv\Dotenv;
/*
 * config - an example for setting up system settings
 * When you are done editing, rename this file to 'config.php'
 *
 * @author David Carr - dave@daveismyname.com - http://www.daveismyname.com
 * @author Edwin Hoksberg - info@edwinhoksberg.nl
 * @version 2.1
 * @date June 27, 2014
 */
class Config {

	public function __construct() {

		$dotenv = new Dotenv('/var/www/public/');
		$dotenv->load();

		//turn on output buffering
		ob_start();

		//site address
		define('DIR', '');

		//set default controller and method for legacy calls
		define('DEFAULT_CONTROLLER', 'home');
		define('DEFAULT_METHOD' , 'index');

		//set a default language
		define('LANGUAGE_CODE', 'en');

		//set Image folder path
		define('IMGDIR',DIR.'app/templates/default/img/');

		//database details ONLY NEEDED IF USING A DATABASE
		define('DB_TYPE', 'mysql');
		define('DB_HOST', getenv('MYSQL_HOST'));
		define('DB_NAME', getenv('MYSQL_NAME'));
		define('DB_USER', getenv('MYSQL_USER'));
		define('DB_PASS', getenv('MYSQL_PASS'));
		define('PREFIX', 'obct_');

		//set prefix for sessions
		define('SESSION_PREFIX', 'obct_');

		//optionall create a constant for the name of the site
		define('SITETITLE', 'Off Broadway Children\'s Theatre');

		//turn on custom error handling
		set_exception_handler('core\logger::exception_handler');
		set_error_handler('core\logger::error_handler');

		//set timezone
		date_default_timezone_set('America/New York');

		//start sessions
		\helpers\session::init();

		//set the default template
		\helpers\session::set('template', 'default');

		// set session counter
		\helpers\session::set('counter');
	}

}

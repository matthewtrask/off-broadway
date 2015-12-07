<?php
if(file_exists('vendor/autoload.php')){
	require 'vendor/autoload.php';
} else {
	echo "<h1>Please install via composer.json</h1>";
	echo "<p>Install Composer instructions: <a href='https://getcomposer.org/doc/00-intro.md#globally'>https://getcomposer.org/doc/00-intro.md#globally</a></p>";
	echo "<p>Once composer is installed navigate to the working directory in your terminal/command promt and enter 'composer install'</p>";
	exit;
}

if (!is_readable('app/core/config.php')) {
	die('No config.php found, configure and rename config.example.php to config.php in app/core.');
}

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 *
 */
	define('ENVIRONMENT', 'development');
/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but production will hide them.
 */

if (defined('ENVIRONMENT')){

	switch (ENVIRONMENT){
		case 'development':
			error_reporting(E_ALL);
		break;

		case 'production':
			error_reporting(0);
		break;

		default:
			exit('The application environment is not set correctly.');
	}

}

//initiate config
new \core\config();

//create alias for Router
use \core\router,
    \helpers\url;

//define routes
router::any('', 'controllers\offbroadway@index');
router::any('home', 'controllers\offbroadway@index');
// Router::any('happenings','Controllers\offbroadway@happenings');
router::any('schools', 'controllers\offbroadway@schools');
router::any('aboutus', 'controllers\offbroadway@aboutus');
router::any('teachers', 'controllers\offbroadway@teachers');
router::any('juniortroupe', 'controllers\offbroadway@juniorTroupe');
router::any('troupe', 'controllers\offbroadway@troupe');
router::any('gallery', 'controllers\offbroadway@gallery');
router::any('classes', 'controllers\offbroadway@classes');
router::any('questions', 'controllers\offbroadway@questions');
router::any('currentshow', 'controllers\offbroadway@currentprod');
router::any('upcoming', 'controllers\offbroadway@upcoming');
router::any('auditions', 'controllers\offbroadway@auditions');
router::any('register', 'controllers\offbroadway@register');
router::any('boxoffice', 'controllers\offbroadway@boxoffice');
router::any('contact', 'controllers\offbroadway@contact');
router::post('postContact', 'controllers\offbroadway@postContact');

router::any('admin', '\controllers\admin\admin@index');
router::any('admin/login', '\controllers\admin\auth@login');
router::any('admin/logout', '\controllers\admin\auth@logout');

router::any('admin/classes', '\controllers\admin\admin@classes');
router::any('admin/currentshow', '\controllers\admin\admin@currentShow');

//AJAX Contollers
router::POST('postWhatsNew', '\controllers\admin\ajax@addWhatsNew');
router::POST('postMessage', '\controllers\admin\ajax@postMessage');
router::POST('updateClasses', '\controllers\admin\ajax@updateClasses');
router::POST('addClasses', '\controllers\admin\ajax@addClasses');
router::POST('removeClasses', '\controllers\admin\ajax@removeClasses');


router::any('admin/users', '\controllers\admin\users@index');
router::any('admin/users/add', '\controllers\admin\users@add');
router::any('admin/users/edit/(:num)', '\controllers\admin\users@edit');



//Router::any('admin/posts', '\controllers\admin\posts@index');
//Router::any('admin/posts/add', '\controllers\admin\posts@add');
//Router::any('admin/posts/edit/(:num)', '\controllers\admin\posts@edit');
//Router::any('admin/posts/delete/(:num)', '\controllers\admin\posts@delete');
//
//Router::any('admin/cats', '\controllers\admin\cats@index');
//Router::any('admin/cats/add', '\controllers\admin\cats@add');
//Router::any('admin/cats/edit/(:num)', '\controllers\admin\cats@edit');
//Router::any('admin/cats/delete/(:num)', '\controllers\admin\cats@delete');




//Router::any('', '\controllers\blog@index');
//Router::any('category/(:any)', '\controllers\blog@cat');


//if no route found
Router::error('\core\error@index');

//turn on old style routing
Router::$fallback = false;

//execute matched routes
Router::dispatch();

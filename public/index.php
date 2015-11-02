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
Router::any('', 'Controllers\offbroadway@index');
Router::any('home', 'Controllers\offbroadway@index');
Router::any('happenings','Controllers\offbroadway@happenings');
Router::any('schools', 'Controllers\offbroadway@schools');
Router::any('aboutus', 'Controllers\offbroadway@aboutus');
Router::any('teachers', 'Controllers\offbroadway@teachers');
Router::any('juniortroupe', 'Controllers\Offbroadway@juniorTroupe');
Router::any('troupe', 'Controllers\offbroadway@troupe');
Router::any('gallery', 'Controllers\offbroadway@gallery');
Router::any('classes', 'Controllers\offbroadway@classes');
Router::any('questions', 'Controllers\offbroadway@questions');
Router::any('currentprod', 'Controllers\offbroadway@currentprod');
Router::any('upcoming', 'Controllers\offbroadway@upcoming');
Router::any('auditions', 'Controllers\offbroadway@auditions');
Router::any('register', 'Controllers\offbroadway@register');
Router::any('boxoffice', 'Controllers\offbroadway@boxoffice');
Router::any('contact', 'Controllers\offbroadway@contact');
Router::post('postContact', 'Controllers\offbroadway@postContact');

Router::any('admin', '\controllers\admin\admin@index');
Router::any('admin/login', '\controllers\admin\auth@login');
Router::any('admin/logout', '\controllers\admin\auth@logout');

Router::any('admin/classes', '\controllers\admin\admin@classes');

//AJAX Contollers
Router::POST('postMessage', '\controllers\admin\admin@postMessage');
Router::POST('updateClasses', '\controllers\admin\admin@updateClasses');
Router::POST('addClasses', '\controllers\admin\admin@addClasses');
Router::POST('removeClasses', '\controllers\admin\admin@removeClasses');


Router::any('admin/users', '\controllers\admin\users@index');
Router::any('admin/users/add', '\controllers\admin\users@add');
Router::any('admin/users/edit/(:num)', '\controllers\admin\users@edit');



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

<?php 
namespace controllers\admin;

use \helpers\session;
use	\helpers\url;
use	\core\view;

class Admin extends \core\controller {
	
	public function __construct(){
		
		if(!Session::get('loggedin')){
			Url::redirect('admin/login');
		}

	}
	public function index(){
		
		$data['title'] = 'Admin';
		View::rendertemplate('header',$data);
		View::rendertemplate('admin/admin',$data);
		View::rendertemplate('footer',$data);
	}
}
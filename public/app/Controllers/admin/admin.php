<?php namespace controllers\admin;

use \helpers\session,
	\helpers\url,
	\core\view;

class Admin extends \core\controller {

	private $_adminbjt;

	public function __construct(){

		$this->_adminObct = new \models\obct();

		if(!Session::get('loggedin')){
			Url::redirect('admin/login');
		}

	}

	public function index(){
		
		$data['title'] = 'Admin';	

		$obctContact = $this->_adminObct->getContact();
		$data['contact'] = $obctContact;

		View::renderadmintemplate('header',$data);
		View::render('admin/admin', $data);
		View::renderadmintemplate('footer',$data);

	}

}
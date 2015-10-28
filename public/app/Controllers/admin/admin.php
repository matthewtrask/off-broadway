<?php namespace controllers\admin;

use \helpers\session,
	\helpers\url,
	\core\view;

class Admin extends \core\controller
{

	private $_adminObct;

	public function __construct()
	{

		$this->_adminObct = new \models\obct();

		if(!Session::get('loggedin')){
			Url::redirect('admin/login');
		}

	}

	public function index()
	{
		
		$data['title'] = 'Admin';	

		$obctContact = $this->_adminObct->getContact();
		$data['contact'] = $obctContact;

		$obctMessageQueue = $this->_adminObct->getMessageQueue();
		$data['messages'] = $obctMessageQueue;

		View::renderadmintemplate('header',$data);
		View::render('admin/admin', $data);
		View::renderadmintemplate('footer',$data);

	}

	private function postMessage()
	{
		var_dump($_POST);
	}

	public function classes()
	{
		$data['title'] = 'Edit Classes';

		$obctClasses = $this->_adminObct->getClasses();
		$data['classes'] = $obctClasses;

		View::renderadmintemplate('header',$data);
		View::render('admin/classes', $data);
		View::renderadmintemplate('footer');
	}

	private function removeClasses()
	{
		
	}

	private function updateClasses()
	{
		
	}

}
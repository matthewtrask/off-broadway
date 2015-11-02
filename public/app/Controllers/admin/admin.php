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
		var_dump($_POST);
	}

	private function updateClasses()
	{
		$updatedClassId = $_POST['updatedClassId']
		$updatedClassName = $_POST['updatedClassName'];
		$updatedClassTeaser = $_POST['updatedTeaster'];
		$updatedClassDesc = $_POST['updatedClassDescription'];
		$updatedClassDay = $_POST['updatedClassDay'];
		$updatedClassTime = $_POST['updatedClassTime']; 
		$updatedClassPrice = $_POST['updatedClassPrice'];
		$updatedClassLink = $_POST['updatedClassLink'];

		$updatedInfo = array(
			'class_title' => $updatedClassName,
			'teaser'      => $updatedClassTeaster,
			'description' => $updatedClassDesc,
			'day' 		  => $updatedClassDay,
			'time'		  => $updatedClassTime,
			'price'       => $updatedClassPrice,
			'link'        => $updatedClassLink
		);

		
	}

	private function addClasses()
	{
		var_dump($_POST);
	}

}
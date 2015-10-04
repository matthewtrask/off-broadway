<?php 

namespace controllers\admin;

use \helpers\url;
use	\helpers\session;
use	\core\view;

class Users extends \core\controller{
	
	private $_model;
	
	public function __construct(){
	
		if(!Session::get('loggedin')){
			Url::redirect('admin/login');
		}
		
		$this->_model = new \models\admin\users();
	}
	
	public function index(){
		$data['title'] = 'Users';
		$data['users'] = $this->_model->getusers();
		View::renderadmintemplate('adminheader',$data);
		View::render('users',$data);
		View::renderadmintemplate('adminfooter',$data);
	}
	
	public function add(){
		
		$data['title'] = 'Add User';
		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			if($username == ''){
				$error[] = 'Username is required';
			}
			if($password == ''){
				$error[] = 'Password is required';
			}
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			    $error[] = 'Email is not valid';
			}
			if(!$error){
				$postdata = array(
					'username' => $username,
					'password' => \helpers\password::make($password),
					'email' => $email
				);
				$this->_model->insert_user($postdata);
				Session::set('message','User Added');
				Url::redirect('admin/users');
			}
		}
		View::rendertemplate('adminheader',$data);
		View::rendertemplate('adduser',$data,$error);
		View::rendertemplate('adminfooter',$data);
	}
	public function edit($id){
		
		$data['title'] = 'Edit User';
		$data['row'] = $this->_model->getuser($id);
		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			if($username == ''){
				$error[] = 'Username is required';
			}
			if($password == ''){
				$error[] = 'Password is required';
			}
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			    $error[] = 'Email is not valid';
			}
			if(!$error){
				$postdata = array(
					'username' => $username,
					'password' => \helpers\password::make($password),
					'email' => $email
				);
				$where = array('memberID' => $id);
				$this->_model->update_user($postdata,$where);
				Session::set('message','User Updated');
				Url::redirect('admin/users');
			}
		}
		View::rendertemplate('adminheader',$data);
		View::rendertemplate('edituser',$data,$error);
		View::rendertemplate('adminfooter',$data);
	}
}
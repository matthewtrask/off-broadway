<?php namespace controllers\admin;

use \helpers\password;
use	\helpers\session;
use	\helpers\url;
use	\core\view;

class Auth extends \core\controller {

	public function login(){


		if(Session::get('loggedin')){
			Url::redirect('admin');
		}

		$model = new \models\auth();
		$data['title'] = 'Login';

		if(isset($_POST['submit'])){

			$username = $_POST['username'];
			$password = $_POST['password'];

			if(Password::verify($password, $model->getHash($_POST['username'])) == 0){
				$error[] = 'Wrong username of password';
			} else {
				Session::set('loggedin',true);
				Url::redirect('admin');
			}
		}

		View::rendertemplate('loginheader',$data);
		View::rendertemplate('login',$data,$error);
		View::rendertemplate('adminfooter',$data);
	}
	public function logout(){
		Session::destroy();
		Url::redirect('admin/login');
	}
}
<?php namespace controllers\admin;

use \helpers\password,
	\helpers\session,
	\helpers\url,
	\core\view;

class auth extends \core\controller {

	public function login(){

		if(Session::get('loggedin')){
			Url::redirect('admin');
		}

		$model = new \models\admin\auth();

		$data['title'] = 'Login';

		if(isset($_POST['submit'])){

			$username = $_POST['username'];
			$password = $_POST['password'];

			if(Password::verify($password, $model->getHash($_POST['username'])) == 0){
				$error[] = '<h2>Wrong username of password</h2>';
			} else {
				Session::set('loggedin',true);
				Session::set('username', $username);
				Url::redirect('admin');
			}

		}

		View::renderadmintemplate('loginheader',$data);
		View::render('admin/login',$data,$error);
		View::renderadmintemplate('footer',$data);
	}

	public function logout(){

		Session::destroy();
		Url::redirect('admin/login');

	}

}

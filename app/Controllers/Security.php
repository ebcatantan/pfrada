<?php namespace App\Controllers;

use Modules\UserManagement\Models\UsersModel;

class Security extends BaseController
{
	public function index()
	{
		$model = new UsersModel();
		if($_POST)
		{
			$loginOK = 0;
			$users = $model->getUserWithCondition(['username' => $_POST['username']]);
			
			//checking of user existense
			if(!empty($users))
			{
				foreach($users as $user)
				{
					if(password_verify($_POST['password'], $user['password']))
					{
						$loginOK = 1;
						$_SESSION['uid'] = $user['id'];
						$_SESSION['uname'] = $user['username'];
						$_SESSION['rid'] = $user['role_id'];
						$_SESSION['user_logged_in'] = 1;
						break;						
					}
				}
			}
			else
			{

				$_SESSION['error_login'] = 'Cannot Find Username';
				$this->session->markAsFlashdata('error_login');
	        	return redirect()->to( base_url());
			}

			//checking if user is user credential is valid
			if($loginOK == 1)
			{
				//die('logged in');
				$_SESSION['success_login'] = 'Welcome '.$user['username'].'!';
				$this->session->markAsFlashdata('success_login');
	        	return redirect()->to(base_url('users/own/'.$_SESSION['uid']));
			}
			else
			{
				//die('error login');
				$_SESSION['error_login'] = 'Username and Password mismatch!';
				$this->session->markAsFlashdata('error_login');
	        	return redirect()->to(base_url());
			}
		}
		else
		{
			echo view('App\Views\login');
		}
	}

	public function logout()
	{
		session_destroy();
		$_SESSION['success'] = 'Thank you. Come Again!';
		$this->session->markAsFlashdata('success');
    	return redirect()->to(base_url());
	}
}

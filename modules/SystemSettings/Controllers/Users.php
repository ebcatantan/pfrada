<?php 
namespace Modules\UserManagement\Controllers;

use Modules\UserManagement\Models\UsersModel;
use Modules\UserManagement\Models\RolesModel;
use App\Controllers\BaseController;

class Users extends BaseController 
{
	private $roles;

	public function __construct()
	{
		parent:: __construct();

		$role_model = new RolesModel();
		$this->roles = $role_model->getRoleWithCondition(['status' => 'a']);		
	}

	public function show_user($id)
	{
		$this->hasPermissionRedirect('show-user');
		$data['permissions'] = $this->permissions;

		$model = new UsersModel();

		$data['user'] = $model->getUserWithCondition(['id' => $id]);

		$data['function_title'] = "User Profile";
        $data['viewName'] = 'Modules\UserManagement\Views\users\userProfile';
        echo view('App\Views\theme\index', $data);
	}

	public function user_own_profile($id)
	{
		$this->hasPermissionRedirect('user-own-profile');

		if($id != $_SESSION['rid'])
		{
			header('Location: '.base_url());
			session_destroy();
			exit;
		}

		$model = new UsersModel();

		$data['user'] = $model->getUserWithCondition(['id' => $id]);

		$data['function_title'] = "User Own Profile";
        $data['viewName'] = 'Modules\UserManagement\Views\users\userOwnProfile';
        echo view('App\Views\theme\index', $data);
	}

    public function index($offset = 0)
    {	
    	$this->hasPermissionRedirect('list-user');

    	$model = new UsersModel();
 
    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getUserWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['users'] = $model->getUsersWithRole(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Users List";
        $data['viewName'] = 'Modules\UserManagement\Views\users\index';
        echo view('App\Views\theme\index', $data);
    }

    public function add_user()
    {
    	$this->hasPermissionRedirect('add-user');
    	
    	$data['roles'] = $this->roles;
		
    	helper(['form', 'url']);
    	$model = new UsersModel();
    	if(!empty($_POST))
    	{
	    	if (!$this->validate('user'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding user";
		        $data['viewName'] = 'Modules\UserManagement\Views\users\frmUser';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	unset($_POST['password_retype']);
		        if($model->addUsers($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to( base_url('users'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('users'));
		        }
		    }    		
    	}
    	else
    	{

	    	$data['function_title'] = "Adding User Account";
	        $data['viewName'] = 'Modules\UserManagement\Views\users\frmUser';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_user($id)
    {
    	$this->hasPermissionRedirect('edit-user');

    	$data['roles'] = $this->roles;

    	helper(['form', 'url', 'html']);
    	
    	$model = new UsersModel();
    	$data['rec'] = $model->find($id);


    	if(!empty($_POST))
    	{
	    	if (!$this->validate('user_edit'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of User";
		        $data['viewName'] = 'Modules\UserManagement\Views\users\frmUser';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	unset($_POST['password_retype']);
		    	if($model->editUsers($_POST, $id))
		        {
		        	$_SESSION['success'] = 'You have updated a record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to( base_url('users'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an errot in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('users'));
		        }
		    }    		
    	}
    	else
    	{
    		$data['function_title'] = "Editing of User";
	        $data['viewName'] = 'Modules\UserManagement\Views\users\frmUser';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_user($id)
    {
    	$this->hasPermissionRedirect('delete-user');
    	
    	$model = new UsersModel();
    	$model->deleteUser($id);
    }

}
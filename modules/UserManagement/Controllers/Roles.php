<?php 
namespace Modules\UserManagement\Controllers;

use Modules\UserManagement\Models\RolesModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Roles extends BaseController
{
	//private $permissions;

	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

    public function index($offset = 0)
    {	
    	$this->hasPermissionRedirect('list-role');

    	$model = new RolesModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getRoleWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['roles'] = $model->getRoleWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Roles List";
        $data['viewName'] = 'Modules\UserManagement\Views\roles\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_role($id)
	{
		$this->hasPermissionRedirect('show-role-details');
		$data['permissions'] = $this->permissions;

		$model = new RolesModel();

		$data['role'] = $model->getRoleWithCondition(['id' => $id]);

		$data['function_title'] = "Role Details";
        $data['viewName'] = 'Modules\UserManagement\Views\roles\roleDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_role()
    {
    	$this->hasPermissionRedirect('add-role');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;
	
    	helper(['form', 'url']);
    	$model = new RolesModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('role'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Role";
		        $data['viewName'] = 'Modules\UserManagement\Views\roles\frmRole';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addRoles($_POST))
		        {
		        	$role_id = $model->insertID();
		        	$permissions_model->update_permitted_role($role_id, $_POST['function_id']);
		        	$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('roles'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('roles'));
		        }
		    }    		
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Role";
	        $data['viewName'] = 'Modules\UserManagement\Views\roles\frmRole';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_role($id)
    {
    	$this->hasPermissionRedirect('edit-role');
    	helper(['form', 'url']);
    	$model = new RolesModel();
    	$data['rec'] = $model->find($id);
    	
    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('role'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Role";
		        $data['viewName'] = 'Modules\UserManagement\Views\roles\frmRole';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editRoles($_POST, $id))
		        {
		        	$permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('roles'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an errot in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('roles'));
		        }
		    }    		
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Role";
	        $data['viewName'] = 'Modules\UserManagement\Views\roles\frmRole';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_role($id)
    {
    	$this->hasPermissionRedirect('delete-role');
    	
    	$model = new RolesModel();
    	$model->deleteRole($id);
    }

}
<?php 
namespace Modules\UserManagement\Controllers;

use Modules\UserManagement\Models\PermissionsModel;
use Modules\UserManagement\Models\ModulesModel;
use Modules\UserManagement\Models\RolesModel;

use App\Controllers\BaseController;

class Permissions extends BaseController
{ 
	public function __construct()
	{
		parent:: __construct();
	}

    public function index($indexPage = 1)
    {	
    	$this->hasPermissionRedirect('role-permissions');

    	$model = new PermissionsModel();
    	$module_model = new ModulesModel();
    	$role_model = new RolesModel();

        $data['permissions'] = $model->getPermissions();
        $data['roles'] = $role_model->getRoles();
        $data['modules'] = $module_model->getModules();

        $data['function_title'] = "Roles Permissions";
        $data['viewName'] = 'Modules\UserManagement\Views\permissions\index';
        echo view('App\Views\theme\index', $data);
    }

    public function edit_permission()
    {
    	$this->hasPermissionRedirect('edit-role-permissions');
    	$model = new PermissionsModel();
    	$module_model = new ModulesModel();
    	$role_model = new RolesModel();

    	$isUpdated = 0;
    	$str = '';
    	if($_POST)
    	{
    		foreach($_POST['allowedUsers'] as $permissionID => $permittedRoles)
    		{
    			$str = '[';
    			foreach($permittedRoles as $ind => $val)
    			{
    				$str .= $ind.',';
    			}
    			$str = rtrim($str, ',');
    			$str .= ']';
    			
    			$dataVal = 	['allowed_roles' => $str];
    			if($model->editPermission($dataVal, $permissionID))
				{
					$isUpdated = 1;
				}

    		}
     		
     		if($isUpdated == 1)
	         {
	         	$_SESSION['success'] = 'You have updated the permissions';
				 $this->session->markAsFlashdata('success');
	         	return redirect()->to(base_url('permissions'));
	         }
	         else
	         {
	         	$_SESSION['error'] = 'You have an error in updating the permissions';
				 $this->session->markAsFlashdata('error');
	         	return redirect()->to(base_url('permissions'));
	         }
    	}



        $data['permissions'] = $model->getPermissions();
        $data['roles'] = $role_model->getRoles();
        $data['modules'] = $module_model->getModules();

        $data['function_title'] = "Roles Permissions";
        $data['viewName'] = 'Modules\UserManagement\Views\permissions\editPermission';
        echo view('App\Views\theme\index', $data);
    }
}
<?php
namespace Modules\SystemSettings\Controllers;

use Modules\SystemSettings\Models\BusinessTypesModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class BusinessTypes extends BaseController
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
    	$this->hasPermissionRedirect('list-businesstype');

			// die("here");
    	$model = new BusinessTypesModel();
    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getBusinessTypesWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['businesstypes'] = $model->getBusinessTypesWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Business Types List";
        $data['viewName'] = 'Modules\SystemSettings\Views\businesstypes\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_businesstype($id)
	{
		$this->hasPermissionRedirect('show-businesstype');
		$data['permissions'] = $this->permissions;

		$model = new BusinessTypesModel();

		$data['businesstype'] = $model->getBusinessTypesWithCondition(['id' => $id]);

		$data['function_title'] = "Business Types Details";
        $data['viewName'] = 'Modules\SystemSettings\Views\businesstypes\businesstypesDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_businesstype()
    {
    	$this->hasPermissionRedirect('add-businesstype');
    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new BusinessTypesModel();
    	if(!empty($_POST))
    	{
	    	if (!$this->validate('businesstype'))
		    {
					// die();
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Business Types";
		        $data['viewName'] = 'Modules\SystemSettings\Views\businesstypes\frmBusinessTypes';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addBusinessTypes($_POST))
		        {

		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('business-types'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('business-types'));
		        }
		    }
    	}
    	else
    	{


	    	$data['function_title'] = "Adding Business Types";
	        $data['viewName'] = 'Modules\SystemSettings\Views\businesstypes\frmBusinessTypes';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_businesstype($id)
    {
    	$this->hasPermissionRedirect('edit-businesstype');
    	helper(['form', 'url']);
    	$model = new BusinessTypesModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('businesstype'))
		    {
		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Editing of Business Types";
		        $data['viewName'] = 'Modules\SystemSettings\Views\businesstypes\frmBusinessTypes';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editBusinessTypes($_POST, $id))
		        {
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('business-types'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('business-types'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Business Type";
	        $data['viewName'] = 'Modules\SystemSettings\Views\businesstypes\frmBusinessTypes';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_businesstype($id)
    {
    	$this->hasPermissionRedirect('delete-businesstype');

    	$model = new BusinessTypesModel();
    	$model->deleteBusinessTypes($id);
    }

}

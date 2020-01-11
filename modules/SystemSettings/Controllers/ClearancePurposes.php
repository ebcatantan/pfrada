clearance<?php
namespace Modules\SystemSettings\Controllers;

use Modules\SystemSettings\Models\ClearancePurposesModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class ClearancePurposes extends BaseController
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
    	$this->hasPermissionRedirect('list-clearancepurpose');

			// die("here");
    	$model = new ClearancePurposesModel();
    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getClearancePurposesWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['clearance_purposes'] = $model->getClearancePurposeWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "List of Clearance Purpose";
        $data['viewName'] = 'Modules\SystemSettings\Views\clearancepurposes\index';
        echo view('App\Views\theme\index', $data);
    }

			public function show_clearancepurpose($id)
			{
			$this->hasPermissionRedirect('show-clearancepurpose');
			$data['permissions'] = $this->permissions;

			$model = new ClearancePurposesModel();

			$data['clearance_purposes'] = $model->getClearancePurposesWithCondition(['id' => $id]);
			$data['function_title'] = "clearancepurpose Details";
					$data['viewName'] = 'Modules\SystemSettings\Views\clearancepurposes\ClearancePurposeDetails';
					echo view('App\Views\theme\index', $data);
			}

     public function add_clearancepurpose()
     {
     	$this->hasPermissionRedirect('add-clearancepurpose');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

			// die('here');
    	helper(['form', 'url']);
    	$model = new ClearancePurposesModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('clearancepurposes'))
		    {

		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Clearance Purpose";
		        $data['viewName'] = 'Modules\SystemSettings\Views\clearancepurposes\frmClearancePurpose';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addClearancePurposes($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('clearance-purposes'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('clearance-purposes'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Clearance Purpose";
	        $data['viewName'] = 'Modules\SystemSettings\Views\clearancepurposes\frmClearancePurpose';
	        echo view('App\Views\theme\index', $data);
    	}
    }

     public function edit_clearancepurpose($id)
     {
     	$this->hasPermissionRedirect('edit-clearancepurpose');
     	helper(['form', 'url']);
     	$model = new clearancepurposesModel();
     	$data['rec'] = $model->find($id);

     	$permissions_model = new PermissionsModel();

     	$data['permissions'] = $this->permissions;

     	if(!empty($_POST))
     	{
	     	if (!$this->validate('clearancepurposes'))
		     {
		     		$data['errors'] = \Config\Services::validation()->getErrors();
		         $data['function_title'] = "Edit Clearance Purpose";
		         $data['viewName'] = 'Modules\SystemSettings\Views\clearancepurposes\frmClearancePurpose';
		         echo view('App\Views\theme\index', $data);
		     }
		     else
		     {
		     	if($model->editClearancePurposes($_POST, $id))
		         {
							$_SESSION['success'] = 'You have updated a record';
		 				 	$this->session->markAsFlashdata('success');
		         	return redirect()->to(base_url('clearance-purposes'));
		         }
		         else
		         {
		         	$_SESSION['error'] = 'You an error in updating a record';
		 			$this->session->markAsFlashdata('error');
		         	return redirect()->to( base_url('clearance-purposes'));
		         }
		     }
     	}
     	else
     	{
	     	$data['function_title'] = "Editing Clearance Purpose";
	         $data['viewName'] = 'Modules\SystemSettings\Views\clearancepurposes\frmClearancePurpose';
	         echo view('App\Views\theme\index', $data);
     	}
     }

     public function delete_clearancepurpose($id)
     {
     	$this->hasPermissionRedirect('delete-clearancepurpose');

     	$model = new ClearancePurposesModel();
     	$model->deleteClearancePurposes($id);
     }

}

<?php
namespace Modules\SystemSettings\Controllers;

use Modules\SystemSettings\Models\ClearanceModel;
use Modules\UserManagement\Models\PermissionsModel;
use Modules\BaranggaySettings\Models\DocumentsModel;

use App\Controllers\BaseController;

class Clearance extends BaseController
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
    	$this->hasPermissionRedirect('list-clearance');

			// die("here");
    	$model = new ClearanceModel();
    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getClearanceWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['clearance_fees'] = $model->getClearanceWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Clearance List";
        $data['viewName'] = 'Modules\SystemSettings\Views\clearance\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_clearance($id)
	{
		$this->hasPermissionRedirect('show-clearance');
		$data['permissions'] = $this->permissions;

		$model = new ClearanceModel();

		$data['clearance_fees'] = $model->getClearanceWithCondition(['id' => $id]);

		$data['function_title'] = "clearance Details";
        $data['viewName'] = 'Modules\SystemSettings\Views\clearance\clearanceDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_clearance()
    {
    	$this->hasPermissionRedirect('add-clearance');

    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

			$model_document_name = new DocumentsModel();
			$data['documents'] = $model_document_name->where('status', 'a')->findAll();

    	helper(['form', 'url']);
    	$model = new ClearanceModel();

    	if(!empty($_POST))
    	{

	    	if (!$this->validate('clearance'))
		    {

		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Clearance";
		        $data['viewName'] = 'Modules\SystemSettings\Views\clearance\frmClearance';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addClearance($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('clearance-fees'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('clearance-fees'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Clearance";
	        $data['viewName'] = 'Modules\SystemSettings\Views\clearance\frmClearance';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_clearance($id)
    {
    	$this->hasPermissionRedirect('edit-clearance');
    	helper(['form', 'url']);
    	$model = new ClearanceModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('clearance'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of clearance";
		        $data['viewName'] = 'Modules\SystemSettings\Views\clearance\frmClearance';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editClearance($_POST, $id))
		        {
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('clearance-fees'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('clearance-fees'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of clearance";
	        $data['viewName'] = 'Modules\SystemSettings\Views\clearance\frmClearance';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_clearance($id)
    {
    	$this->hasPermissionRedirect('delete-clearance');

    	$model = new ClearanceModel();
    	$model->deleteClearance($id);
    }

}

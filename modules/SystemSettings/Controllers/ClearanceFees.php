<?php
namespace Modules\SystemSettings\Controllers;

use Modules\SystemSettings\Models\ClearanceFeesModel;
use Modules\UserManagement\Models\PermissionsModel;
use Modules\BaranggaySettings\Models\DocumentsModel;
use Modules\SystemSettings\Models\ClearancePurposesModel;
use App\Controllers\BaseController;

class ClearanceFees extends BaseController
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
    	$model = new ClearanceFeesModel();
    	//kailangan ito para sa pagination

			$data['all_items'] = $model->get([],[],['status'=> 'a'],[]);
			$data['offset'] = $offset;

			// print_r($str); die();
			$fields = [
				'document_name' => 'documents',
				'purpose' => 'clearance_purposes'
			];

			$tables = [
				'documents' => [
					'clearance_fees.document_id' => 'documents.id'
				],
				'clearance_purposes' => [
					'clearance_fees.clearance_purpose_id' => 'clearance_purposes.id'
				]
			];

			$conditions = [
					'clearance_fees.status' => 'a'
			];
			$data['clearance_fees'] = $model->get($fields, $tables, $conditions, ['limit' => PERPAGE, 'offset' => $offset]);

				// $data['all_items'] = $model->getClearanceWithCondition(['status'=> 'a']);
       	// $data['offset'] = $offset;
				//
        // $data['clearance_fees'] = $model->getClearanceWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);
        $data['function_title'] = "List of Clearance Fees";
        $data['viewName'] = 'Modules\SystemSettings\Views\clearancefees\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_clearance($id)
	{
		$this->hasPermissionRedirect('show-clearance');
		$data['permissions'] = $this->permissions;

		$model = new ClearanceFeesModel();

		$data['clearance_fees'] = $model->getClearanceWithCondition(['id' => $id]);

		$data['function_title'] = "Clearance Fee Details";
        $data['viewName'] = 'Modules\SystemSettings\Views\clearancefees\clearanceDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_clearance()
    {
    	$this->hasPermissionRedirect('add-clearance');

    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

			$model_document_name = new DocumentsModel();
			$data['documents'] = $model_document_name->where('status', 'a')->findAll();

			$model_purposes = new ClearancePurposesModel();
			$data['clearance_purposes'] = $model_purposes->where('status', 'a')->findAll();

    	helper(['form', 'url']);
    	$model = new ClearanceFeesModel();

    	if(!empty($_POST))
    	{

	    	if (!$this->validate('clearance'))
		    {

		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Clearance Fee";
		        $data['viewName'] = 'Modules\SystemSettings\Views\clearancefees\frmClearance';
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

	    	$data['function_title'] = "Adding Clearance Fee";
	        $data['viewName'] = 'Modules\SystemSettings\Views\clearancefees\frmClearance';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_clearance($id)
    {
    	$this->hasPermissionRedirect('edit-clearance');
    	helper(['form', 'url']);
    	$model = new ClearanceFeesModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

			$model_document_name = new DocumentsModel();
			$data['documents'] = $model_document_name->where('status', 'a')->findAll();

			$model_purposes = new ClearancePurposesModel();
			$data['clearance_purposes'] = $model_purposes->where('status', 'a')->findAll();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('clearance'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit Clearance Fee";
		        $data['viewName'] = 'Modules\SystemSettings\Views\clearancefees\frmClearance';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editClearance($_POST, $id))
		        {
							$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('clearance-fees'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('clearance-fees'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing Clearance Fee";
	        $data['viewName'] = 'Modules\SystemSettings\Views\clearancefees\frmClearance';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_clearance($id)
    {
    	$this->hasPermissionRedirect('delete-clearance');

    	$model = new ClearanceFeesModel();
    	$model->deleteClearance($id);
    }

}

<?php
namespace Modules\SystemSettings\Controllers;

use Modules\SystemSettings\Models\BusinessPermitFeesModel;
use Modules\UserManagement\Models\PermissionsModel;
use Modules\SystemSettings\Models\BusinessTypesModel;
use Modules\BaranggaySettings\Models\DocumentsModel;


use App\Controllers\BaseController;

class BusinessPermitFees extends BaseController
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
    	$this->hasPermissionRedirect('list-of-business-permit-fees');

			// die("here");
    	$model = new BusinessPermitFeesModel();
    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getBusinessPermitFeesWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['business_permit_fees'] = $model->getBusinessPermitFeesWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "List of Business Permit Fees";
        $data['viewName'] = 'Modules\SystemSettings\Views\businesspermitfees\index';//palatandaan
        echo view('App\Views\theme\index', $data);
    }
	//start ng show
	public function show_businesspermitfees($id)
			{
			$this->hasPermissionRedirect('show-business');
			$data['permissions'] = $this->permissions;

			$model = new BusinessPermitFeesModel();

			$data['business_permit_fees'] = $model->getBusinessPermitFeesWithCondition(['id' => $id]);

			$data['function_title'] = "Business Permit Fees Details";
					$data['viewName'] = 'Modules\SystemSettings\Views\businesspermitfees\businesspermitfeesDetails';
					echo view('App\Views\theme\index', $data);
			}
//end ng show

	//start ng add
	public function add_BusinessPermitFees()
     {
     	$this->hasPermissionRedirect('add-businesspermitfees');
    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

			$model_document_name = new DocumentsModel();
			$data['documents'] = $model_document_name->where('status', 'a')->findAll();

			$model_business_types = new BusinessTypesModel();
			$data['business_types'] = $model_business_types->where('status', 'a')->findAll();


			// die('here');
    	helper(['form', 'url']);
    	$model = new BusinessPermitFeesModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('permit'))
		    {

		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Business Permit Fees";
		        $data['viewName'] = 'Modules\SystemSettings\Views\businesspermitfees\frmBusinessPermitFees';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addBusinessPermitFees($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('business-permit-fees'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('business-permit-fees'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Business Permit Fees";
	        $data['viewName'] = 'Modules\SystemSettings\Views\businesspermitfees\frmBusinessPermitFees';
	        echo view('App\Views\theme\index', $data);
    	}
    }
	//end ng add
    public function edit_business($id)
    {
    	$this->hasPermissionRedirect('edit-business');
    	helper(['form', 'url']);
    	$model = new BusinessPermitFeesModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

			$model_document_name = new DocumentsModel();
			$data['documents'] = $model_document_name->where('status', 'a')->findAll();

			$model_business_types = new BusinessTypesModel();
			$data['business_types'] = $model_business_types->where('status', 'a')->findAll();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('permit'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Business Permit Fees";
		        $data['viewName'] = 'Modules\SystemSettings\Views\businesspermitfees\frmBusinessPermitFees';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editBusinessPermitFees($_POST, $id))
		        {
							$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('business-permit-fees'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('business-permit-fees'));
		        }
		    }
    	}
    	else
    	{
				$data['function_title'] = "Adding Business Permit Fees";
	        $data['viewName'] = 'Modules\SystemSettings\Views\businesspermitfees\frmBusinessPermitFees';
	        echo view('App\Views\theme\index', $data);

    	}
    }

    public function delete_businesspermitfees($id)
    {
    	$this->hasPermissionRedirect('delete-business');

    	$model = new BusinessPermitFeesModel();
    	$model->deleteBusinessPermitFees($id);
    }

		public function delete_businesstype($id)
    {
    	$this->hasPermissionRedirect('delete-businesstype');

    	$model = new BusinessTypesModel();
    	$model->deleteBusinessTypes($id);
    }

}

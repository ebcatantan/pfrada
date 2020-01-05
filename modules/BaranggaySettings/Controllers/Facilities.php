<?php
namespace Modules\BaranggaySettings\Controllers;

use Modules\BaranggaySettings\Models\FacilitiesModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Facilities extends BaseController
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
    	$this->hasPermissionRedirect('list-facility');

			// die("here");
    	$model = new FacilitiesModel();
    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getFacilityWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['facilities'] = $model->getFacilityWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Facilities List";
        $data['viewName'] = 'Modules\BaranggaySettings\Views\facilities\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_facility($id)
	{
		$this->hasPermissionRedirect('show-facility');
		$data['permissions'] = $this->permissions;

		$model = new FacilitiesModel();

		$data['facility'] = $model->getFacilityWithCondition(['id' => $id]);

		$data['function_title'] = "Facility Details";
        $data['viewName'] = 'Modules\BaranggaySettings\Views\facilities\facilityDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_facility()
    {
    	$this->hasPermissionRedirect('add-facility');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new FacilitiesModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('facility'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Facility";
		        $data['viewName'] = 'Modules\BaranggaySettings\Views\facilities\frmFacility';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addFacility($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('facilities'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('facilities'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Facility";
	        $data['viewName'] = 'Modules\BaranggaySettings\Views\facilities\frmFacility';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_facility($id)
    {
    	$this->hasPermissionRedirect('edit-facility');
    	helper(['form', 'url']);
    	$model = new FacilitiesModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('facility'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of facility";
		        $data['viewName'] = 'Modules\BaranggaySettings\Views\facilities\frmFacility';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editFacilities($_POST, $id))
		        {
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('facilities'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('facilities'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of facility";
	        $data['viewName'] = 'Modules\BaranggaySettings\Views\facilities\frmFacility';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_facility($id)
    {
    	$this->hasPermissionRedirect('delete-facility');

    	$model = new FacilitiesModel();
    	$model->deleteFacility($id);
    }

}

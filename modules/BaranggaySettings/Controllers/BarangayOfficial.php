<?php
namespace Modules\BaranggaySettings\Controllers;

use Modules\BaranggaySettings\Models\BarangayOfficialModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class BarangayOfficial extends BaseController
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
    	$this->hasPermissionRedirect('list-of-barangayofficial');

			$model = new BarangayOfficialModel();
    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getBarangayOfficialWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['brgy_officials'] = $model->getBarangayOfficialWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);


        $data['function_title'] = "List of Barangay Official";
        $data['viewName'] = 'Modules\BaranggaySettings\Views\barangayofficial\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_barangayofficial($id)
	{
		$this->hasPermissionRedirect('show-barangayofficial');
		$data['permissions'] = $this->permissions;

		$model = new BarangayOfficialModel();

		$data['brgy_officials'] = $model->getBarangayOfficialWithCondition(['id' => $id]);

		
		$data['function_title'] = "Barangay Official Details";
        $data['viewName'] = 'Modules\BaranggaySettings\Views\barangayofficial\barangayofficialDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_barangayofficial()
    {
    	$this->hasPermissionRedirect('add-barangayofficial');
    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new BarangayOfficialModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('officials'))
		    {

		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Barangay Officials";
		        $data['viewName'] = 'Modules\BaranggaySettings\Views\barangayofficial\frmBarangayOfficial';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addBarangayOfficial($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('brgy-officials'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('brgy-officials'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Barangay Official";
	        $data['viewName'] = 'Modules\BaranggaySettings\Views\barangayofficial\frmBarangayOfficial';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_barangayofficial($id)
    {
    	$this->hasPermissionRedirect('edit-barangayofficial');
    	helper(['form', 'url']);
    	$model = new BarangayOfficialModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('officials'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Barangay officials";
		        $data['viewName'] = 'Modules\BaranggaySettings\Views\barangayofficial\frmBarangayOfficial';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editBarangayOfficial($_POST, $id))
		        {
							$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('brgy-officials'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('brgy-officials'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Barangay Officials";
	        $data['viewName'] = 'Modules\BaranggaySettings\Views\barangayofficial\frmBarangayOfficial';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_barangayofficial($id)
    {
    	$this->hasPermissionRedirect('delete-barangayofficial');

    	$model = new BarangayOfficialModel();
    	$model->deleteBarangayOfficial($id);

    }
}

<?php
namespace Modules\CitizenManagement\Controllers;

use Modules\CitizenManagement\Models\CitizenModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Citizen extends BaseController
{
	//private $permissions;

	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

    public function index($offset = 0) //list of citizen
    {
    	$this->hasPermissionRedirect('list-of-citizen');

    	$model = new CitizenModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getCitizenWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['citizens'] = $model->getCitizenWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Citizens List";
        $data['viewName'] = 'Modules\CitizenManagement\Views\citizens\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_citizen($id)
	{
		$this->hasPermissionRedirect('show-citizen');
		$data['permissions'] = $this->permissions;

		$model = new CitizenModel();

		$data['citizen'] = $model->getCitizenWithCondition(['id' => $id]);

		$data['function_title'] = "Citizen Details";
        $data['viewName'] = 'Modules\CitizenManagement\Views\citizens\citizenDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_citizen()
    {
    	$this->hasPermissionRedirect('add-citizen');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new CitizenModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('citizen'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Citizen";
		        $data['viewName'] = 'Modules\CitizenManagement\Views\citizens\frmCitizens';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addCitizen($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('citizens'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('citizens'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Citizens";
	        $data['viewName'] = 'Modules\CitizenManagement\Views\citizens\frmCitizens';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_citizen($id)
    {
    	$this->hasPermissionRedirect('edit-citizen');
    	helper(['form', 'url']);
    	$model = new CitizenModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('citizen'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit Citizen";
		        $data['viewName'] = 'Modules\CitizenManagement\Views\citizens\frmCitizens';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editCitizen($_POST, $id))
		        {
		        	// $permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('citizens'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('citizens'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Edit Citizen";
	        $data['viewName'] = 'Modules\CitizenManagement\Views\citizens\frmCitizens';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_citizen($id)
    {
    	$this->hasPermissionRedirect('delete-citizen');

    	$model = new CitizenModel();
    	$model->deleteCitizen($id);
    }

}

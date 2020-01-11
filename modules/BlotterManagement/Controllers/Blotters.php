<?php
namespace Modules\BlotterManagement\Controllers;

use Modules\BlotterManagement\Models\BlottersModel;
use Modules\UserManagement\Models\PermissionsModel;
use Modules\CitizenManagement\Models\CitizenModel;
use App\Controllers\BaseController;

class Blotters extends BaseController
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
    	$this->hasPermissionRedirect('list-blotter');

    	$model = new BlottersModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getBlotterWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['blotters'] = $model->getBlotterWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Blotters List";
        $data['viewName'] = 'Modules\BlotterManagement\Views\blotters\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_blotter($id)
	{
		$this->hasPermissionRedirect('show-blotter');
		$data['permissions'] = $this->permissions;

		$model = new BlottersModel();

		$data['blotter'] = $model->getBlotterWithCondition(['id' => $id]);

		$data['function_title'] = "Blotter Details";
        $data['viewName'] = 'Modules\BlotterManagement\Views\blotters\blotterDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_blotter()
    {
    	$this->hasPermissionRedirect('add-blotter');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new BlottersModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('blotter'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Blotter";
		        $data['viewName'] = 'Modules\BlotterManagement\Views\blotters\frmBlotter';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addBlotters($_POST))
		        {

		        	$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('blotters'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('blotters'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Blotter";
	        $data['viewName'] = 'Modules\BlotterManagement\Views\blotters\frmBlotter';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_blotter($id)
    {
    	$this->hasPermissionRedirect('edit-blotter');
    	helper(['form', 'url']);
    	$model = new BlottersModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('blotter'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Blotter";
		        $data['viewName'] = 'Modules\BlotterManagement\Views\blotters\frmBlotter';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editBlotters($_POST, $id))
		        {
		        	$permissions_model->update_permitted_blotter($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('blotters'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an errot in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('blotters'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Blotter";
	        $data['viewName'] = 'Modules\BlotterManagement\Views\blotters\frmBlotter';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_blotter($id)
    {
    	$this->hasPermissionRedirect('delete-blotter');

    	$model = new BlottersModel();
    	$model->deleteBlotter($id);
    }

}

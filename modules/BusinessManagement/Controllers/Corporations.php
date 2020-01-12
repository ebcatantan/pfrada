<?php
namespace Modules\BusinessManagement\Controllers;

use Modules\BusinessManagement\Models\CorporationsModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Corporations extends BaseController
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

    	$this->hasPermissionRedirect('list-corporation');
    	$model = new CorporationsModel();
    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getCorporationsWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;
        $data['corporations'] = $model->getCorporationWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);
				
				//die("here");
        $data['function_title'] = "List of Corporations";
        $data['viewName'] = 'Modules\BusinessManagement\Views\corporations\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_corporation($id)
	{
		$this->hasPermissionRedirect('show-corporation');
		$data['permissions'] = $this->permissions;

		$model = new CorporationsModel();

		$data['corporations'] = $model->getCorporationsWithCondition(['id' => $id]);

		$data['function_title'] = "Corporations Details";
        $data['viewName'] = 'Modules\BusinessManagement\Views\corporations\corporationsDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_corporation()
    {
    	$this->hasPermissionRedirect('add-corporation');
    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

			// $model_user = new UsersModel();
			// $data['users'] = $model_user->where('status', 'a')->findAll();
			//
			//
			// $businesstype_model = new BusinessTypesModel();
			// $data['businesstypes'] = $businesstype_model->where('status', 'a')->findAll();
			//

    	helper(['form', 'url']);
    	$model = new CorporationsModel();
    	if(!empty($_POST))
    	{
	    	if (!$this->validate('corporation'))
		    {
					// die();
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Corporations";
		        $data['viewName'] = 'Modules\BusinessManagement\Views\corporations\frmCorporations';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addCorporation($_POST))
		        {

		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('corporations'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('corporations'));
		        }
		    }
    	}
    	else
    	{


	    	$data['function_title'] = "Adding Corporations";
	        $data['viewName'] = 'Modules\BusinessManagement\Views\corporations\frmCorporations';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_corporation($id)
    {
    	$this->hasPermissionRedirect('edit-corporation');
    	helper(['form', 'url']);
    	$model = new CorporationsModel();
    	$data['rec'] = $model->find($id);

			$user_model = new UsersModel();
			$data['users'] = $user_model->where('status', 'a')->findAll();

			$businesstype_model = new BusinessTypesModel();
			$data['businesstypes'] = $businesstype_model->where('status', 'a')->findAll();

    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('corporation'))
		    {
		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Editing of Corporation";
		        $data['viewName'] = 'Modules\BusinessManagement\Views\corporation\frmCorporations';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editCorporations($_POST, $id))
		        {
							$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('corporations'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('corporations'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Corporation";
	        $data['viewName'] = 'Modules\BusinessManagement\Views\corporations\frmCorporations';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_corporation($id)
    {
    	$this->hasPermissionRedirect('delete-corporation');

    	$model = new CorporationsModel();
    	$model->deleteCorporation($id);
    }

}

<?php
namespace Modules\BaranggaySettings\Controllers;

use Modules\BaranggaySettings\Models\DocumentsModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Documents extends BaseController
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
    	$this->hasPermissionRedirect('list-document');

			// die("here");
    	$model = new DocumentsModel();
    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getDocumentWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['documents'] = $model->getDocumentWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Documents List";
        $data['viewName'] = 'Modules\BaranggaySettings\Views\documents\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_document($id)
	{
		$this->hasPermissionRedirect('show-document');
		$data['permissions'] = $this->permissions;

		$model = new DocumentsModel();

		$data['document'] = $model->getDocumentWithCondition(['id' => $id]);

		$data['function_title'] = "Document Details";
        $data['viewName'] = 'Modules\BaranggaySettings\Views\documents\documentDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_document()
    {
    	$this->hasPermissionRedirect('add-document');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new DocumentsModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('document'))
		    {

		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Document";
		        $data['viewName'] = 'Modules\BaranggaySettings\Views\documents\frmDocument';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addDocument($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('documents'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('documents'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Document";
	        $data['viewName'] = 'Modules\BaranggaySettings\Views\documents\frmDocument';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_document($id)
    {
    	$this->hasPermissionRedirect('edit-document');
    	helper(['form', 'url']);
    	$model = new DocumentsModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('document'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of document";
		        $data['viewName'] = 'Modules\BaranggaySettings\Views\documents\frmDocument';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editDocuments($_POST, $id))
		        {
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('documents'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('documents'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of document";
	        $data['viewName'] = 'Modules\BaranggaySettings\Views\documents\frmDocument';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_document($id)
    {
    	$this->hasPermissionRedirect('delete-document');

    	$model = new DocumentsModel();
    	$model->deleteDocument($id);
    }

}

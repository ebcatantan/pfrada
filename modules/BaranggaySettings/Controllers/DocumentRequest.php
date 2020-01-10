<?php
namespace Modules\BaranggaySettings\Controllers;

use Modules\BaranggaySettings\Models\DocumentRequestModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class DocumentRequest extends BaseController
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
    	$this->hasPermissionRedirect('list-documentrequest');

			// die("here");
    	$model = new DocumentRequestModel();
    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getDocumentRequestWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['document_requests'] = $model->getDocumentRequestWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Document Requests List";
        $data['viewName'] = 'Modules\BaranggaySettings\Views\documentrequest\index';
        echo view('App\Views\theme\index', $data);
    }

  //   public function show_document($id)
	// {
	// 	$this->hasPermissionRedirect('show-document');
	// 	$data['permissions'] = $this->permissions;
	//
	// 	$model = new DocumentsModel();
	//
	// 	$data['document'] = $model->getDocumentWithCondition(['id' => $id]);
	//
	// 	$data['function_title'] = "Document Details";
  //       $data['viewName'] = 'Modules\BaranggaySettings\Views\documents\documentDetails';
  //       echo view('App\Views\theme\index', $data);
	// }
	//
    public function add_documentrequest()
    {
    	$this->hasPermissionRedirect('add-documentrequest');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new DocumentRequestModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('documentrequest'))
		    {

		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Document Request";
		        $data['viewName'] = 'Modules\BaranggaySettings\Views\documents\frmDocumentRequest';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addDocumentRequest($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('document_requests'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('document_requests'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Document Request";
	        $data['viewName'] = 'Modules\BaranggaySettings\Views\documents\frmDocumentRequest';
	        echo view('App\Views\theme\index', $data);
    	}
    }
	
  //   public function edit_document($id)
  //   {
  //   	$this->hasPermissionRedirect('edit-document');
  //   	helper(['form', 'url']);
  //   	$model = new DocumentsModel();
  //   	$data['rec'] = $model->find($id);
	//
  //   	$permissions_model = new PermissionsModel();
	//
  //   	$data['permissions'] = $this->permissions;
	//
  //   	if(!empty($_POST))
  //   	{
	//     	if (!$this->validate('document'))
	// 	    {
	// 	    	$data['errors'] = \Config\Services::validation()->getErrors();
	// 	        $data['function_title'] = "Edit of document";
	// 	        $data['viewName'] = 'Modules\BaranggaySettings\Views\documents\frmDocument';
	// 	        echo view('App\Views\theme\index', $data);
	// 	    }
	// 	    else
	// 	    {
	// 	    	if($model->editDocuments($_POST, $id))
	// 	        {
	// 				$this->session->markAsFlashdata('success');
	// 	        	return redirect()->to(base_url('documents'));
	// 	        }
	// 	        else
	// 	        {
	// 	        	$_SESSION['error'] = 'You an error in updating a record';
	// 				$this->session->markAsFlashdata('error');
	// 	        	return redirect()->to( base_url('documents'));
	// 	        }
	// 	    }
  //   	}
  //   	else
  //   	{
	//     	$data['function_title'] = "Editing of document";
	//         $data['viewName'] = 'Modules\BaranggaySettings\Views\documents\frmDocument';
	//         echo view('App\Views\theme\index', $data);
  //   	}
  //   }
	//
  //   public function delete_document($id)
  //   {
  //   	$this->hasPermissionRedirect('delete-document');
	//
  //   	$model = new DocumentsModel();
  //   	$model->deleteDocument($id);
  //   }

}

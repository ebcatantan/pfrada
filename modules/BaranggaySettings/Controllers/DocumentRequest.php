<?php
namespace Modules\BaranggaySettings\Controllers;

use Modules\BaranggaySettings\Models\DocumentRequestModel;
use Modules\UserManagement\Models\PermissionsModel;
use Modules\UserManagement\Models\UsersModel;
use Modules\BaranggaySettings\Models\DocumentsModel;
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
			$data['all_items'] = $model->get([],[],['status'=> 'a'],[]);
			$data['offset'] = $offset;

			// print_r($str); die();
			$fields = [
				'document_name' => 'documents',
				'lastname' => 'users',
				'firstname' => 'users'
			];

			$tables = [
				'users' => [
					'document_requests.user_id' => 'users.id'
				],
				'users' => [
					'document_requests.processed_by' => 'users.id'
				],
				'users' => [
					'document_requests.released_by' => 'users.id'
				],
				'documents' => [
					'document_requests.document_id' => 'documents.id'
				]
			];

			$conditions = [
					'document_requests.status' => 'a'
			];
			$data['document_requests'] = $model->get($fields, $tables, $conditions, ['limit' => PERPAGE, 'offset' => $offset]);

        $data['function_title'] = "List of Document Request";
        $data['viewName'] = 'Modules\BaranggaySettings\Views\documentrequest\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_documentrequest($id)
	{
		$this->hasPermissionRedirect('show-documentrequest');
		$data['permissions'] = $this->permissions;

		$model = new DocumentRequestModel();
		$data['document_requests'] = $model->get([],[],['document_id'=>$id],[]);

		$fields = [
			'document_name' => 'documents',
			'lastname' => 'users',
			'firstname' => 'users'
		];

		$tables = [
			'users' => [
				'document_requests.user_id' => 'users.id'
			],
			'users' => [
				'document_requests.processed_by' => 'users.id'
			],
			'users' => [
				'document_requests.released_by' => 'users.id'
			],
			'documents' => [
				'document_requests.document_id' => 'documents.id'
			]
		];

		$conditions = [
			'document_requests.id' => $id

		];
				$data['document_requests'] = $model->get($fields, $tables, $conditions);

		$data['function_title'] = "Document Request Details";
        $data['viewName'] = 'Modules\SystemSettings\Views\documentrequest\documentrequestDetails';
        echo view('App\Views\theme\index', $data);
	}


    public function add_documentrequest()
    {
    	$this->hasPermissionRedirect('add-documentrequest');

    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

			$model_document_name = new DocumentsModel();
			$data['documents'] = $model_document_name->where('status', 'a')->findAll();

			$model_username = new UsersModel();
			$data['users'] = $model_username->where('status', 'a')->findAll();

    	helper(['form', 'url']);
    	$model = new DocumentRequestModel();

    	if(!empty($_POST))
    	{

	    	if (!$this->validate('documentrequests'))
		    {

		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Document Request";
		        $data['viewName'] = 'Modules\BaranggaySettings\Views\documentrequest\frmDocumentRequest';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addDocumentRequest($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('document-requests'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('document-requests'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Document Request";
	        $data['viewName'] = 'Modules\BaranggaySettings\Views\documentrequest\frmDocumentRequest';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_documentrequest($id)
    {
    	$this->hasPermissionRedirect('edit-documentrequest');
    	helper(['form', 'url']);
    	$model = new DocumentRequestModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

			$model_document_name = new DocumentsModel();
			$data['documents'] = $model_document_name->where('status', 'a')->findAll();

			$model_username = new UsersModel();
			$data['users'] = $model_username->where('status', 'a')->findAll();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('documentrequest'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit Document Request";
		        $data['viewName'] = 'Modules\BaranggaySettings\Views\documentrequest\frmDocumentRequest';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editDocumentRequest($_POST, $id))
		        {
							$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('document-request'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('document-request'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing Document Request";
	        $data['viewName'] = 'Modules\BaranggaySettings\Views\documentrequest\frmDocumentRequest';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_documentrequest($id)
    {
    	$this->hasPermissionRedirect('delete-documentrequest');

    	$model = new DocumentRequestModel();
    	$model->deleteDocumentRequest($id);
    }

}

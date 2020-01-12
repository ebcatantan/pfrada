<?php
namespace Modules\BlotterManagement\Controllers;

use Modules\BlotterManagement\Models\BlotterActionsModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class BlotterActions extends BaseController
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
    	$this->hasPermissionRedirect('list-blotteraction');

			// die("here");
    	$model = new BlotterActionsModel();
    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getBlotterActionsWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['blotter_actions'] = $model->getBlotterActionWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "List of Blotter Actions";
        $data['viewName'] = 'Modules\BlotterManagement\Views\actions\index';
        echo view('App\Views\theme\index', $data);
    }

			public function show_blotteraction($id)
			{
			$this->hasPermissionRedirect('show-blotteraction');
			$data['permissions'] = $this->permissions;

			$model = new BlotterActionsModel();

			$data['blotter_actions'] = $model->getBlotterActionsWithCondition(['id' => $id]);
			$data['function_title'] = "blotteraction Details";
					$data['viewName'] = 'Modules\BlotterManagement\Views\actions\BlotterActionDetail';
					echo view('App\Views\theme\index', $data);
			}

     public function add_blotteraction()
     {
     	$this->hasPermissionRedirect('add-blotteraction');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

			// die('here');
    	helper(['form', 'url']);
    	$model = new BlotterActionsModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('blotteractions'))
		    {

		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Blotter Actions";
		        $data['viewName'] = 'Modules\BlotterManagement\Views\actions\frmBlotterAction';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addBlotterActions($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('blotter-actions'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('blotter-actions'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Blotter Actions";
	        $data['viewName'] = 'Modules\BlotterManagement\Views\actions\frmBlotterAction';
	        echo view('App\Views\theme\index', $data);
    	}
    }

     public function edit_blotteraction($id)
     {
     	$this->hasPermissionRedirect('edit-blotteraction');
     	helper(['form', 'url']);
     	$model = new blotteractionsModel();
     	$data['rec'] = $model->find($id);

     	$permissions_model = new PermissionsModel();

     	$data['permissions'] = $this->permissions;

     	if(!empty($_POST))
     	{
	     	if (!$this->validate('blotteractions'))
		     {
		     		$data['errors'] = \Config\Services::validation()->getErrors();
		         $data['function_title'] = "Edit Blotter Actions";
		         $data['viewName'] = 'Modules\BlotterManagement\Views\actions\frmBlotterAction';
		         echo view('App\Views\theme\index', $data);
		     }
		     else
		     {
		     	if($model->editBlotterActions($_POST, $id))
		         {
							$_SESSION['success'] = 'You have updated a record';
		 				 	$this->session->markAsFlashdata('success');
		         	return redirect()->to(base_url('blotter-actions'));
		         }
		         else
		         {
		         	$_SESSION['error'] = 'You an error in updating a record';
		 			$this->session->markAsFlashdata('error');
		         	return redirect()->to( base_url('blotter-actions'));
		         }
		     }
     	}
     	else
     	{
	     	$data['function_title'] = "Editing Blotter Actions";
	         $data['viewName'] = 'Modules\BlotterManagement\Views\actions\frmBlotterAction';
	         echo view('App\Views\theme\index', $data);
     	}
     }

     public function delete_blotteraction($id)
     {
     	$this->hasPermissionRedirect('delete-blotteraction');

     	$model = new BlotterActionsModel();
     	$model->deleteBlotterActions($id);
     }

}

<?php
namespace Modules\BaranggaySettings\Controllers;

use Modules\BaranggaySettings\Models\BarangayOfficialModel;
use Modules\UserManagement\Models\UsersModel;
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

				$data['all_items'] = $model->get([],[],['status'=> 'a'],[]);
				$data['offset'] = $offset;

				$fields = [
					'lastname' => 'users',
					'firstname' => 'users'
				];

				$tables = [
					'users' => [
						'brgy_officials.user_id' => 'users.id'
					],
				];

				$conditions = [
						'brgy_officials.status' => 'a'
				];
				$data['brgyofficials'] = $model->get($fields, $tables, $conditions, ['limit' => PERPAGE, 'offset' => $offset]);


        $data['function_title'] = "List of Barangay Official";
        $data['viewName'] = 'Modules\BaranggaySettings\Views\barangayofficial\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_barangayofficial($id)
	{
		$this->hasPermissionRedirect('show-barangayofficial');
		$data['permissions'] = $this->permissions;

		$model = new BarangayOfficialModel();

		$data['brgyofficials'] = $model->get([],[],['id'=>$id],[]);

		$fields = [
					'firstname' => 'users',
					'lastname' => 'users',
				];

				$tables = [
					'users' => [
						'brgy_officials.user_id' => 'users.id'
					],
				];

				$conditions = [
						'brgy_officials.id' => $id
				];

				$data['brgyofficials'] = $model->get($fields, $tables, $conditions);

				$data['function_title'] = "Barangay Official Details";
        $data['viewName'] = 'Modules\BaranggaySettings\Views\barangayofficial\barangayofficialDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_barangayofficial()
    {
    	$this->hasPermissionRedirect('add-barangayofficial');
    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

			$user_model = new UsersModel();
			$data['users'] = $user_model->where('status', 'a')->findAll();

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
							// $user_id = $model->insertID();
							// $UserModel = new UsersModel();
							// $user_data = [
							// 	'lastname' => $_POST['last_name'],
							// 	'firstname' => $_POST['first_name'],
							// 	'username' => $_POST['last_name'] . $_POST['first_name'],
							// 	'email' => $_POST['email'],
							// 	'password' => $UserModel->generateRandomString(8),
							// 	// 'password' => 'password',
							// 	'role_id' => 2,
							// 	'birthdate' => $_POST['birth_date']
							// ];
							// $UserModel->addUsers($user_data);

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

<?php
namespace Modules\SystemSettings\Controllers;

use Modules\SystemSettings\Models\ReservationsModel;
use Modules\UserManagement\Models\PermissionsModel;
use Modules\CitizenManagement\Models\CitizenModel;
use Modules\UserManagement\Models\UsersModel;
use Modules\BaranggaySettings\Models\FacilitiesModel;
use App\Controllers\BaseController;

class Reservations extends BaseController
{
	//private $permissions
	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}
	// die();

    public function index($offset = 0)
    {
    	$this->hasPermissionRedirect('list-reservation');

    	$model = new ReservationsModel();
    	//kailangan ito para sa pagination
		$data['all_items'] = $model->get([],[],['status'=> 'a'],[]);
		$data['offset'] = $offset;

		$fields = [
			'last_name' => 'citizens',
			'first_name' => 'citizens',
			'middlename' => 'citizens',
			'extension_name' => 'citizens',
			'firstname' => 'users',
			'lastname' => 'users',
			'facility_name' => 'facilities'
		];

		$tables = [
			'citizens' => [
				'reservations.citizen_id' => 'citizens.id'
			],
			'users' => [
				'reservations.user_id' => 'users.id'
			],
			'facilities' => [
				'reservations.facility_id' => 'facilities.id'
			]
		];

		$conditions = [
				'reservations.status' => 'a'
		];
		$data['reservations'] = $model->get($fields, $tables, $conditions, ['limit' => PERPAGE, 'offset' => $offset]);

				// $data['all_items'] = $model->getReservationsWithCondition(['status'=> 'a']);
       	// $data['offset'] = $offset;
				//
        // $data['reservations'] = $model->getReservationsWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "List of Reservations";
        $data['viewName'] = 'Modules\SystemSettings\Views\reservations\index';
        echo view('App\Views\theme\index', $data);
    }

		    public function show_reservation($id)
			{
				$this->hasPermissionRedirect('show-reservation');
				$data['permissions'] = $this->permissions;

				$model = new ReservationsModel();
				$data['reservations'] = $model->get([],[],['id'=>$id],[]);

				$fields = [
							'last_name' => 'citizens',
							'first_name' => 'citizens',
							'middlename' => 'citizens',
							'extension_name' => 'citizens',
							'firstname' => 'users',
							'lastname' => 'users',
							'facility_name' => 'facilities'
						];

						$tables = [
							'citizens' => [
								'reservations.citizen_id' => 'citizens.id'
							],
							'users' => [
								'reservations.user_id' => 'users.id',
							],
							'facilities' => [
								'reservations.facility_id' => 'facilities.id'
							]
						];

						$conditions = [
							'reservations.id' => $id
						];

						$data['reservations'] = $model->get($fields, $tables, $conditions);

				$data['function_title'] = "Reservation Details";
		        $data['viewName'] = 'Modules\SystemSettings\Views\reservations\reservationsDetails';
		        echo view('App\Views\theme\index', $data);
			}

    public function add_reservation()
    {
    	$this->hasPermissionRedirect('add-reservation');
    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new ReservationsModel();

			$CitizenModel = new CitizenModel();
			$data['citizens'] = $CitizenModel->get();

			$UserModel = new UsersModel();
			$data['users'] = $UserModel->getUsers();

			$FacilityModel = new FacilitiesModel();
			$data['facilities'] = $FacilityModel->getFacilities();

			if(!empty($_POST))
    	{
	    	if (!$this->validate('reservation'))
		    {
					// die();
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Reservations";
		        $data['viewName'] = 'Modules\SystemSettings\Views\reservations\frmReservations';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addReservations($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('reservations'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('reservations'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Adding Reservations";
	        $data['viewName'] = 'Modules\SystemSettings\Views\reservations\frmReservations';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_reservation($id)
    {
    	$this->hasPermissionRedirect('edit-reservation');
    	helper(['form', 'url']);
    	$model = new ReservationsModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

			$CitizenModel = new CitizenModel();
			$data['citizens'] = $CitizenModel->get();

			$UserModel = new UsersModel();
			$data['users'] = $UserModel->getUsers();

			$FacilityModel = new FacilitiesModel();
			$data['facilities'] = $FacilityModel->getFacilities();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('reservation'))
		    {
		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Editing of Business Types";
		        $data['viewName'] = 'Modules\SystemSettings\Views\reservations\frmReservations';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editReservations($_POST, $id))
		        {
							$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('reservations'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('reservations'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Reservations";
	        $data['viewName'] = 'Modules\SystemSettings\Views\reservations\frmReservations';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_reservation($id)
    {
    	$this->hasPermissionRedirect('delete-reservation');

    	$model = new ReservationsModel();
    	$model->deleteReservations($id);
    }

}

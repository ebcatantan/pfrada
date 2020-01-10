<?php
namespace Modules\SystemSettings\Controllers;

use Modules\SystemSettings\Models\ReservationFeesModel;
use Modules\UserManagement\Models\PermissionsModel;
use Modules\BaranggaySettings\Models\FacilitiesModel;
use App\Controllers\BaseController;

class ReservationFees extends BaseController
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
    	$this->hasPermissionRedirect('list-reservation-fees');

			// die("here");
    	$model = new ReservationFeesModel();
    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getReservationFeesWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['reservation_fees'] = $model->getReservationFeesWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Reservation Fees List";
        $data['viewName'] = 'Modules\SystemSettings\Views\reservationfees\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_reservation_fees($id)
	{
		$this->hasPermissionRedirect('show-reservation-fees');
		$data['permissions'] = $this->permissions;

		$model = new ReservationFeesModel();

		$data['reservation_fees'] = $model->getReservationFeesWithCondition(['id' => $id]);

		$data['function_title'] = "R\eservation Details";
        $data['viewName'] = 'Modules\SystemSettings\Views\reservationfees\reservationfeeDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_reservation_fees()
    {
    	$this->hasPermissionRedirect('add-reservation-fees');
    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

			$facility_model = new FacilitiesModel();
			$data['facilities'] = $facility_model->where('status', 'a')->findAll();

			helper(['form', 'url']);
    	$model = new ReservationFeesModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('reservation_fees'))
		    {

		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Reservation Fees";
						// die();
		        $data['viewName'] = 'Modules\SystemSettings\Views\reservationfees\frmReservationFees';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addReservationFees($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('reservation-fees'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('reservation-fees'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Reservation Fees";
	        $data['viewName'] = 'Modules\SystemSettings\Views\reservationfees\frmReservationFees';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_reservation_fees($id)
    {
    	$this->hasPermissionRedirect('edit-reservation-fees');
    	helper(['form', 'url']);
    	$model = new ReservationFeesModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

			$facility_model = new FacilitiesModel();
			$data['facilities'] = $facility_model->where('status', 'a')->findAll();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('reservation_fees'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of reservation fees";
		        $data['viewName'] = 'Modules\SystemSettings\Views\reservationfees\frmReservationFees';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editReservationFees($_POST, $id))
		        {
							$_SESSION['success'] = 'You have successfully updated a record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('reservation-fees'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('reservation-fees'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of reservation fees";
	        $data['viewName'] = 'Modules\SystemSettings\Views\reservationfees\frmReservationFees';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_reservation_fees($id)
    {
    	$this->hasPermissionRedirect('delete-reservation-fees');

    	$model = new ReservationFeesModel();
    	$model->deleteReservationFees($id);
    }

}

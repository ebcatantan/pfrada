<?php
namespace Modules\SystemSettings\Models;

use CodeIgniter\Model;

class ReservationsModel extends \CodeIgniter\Model
{
    protected $table = 'reservations';

    protected $allowedFields = ['citizen_id','user_id','facility_id','reservation_date_time_start','reservation_date_time_end','reservation_payment','is_approved','is_paid','process_by','date_paid','status','created_at','updated_at', 'deleted_at'];

    public function getReservationsWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}
  public function getReservationsWithFunction($args = [])
	{
		$db = \Config\Database::connect();

    // print_r($str); die();
		$str = "SELECT a.*, b.last_name, b.first_name FROM reservations a LEFT JOIN citizens b ON a.citizen_id = b.id WHERE a.status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

  public function getReservations()
	{
	    return $this->findAll();
	}

    public function addReservations($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editReservations($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}
  //
    public function deleteReservations($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}

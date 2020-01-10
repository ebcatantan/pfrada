<?php
namespace Modules\SystemSettings\Models;

use CodeIgniter\Model;

class ReservationFeesModel extends \CodeIgniter\Model
{
    protected $table = 'reservation_fees';

    protected $allowedFields = ['facility_id','fee_per_hour','maintenance_fee','status', 'created_at','updated_at', 'deleted_at'];

    public function getReservationFeesWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}
  public function getReservationFeesWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT a.*, b.facility_name FROM reservation_fees a LEFT JOIN facilities b ON b.id = a.facility_id WHERE a.status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

  public function getReservationFees()
	{
	    return $this->findAll();
	}

    public function addReservationFees($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}
  //
    public function editReservationFees($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}
  //
    public function deleteReservationFees($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}

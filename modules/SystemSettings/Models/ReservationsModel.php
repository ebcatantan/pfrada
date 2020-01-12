<?php
namespace Modules\SystemSettings\Models;

use CodeIgniter\Model;

class ReservationsModel extends \CodeIgniter\Model
{
    protected $table = 'reservations';

    protected $allowedFields = ['citizen_id','user_id','facility_id','reservation_date_time_start','reservation_date_time_end','reservation_payment','is_approved','is_paid','process_by','date_paid','status','created_at','updated_at', 'deleted_at'];

    public function get($fields = [], $tables = [], $conditions = [], $args = [])
  {
    $this->select('reservations.*');
    foreach ($fields as $field => $table) {
      $this->select($table . '.' . $field);
    }
    foreach ($tables as $a => $array) {
      foreach ($array as $fk => $id) {
        $this->join($a, $fk .'='. $id, 'left');
      }
    }

    foreach($conditions as $field => $value) {
      $this->where($field, $value);
    }
    if (!empty($args)) {
      return $this->findAll($args['limit'], $args['offset']);
    }
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

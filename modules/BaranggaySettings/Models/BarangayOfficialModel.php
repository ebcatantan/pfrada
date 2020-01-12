<?php
namespace Modules\BaranggaySettings\Models;

use CodeIgniter\Model;

class BarangayOfficialModel extends \CodeIgniter\Model
{
    protected $table = 'brgy_officials';

    protected $allowedFields = ['user_id', 'last_name','first_name', 'middlename','ext_name','address','barangay','birth_date', 'gender','civil_status', 'email', 'contact_no','status', 'created_at', 'updated_at', 'deleted_at'];

    public function get($fields = [], $tables = [], $conditions = [], $args = [])
  {
    $this->select('brgy_officials.*');
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

    public function addBarangayOfficial($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editBarangayOfficial($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteBarangayOfficial($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}

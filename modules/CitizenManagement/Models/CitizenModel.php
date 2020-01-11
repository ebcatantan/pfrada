<?php
namespace Modules\CitizenManagement\Models;

use CodeIgniter\Model;

class CitizenModel extends \CodeIgniter\Model
{
    protected $table = 'citizens';

    protected $allowedFields = ['user_id', 'citizen_image', 'last_name','first_name', 'middlename','extension_name', 'maiden_name','address','barangay','birth_date', 'gender', 'civil_status', 'email', 'contact_no', 'citizen_voter_id', 'is_brgy_employee', 'status', 'created_at', 'updated_at', 'deleted_at'];

    public function get($fields = [], $tables = [], $conditions = [], $args = [])
  {
    $this->select('citizens.*');
    foreach ($fields as $field => $table) {
      $this->select($table . '.' . $field);
    }
    foreach ($tables as $a => $array) {
      foreach ($array as $fk => $id) {
        $this->join($a, $fk .'='. $id);
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

  //   public function getCitizenWithCondition($conditions = [])
	// {
	// 	foreach($conditions as $field => $value)
	// 	{
	// 		$this->where($field, $value);
	// 	}
	//     return $this->findAll();
	// }
  //
	// public function getCitizenWithFunction($args = [])
	// {
	// 	$db = \Config\Database::connect();
  //
  //   $str = "SELECT a.*, b.username FROM citizens a LEFT JOIN users b ON b.id = a.user_id WHERE a.status = '" .$args['status']."'";
  //   // '" .$args['status']."''"
	// 	$query = $db->query($str);
  //   // print_r($str); die();
	// 	// print_r($query->getResultArray()); die();
	//     return $query->getResultArray();
	// }
  //
  //   public function getCitizen()
	// {
	//     return $this->findAll();
	// }

    public function addCitizen($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editCitizen($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteCitizen($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}

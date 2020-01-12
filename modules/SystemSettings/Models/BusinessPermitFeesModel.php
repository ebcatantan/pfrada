<?php
namespace Modules\SystemSettings\Models;

use CodeIgniter\Model;

class BusinessPermitFeesModel extends \CodeIgniter\Model
{
    protected $table = 'business_permit_fees';

    protected $allowedFields = ['document_id','business_type_id','new_applicant_charge', 'nrenewal_charge', 'status', 'created_at','updated_at',  'deleted_at'];

    public function get($fields = [], $tables = [], $conditions = [], $args = [])
  {
    $this->select('business_permit_fees.*');
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

    public function addBusinessPermitFees($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}
  //
    public function editBusinessPermitFees($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}
  //
    public function deleteBusinessPermitFees($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}

}

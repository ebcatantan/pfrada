<?php
namespace Modules\SystemSettings\Models;

use Modules\SystemSettings\Models\BusinessPermitFeesModel;
use CodeIgniter\Model;

class BusinessTypesModel extends \CodeIgniter\Model
{
    protected $table = 'business_types';

    protected $allowedFields = ['business_type_name','description','status', 'created_at','updated_at', 'deleted_at'];

    public function getBusinessTypesWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}
  public function getBusinessTypesWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT *  FROM business_types WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

  public function getBusinessTypes()
	{
	    return $this->findAll();
	}

    public function addBusinessTypes($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}
  //
    public function editBusinessTypes($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}
  //
    public function deleteBusinessTypes($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
    $businesspermitfees_model = new BusinessPermitFeesModel();
    $businesspermitfees_model->whereIn('business_type_id', $id)
    ->set($val_array)
    ->update();
		return $this->update($id, $val_array);
	}
}

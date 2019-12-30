<?php
namespace Modules\BaranggaySettings\Models;

use CodeIgniter\Model;

class FacilitiesModel extends \CodeIgniter\Model
{
    protected $table = 'facilities';

    protected $allowedFields = ['facility_name','description','status', 'created_at','updated_at', 'deleted_at'];

    public function getFacilityWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}
  public function getFacilityWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT *  FROM facilities WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

  public function getFacilities()
	{
	    return $this->findAll();
	}

    public function addFacility($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}
  //
    public function editFacilities($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}
  //
    public function deleteFacility($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}

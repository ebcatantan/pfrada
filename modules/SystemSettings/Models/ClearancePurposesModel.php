<?php
namespace Modules\SystemSettings\Models;

use CodeIgniter\Model;

class ClearancePurposesModel extends \CodeIgniter\Model
{
    protected $table = 'clearance_purposes';

    protected $allowedFields = ['purpose','description','status', 'created_at','updated_at', 'deleted_at'];

    public function getClearancePurposesWithCondition($conditions = [])
	{
    // die();
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}
  public function getClearancePurposeWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT * FROM clearance_purposes WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

  public function getClearancePurpose()
	{
	    return $this->findAll();
	}

    public function addClearancePurposes($val_array = [])
	 {
	 	$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
	 	$val_array['status'] = 'a';
	     return $this->save($val_array);
	 }

      public function editClearancePurposes($val_array = [], $id)
	  {
	  	$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
	  	$val_array['status'] = 'a';
	  	return $this->update($id, $val_array);
	  }

     public function deleteClearancePurposes($id)
	  {
	  	$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
	  	$val_array['status'] = 'd';
	  	return $this->update($id, $val_array);
	  }
}

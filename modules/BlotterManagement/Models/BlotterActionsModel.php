<?php
namespace Modules\BlotterManagement\Models;

use CodeIgniter\Model;

class BlotterActionsModel extends \CodeIgniter\Model
{
    protected $table = 'blotter_actions';

    protected $allowedFields = ['blotter_id','handled_by', 'remarks', 'additional_details', 'date_action_taken', 'status', 'created_at','updated_at', 'deleted_at'];

    public function getBlotterActionsWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}
  public function getBlotterActionWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT * FROM blotter_actions WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

  public function getBlotterAction()
	{
	    return $this->findAll();
	}

    public function addBlotterActions($val_array = [])
	 {
	 	$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
	 	$val_array['status'] = 'a';
	     return $this->save($val_array);
	 }

      public function editBlotterActions($val_array = [], $id)
	  {
	  	$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
	  	$val_array['status'] = 'a';
	  	return $this->update($id, $val_array);
	  }

     public function deleteBlotterActions($id)
	  {
	  	$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
	  	$val_array['status'] = 'd';
	  	return $this->update($id, $val_array);
	  }
}

<?php
namespace Modules\BlotterManagement\Models;

use CodeIgniter\Model;

class BlottersModel extends \CodeIgniter\Model
{
    protected $table = 'blotters';

    protected $allowedFields = ['citizen_id', 'person_complained', 'reason', 'additional_details', 'filling_date', 'processed_by', 'case_assigned_to', 'case_status', 'status', 'created_at','updated_at', 'deleted_at'];

    public function getBlotterWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getBlotterWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT a.*, b.lastname, b.firstname FROM blotters a LEFT JOIN citizens b ON a.citizen_id = b.id  WHERE a.status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getBlotters()
	{
	    return $this->findAll();
	}

    public function addBlotters($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editBlotters($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteBlotter($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}

<?php
namespace Modules\SystemSettings\Models;

use CodeIgniter\Model;

class ClearanceModel extends \CodeIgniter\Model
{
    protected $table = 'clearance_fees';

    protected $allowedFields = ['document_id','clearance_purpose_id', 'voter_fee_amount', 'non_voter_fee_amount', 'status', 'created_at','updated_at', 'deleted_at'];

    public function getClearanceWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}
  public function getClearanceWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT a.*, b.purpose, c.document_name FROM clearance_fees a LEFT JOIN clearance_purposes b ON b.id = a.clearance_purpose_id LEFT JOIN documents c ON c.id = a.document_id WHERE a.status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

  public function getClearance()
	{
	    return $this->findAll();
	}

    public function addClearance($val_array = [])
	{

    $val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editClearance($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}
  //
    public function deleteClearance($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}

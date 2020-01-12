<?php
namespace Modules\BusinessManagement\Models;

use CodeIgniter\Model;

class CorporationsModel extends \CodeIgniter\Model
{
    protected $table = 'corporations';

    protected $allowedFields = ['user_id','business_type_id','business_name','date_registered','bir_no',	'tin_no','philgeps','owner_name',	'address','contact_person_name','contact_person_email','contact_no', 'status','created_at','updated_at','deleted_at'];

    public function getCorporationsWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}
  public function getCorporationWithFunction($args = [])
	{

 // $str = "SELECT * FROM corporations WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];


    $db = \Config\Database::connect();
    $str = "SELECT a.*, b.business_type_name FROM corporations a JOIN business_types b ON a.business_type_id = b.id JOIN users c ON a.user_id = c.id WHERE a.status = '" . $args['status'] . "' LIMIT ". $args['offset'] .','.$args['limit'];
    // die($str);
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}
  public function getCorporation()
	{
	    return $this->findAll();
	}

    public function addCorporation($val_array = [])
	{

    $val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editCorporation($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}
  //
    public function deleteCorporation($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}

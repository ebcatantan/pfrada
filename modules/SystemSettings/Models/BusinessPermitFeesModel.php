<?php
namespace Modules\SystemSettings\Models;

use CodeIgniter\Model;

class BusinessPermitFeesModel extends \CodeIgniter\Model
{
    protected $table = 'business_permit_fees';

    protected $allowedFields = ['document_id','business_type_id','new_applicant_charge', 'nrenewal_charge', 'status', 'created_at','updated_at',  'deleted_at'];

    public function getBusinessPermitFeesWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}
  public function getBusinessPermitFeesWithFunction($args = [])
	{
		$db = \Config\Database::connect();

    $str = "SELECT a.*, c.document_name FROM business_permit_fees a LEFT JOIN business_types b ON a.id = b.business_type_name LEFT JOIN documents c ON b.id = c.document_name WHERE a.status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];

    // print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

  public function getBusinessPermitFees()
	{
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

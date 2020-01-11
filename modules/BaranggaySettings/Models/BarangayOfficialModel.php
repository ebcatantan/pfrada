<?php
namespace Modules\BaranggaySettings\Models;

use CodeIgniter\Model;

class BarangayOfficialModel extends \CodeIgniter\Model
{
    protected $table = 'brgy_officials';

    protected $allowedFields = ['user_id', 'lastname','firstname', 'middlename','ext_name','address','barangay','birth_date', 'gender','civil_status', 'email', 'contact_no','status', 'created_at', 'updated_at', 'deleted_at'];

    public function getBarangayOfficialWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getBarangayOfficialWithFunction($args = [])
	{
		$db = \Config\Database::connect();
    // $str = "SELECT * FROM brgy_officials WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];


  //  print_r($str); die();
    $str = "SELECT a.*, b.username FROM brgy_officials a LEFT JOIN users b ON b.id = a.user_id WHERE a.status = '" .$args['status']."'";
    // '" .$args['status']."''"
		$query = $db->query($str);
		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getBarangayOfficial()
	{
	    return $this->findAll();
	}

    public function addBarangayOfficial($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editBarangayOfficial($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteBarangayOfficial($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}

<?php
namespace Modules\BaranggaySettings\Models;

use CodeIgniter\Model;

class DocumentRequestModel extends \CodeIgniter\Model
{
    protected $table = 'document_requests';

    protected $allowedFields = ['document_id','user_id', 'is_citizen', 'date_requested','citizen_date_needed','data_available','date_released','processed_by','released by', 'status', 'created_at','updated_at', 'deleted_at'];

    public function getDocumentRequestWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}
  public function getDocumentRequestWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT a.*, b.document_name, c.username FROM document_requests a LEFT JOIN documents b ON b.id = a.document_id LEFT JOIN users c ON c.id = a.user_id WHERE a.status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

  public function getDocumentRequest()
	{
	    return $this->findAll();
	}

    public function addDocumentRequest($val_array = [])
	{

    $val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editDocumentRequest($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}
  //
    public function deleteDocumentRequest($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}

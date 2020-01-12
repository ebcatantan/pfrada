<?php
namespace Modules\BaranggaySettings\Models;

use Modules\SystemSettings\Models\ClearanceFeesModel;
use Modules\SystemSettings\Models\ClearancePurposesModel;
use CodeIgniter\Model;

class DocumentsModel extends \CodeIgniter\Model
{
    protected $table = 'documents';

    protected $allowedFields = ['document_name','description','status', 'created_at','updated_at', 'deleted_at'];

    public function getDocumentWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}
  public function getDocumentWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT *  FROM documents WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

  public function getDocuments()
	{
	    return $this->findAll();
	}

    public function addDocument($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}
  //
    public function editDocuments($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}
  //
    public function deleteDocument($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
    $clearancefees_model = new ClearanceFeesModel();
    $clearancepurposes_model = new ClearancePurposesModel();
    $clearancefees_model->whereIn('document_id', $id)
    ->set($val_array)
    ->update();
    
    $clearancepurposes_model->whereIn('clearance_purpose_id', $id)
    ->set($val_array)
    ->update();
		return $this->update($id, $val_array);
	}
}

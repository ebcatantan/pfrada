<?php namespace App\Database\Seeds;

class PermissionDocumentRequestSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show document request details',
                        'function_description' => 'show document request details',
                        'slugs' => 'show-documentrequest',
                        'name_on_class' => 'show document request',
                        'page_title' =>  'document details',
                        'module_id' => '2',
                         'link_icon' => '',
                        'order' => '250',
                        'table_name' => 'document_requests',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create document request account',
                        'function_description' => 'create document request account',
                        'slugs' => 'add-documentrequest',
                        'name_on_class' => 'add_documentrequest',
                        'page_title' => 'create a document request account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '251',
                        'table_name' => 'document_requests',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of document request',
                        'function_description' => 'list of document request',
                        'slugs' => 'list-documentrequest',
                        'name_on_class' => 'index',
                        'page_title' => 'list of document request',
                        'module_id' => '2',
                        'link_icon' => '<i class="fas fa-folder-open"></i>',
                        'order' => '252',
                        'table_name' => 'document_requests',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit document request account',
                        'function_description' => 'edit document request account',
                        'slugs' => 'edit-documentrequest',
                        'name_on_class' => 'edit_documentrequest',
                        'page_title' => 'edit document request account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '253',
                        'table_name' => 'document_requests',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete document request account',
                        'function_description' => 'delete document request account',
                        'slugs' => 'delete-documentrequest',
                        'name_on_class' => 'delete_documentrequest',
                        'page_title' => 'delete document request account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '254',
                        'table_name' => 'document_requests',
                        'func_action' => 'delete',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                ];
                // print_r($data); die();
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}

<?php namespace App\Database\Seeds;

class PermissionDocumentSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show document details',
                        'function_description' => 'show document details',
                        'slugs' => 'show-document',
                        'name_on_class' => 'show document',
                        'page_title' =>  'document details',
                        'module_id' => '2',
                         'link_icon' => '',
                        'order' => '60',
                        'table_name' => 'documents',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create document account',
                        'function_description' => 'create document account',
                        'slugs' => 'add-document',
                        'name_on_class' => 'add_document',
                        'page_title' => 'create a document account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '61',
                        'table_name' => 'documents',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of documents',
                        'function_description' => 'list of documents',
                        'slugs' => 'list-document',
                        'name_on_class' => 'index',
                        'page_title' => 'list of documents',
                        'module_id' => '2',
                        'link_icon' => '<i class="fas fa-folder-open"></i>',
                        'order' => '62',
                        'table_name' => 'documents',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit document account',
                        'function_description' => 'edit document account',
                        'slugs' => 'edit-document',
                        'name_on_class' => 'edit_document',
                        'page_title' => 'edit document account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '63',
                        'table_name' => 'documents',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete document account',
                        'function_description' => 'delete document account',
                        'slugs' => 'delete-document',
                        'name_on_class' => 'delete_document',
                        'page_title' => 'delete document account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '64',
                        'table_name' => 'documents',
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

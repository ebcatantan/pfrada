<?php namespace App\Database\Seeds;

class PermissionBlotterActionSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show blotter action details',
                        'function_description' => 'show blotter action details',
                        'slugs' => 'show-blotter-action',
                        'name_on_class' => 'show blotter action',
                        'page_title' =>  'blotter action details',
                        'module_id' => '5',
                         'link_icon' => '',
                        'order' => '400',
                        'table_name' => 'blotters',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create blotter action',
                        'function_description' => 'create blotter action',
                        'slugs' => 'add-blotter-action',
                        'name_on_class' => 'add_blotter_action',
                        'page_title' => 'create a blotter action',
                        'module_id' => '5',
                        'link_icon' => '',
                        'order' => '401',
                        'table_name' => 'blotters',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of blotters action',
                        'function_description' => 'list of blotters action',
                        'slugs' => 'list-blotter-action',
                        'name_on_class' => 'index',
                        'page_title' => 'list of blotters action',
                        'module_id' => '5',
                        'link_icon' => '<i class="fas fa-folder-open"></i>',
                        'order' => '402',
                        'table_name' => 'blotters',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit blotter action',
                        'function_description' => 'edit blotter action',
                        'slugs' => 'edit-blotter-action',
                        'name_on_class' => 'edit_blotter_action',
                        'page_title' => 'edit blotter action',
                        'module_id' => '5',
                        'link_icon' => '',
                        'order' => '403',
                        'table_name' => 'blotters',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete blotter action',
                        'function_description' => 'delete blotter action',
                        'slugs' => 'delete-blotter-action',
                        'name_on_class' => 'delete_blotter_action',
                        'page_title' => 'delete blotter action',
                        'module_id' => '5',
                        'link_icon' => '',
                        'order' => '404',
                        'table_name' => 'blotters',
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

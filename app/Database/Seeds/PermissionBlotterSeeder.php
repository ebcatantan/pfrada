<?php namespace App\Database\Seeds;

class PermissionBlotterSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show blotter details',
                        'function_description' => 'show blotter details',
                        'slugs' => 'show-blotter',
                        'name_on_class' => 'show blotter',
                        'page_title' =>  'blotter details',
                        'module_id' => '5',
                         'link_icon' => '',
                        'order' => '180',
                        'table_name' => 'blotters',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create blotter',
                        'function_description' => 'create blotter',
                        'slugs' => 'add-blotter',
                        'name_on_class' => 'add_blotter',
                        'page_title' => 'create a blotter',
                        'module_id' => '5',
                        'link_icon' => '',
                        'order' => '181',
                        'table_name' => 'blotters',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of blotters',
                        'function_description' => 'list of blotters',
                        'slugs' => 'list-blotter',
                        'name_on_class' => 'index',
                        'page_title' => 'list of blotters',
                        'module_id' => '5',
                        'link_icon' => '<i class="fas fa-folder-open"></i>',
                        'order' => '182',
                        'table_name' => 'blotters',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit blotter',
                        'function_description' => 'edit blotter',
                        'slugs' => 'edit-blotter',
                        'name_on_class' => 'edit_blotter',
                        'page_title' => 'edit blotter',
                        'module_id' => '5',
                        'link_icon' => '',
                        'order' => '183',
                        'table_name' => 'blotters',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete blotter',
                        'function_description' => 'delete blotter',
                        'slugs' => 'delete-blotter',
                        'name_on_class' => 'delete_blotter',
                        'page_title' => 'delete blotter',
                        'module_id' => '5',
                        'link_icon' => '',
                        'order' => '184',
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

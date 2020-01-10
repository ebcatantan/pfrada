<?php namespace App\Database\Seeds;

class PermissionBusinessTypesSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show businesstype details',
                        'function_description' => 'show businesstype details',
                        'slugs' => 'show-businesstype',
                        'name_on_class' => 'show businesstype',
                        'page_title' =>  'business type details',
                        'module_id' => '3',
                         'link_icon' => '',
                        'order' => '80',
                        'table_name' => 'business_types',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create businesstype account',
                        'function_description' => 'create businesstype account',
                        'slugs' => 'add-businesstype',
                        'name_on_class' => 'add_businesstype',
                        'page_title' => 'create a businesstype account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '81',
                        'table_name' => 'business_types',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of business types',
                        'function_description' => 'list of business types',
                        'slugs' => 'list-businesstype',
                        'name_on_class' => 'index',
                        'page_title' => 'list of business types',
                        'module_id' => '3',
                        'link_icon' => '<i class="fas fa-mail-bulk"></i>',
                        'order' => '82',
                        'table_name' => 'business_types',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit businesstype account',
                        'function_description' => 'edit businesstype account',
                        'slugs' => 'edit-businesstype',
                        'name_on_class' => 'edit_businesstype',
                        'page_title' => 'edit businesstype account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '83',
                        'table_name' => 'business_types',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete businesstype account',
                        'function_description' => 'delete businesstype account',
                        'slugs' => 'delete-businesstype',
                        'name_on_class' => 'delete_businesstype',
                        'page_title' => 'delete businesstype account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '34',
                        'table_name' => 'business_types',
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

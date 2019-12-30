<?php namespace App\Database\Seeds;

class PermissionFacilitySeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show facility details',
                        'function_description' => 'show facility details',
                        'slugs' => 'show-facility',
                        'name_on_class' => 'show facility',
                        'page_title' =>  'facility details',
                        'module_id' => '2',
                         'link_icon' => '',
                        'order' => '30',
                        'table_name' => 'facilities',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create facility account',
                        'function_description' => 'create facility account',
                        'slugs' => 'add-facility',
                        'name_on_class' => 'add_facility',
                        'page_title' => 'create a facility account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '31',
                        'table_name' => 'facilities',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of facilities',
                        'function_description' => 'list of facilities',
                        'slugs' => 'list-facility',
                        'name_on_class' => 'index',
                        'page_title' => 'list of facilities',
                        'module_id' => '2',
                        'link_icon' => '<i class="far fa-building"></i>',
                        'order' => '32',
                        'table_name' => 'facilities',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit facility account',
                        'function_description' => 'edit facility account',
                        'slugs' => 'edit-facility',
                        'name_on_class' => 'edit_facility',
                        'page_title' => 'edit facility account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '33',
                        'table_name' => 'facilities',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete facility account',
                        'function_description' => 'delete facility account',
                        'slugs' => 'delete-facility',
                        'name_on_class' => 'delete_facility',
                        'page_title' => 'delete facility account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '34',
                        'table_name' => 'facilities',
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

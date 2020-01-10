<?php namespace App\Database\Seeds;

class PermissionClearanceFeesSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show clearance details',
                        'function_description' => 'show clearance details',
                        'slugs' => 'show-clearance',
                        'name_on_class' => 'show_clearance',
                        'page_title' =>  'clearance details',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '200',
                        'table_name' => 'clearance_fees',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create clearance account',
                        'function_description' => 'create clearance account',
                        'slugs' => 'add-clearance',
                        'name_on_class' => 'add_clearance',
                        'page_title' => 'create a clearance account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '201',
                        'table_name' => 'clearance_fees',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of clearance fees',
                        'function_description' => 'list of clearance fees',
                        'slugs' => 'list-clearance',
                        'name_on_class' => 'index',
                        'page_title' => 'list of clearance fees',
                        'module_id' => '3',
                        'link_icon' => '<i class="fas fa-file-invoice-dollar"></i>',
                        'order' => '202',
                        'table_name' => 'clearance_fees',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit clearance account',
                        'function_description' => 'edit clearance account',
                        'slugs' => 'edit-clearance',
                        'name_on_class' => 'edit_clearance',
                        'page_title' => 'edit clearance account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '203',
                        'table_name' => 'clearance_fees',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete clearance account',
                        'function_description' => 'delete clearance account',
                        'slugs' => 'delete-clearance',
                        'name_on_class' => 'delete_clearance',
                        'page_title' => 'delete clearance account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '204',
                        'table_name' => 'clearance_fees',
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

<?php namespace App\Database\Seeds;

class PermissionClearancePurposeSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show clearancepurpose details',
                        'function_description' => 'show clearancepurpose details',
                        'slugs' => 'show-clearancepurpose',
                        'name_on_class' => 'show_clearancepurpose',
                        'page_title' =>  'clearancepurpose details',
                        'module_id' => '3',
                         'link_icon' => '',
                        'order' => '800',
                        'table_name' => 'clearance_purposes',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create clearancepurpose account',
                        'function_description' => 'create clearancepurpose account',
                        'slugs' => 'add-clearancepurpose',
                        'name_on_class' => 'add_clearancepurpose',
                        'page_title' => 'create a clearancepurpose account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '801',
                        'table_name' => 'clearance_purposes',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of clearance purposes',
                        'function_description' => 'list of clearance purposes',
                        'slugs' => 'list-clearancepurpose',
                        'name_on_class' => 'list_clearancepurpose',
                        'page_title' => 'list of clearance purposes',
                        'module_id' => '3',
                        'link_icon' => '<i class="fas fa-clipboard-list"></i>',
                        'order' => '802',
                        'table_name' => 'clearance_purposes',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit clearancepurpose account',
                        'function_description' => 'edit clearancepurpose account',
                        'slugs' => 'edit-clearancepurpose',
                        'name_on_class' => 'edit_clearancepurpose',
                        'page_title' => 'edit clearancepurpose account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '803',
                        'table_name' => 'clearance_purposes',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete clearancepurpose account',
                        'function_description' => 'delete purpose account',
                        'slugs' => 'delete-clearancepurpose',
                        'name_on_class' => 'delete_clearancepurpose',
                        'page_title' => 'delete purpose account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '804',
                        'table_name' => 'clearance_purposes',
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

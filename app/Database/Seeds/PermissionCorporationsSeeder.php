<?php namespace App\Database\Seeds;

class PermissionCorporationsSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show corporation details',
                        'function_description' => 'show corporation details',
                        'slugs' => 'show-corporation',
                        'name_on_class' => 'show corporation',
                        'page_title' =>  'corporation details',
                        'module_id' => '6',
                         'link_icon' => '',
                        'order' => '450',
                        'table_name' => 'corporations',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create corporation account',
                        'function_description' => 'create corporation account',
                        'slugs' => 'add-corporation',
                        'name_on_class' => 'add_corporation',
                        'page_title' => 'create a corporation account',
                        'module_id' => '6',
                        'link_icon' => '',
                        'order' => '451',
                        'table_name' => 'corporations',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of corporations',
                        'function_description' => 'list of corporations',
                        'slugs' => 'list-corporation',
                        'name_on_class' => 'index',
                        'page_title' => 'list of corporations',
                        'module_id' => '6',
                        'link_icon' => '<i class="fas fa-mail-bulk"></i>',
                        'order' => '452',
                        'table_name' => 'corporations',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit corporation account',
                        'function_description' => 'edit corporation account',
                        'slugs' => 'edit-businesstype',
                        'name_on_class' => 'edit_corporation',
                        'page_title' => 'edit corporation account',
                        'module_id' => '6',
                        'link_icon' => '',
                        'order' => '453',
                        'table_name' => 'corporations',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete corporation account',
                        'function_description' => 'delete corporation account',
                        'slugs' => 'delete-corporation',
                        'name_on_class' => 'delete_corporation',
                        'page_title' => 'delete corporation account',
                        'module_id' => '6',
                        'link_icon' => '',
                        'order' => '454',
                        'table_name' => 'corporations',
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

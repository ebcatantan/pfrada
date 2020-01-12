<?php namespace App\Database\Seeds;

class PermissionBlotterActionSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show blotteraction details',
                        'function_description' => 'show blotteraction details',
                        'slugs' => 'show-blotteraction',
                        'name_on_class' => 'show_blotteraction',
                        'page_title' =>  'blotteraction details',
                        'module_id' => '5',
                         'link_icon' => '',
                        'order' => '200',
                        'table_name' => 'blotter_actions',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create blotteraction account',
                        'function_description' => 'create blotteraction account',
                        'slugs' => 'add-blotteraction',
                        'name_on_class' => 'add_blotteraction',
                        'page_title' => 'create a blotteraction account',
                        'module_id' => '5',
                        'link_icon' => '',
                        'order' => '201',
                        'table_name' => 'blotter_actions',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of blotter actions',
                        'function_description' => 'list of blotter actions',
                        'slugs' => 'list-blotteraction',
                        'name_on_class' => 'index',
                        'page_title' => 'list of blotter actions',
                        'module_id' => '5',
                        'link_icon' => '<i class="fas fa-clipboard-list"></i>',
                        'order' => '202',
                        'table_name' => 'blotter_actions',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit blotteraction account',
                        'function_description' => 'edit blotteraction account',
                        'slugs' => 'edit-blotteraction',
                        'name_on_class' => 'edit_blotteraction',
                        'page_title' => 'edit blotteraction account',
                        'module_id' => '5',
                        'link_icon' => '',
                        'order' => '203',
                        'table_name' => 'blotter_actions',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete blotteraction account',
                        'function_description' => 'delete purpose account',
                        'slugs' => 'delete-blotteraction',
                        'name_on_class' => 'delete_blotteraction',
                        'page_title' => 'delete purpose account',
                        'module_id' => '5',
                        'link_icon' => '',
                        'order' => '204',
                        'table_name' => 'blotter_actions',
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

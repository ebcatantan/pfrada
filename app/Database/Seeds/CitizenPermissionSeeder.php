<?php namespace App\Database\Seeds;

class CitizenPermissionSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'name_on_class' => 'list_of_citizen',
                        'function_name' => 'list of citizen',
                        'function_description' => 'list of citizen',
                        'slugs' => 'list-of-citizen',
                        'page_title' => 'list of citizen',
                        'module_id' => '4',
                        'link_icon' => '<i class="fas fa-users"></i>',
                        'order' => 20,
                        'table_name' => 'citizens',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'show_citizen',
                        'function_name' => 'show citizen',
                        'function_description' => 'show citizen',
                        'slugs' => 'show-citizen',
                        'page_title' => 'show citizen',
                        'module_id' => '4',
                        'link_icon' => '',
                        'order' => 21,
                        'table_name' => 'citizens',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'add_citizen',
                        'function_name' => 'add citizen',
                        'function_description' => 'add citizen',
                        'slugs' => 'add-citizen',
                        'page_title' => 'add citizen',
                        'module_id' => '4',
                        'link_icon' => '',
                        'order' => 22,
                        'table_name' => 'citizens',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'edit_citizen',
                        'function_name' => 'edit citizen',
                        'function_description' => 'edit citizen',
                        'slugs' => 'edit-citizen',
                        'page_title' => 'edit citizen',
                        'module_id' => '4',
                        'link_icon' => '',
                        'order' => 23,
                        'table_name' => 'citizens',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'delete_citizen',
                        'function_name' => 'delete citizen',
                        'function_description' => 'delete citizen',
                        'slugs' => 'delete-citizen',
                        'page_title' => 'delete citizen',
                        'module_id' => '4',
                        'link_icon' => '',
                        'order' => 24,
                        'table_name' => 'citizens',
                        'func_action' => 'delete',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                ];
                //print_r($data); die();
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}

<?php namespace App\Database\Seeds;

class PermissionBarangayOfficialSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'name_on_class' => 'list_of_barangay_official',
                        'function_name' => 'list of barangay official',
                        'function_description' => 'list of barangay official',
                        'slugs' => 'list-of-barangayofficial',
                        'page_title' => 'list of barangay official',
                        'module_id' => '2',
                        'link_icon' => '<i class="fas fa-user-tie"></i>',
                        'order' => 100,
                        'table_name' => 'brgy_officials',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'show_barangayofficial',
                        'function_name' => 'show barangay official',
                        'function_description' => 'show barangayofficial',
                        'slugs' => 'show-barangayofficial',
                        'page_title' => 'show barangayofficial',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 101,
                        'table_name' => 'brgy_officials',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'add_barangayofficial',
                        'function_name' => 'add barangayofficial',
                        'function_description' => 'add barangayofficial',
                        'slugs' => 'add-barangayofficial',
                        'page_title' => 'add barangayofficial',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 102,
                        'table_name' => 'brgy_officials',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'edit_barangayofficial',
                        'function_name' => 'edit barangayofficial',
                        'function_description' => 'edit barangayofficial',
                        'slugs' => 'edit-barangayofficial',
                        'page_title' => 'edit barangayofficial',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 103,
                        'table_name' => 'brgy_officials',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => '[1]',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'name_on_class' => 'delete_barangayofficial',
                        'function_name' => 'delete barangayofficial',
                        'function_description' => 'delete barangayofficial',
                        'slugs' => 'delete-barangayofficial',
                        'page_title' => 'delete barangayofficial',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => 104,
                        'table_name' => 'brgy_officials',
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

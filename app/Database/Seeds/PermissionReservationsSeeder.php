<?php namespace App\Database\Seeds;

class PermissionReservationsSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show reservation details',
                        'function_description' => 'show reservation details',
                        'slugs' => 'show-reservation',
                        'name_on_class' => 'show reservation',
                        'page_title' =>  'reservation details',
                        'module_id' => '3',
                         'link_icon' => '',
                        'order' => '350',
                        'table_name' => 'reservations',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create reservation account',
                        'function_description' => 'create reservation account',
                        'slugs' => 'add-reservation',
                        'name_on_class' => 'add_reservation',
                        'page_title' => 'create a reservation account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '351',
                        'table_name' => 'reservations',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of reservation',
                        'function_description' => 'list of reservation',
                        'slugs' => 'list-reservation',
                        'name_on_class' => 'index',
                        'page_title' => 'list of reservation',
                        'module_id' => '3',
                        'link_icon' => '<i class="fas fa-mail-bulk"></i>',
                        'order' => '352',
                        'table_name' => 'reservations',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit reservation account',
                        'function_description' => 'edit reservation account',
                        'slugs' => 'edit-reservation',
                        'name_on_class' => 'edit_reservation',
                        'page_title' => 'edit reservation account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '353',
                        'table_name' => 'reservations',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete reservation account',
                        'function_description' => 'delete reservation account',
                        'slugs' => 'delete-reservation',
                        'name_on_class' => 'delete_reservation',
                        'page_title' => 'delete reservation account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '354',
                        'table_name' => 'reservations',
                        'func_action' => 'delete',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ]
                ];
                // print_r($data); die();
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}

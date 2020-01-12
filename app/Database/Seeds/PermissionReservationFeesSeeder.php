<?php namespace App\Database\Seeds;

class PermissionReservationFeesSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show reservation fees details',
                        'function_description' => 'show reservation fees details',
                        'slugs' => 'show-reservation-fees',
                        'name_on_class' => 'show_reservation_fees',
                        'page_title' =>  'reservation fees details',
                        'module_id' => '3',
                         'link_icon' => '',
                        'order' => '150',
                        'table_name' => 'reservation_fees',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create reservation fees account',
                        'function_description' => 'create reservation fees account',
                        'slugs' => 'add-reservation-fees',
                        'name_on_class' => 'add_reservation_fees',
                        'page_title' => 'create a reservation fees account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '151',
                        'table_name' => 'reservation_fees',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of reservation fees',
                        'function_description' => 'list of reservation fees',
                        'slugs' => 'list-reservation-fees',
                        'name_on_class' => 'index',
                        'page_title' => 'list of reservation fees',
                        'module_id' => '3',
                        'link_icon' => '<i class="far fa-building"></i>',
                        'order' => '152',
                        'table_name' => 'reservation_fees',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit reservation fees account',
                        'function_description' => 'edit reservation fees account',
                        'slugs' => 'edit-reservation-fees',
                        'name_on_class' => 'edit_reservation_fees',
                        'page_title' => 'edit reservation fees account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '153',
                        'table_name' => 'reservation_fees',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete reservation fees account',
                        'function_description' => 'delete reservation fees account',
                        'slugs' => 'delete-reservation-fees',
                        'name_on_class' => 'delete_reservation_fees',
                        'page_title' => 'delete facility account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '154',
                        'table_name' => 'reservation_fees',
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

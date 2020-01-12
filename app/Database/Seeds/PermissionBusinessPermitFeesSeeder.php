<?php namespace App\Database\Seeds;

class PermissionBusinessPermitFeesSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show business details',
                        'function_description' => 'show business details',
                        'slugs' => 'show-business',
                        'name_on_class' => 'show_business',
                        'page_title' =>  'business details',
                        'module_id' => '3',
                         'link_icon' => '',
                        'order' => '400',
                        'table_name' => 'business_permit_fees',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create business account',
                        'function_description' => 'create business account',
                        'slugs' => 'add-businesspermitfees',
                        'name_on_class' => 'add_businesspermitfees',
                        'page_title' => 'create a business account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '401',
                        'table_name' => 'business_permit_fees',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of business permit fees',
                        'function_description' => 'list of business permit fees',
                        'slugs' => 'list-of-business-permit-fees',
                        'name_on_class' => 'index',
                        'page_title' => 'list of business permit fees',
                        'module_id' => '3',
                        'link_icon' => '<i class="far fa-money-bill-alt"></i>',
                        'order' => '402',
                        'table_name' => 'business_permit_fees',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit business account',
                        'function_description' => 'edit business account',
                        'slugs' => 'edit-business',
                        'name_on_class' => 'edit_business',
                        'page_title' => 'edit business account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '404',
                        'table_name' => 'business_permit_fees',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete business account',
                        'function_description' => 'delete business account',
                        'slugs' => 'delete-business',
                        'name_on_class' => 'delete_business',
                        'page_title' => 'delete business account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '405',
                        'table_name' => 'business_permit_fees',
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

<?php namespace App\Database\Seeds;

class ModuleSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'modules';

        public function run()
        {
                $data = [
                    [
                        'module_name' => 'user management',
                        'module_description' => 'user management',
                        'module_icon' => '<i class="fas fa-users-cog"></i>',
                        'order' => 1,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
<<<<<<< HEAD
                        'module_name' => 'barangay settings',
                        'module_description' => 'barangay settings',
=======
                        'module_name' => 'baranggay settings',
                        'module_description' => 'barrangay settings',
>>>>>>> 7071eb6664059e6d0798c105a4e00dfbeb00fd4e
                        'module_icon' => '<i class="fas fa-city"></i>',
                        'order' =>2,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
<<<<<<< HEAD
                        'module_name' => 'citizen management',
                        'module_description' => 'citizen management',
                        'module_icon' => '<i class="far fa-address-book"></i>',
                        'order' =>3, //module order number
=======
                        'module_name' => 'system settings',
                        'module_description' => 'system settings',
                        'module_icon' => '<i class="fas fa-cogs"></i>',
                        'order' =>3,
>>>>>>> 7071eb6664059e6d0798c105a4e00dfbeb00fd4e
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                ];
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}

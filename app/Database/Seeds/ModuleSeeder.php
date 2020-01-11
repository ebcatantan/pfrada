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
                        'module_name' => 'barangay settings',
                        'module_description' => 'barangay settings',
                        'module_icon' => '<i class="fas fa-city"></i>',
                        'order' =>2,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'module_name' => 'system settings',
                        'module_description' => 'system settings',
                        'module_icon' => '<i class="fas fa-cogs"></i>',
                        'order' =>3,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
<<<<<<< HEAD
                        'module_name' => 'blotters management',
                        'module_description' => 'blotters management',
                        'module_icon' => '<i class="fas fa-cogs"></i>',
                        'order' =>4,
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
=======
                      'module_name' => 'citizen management',
                      'module_description' => 'citizen management',
                      'module_icon' => '<i class="fas fa-user-cog"></i>',
                      'order' =>4,
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                    ]
>>>>>>> a199e695c2e820cbe797370bcdd27ac58621da5e
                ];
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}

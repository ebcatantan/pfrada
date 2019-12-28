<?php namespace App\Database\Seeds;

class RolesSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'roles';

        public function run()
        { 
                $data = [
                    [
                        'role_name' => 'administrator',
                        'function_id' => 1,
                        'description' => 'System Administrator',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'role_name' => 'user',
                        'function_id' => 2,
                        'description' => 'User Related Role',
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                ];
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}
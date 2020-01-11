<?php namespace App\Database\Migrations;

class CreateCitizens extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],
                        'user_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20'
                        ],

                        'citizen_image'       => [
                          'type'           => 'TEXT'
                        ],

                        'last_name'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100'
                        ],

                        'first_name'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100'
                        ],

                        'middlename'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100'
                        ],

                        'extension_name'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '5'
                        ],

                        'maiden_name'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100'
                        ],

                        'address'       => [
                                'type'           => 'TEXT'
                        ],

                        'barangay'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100'
                        ],

                        'birth_date'          => [
                                'type'           => 'DATE'
                        ],

                        'gender'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '1'
                        ],

                        'civil_status'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100'
                        ],

                        'email'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100'
                        ],

                        'contact_no'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '20'
                        ],

                        'citizen_voter_id'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255'
                        ],

                        'is_brgy_employee'          => [
                                'type'           => 'TINYINT',
                                'constraint'     => '1'
                        ],

                        'status' => [
                                'type'           => 'CHAR',
                                'constraint'     => '1',
                                'default'        => 'a'
                        ],

                        'created_at' => [
                                'type'           => 'DATETIME',
                                'comment'        => 'Date of creation',
                        ],

                        'updated_at' => [
                                'type'           => 'DATETIME',
                                'null'           => true,
                                'default'        => null,
                                'comment'        => 'Date last updated',
                        ],
                        'deleted_at' => [
                                'type'           => 'DATETIME',
                                'null'           => true,
                                'default'        => null,
                                'comment'        => 'Date of soft deletion',
                        ]
                ]);
                $this->forge->addKey('id', TRUE);
                $this->forge->createTable('citizens');
        }

        public function down()
        {
                $this->forge->dropTable('citizens');
        }
}

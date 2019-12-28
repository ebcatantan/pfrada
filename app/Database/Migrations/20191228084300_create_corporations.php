<?php namespace App\Database\Migrations;

class CreateCorporations extends \CodeIgniter\Database\Migration {

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
                        'business_type_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20'
                        ],

                        'business_name'       => [
                          'type'           => 'TEXT'
                        ],

                        'date_registered'          => [
                                'type'           => 'DATE'
                        ],

                        'bir_no'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100'
                        ],

                        'tin_no'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100'
                        ],

                        'philgeps'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '5'
                        ],

                        'owner_name'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255'
                        ],

                        'address'       => [
                                'type'           => 'TEXT'
                        ],

                        'contact_person_name'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255'
                        ],

                        'contact_person_email'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '20'
                        ],

                        'contact_no'          => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '20'
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
                $this->forge->createTable('corporations');
        }

        public function down()
        {
                $this->forge->dropTable('corporations');
        }
}

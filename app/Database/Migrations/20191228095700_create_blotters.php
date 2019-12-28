<?php namespace App\Database\Migrations;

class CreateBlotters extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'citizen_id'       => [
                          'type'           => 'BIGINT',
                          'constraint'     => '20',
                          'comment'        => 'complainant citizen id'
                        ],

                        'person_complained'       => [
                          'type'           => 'JSON',
                          'comment'        => 'citizen ids of the person complained',
                        ],

                        'reason'       => [
                          'type'           => 'TEXT',
                          'comment'        => 'reason for complaint',
                        ],

                        'additional_details'       => [
                          'type'           => 'TEXT'
                        ],

                        'filling_date' => [
                                'type'           => 'DATETIME'
                        ],

                        'processed_by' => [
                              'type'           => 'BIGINT',
                              'constraint'     => '20',
                        ],

                        'case_assigned_to' => [
                              'type'           => 'JSON',
                              'comment'     => 'user id of the lupon that will handle the case',
                        ],

                        'case_status' => [
                                'type'           => 'CHAR',
                                'constraint'    => '1',
                                'default'       => 'o',
                                'comment'       => 'c - closed, o = open'
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
                $this->forge->createTable('blotters');
        }

        public function down()
        {
                $this->forge->dropTable('blotters');
        }
}

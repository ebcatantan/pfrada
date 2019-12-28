<?php namespace App\Database\Migrations;

class CreateDocumentRequests extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'document_id'       => [
                          'type'           => 'BIGINT',
                          'constraint'     => '20',
                        ],

                        'user_id'       => [
                          'type'           => 'BIGINT',
                          'constraint'     => '20',
                          'comment'        => 'user id of the requesting party',
                        ],

                        'is_citizen'       => [
                          'type'           => 'TINYINT',
                          'constraint'     => '1',
                          'default'        => 1,
                          'comment'        => '1 - citizen, 2 - corporation',
                        ],

                        'date_requested' => [
                                'type'           => 'DATETIME'
                        ],

                        'citizen_date_needed' => [
                                'type'           => 'DATETIME',
                                'comment'        => 'Date when citizen would like to have the document'
                        ],

                        'date_available' => [
                                'type'           => 'DATETIME'
                        ],

                        'date_released' => [
                                'type'           => 'DATETIME'
                        ],

                        'processed_by' => [
                                'type'           => 'BIGINT',
                                'constraint'    => '20',
                                'comment'       => 'user id of the person processing the requested document'
                        ],

                        'released_by' => [
                                'type'           => 'BIGINT',
                                'constraint'    => '20',
                                'comment'       => 'user id of the person realising the document'
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
                $this->forge->createTable('document_requests');
        }

        public function down()
        {
                $this->forge->dropTable('document_requests');
        }
}

<?php namespace App\Database\Migrations;

class CreateClearanceFees extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],
                        
                        'document_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20'
                        ],

                        'clearance_purpose_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20'
                        ],
                        'voter_fee_amount'       => [
                                'type'           => 'DOUBLE'
                        ],
                        'non_voter_fee_amount'       => [
                                'type'           => 'DOUBLE'
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
                $this->forge->createTable('clearance_fees');
        }

        public function down()
        {
                $this->forge->dropTable('clearance_fees');
        }
}

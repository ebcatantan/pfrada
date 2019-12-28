<?php namespace App\Database\Migrations;

class CreateBusinessPermitFees extends \CodeIgniter\Database\Migration {

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

                        'business_type_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20'
                        ],
                        'new_applicant_charge'       => [
                                'type'           => 'DOUBLE'
                        ],
                        'nrenewal_charge'       => [
                                'type'           => 'DOUBLE'
                        ],

                        'is_for_citizen' => [
                                'type'           => 'TINYINT',
                                'constraint'           => '1',
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
                $this->forge->createTable('business_permit_fees');
        }

        public function down()
        {
                $this->forge->dropTable('business_permit_fees');
        }
}

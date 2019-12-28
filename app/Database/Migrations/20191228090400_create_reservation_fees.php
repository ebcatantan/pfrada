<?php namespace App\Database\Migrations;

class CreateReservationFees extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'facility_id'       => [
                          'type'           => 'BIGINT',
                          'constraint'     => '20',
                        ],

                        'fee_per_hour'       => [
                          'type'           => 'DOUBLE'
                        ],

                        'maintenance_fee'       => [
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
                $this->forge->createTable('reservation_fees');
        }

        public function down()
        {
                $this->forge->dropTable('reservation_fees');
        }
}

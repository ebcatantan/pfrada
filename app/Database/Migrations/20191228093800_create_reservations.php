<?php namespace App\Database\Migrations;

class CreateReservations extends \CodeIgniter\Database\Migration {

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
                        ],

                        'user_id'       => [
                          'type'           => 'BIGINT',
                          'constraint'     => '20',
                          'comment'        => 'user id of the reserving party',
                        ],

                        'facility_id'       => [
                          'type'           => 'BIGINT',
                          'constraint'     => '20',
                          'comment'        => 'facility id of the facility wanted to be reserved',
                        ],

                        'reservation_date_time_start' => [
                                'type'           => 'DATETIME'
                        ],

                        'reservation_date_time_end' => [
                                'type'           => 'DATETIME'
                        ],

                        'reservation_payment' => [
                                'type'           => 'DOUBLE'
                        ],

                        'is_approved' => [
                                'type'           => 'TINYINT',
                                'constraint'    => '1',
                                'comment'       => '1 -approved, 0 = not-approved, 2-canceled'
                        ],

                        'is_paid' => [
                                'type'           => 'TINYINT',
                                'constraint'    => '1',
                                'comment'       => '1 -approved, 0 = not-approved, 2-canceled'
                        ],

                        'processed_by'       => [
                          'type'           => 'BIGINT',
                          'constraint'     => '20',
                          'comment'        => 'user id of person processing the reservation',
                        ],

                        'date_paid' => [
                                'type'           => 'DATETIME'
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
                $this->forge->createTable('reservations');
        }

        public function down()
        {
                $this->forge->dropTable('reservations');
        }
}

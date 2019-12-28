<?php namespace App\Database\Migrations;

class CreateBlotterActions extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'blotter_id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                        ],

                        'handled_by'       => [
                          'type'           => 'JSON',
                          'comment'        => 'user id of the lupon handled the action'
                        ],

                        'remarks'       => [
                          'type'           => 'TEXT'
                        ],

                        'additional_details'       => [
                          'type'           => 'TEXT'
                        ],

                        'date_action_taken' => [
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
                $this->forge->createTable('blotter_actions');
        }

        public function down()
        {
                $this->forge->dropTable('blotter_actions');
        }
}

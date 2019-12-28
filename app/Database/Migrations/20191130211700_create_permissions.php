<?php namespace App\Database\Migrations;

class CreatePermissions extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'name_on_class'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '250',
                        ],

                        'function_name'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '50',
                        ],

                        'function_description'       => [
                                'type'           => 'TEXT',
                        ],

                        'link_icon'       => [
                                'type'          => 'TEXT',
                                'null'          =>  true
                        ],

                        'slugs'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '50',
                        ],

                        'page_title'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '50',
                        ],

                        'module_id'       => [
                                'type'           => 'INT',
                        ],

                        'table_name'       => [
                                'type'           => 'varchar',
                                'constraint'     => '100',
                        ],

                        'func_action'       => [
                                'type'           => 'varchar',
                                'null'           => true,
                                'constraint'     => '50',
                        ],

                        'allowed_roles'       => [
                                'type'           => 'JSON',
                                'default'     => "[1]",
                        ],

                        'order'       => [
                                'type'           => 'INT'
                        ],

                        'status' => [
                                'type'           => 'CHAR',
                                'constraint'     => '1',
                                'default'        => 'a'
                        ],

                        'func_type' => [
                                'type'           => 'int',
                                'constraint'     => '1',
                                'default'        => '3'
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
                $this->forge->createTable('permissions');
        }

        public function down()
        {
                $this->forge->dropTable('permissions');
        }
}
<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableBooks extends Migration
{
    public function up()
    {
        //
        $this->forge->addField(fields: [
            'id' => [
                'TYPE' => "VARCHAR",
                'constraint' => 16,
                'null' => false
            ],
            'title' => [
                'TYPE' => "TEXT",
                'null' => false
            ],
            'author' => [
                'TYPE' => "TEXT",
                'null' => false
            ],
            'year' => [
                'TYPE' => "INT",
                'null' => false
            ],
            'status' => [
                'TYPE' => "ENUM",
                'constraint' => ['available', 'not_available'],
                'default' => 'available'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('books');
    }

    public function down()
    {
        //
        $this->forge->dropTable('books');
    }
}

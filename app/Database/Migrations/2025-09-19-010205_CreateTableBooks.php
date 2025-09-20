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
            'image_url' => [
                'TYPE' => "TEXT",
                'null' => false
            ],
            'url' => [
                'TYPE' => "TEXT",
                'null' => false
            ],
            'status' => [
                'TYPE' => "ENUM",
                'constraint' => ['Done', 'On Progress'],
                'default' => 'On Progress'
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('projects');
    }

    public function down()
    {
        //
        $this->forge->dropTable('projects');
    }
}

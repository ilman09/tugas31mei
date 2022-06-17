<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true, 
            ],
            'name' => [
                "type"=> "VARCHAR",
                "constraint" => "230",
                "null" => false,
            ],
            'email' => [
                "type"=> "VARCHAR",
                "constraint" => "230",
                "null" => false,
            ],
            "created_at DATETIME  DEFAULT CURRENT_TIMESTAMP",
            "updated_at DATETIME  DEFAULT CURRENT_TIMESTAMP",
            "deleted_at" => [
                "type"=> "DATETIME",
                "null" => true,
                
            ],
            
        ];

        $this->forge->addKey('id',true);
        $this->forge->addKey('email');
        $this->forge->addField($fields);
        $this->forge->createTable('emails', true); //If NOT EXISTS create table todos
    }
    public function down()
    {
        $this->forge->dropTable('emails', true); //If Exists drop table todos
    }
}

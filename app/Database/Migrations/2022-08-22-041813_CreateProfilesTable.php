<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProfilesTable extends Migration
{
    public function up()
    {
        // Profiles Table
        $this->forge->addField([
            'id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'photo' => [
                'type'       => 'VARCHAR',
                'constraint' => 64,
                'unique'     => true,
                'null'       => true,
            ],
            'cover' => [
                'type'       => 'VARCHAR',
                'constraint' => 64,
                'unique'     => true,
                'null'       => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 64,
                'null'       => true,
            ],
            'bio' => [
                'type'       => 'VARCHAR',
                'constraint' => 256,
                'null'       => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id', 'users', 'id', 'RESTRICT', 'CASCADE');

        $this->forge->createTable('profiles', true);
    }

    public function down()
    {
        $this->forge->dropTable('profiles', true);
    }
}

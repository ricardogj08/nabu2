<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSubscriptionsTable extends Migration
{
    public function up()
    {
        // Subscriptions Table
        $this->forge->addField([
            'id' => [
                'type'       => 'CHAR',
                'constraint' => 36,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 256,
                'unique'     => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('subscriptions', true);
    }

    public function down()
    {
        $this->forge->dropTable('subscriptions', true);
    }
}

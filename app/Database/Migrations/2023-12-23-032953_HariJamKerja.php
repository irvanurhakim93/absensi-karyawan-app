<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HariJamKerja extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'hari' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'jam_kerja' => [
                'type' => 'DATETIME',
                'constraint' => 6
            ]
        ]);

        $this->forge->addKey('id',TRUE);
        $this->forge->createTable('hari_jamkerja',TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('hari_jamkerja');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KaryawanTable extends Migration
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
            'nama_karyawan' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'gaji' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'denda_keterlambatan' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'jumlah_absensi' => [
                'type' => 'VARCHAR',
                'constraint' => 30
            ]
        ]);

        $this->forge->addKey('id',TRUE);
        $this->forge->createTable('karyawan',TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('karyawan');
    }
}

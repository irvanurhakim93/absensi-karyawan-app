<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AbsensiKaryawan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_karyawan' => [
                'type'
            ],
            'jumlah_absensi' => [
                'type' => 'VARCHAR',
                'constraint' => 30
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropTable('absensi_karyawan');
    }
}

<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JadwalSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'hari' => 'Senin',
            'jam_masuk' => '08:00',
            'jam_pulang' => '17:00'
        ];

        $data2 = [
            'hari' => 'Selasa',
            'jam_masuk' => '08:00',
            'jam_pulang' => '17:00'
        ];

        $data3 = [
            'hari' => 'Rabu',
            'jam_masuk' => '08:00',
            'jam_pulang' => '17:00'
        ];

        $data4 = [
            'hari' => 'Kamis',
            'jam_masuk' => '08:00',
            'jam_pulang' => '17:00'
        ];

        $data5 = [
            'hari' => 'Jumat',
            'jam_masuk' => '08:00',
            'jam_pulang' => '17:30'
        ];

        $this->db->query('INSERT INTO jadwal(hari,jam_masuk,jam_pulang) VALUES(:hari:,:jam_masuk:,:jam_pulang:)',$data);
        $this->db->query('INSERT INTO jadwal(hari,jam_masuk,jam_pulang) VALUES(:hari:,:jam_masuk:,:jam_pulang:)',$data2);
        $this->db->query('INSERT INTO jadwal(hari,jam_masuk,jam_pulang) VALUES(:hari:,:jam_masuk:,:jam_pulang:)',$data3);
        $this->db->query('INSERT INTO jadwal(hari,jam_masuk,jam_pulang) VALUES(:hari:,:jam_masuk:,:jam_pulang:)',$data4);
        $this->db->query('INSERT INTO jadwal(hari,jam_masuk,jam_pulang) VALUES(:hari:,:jam_masuk:,:jam_pulang:)',$data5);
        
        
        $this->db->table('jadwal')->insert($data);
        $this->db->table('jadwal')->insert($data2);
        $this->db->table('jadwal')->insert($data3);
        $this->db->table('jadwal')->insert($data4);
        $this->db->table('jadwal')->insert($data5);
    }
}

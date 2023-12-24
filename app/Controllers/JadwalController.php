<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Jadwal;
class JadwalController extends BaseController
{
    public function index()
    {
        $jadwalModel = new Jadwal;
        $data['getjadwal'] = $jadwalModel->orderBy('id','ASC')->findAll();
        echo view('hari_jamkerja',$data);        
    }

    public function tambahjadwal()
    {
        echo view('tambah_jam_kerja');    
    }

    public function post()
    {
        $model = new Jadwal;
        $hari = $this->request->getPost('hari');
        $jam_masuk = $this->request->getPost('jam_masuk');
        $jam_pulang = $this->request->getPost('jam_pulang');
        
        $data = [
            'hari' => $hari,
            'jam_masuk' => $jam_masuk,
            'jam_pulang' => $jam_pulang
        ];

        $model->insert($data);

        // var_dump($hari,$jam_masuk,$jam_pulang);

        return $this->response->redirect(site_url('/jadwal'));
    }
}






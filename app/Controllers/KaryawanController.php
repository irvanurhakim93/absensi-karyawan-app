<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Jadwal;
use App\Models\KaryawanModel;
use Dompdf\Dompdf;
use Dompdf\Options;

class KaryawanController extends BaseController
{
    public function index()
    {
        $karyawanmodel = new KaryawanModel;
        $datakaryawan['karyawan'] = $karyawanmodel->orderBy('id','ASC')->findAll();
        echo view('dashboard',$datakaryawan);
    }

    public function tambah()
    {
        echo view('tambah_karyawan');    
    }



    public function post()
    {
    // Memanggil model karyawan
    $karyawanmodel = new KaryawanModel();

    $namakaryawan = $this->request->getPost('nama');
    $gaji = $this->request->getPost('gaji');
    $denda_keterlambatan = $this->request->getPost('denda_keterlambatan');
    $jumlah_absensi = $this->request->getPost('jumlah_absensi');
    $gaji_didapat = $this->request->getPost('gaji_didapat');


    $datainput = [
        'nama' => $namakaryawan,
        'gaji' => $gaji,
        'denda_keterlambatan' => $denda_keterlambatan,
        'jumlah_absensi' => $jumlah_absensi,
        'gaji_didapat' => $gaji_didapat
    ];

    $karyawanmodel->insert($datainput);
    // var_dump($namakaryawan,$gaji,$jumlah_absensi);

    // Redirect ke halaman dashboard
    return $this->response->redirect(site_url('/dashboard'));

    
    }

    public function print($id = null)
    {
        $model = new KaryawanModel;
        $data['printable'] = $model->where('id',$id)->first();
        echo view('halaman_slip',$data);

    }

    public function download()
    {

        $filename = date('y-m-d-H-i-s') . '-laporan-slip-gaji';
        
        $model = new KaryawanModel();
        $data['downloadable'] = $model->where('id', $id)->first();
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $dompdf = new Dompdf($options);

        $html = view('halaman_slip',$data);
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'landscape');

        $dompdf->render();

        $dompdf->stream($filename);
    }


}

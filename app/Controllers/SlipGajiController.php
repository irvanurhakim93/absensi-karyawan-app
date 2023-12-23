<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Dompdf\Dompdf;

class SlipGajiController extends BaseController
{
    public function index()
    {
        return view('slip_gaji');
    }

    public function generate()
    {
        $filename = date('y-m-d-H-i-s'). 'laporan-slip-gaji';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('slip_gaji'));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }
}

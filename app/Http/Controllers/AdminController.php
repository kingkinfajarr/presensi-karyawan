<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;

class AdminController extends Controller
{
  public function rekapPresensiKaryawan() {
    $presensi = Presensi::with('user')->get();
    return view('admin.laporan-keseluruhan', compact('presensi'));
  }

  public function cetakLaporan() {
    $presensi = Presensi::with('user')->get();
    $html =  view('admin.cetak-laporan', compact('presensi'));

    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'Portrait');
    // Render the HTML as PDF
    $dompdf->render();
    // Output the generated PDF to Browser
    $dompdf->stream();
  }
}

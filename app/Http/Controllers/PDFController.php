<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PDFController extends Controller
{
    public function cetakPDF()
    {
        $viewsembako = DB::table('viewrumah')->select('*')->get();
        $data = [
            'viewrumah' => $viewsembako,
            'tanggal' => date('d/m/Y'),
            'judul' => "Laporan Data Bantuan Bedah Rumah"
        ];
        $laporan = PDF::loadView('rumah.laporan', $data)->setPaper('F4', 'lanscape');
        // 01/10/2024
        $namaTGL = substr(date('d/m/Y'), 0, 2) . substr(date('d/m/Y'), 3, 2) . substr(date('d/m/Y'), 6, 4);
        $namaJAM = substr(date('h:i:s'), 0, 2) . substr(date('h:i:s'), 3, 2) . substr(date('h:i:s'), 6, 2);
        return $laporan->stream('lap' . $namaTGL . $namaJAM . 'pdf');
    }

    public function cetakPDFsembako()
    {
        $viewsembako = DB::table('viewsembako')->select('*')->get();
        $data = [
            'viewsembako' => $viewsembako,
            'tanggal' => date('d/m/Y'),
            'judul' => "Laporan Data Bantuan Sembako"
        ];
        $laporan = PDF::loadView('sembako.laporan', $data)->setPaper('F4', 'lanscape');
        // 01/10/2024
        $namaTGL = substr(date('d/m/Y'), 0, 2) . substr(date('d/m/Y'), 3, 2) . substr(date('d/m/Y'), 6, 4);
        $namaJAM = substr(date('h:i:s'), 0, 2) . substr(date('h:i:s'), 3, 2) . substr(date('h:i:s'), 6, 2);
        return $laporan->stream('lap' . $namaTGL . $namaJAM . 'pdf');
    }

    public function cetakPDFPenduduk()
    {
        $penduduks = DB::table('Penduduks')->select('*')->get();
        $data = [
            'penduduks' => $penduduks,
            'tanggal' => date('d/m/Y'),
            'judul' => "Laporan Data Penduduk"
        ];
        $laporan = PDF::loadView('Penduduk.laporan', $data)->setPaper('F4', 'lanscape');
        // 01/10/2024
        $namaTGL = substr(date('d/m/Y'), 0, 2) . substr(date('d/m/Y'), 3, 2) . substr(date('d/m/Y'), 6, 4);
        $namaJAM = substr(date('h:i:s'), 0, 2) . substr(date('h:i:s'), 3, 2) . substr(date('h:i:s'), 6, 2);
        return $laporan->stream('lap' . $namaTGL . $namaJAM . 'pdf');
    }

    public function cetakPDFtunai()
    {
        $viewtunai = DB::table('viewtunai')->select('*')->get();
        $data = [
            'viewtunai' => $viewtunai,
            'tanggal' => date('d/m/Y'),
            'judul' => "Laporan Data Bantuan Tunai"
        ];
        $laporan = PDF::loadView('tunai.laporan', $data)->setPaper('F4', 'lanscape');
        // 01/10/2024
        $namaTGL = substr(date('d/m/Y'), 0, 2) . substr(date('d/m/Y'), 3, 2) . substr(date('d/m/Y'), 6, 4);
        $namaJAM = substr(date('h:i:s'), 0, 2) . substr(date('h:i:s'), 3, 2) . substr(date('h:i:s'), 6, 2);
        return $laporan->stream('lap' . $namaTGL . $namaJAM . 'pdf');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\Sembako;
use Illuminate\Support\Facades\DB;

class SembakoController extends Controller
{
    public function index()
    {
        $viewsembakos = DB::table('viewsembako')->select('*')->get();
        return view('sembako.sembako', compact('viewsembakos'));
    }

    public function create()
    {
        $penduduks = Penduduk::orderBy('nik_kk', 'ASC')->get();
        return view('sembako.create', compact('penduduks'));
    }

    public function store(Request $request)
    {
        $simpan = new Sembako();
        $simpan->nik_kk = $request->input('nik');
        $simpan->jenis_bantuan = $request->input('jenis');
        $simpan->tgl_bantuan = $request->input('tanggal');
        $simpan->keterangan = $request->input('keterangan');
        $simpan->save();
        return redirect()->route('sembako.index')->with('pesan', 'Data Berhasil Ditambahkan');
    }

    public function show(string $id)
    {
        $data = Sembako::where('id', $id)->first();

        return view('sembako.show', compact('data'));
    }

    public function edit(string $id)
    {
        $viewsembakos = DB::table('viewsembako')->where('id', $id)->get();
        $penduduks = Penduduk::orderBy('nik_kk', 'ASC')->get();
        return view('sembako.edit', compact('viewsembakos', 'penduduks'));
    }

    public function update(Request $request, string $id)
    {
        $ubah = Sembako::findOrFail($id);
        $ubah->nik_kk = $request->input('nik');
        $ubah->tgl_bantuan = $request->input('tanggal');
        $ubah->jenis_bantuan = $request->input('jenis');
        $ubah->keterangan = $request->input('keterangan');
        $ubah->save();
        return redirect()->route('sembako.index')->with('pesan', 'Data Berhasil Diubah');
    }

    public function destroy(string $id)
    {
        $hapus = Sembako::findOrFail($id);
        $hapus->delete();
        return redirect()->route('sembako.index')->with('pesan', 'Data Berhasil Dihapus');
    }
}

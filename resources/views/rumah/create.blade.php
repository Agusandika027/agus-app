@extends('template.master')

<!-- isi bagian judul halaman -->
@section('judul_halaman', 'TAMBAH DATA BANTUAN TUNAI LANGSUNG')

<!-- isi bagian konten -->
@section('konten')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-success">
          <h3 class="card-title"> </h3>
        </div>
        <div class="card-body">
          <form action="{{ route('rumah.store') }}" method="POST">
            @csrf
            <div class="form-group row">
              <label class="form-label col-sm-2">PENERIMA</label>
              <div class="col-sm-4">
                <select name="nik" id="nik" class="form-control">
                  @foreach ($penduduks as $penduduk)
                    <option value="{{ $penduduk->nik_kk }}">{{ $penduduk->nik_kk }} |
                      {{ $penduduk->nama_kk }}</option>
                  @endforeach
                </select>
              </div>

              <label class="form-label col-sm-2">JUMLAH DANA</label>
              <div class="col-sm-4">
                <div class="input-group">
                  <input type="text" name="dana" placeholder="JUMLAH DANA" class="form-control"
                    value="{{ old('dana') }}" required>
                </div>
              </div>

              <label class="form-label col-sm-2">TANGGAL TERIMA</label>
              <div class="col-sm-4">
                <div class="input-group">
                  <input type="date" name="tanggal" placeholder="TANGGAL TERIMA BANTUAN" class="form-control"
                    value="{{ old('tanggal') }}" required>
                </div>
              </div>

              <label class="form-label col-sm-2">KETERANGAN</label>
              <div class="col-sm-4">
                <div class="input-group">
                  <input type="text" name="keterangan" placeholder="KETERANGAN" class="form-control"
                    value="{{ old('keterangan') }}" required>
                </div>
              </div>

              <div class="card-footer text-center">
                <button type="submit" class="btn btn-info">SIMPAN</button>
                <a href="{{ route('rumah.index') }}" class="btn btn-danger">BATAL</a>
              </div>


            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
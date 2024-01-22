@extends('template.master')

<!-- isi bagian judul halaman -->
@section('judul_halaman', 'DETAIL DATA BANTUAN TUNAI LANGSUNG')

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
              <label class="form-label col-sm-2">NAMA PENERIMA</label>
              <div class="col-sm-4">
                <div class="input-group">
                  <input type="text" name="nama" class="form-control" value="{{ $data->nama_kk }}" readonly>
                </div>
              </div>

              <label class="form-label col-sm-2">JUMLAH DANA</label>
              <div class="col-sm-4">
                <div class="input-group">
                  <input type="text" name="dana" class="form-control" value="{{ $data->jumlah_dana }}" readonly>
                </div>
              </div>

              <label class="form-label col-sm-2">TANGGAL BANTUAN</label>
              <div class="col-sm-4">
                <div class="input-group">
                  <input type="text" name="tanggal" class="form-control" value="{{ $data->tgl_bantuan }}" readonly>
                </div>
              </div>

              <label class="form-label col-sm-2">KETERANGAN</label>
              <div class="col-sm-4">
                <div class="input-group">
                  <input type="text" name="keterangan" class="form-control" value="{{ $data->keterangan }}" readonly>
                </div>
              </div>

              <div class="card-footer text-center">
                <a href="{{ route('rumah.index') }}" class="btn btn-secondary">KEMBALI</a>
              </div>


            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
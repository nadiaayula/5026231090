@extends('templatelatihan')
@section('content')

<h3>Lihat Data Karyawan</h3>

<div class="form-horizontal">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Kode Pegawai</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{ $mykaryawan->kodepegawai }}" readonly>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{ $mykaryawan->namalengkap }}" readonly>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Divisi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{ $mykaryawan->divisi }}" readonly>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Departemen</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{ $mykaryawan->departemen }}" readonly>
        </div>
    </div>

    <a href="/eas" class="btn btn-secondary">Kembali ke Index</a>
</div>
@endsection

@extends('templatelatihan')
@section('content')

<h3>Edit Data Karyawan</h3>

<form class="form-horizontal" action="/eas/update" method="POST">
    @csrf
    <input type="hidden" name="kodepegawai" value="{{ $mykaryawan->kodepegawai }}">

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
            <input type="text" name="namalengkap" class="form-control" value="{{ ucwords(strtolower($mykaryawan->namalengkap)) }}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Divisi</label>
        <div class="col-sm-10">
            <input type="text" name="divisi" class="form-control" value="{{ $mykaryawan->divisi }}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Departemen</label>
        <div class="col-sm-10">
            <input type="text" name="departemen" class="form-control" value="{{ $mykaryawan->departemen }}">
        </div>
    </div>

    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
</form>
@endsection

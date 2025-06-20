@extends('templatelatihan')
@section('content')

<h3 class="mb-3">Data Karyawan</h3>

<!-- Tombol Tambah -->
<div class="d-flex justify-content-end mb-3">
    <a href="/karyawan/tambah" class="btn btn-info">+ Tambah Karyawan Baru</a>
</div>

<!-- Tabel -->
<table class="table table-striped">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($karyawan as $p)
        <tr>
            <td>{{ $p->kodepegawai }}</td>
            <td>{{ strtoupper($p->namalengkap) }}</td>
            <td>{{ $p->divisi }}</td>
            <td>{{ strtolower($p->departemen) }}</td>
            <td>
                <a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

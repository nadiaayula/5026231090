@extends('templatelatihan')
@section('content')

<h3>Data MyKaryawan</h3>

<table class="table">
    <thead>
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mykaryawan as $row)
        <tr>
            <td>{{ $row->kodepegawai }}</td>
            <td>{{ ucwords(strtolower($row->namalengkap)) }}</td>
            <td>{{ $row->divisi }}</td>
            <td>{{ $row->departemen }}</td>
            <td>
                <a href="/eas/view/{{ $row->kodepegawai }}" class="btn btn-info btn-sm">View</a>
                <a href="/eas/edit/{{ $row->kodepegawai }}" class="btn btn-warning btn-sm">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection


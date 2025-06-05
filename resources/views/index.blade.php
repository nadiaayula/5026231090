@extends('template')
@section('content')


    <h3>Data Pegawai</h3>
        <a href="/pegawai/tambah" class="btn btn-primary mb-3"> + Tambah Pegawai Baru</a>


	<form action="/pegawai/cari" method="GET" class="form-inline">
        <label class=form-label">Cari Data Pegawai :</label>
		<input type="text" name="cari" placeholder="Cari Pegawai .." class="form-control">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>

    <br />

    <table border="1" class="table table-striped">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-success">Edit</a>
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
     {{-- hanya bisa dipakai dengan paginate --}}
        {{
            $pegawai->links('pagination::bootstrap-4')
        }}
@endsection

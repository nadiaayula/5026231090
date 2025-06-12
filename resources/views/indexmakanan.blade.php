@extends('templatemakanan')
@section('content')

    <h3 class="mt-4 mb-3">Data Makanan</h3>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('makanan.create') }}" class="btn btn-primary"> + Tambah Makanan Baru</a>

        <form action="{{ route('makanan.cari') }}" method="GET" class="form-inline ml-auto">
            <label class="form-label mr-2">Cari Merk Makanan :</label>
            <input type="text" name="cari" placeholder="Cari Merk Makanan.." class="form-control mr-2" value="{{ request('cari') }}">
            <input type="submit" value="CARI" class="btn btn-info">
        </form>
    </div>

    <br />

    @if ($makanans->isEmpty())
        <div class="alert alert-warning text-center" role="alert">
            Tidak ada data makanan yang ditemukan.
        </div>
    @else
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Merk Makanan</th>
                    <th>Harga</th>
                    <th>Tersedia</th>
                    <th>Berat (Kg)</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($makanans as $makanan)
                <tr>
                    <td>{{ $makanan->id }}</td>
                    <td>{{ $makanan->merkmakanan }}</td>
                    <td>Rp{{ number_format($makanan->hargamakanan, 0, ',', '.') }}</td>
                    <td>
                        @if ($makanan->tersedia)
                            <span class="badge badge-success">Tersedia</span>
                        @else
                            <span class="badge badge-danger">Tidak Tersedia</span>
                        @endif
                    </td>
                    <td>{{ number_format($makanan->berat, 2, ',', '.') }} Kg</td>
                    <td>
                        <a href="{{ route('makanan.edit', $makanan->id) }}" class="btn btn-success btn-sm mr-1">Edit</a>
                        <form action="{{ route('makanan.destroy', $makanan->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $makanans->links('pagination::bootstrap-4') }}
        </div>
    @endif

@endsection

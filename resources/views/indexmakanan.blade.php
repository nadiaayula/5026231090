@extends('templatemakanan')
@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
        <h3 class="mb-0">Manajemen Makanan</h3>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            @if (session('id_baru'))
                (ID: {{ session('id_baru') }})
            @endif
            <button type="button" class="close" data-dismiss="alert" aria-label="Tutup">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="mb-3 p-3 rounded" style="background-color: #f9fafe; border: 1px solid #eee;">
        <strong>Total Data:</strong> {{ $total }} &nbsp; | &nbsp;
        <strong>Total Harga:</strong> Rp{{ number_format($totalHarga, 0, ',', '.') }} &nbsp; | &nbsp;
        <strong>Rata-rata Berat:</strong> {{ number_format($rataBerat, 2, ',', '.') }} Kg
    </div>

    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <form action="{{ route('makanan.index') }}" method="GET" class="form-inline mb-2">
            <input type="text" name="cari" placeholder="Cari Merk Makanan..." class="form-control mr-2" value="{{ request('cari') }}">

            <select name="sort" class="form-control mr-2">
                <option value="">Urutkan</option>
                <option value="harga_asc" {{ request('sort') == 'harga_asc' ? 'selected' : '' }}>Harga Termurah</option>
                <option value="harga_desc" {{ request('sort') == 'harga_desc' ? 'selected' : '' }}>Harga Termahal</option>
                <option value="berat_asc" {{ request('sort') == 'berat_asc' ? 'selected' : '' }}>Berat Terendah</option>
                <option value="berat_desc" {{ request('sort') == 'berat_desc' ? 'selected' : '' }}>Berat Tertinggi</option>
            </select>

            <button type="submit" class="btn btn-outline-secondary">Terapkan</button>
        </form>

        <a href="{{ route('makanan.create') }}" class="btn btn-primary mb-2">+ Tambah Makanan Baru</a>
    </div>

    @if ($makanans->isEmpty())
        <div class="alert alert-warning text-center">
            Tidak ada data makanan yang ditemukan.
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-bordered bg-white shadow-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Merk Makanan</th>
                        <th>Harga</th>
                        <th>Status</th>
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
                                    <span class="badge-tersedia">Tersedia</span>
                                @else
                                    <span class="badge-tidak">Tidak Tersedia</span>
                                @endif
                            </td>
                            <td>{{ number_format($makanan->berat, 2, ',', '.') }} Kg</td>
                            <td>
                                <a href="{{ route('makanan.edit', $makanan->id) }}" class="btn-soft btn-edit mr-1">Edit</a>
                                <form action="{{ route('makanan.destroy', $makanan->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn-soft btn-hapus">Hapus</button>
                                    </form>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center">
            {{ $makanans->appends(request()->query())->links('pagination::bootstrap-4') }}
        </div>
    @endif

@endsection

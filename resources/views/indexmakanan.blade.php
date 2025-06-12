@extends('templatemakanan')
@section('content')

    <div class="d-flex justify-content-between align-items-center mb-2 flex-wrap">
        <h3 class="mb-1">Manajemen Makanan</h3>
        <div class="mb-3 d-inline-block px-3 py-1 rounded" style="background-color: #f1f3ff; color: #333; font-size: 0.95rem; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
            <strong>5026231090</strong> — Nadia Ayula Assyaputri
        </div>
    </div>

    <!-- Ringkasan Data -->
    <div class="mb-3 p-3 rounded" style="background-color: #f9fafe; border: 1px solid #eee;">
        <strong>Total Data:</strong> {{ $total }} &nbsp; | &nbsp;
        <strong>Total Harga:</strong> Rp{{ number_format($totalHarga, 0, ',', '.') }} &nbsp; | &nbsp;
        <strong>Rata-rata Berat:</strong> {{ number_format($rataBerat, 2, ',', '.') }} Kg
    </div>

    <!-- Tombol & Sorting -->
    <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
        <a href="{{ route('makanan.create') }}" class="btn btn-primary mb-2">+ Tambah Makanan Baru</a>

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

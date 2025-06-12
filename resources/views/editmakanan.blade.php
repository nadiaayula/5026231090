@extends('templatemakanan')
@section('content')

    <h3 class="mt-4 mb-3">Edit Makanan</h3>

    <a href="{{ route('makanan.index') }}" class="btn btn-secondary mb-3"> Kembali</a>

    <br />
    <br />

    <form action="{{ route('makanan.update') }}" method="POST">
        @csrf
        @method('POST')
        <input type="hidden" name="id" value="{{ $makanan->id }}">

        <div class="row mb-3">
            <div class="col-md-3">
                <label for="merkmakanan" class="col-form-label">Merk Makanan:</label>
            </div>
            <div class="col-md-9">
                <input type="text" id="merkmakanan" name="merkmakanan" value="{{ old('merkmakanan', $makanan->merkmakanan) }}" class="form-control @error('merkmakanan') is-invalid @enderror" required>
                @error('merkmakanan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3">
                <label for="hargamakanan" class="col-form-label">Harga Makanan:</label>
            </div>
            <div class="col-md-9">
                <input type="number" id="hargamakanan" name="hargamakanan" value="{{ old('hargamakanan', $makanan->hargamakanan) }}" class="form-control @error('hargamakanan') is-invalid @enderror" required>
                @error('hargamakanan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3">
                <label for="berat" class="col-form-label">Berat (Kg):</label>
            </div>
            <div class="col-md-9">
                <input type="number" step="0.01" id="berat" name="berat" value="{{ old('berat', $makanan->berat) }}" class="form-control @error('berat') is-invalid @enderror" required>
                @error('berat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="row mb-4 align-items-center">
            <div class="col-md-3">
                <label class="col-form-label">Status:</label>
            </div>
            <div class="col-md-9">
                <div class="form-check">
                    <input type="checkbox" id="tersedia" name="tersedia" value="1" {{ old('tersedia', $makanan->tersedia) ? 'checked' : '' }} class="form-check-input @error('tersedia') is-invalid @enderror">
                    <label for="tersedia" class="form-check-label">Tersedia</label>
                </div>
                @error('tersedia')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-9 offset-md-3">
                <button type="submit" class="btn btn-primary">Update Data</button>
            </div>
        </div>
    </form>

@endsection

@extends('templatelatihan')
@section('content')

    <div class="text-center my-5">
        <h4 class="mb-4">Page Counter</h4>

        <div class="alert alert-success d-inline-block px-4 py-3">
            Anda Pengunjung ke: <strong>{{ $jumlah }}</strong>
        </div>
    </div>
@endsection


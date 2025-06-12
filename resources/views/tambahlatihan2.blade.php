<body>
    @extends('template')
    @section('content')

    <h3>Data Karyawan</h3>

    <a href="/karyawan"> Kembali</a>

    <br />
    <br />
    {{-- action mengarah ke karyawan/store untuk dilakukan routing --}}
    <form action="/karyawan/store" method="post">
        {{ csrf_field() }}
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Kode </label>
            </div>
            <div class="col-6">
                <input type="text" name="kodepegawai" required="required" class="form-control">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Nama Lengkap </label>
            </div>
            <div class="col-6">
                <input type="text" name="namalengkap" required="required" class="form-control">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Divisi </label>
            </div>
            <div class="col-6">
                <input type="text" name="divisi" required="required" class="form-control">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Departemen </label>
            </div>
            <div class="col-6">
                <input type="text" name="departemen" required="required" class="form-control">
            </div>
        </div>

        <br />
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
    @endsection
</body>

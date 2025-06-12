<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanDBController extends Controller
{
    public function index()
    {
        $karyawan = DB::table('karyawan')->paginate(10);
    	return view('indexlatihan2',['karyawan' => $karyawan]);
    }

    public function tambah(){
        return view('tambahkaryawan');
    }

    public function store(Request $request)
    {
        // insert data ke table karyawan
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/karyawan');

    }

    public function update(Request $request)
    {

        DB::table('karyawan')
        ->where('kodepegawai',$request->kodepegawai)
        ->update([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        return redirect('/karyawan');
    }

    public function hapus($kodepegawai)
    {
        DB::table('karyawan')
        ->where('kodepegawai',$kodepegawai)
        ->delete();

        return redirect('/pegawai');
    }

}

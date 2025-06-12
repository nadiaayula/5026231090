<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MakananController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('daftar_makanan');

        // Pencarian
        if ($request->has('cari')) {
            $query->where('merkmakanan', 'like', "%{$request->cari}%");
        }

        // Sorting
        if ($request->sort == 'harga_asc') {
            $query->orderBy('hargamakanan', 'asc');
        } elseif ($request->sort == 'harga_desc') {
            $query->orderBy('hargamakanan', 'desc');
        } elseif ($request->sort == 'berat_asc') {
            $query->orderBy('berat', 'asc');
        } elseif ($request->sort == 'berat_desc') {
            $query->orderBy('berat', 'desc');
        }

        $makanans = $query->paginate(10);

        // Data summary
        $total = DB::table('daftar_makanan')->count();
        $totalHarga = DB::table('daftar_makanan')->sum('hargamakanan');
        $rataBerat = DB::table('daftar_makanan')->avg('berat');

        return view('indexmakanan', compact('makanans', 'total', 'totalHarga', 'rataBerat'));
    }

    public function create()
    {

        return view('tambahmakanan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merkmakanan'  => 'required|string|max:25',
            'hargamakanan' => 'required|integer|min:0',
            'tersedia'     => 'boolean',
            'berat'        => 'required|numeric|min:0',
        ]);

        $tersediaValue = $request->has('tersedia') ? 1 : 0;

        DB::table('daftar_makanan')->insert([
            'merkmakanan'  => $request->merkmakanan,
            'hargamakanan' => $request->hargamakanan,
            'tersedia'     => $tersediaValue,
            'berat'        => $request->berat,
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);

        return redirect()->route('makanan.index')->with('success', 'Makanan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $makanan = DB::table('daftar_makanan')->where('id', $id)->first();

        if (!$makanan) {
            abort(404);
        }

        // Mengubah view path dari 'makanan.edit' menjadi 'editmakanan'
        return view('editmakanan', compact('makanan'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id'           => 'required|integer|exists:daftar_makanan,id',
            'merkmakanan'  => 'required|string|max:25',
            'hargamakanan' => 'required|integer|min:0',
            'tersedia'     => 'boolean',
            'berat'        => 'required|numeric|min:0',
        ]);

        $id = $request->id;
        $tersediaValue = $request->has('tersedia') ? 1 : 0;

        DB::table('daftar_makanan')->where('id', $id)->update([
            'merkmakanan'  => $request->merkmakanan,
            'hargamakanan' => $request->hargamakanan,
            'tersedia'     => $tersediaValue,
            'berat'        => $request->berat,
            'updated_at'   => now(),
        ]);

        return redirect()->route('makanan.index')->with('success', 'Makanan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        DB::table('daftar_makanan')->where('id', $id)->delete();
        return redirect()->route('makanan.index')->with('success', 'Makanan berhasil dihapus!');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $makanans = DB::table('daftar_makanan')
                    ->where('merkmakanan', 'like', "%".$cari."%")
                    ->paginate(10);

        return view('indexmakanan', compact('makanans'));
    }
}

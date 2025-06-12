<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\PageCounterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//latihan 1 Soal Perempuan
Route::get('/latihan1', [PageCounterController::class, 'index']);

//route makanan
Route::get('/makanan', [MakananController::class, 'index'])->name('makanan.index');
Route::get('/makanan/tambah', [MakananController::class, 'create'])->name('makanan.create');
Route::post('/makanan/store', [MakananController::class, 'store'])->name('makanan.store');
Route::get('/makanan/edit/{id}', [MakananController::class, 'edit'])->name('makanan.edit');
Route::post('/makanan/update', [MakananController::class, 'update'])->name('makanan.update');
Route::delete('/makanan/{id}', [MakananController::class, 'destroy'])->name('makanan.destroy');
Route::get('/makanan/cari', [MakananController::class, 'cari'])->name('makanan.cari');

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']); // tambahan baru


Route::get('/', function () {
    return view('welcome');
});

Route::get('/pertama', function () {
    return view('pertama');
});

Route::get('/template1', function () {
    return view('template1');
});

Route::get('/cssposition', function () {
    return view('cssposition');
});

Route::get('/cssproperty', function () {
    return view('cssproperty');
});

Route::get('/validation', function () {
    return view('validasi1');
});

Route::get('/bootgrid', function () {
    return view('bootstramp1');
});

Route::get('/calculator', function () {
    return view('js1');
});

Route::get('/boottemplate', function () {
    return view('latihanlayout');
});

Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('/uts', function () {
    return view('index');
});

Route::get('/publish', function () {
    return view('frontend');
});
Route::get('dosen', [DosenController::class, 'index']);
Route::get('welcome', [DosenController::class, 'welcome']);

Route::get('/pegawai/{nama}',[PegawaiController::class, 'index']);
Route::get('/formulir',[PegawaiController::class, 'formulir']);
Route::post('/formulir/proses',[PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

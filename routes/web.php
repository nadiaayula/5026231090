<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

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

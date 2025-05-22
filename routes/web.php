<?php

use Illuminate\Support\Facades\Route;

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
<?php

use App\Http\Controllers\cobacontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // Controller
    return view('welcome');
});
// php artisan make:controller namacontroller (-r) Opsional

Route::get('/rumah', function () {
    return view('home');
});

Route::view('/blade', 'coba');

Route::get('/coba/jenis',[cobacontroller::class,'Jenis']);

Route::get('/coba/tahun/{berapa}', [cobacontroller::class,'Tahun']);

Route::get('/coba/penerbit',[cobacontroller::class,'Penerbit']);

// Route about (hyperlink), [(controller yang di tuju),(function yang dituju)]
Route::get('/about', [App\Http\Controllers\AboutController::class,'index']);

Route::get('/mahasiswa', [\App\Http\Controllers\MahasiswaController::class,'index']);

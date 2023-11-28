<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\SoalController;
use App\Http\Controllers\paketController;
use App\Http\Controllers\indexController;

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

Route::get('/',[indexController::class,'index']);

Route::get('/form',function(){
    return view('form');
});


Route::get('/table','App\Http\Controllers\SiswaController@index');
Route::post('/siswa/store','App\Http\Controllers\SiswaController@store');
Route::get('/siswa/tambah','App\Http\Controllers\SiswaController@create');
Route::get('/siswa/edit/{id}','App\Http\Controllers\SiswaController@edit');
Route::patch('/siswa/update/{id}','App\Http\Controllers\SiswaController@update');
Route::get('/siswa/delete/{id}','App\Http\Controllers\SiswaController@delete');

Route::get('/soal',[SoalController::class,'index']);
Route::get('/soal/tambah',[SoalController::class,'create']);
Route::post('/soal/store',[SoalController::class,'store']);

Route::get('/paket',[paketController::class,'index']);
Route::get('/tugas',function(){
    return view('soal.tugas');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('home');

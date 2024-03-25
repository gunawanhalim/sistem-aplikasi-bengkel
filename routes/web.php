<?php
/* composer require doctrine/dba */

use App\Models\master_kota;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\master_kendaraan_controller;
use App\Http\Controllers\master_kota_controller;
use App\Http\Controllers\master_t_kendaraan_in_controller;
use App\Http\Controllers\master_type_kendaraan_controller;
use App\Models\master_t_kendaraan_in;

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
    return view('home');
});

Route::get('/kendaraan', [master_kendaraan_controller::class,'index']);
Route::get('/kendaraan-detail/{id}', [master_kendaraan_controller::class,'show']);
Route::get('/kendaraan-add', [master_kendaraan_controller::class,'create']);
Route::post('/kendaraan',[master_kendaraan_controller::class,'store']);
Route::get('/kendaraan-edit/{id}', [master_kendaraan_controller::class,'edit']);
Route::put('/kendaraan/{id}', [master_kendaraan_controller::class, 'update']);
Route::get('/kendaraan-delete/{id}', [master_kendaraan_controller::class, 'delete']);
Route::delete('/kendaraan-destroy/{id}', [master_kendaraan_controller::class, 'destroy']);
//-------------------------------------------------------------------------

Route::get('/kota', [master_kota_controller::class,'index']);
Route::get('/kota-detail/{id}', [master_kota_controller::class,'show']);
Route::get('/kota-add', [master_kota_controller::class,'create']);
Route::post('/kota', [master_kota_controller::class,'store']);
//-------------------------------------------------------------------------

Route::get('/type_kendaraan', [master_type_kendaraan_controller::class,'index']);
Route::get('/kendaraan_masuk', [master_t_kendaraan_in_controller::class,'index']);










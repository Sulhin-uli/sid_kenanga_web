<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KabarDesaApiController;
use App\Http\Controllers\PengaduanApiController;
use App\Http\Controllers\PermintaanSuratApiController;
use App\Http\Controllers\NotifikasiApiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JNApiController;
use App\Http\Controllers\UserApiController;
use App\Http\Controllers\VisiMisiApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:sanctum'], function(){
    
    });

// login
Route::post("login",[UserController::class,'index']);

// kabar desa
Route::get('/kabar_desa', [KabarDesaApiController::class, 'index']);
Route::get('/kabar_desa/{id_kabar_desa}', [KabarDesaApiController::class, 'show']);

// pengaduan
Route::get('/pengaduan', [PengaduanApiController::class, 'index']);
Route::post('/pengaduan', [PengaduanApiController::class, 'store']);
Route::get('/pengaduan/{nik}', [PengaduanApiController::class, 'show']);

// Permintaan surat
Route::get('/permintaan_surat', [PermintaanSuratApiController::class, 'index']);
Route::post('/permintaan_surat', [PermintaanSuratApiController::class, 'store']);
Route::get('/permintaan_surat/{nik}', [PermintaanSuratApiController::class, 'show']);

// notifikasi
Route::post('/notifikasi', [NotifikasiApiController::class, 'store']);

// notifikasi
Route::post('/jumlah_notif', [JNApiController::class, 'store']);

// user
Route::get('/user/{nik}', [UserApiController::class, 'show']);
Route::put('/user/{nik}', [UserApiController::class, 'update']);

// visi Misi
Route::get('/visi_misi', [VisiMisiApiController::class, 'index']);
Route::get('/visi_misi/{id_visimisi}', [VisiMisiApiController::class, 'show']);


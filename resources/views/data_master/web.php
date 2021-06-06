<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\KabarDesaController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\AparaturDesaController;
use App\Http\Controllers\AgendaKegiatanController;
use App\Http\Controllers\PageAparaturDesaController;
use App\Http\Controllers\PageVisiMisiController;
use App\Http\Controllers\PageBerandaController;

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

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//penduduk 
Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk');
Route::get('/penduduk/detail/{id_penduduk}', [PendudukController::class, 'detail']);
Route::get('/penduduk/tambah', [PendudukController::class, 'tambah']);
Route::post('/penduduk/tambah_aksi', [PendudukController::class, 'tambah_aksi']);
Route::get('/penduduk/ubah/{id_penduduk}', [PendudukController::class, 'ubah']);
Route::post('/penduduk/ubah_aksi/{id_penduduk}', [PendudukController::class, 'ubah_aksi']);
Route::get('/penduduk/hapus/{id_penduduk}', [PendudukController::class, 'hapus']);
Route::get('/penduduk/print', [PendudukController::class, 'print']);

// Visi Misi
Route::get('/visimisi', [VisiMisiController::class, 'index'])->name('visimisi');
Route::get('/visimisi/detail/{id_penduduk}', [VisiMisiController::class, 'detail']);
Route::get('/visimisi/tambah', [VisiMisiController::class, 'tambah']);
Route::post('/visimisi/tambah_aksi', [VisiMisiController::class, 'tambah_aksi']);
Route::get('/visimisi/ubah/{id_visimisi}', [VisiMisiController::class, 'ubah']);
Route::post('/visimisi/ubah_aksi/{id_visimisi}', [VisiMisiController::class, 'ubah_aksi']);
Route::get('/visimisi/hapus/{id_visimisi}', [VisiMisiController::class, 'hapus']);

// Aparatur Desa
Route::get('/aparaturdesa', [AparaturDesaController::class, 'index'])->name('aparaturdesa');
Route::get('/aparaturdesa/detail/{id_aparaturdesa}', [AparaturDesaController::class, 'detail']);
Route::get('/aparaturdesa/tambah', [AparaturDesaController::class, 'tambah']);
Route::post('/aparaturdesa/tambah_aksi', [AparaturDesaController::class, 'tambah_aksi']);
Route::get('/aparaturdesa/ubah/{id_aparaturdesa}', [AparaturDesaController::class, 'ubah']);
Route::post('/aparaturdesa/ubah_aksi/{id_aparaturdesa}', [AparaturDesaController::class, 'ubah_aksi']);
Route::get('/aparaturdesa/hapus/{id_aparaturdesa}', [AparaturDesaController::class, 'hapus']);

// Agenda Kegiatan
Route::get('/agendakegiatan', [AgendaKegiatanController::class, 'index'])->name('agendakegiatan');
Route::get('/agendakegiatan/detail/{id_agendakegiatan}', [AgendaKegiatanController::class, 'detail']);
Route::get('/agendakegiatan/tambah', [AgendaKegiatanController::class, 'tambah']);
Route::post('/agendakegiatan/tambah_aksi', [AgendaKegiatanController::class, 'tambah_aksi']);
Route::get('/agendakegiatan/ubah/{id_agendakegiatan}', [AgendaKegiatanController::class, 'ubah']);
Route::post('/agendakegiatan/ubah_aksi/{id_agendakegiatan}', [AgendaKegiatanController::class, 'ubah_aksi']);
Route::get('/agendakegiatan/hapus/{id_agendakegiatan}', [AgendaKegiatanController::class, 'hapus']);

// landing page beranda
Route::get('/beranda', [PageBerandaController::class, 'index'])->name('beranda');

// landing page Tentang
Route::get('/tentang', [PageVisiMisiController::class, 'index'])->name('tentang');

// landing page aparatur desa
Route::get('/aparatur_desa', [PageAparaturDesaController::class, 'index'])->name('aparatur_desa');

// landing page pengaduan
// Route::get('/pengaduan', function () {
//     return view('components.pengaduan');
// });

//kabar desa
Route::get('/kabar_desa', [KabarDesaController::class, 'index'])->name('kabar_desa');
Route::get('/kabar_desa/detail/{id}', [KabarDesaController::class, 'detail']);
Route::get('/kabar_desa/tambah', [KabarDesaController::class, 'tambah']);
Route::post('/kabar_desa/tambah_aksi', [KabarDesaController::class, 'tambah_aksi']);
Route::get('/kabar_desa/ubah/{id}', [KabarDesaController::class, 'ubah']);
Route::post('/kabar_desa/ubah_aksi/{id}', [KabarDesaController::class, 'ubah_aksi']);
Route::get('/kabar_desa/hapus/{id}', [KabarDesaController::class, 'hapus']);

//Pengaduan
Route::get('/pengaduan', [PengaduanController::class, 'index'])->name('pengaduan');
Route::get('/pengaduan/detail/{id_pengaduan}', [PengaduanController::class, 'detail']);
Route::get('/pengaduan/hapus/{id_pengaduan}', [KabarDesaController::class, 'hapus']);


// surat
Route::get('/surat', [SuratController::class, 'index']);
Route::get('/findPenduduk', [SuratController::class, 'getPenduduk']);

// Surat Keterangan usaha
Route::get('/surat/surat_keterangan_usaha', [SuratController::class, 'surat_keterangan_usaha']);
Route::post('/surat/surat_keterangan_usaha_aksi', [SuratController::class, 'surat_keterangan_usaha_aksi']);

// Surat Keterangan domisili
Route::get('/surat/surat_keterangan_domisili', [SuratController::class, 'surat_keterangan_domisili']);
Route::post('/surat/surat_keterangan_domisili_aksi', [SuratController::class, 'surat_keterangan_domisili_aksi']);

// Surat Keterangan domisili Perusahaan
Route::get('/surat/surat_keterangan_domisili_perusahaan', [SuratController::class, 'surat_keterangan_domisili_perusahaan']);
Route::post('/surat/surat_keterangan_domisili_perusahaan_aksi', [SuratController::class, 'surat_keterangan_domisili_perusahaan_aksi']);

// Surat Keterangan domisili bangunan
Route::get('/surat/surat_keterangan_domisili_bangunan', [SuratController::class, 'surat_keterangan_domisili_bangunan']);
Route::post('/surat/surat_keterangan_domisili_bangunan_aksi', [SuratController::class, 'surat_keterangan_domisili_bangunan_aksi']);

// Surat Keterangan domisili kelompok usaha
Route::get('/surat/surat_keterangan_domisili_kelompokusaha', [SuratController::class, 'surat_keterangan_domisili_kelompokusaha']);
Route::post('/surat/surat_keterangan_domisili_kelompokusaha_aksi', [SuratController::class, 'surat_keterangan_domisili_kelompokusaha_aksi']);

// Surat Keterangan gempur gakin sktm
Route::get('/surat/surat_gempur_gakin_sktm', [SuratController::class, 'surat_gempur_gakin_sktm']);
Route::post('/surat/surat_gempur_gakin_sktm_aksi', [SuratController::class, 'surat_gempur_gakin_sktm_aksi']);

// Surat Keterangan ahli waris bank
Route::get('/surat/surat_keterangan_ahliwaris_bank', [SuratController::class, 'surat_keterangan_ahliwaris_bank']);
Route::post('/surat/surat_keterangan_ahliwaris_bank_aksi', [SuratController::class, 'surat_keterangan_ahliwaris_bank_aksi']);

// Surat Keterangan pindah
Route::get('/surat/surat_keterangan_pindah', [SuratController::class, 'surat_keterangan_pindah']);
Route::post('/surat/surat_keterangan_pindah_aksi', [SuratController::class, 'surat_keterangan_pindah_aksi']);

// Surat Pernyataan SKTM
Route::get('/surat/surat_pernyataan_sktm', [SuratController::class, 'surat_pernyataan_sktm']);
Route::post('/surat/surat_pernyataan_sktm_aksi', [SuratController::class, 'surat_pernyataan_sktm_aksi']);
<?php

namespace App\Http\Controllers;

use App\Models\PendudukModel;
use App\Models\SuratModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuratController extends Controller
{
    public function __construct()
    {
        $this->SuratModel = new SuratModel();
        $this->middleware('auth');
    }
    public function index()
    {
        $data = [
            'surat' => $this->SuratModel->allData(),
        ];
        return view('surat.v_surat', $data);
    }

    public function getPenduduk()
    {
        $p = PendudukModel::all();
        return response()->json($p);
    }

    // Surat Keterangan usaha
    public function surat_keterangan_usaha()
    {
        return view('surat-template.v_keterangan_usaha');
    }
    public function surat_keterangan_usaha_aksi()
    {
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('surat_keterangan_usaha.docx');

        $templateProcessor->setValues(
            $data = [
                'nik' => Request()->nik,
                'nama' => Request()->nama,
                'tempat_lahir' => Request()->tempat_lahir,
                'tanggal_lahir' => Request()->tanggal_lahir,
                'jenis_kelamin' => Request()->jenis_kelamin,
                'agama' => Request()->agama,
                'status_perkawinan' => Request()->status_perkawinan,
                'kewarganegaraan' => Request()->kewarganegaraan,
                'pekerjaan' => Request()->pekerjaan,
                'alamat' => Request()->alamat,
                'nomor_surat' => Request()->nomor_surat,
                'nama_usaha' => Request()->nama_usaha,
                'tanggal_surat' => Request()->tanggal_surat,
            ]
        );

        header("Content-Disposition: attachment; filename=surat_keterangan_usaha.docx");
        $templateProcessor->saveAs('php://output');
    }

    // Surat Keterangan domisili
    public function surat_keterangan_domisili()
    {
        return view('surat-template.v_keterangan_domisili');
    }
    public function surat_keterangan_domisili_aksi()
    {
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('surat_keterangan_domisili.docx');

        $templateProcessor->setValues(
            $data = [
                'nomor_surat' => Request()->nomor_surat,
                'nama_cv' => Request()->nama_cv,
                'nama_direktur' => Request()->nama_direktur,
                'alamat' => Request()->alamat,
                'desa' => Request()->desa,
                'kecamatan' => Request()->kecamatan,
                'kabupaten' => Request()->kabupaten,
                'provinsi' => Request()->provinsi,
                'tanggal_surat' => Request()->tanggal_surat,
                'nama_ttd' => Request()->nama_ttd,
            ]
        );

        header("Content-Disposition: attachment; filename=surat_keterangan_domisili.docx");
        $templateProcessor->saveAs('php://output');
    }

    // Surat Keterangan domisili perusahaan
    public function surat_keterangan_domisili_perusahaan()
    {
        return view('surat-template.v_keterangan_domisili_perusahaan');
    }
    public function surat_keterangan_domisili_perusahaan_aksi()
    {
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('surat_keterangan_domisili_perusahaan.docx');

        $templateProcessor->setValues(
            $data = [
                'nomor_surat' => Request()->nomor_surat,
                'nama_perusahaan' => Request()->nama_perusahaan,
                'nama_pemilik' => Request()->nama_pemilik,
                'alamat_lengkap' => Request()->alamat_lengkap,
                'tanggal_surat' => Request()->tanggal_surat,
                'nama_kuwu' => Request()->nama_kuwu,
            ]
        );

        header("Content-Disposition: attachment; filename=surat_keterangan_domisili_perusahaan.docx");
        $templateProcessor->saveAs('php://output');
    }

    // Surat Keterangan domisili bangunan
    public function surat_keterangan_domisili_bangunan()
    {
        return view('surat-template.v_keterangan_domisili_bangunan');
    }
    public function surat_keterangan_domisili_bangunan_aksi()
    {
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('surat_keterangan_domisili_bangunan.docx');

        $templateProcessor->setValues(
            $data = [
                'nomor_surat' => Request()->nomor_surat,
                'nama_bangunan' => Request()->nama_bangunan,
                'alamat_lengkap' => Request()->alamat_lengkap,
                'tanggal_surat' => Request()->tanggal_surat,
                'nama_ttd' => Request()->nama_ttd,
            ]
        );

        header("Content-Disposition: attachment; filename=surat_keterangan_domisili_bangunan.docx");
        $templateProcessor->saveAs('php://output');
    }

    // Surat Keterangan domisili kelompok usaha
    public function surat_keterangan_domisili_kelompokusaha()
    {
        return view('surat-template.v_keterangan_domisili_kelompokusaha');
    }
    public function surat_keterangan_domisili_kelompokusaha_aksi()
    {
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('surat_keterangan_domisili_kelompokusaha.docx');

        $templateProcessor->setValues(
            $data = [
                'nomor_surat' => Request()->nomor_surat,
                'nama_kelompok' => Request()->nama_kelompok,
                'jenis_usaha' => Request()->jenis_usaha,
                'nama_ketua' => Request()->nama_ketua,
                'ttl' => Request()->ttl,
                'alamat_lengkap' => Request()->alamat_lengkap,
                'jalan' => Request()->jalan,
                'rtrw' => Request()->rtrw,
                'desa' => Request()->desa,
                'kecamatan' => Request()->kecamatan,
                'kabupaten' => Request()->kabupaten,
                'provinsi' => Request()->provinsi,
                'tanggal_surat' => Request()->tanggal_surat,
                'nama_kuwu' => Request()->nama_kuwu,
            ]
        );

        header("Content-Disposition: attachment; filename=surat_keterangan_domisili_kelompokusaha.docx");
        $templateProcessor->saveAs('php://output');
    }

    // Surat Keterangan gempur gakin SKTM
    public function surat_gempur_gakin_sktm()
    {
        return view('surat-template.v_keterangan_gempur_gakin_sktm');
    }
    public function surat_gempur_gakin_sktm_aksi()
    {
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('surat_gempur_gakin_sktm.docx');

        $templateProcessor->setValues(
            $data = [
                'nomor_surat' => Request()->nomor_surat,
                'nama' => Request()->nama,
                'ttl' => Request()->ttl,
                'umur' => Request()->umur,
                'alamat_lengkap' => Request()->alamat_lengkap,
                'nama_ortu' => Request()->nama_ortu,
                'ttl_ortu' => Request()->ttl_ortu,
                'pekerjaan_ortu' => Request()->pekerjaan_ortu,
                'alamat_ortu' => Request()->alamat_ortu,
                'tanggal_surat' => Request()->tanggal_surat,
                'nama_kuwu' => Request()->nama_kuwu,
                'nip' => Request()->nip,
                'rumah_sakit' => Request()->rumah_sakit,
            ]
        );

        header("Content-Disposition: attachment; filename=surat_gempur_gakin_sktm.docx");
        $templateProcessor->saveAs('php://output');
    }

    // Surat Keterangan Ahli Waris Bank
    public function surat_keterangan_ahliwaris_bank()
    {
        return view('surat-template.v_keterangan_ahliwaris_bank');
    }
    public function surat_keterangan_ahliwaris_bank_aksi()
    {
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('surat_keterangan_ahliwaris_bank.docx');

        $templateProcessor->setValues(
            $data = [
                'reg_nomor' => Request()->reg_nomor,
                'tanggal_surat' => Request()->tanggal_surat,
                'nama_kuwu' => Request()->nama_kuwu,
                'nama_pewaris' => Request()->nama_pewaris,
                'hari' => Request()->hari,
                'tgl_meninggal' => Request()->tgl_meninggal,
                'gender_ahliwaris' => Request()->gender_ahliwaris,
                'nama_ahliwaris' => Request()->nama_ahliwaris,
                'ttl_ahliwaris' => Request()->ttl_ahliwaris,
                'alamat_ahliwaris' => Request()->alamat_ahliwaris,
                'no_rek' => Request()->no_rek,
                'nip' => Request()->nip,
            ]
        );

        header("Content-Disposition: attachment; filename=surat_keterangan_ahliwaris_bank.docx");
        $templateProcessor->saveAs('php://output');
    }

    // Surat Keterangan Pindah
    public function surat_keterangan_pindah()
    {
        return view('surat-template.v_keterangan_pindah');
    }
    public function surat_keterangan_pindah_aksi()
    {
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('surat_keterangan_pindah.docx');

        $templateProcessor->setValues(
            $data = [
                'nomor_surat' => Request()->nomor_surat,
                'nama_kuwu' => Request()->nama_kuwu,
                'nama_pemohon' => Request()->nama_pemohon,
                'nik' => Request()->nik,
                'tempat' => Request()->tempat,
                'ttl' => Request()->ttl,
                'gender' => Request()->gender,
                'negara' => Request()->negara,
                'agama' => Request()->agama,
                'pekerjaan' => Request()->pekerjaan,
                'status' => Request()->status,
                'alamat_asal' => Request()->alamat_asal,
                'pendidikan' => Request()->pendidikan,
                'desa_pindah' => Request()->desa_pindah,
                'blok' => Request()->blok,
                'rtrw' => Request()->rtrw,
                'kecamatan' => Request()->kecamatan,
                'kabupaten' => Request()->kabupaten,
                'provinsi' => Request()->provinsi,
                'tgl_pindah' => Request()->tgl_pindah,
                'alasan_pindah' => Request()->alasan_pindah,
                'ikut_pindah' => Request()->ikut_pindah,
                'tanggal_surat' => Request()->tanggal_surat,
                'juru_tulis' => Request()->juru_tulis,
            ]
        );

        header("Content-Disposition: attachment; filename=surat_keterangan_pindah.docx");
        $templateProcessor->saveAs('php://output');
    }

    // Surat Pernyataan SKTM
    public function surat_pernyataan_sktm()
    {
        return view('surat-template.v_keterangan_sktm');
    }
    public function surat_pernyataan_sktm_aksi()
    {
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('surat_pernyataan_sktm.docx');

        $templateProcessor->setValues(
            $data = [
                'nama_kuwu' => Request()->nama_kuwu,
                'nama_pemohon' => Request()->nama_pemohon,
                'nik' => Request()->nik,
                'ttl' => Request()->ttl,
                'gender' => Request()->gender,
                'agama' => Request()->agama,
                'pekerjaan' => Request()->pekerjaan,
                'status' => Request()->status,
                'alamat_lengkap' => Request()->alamat_lengkap,
                'pemilik_rumah' => Request()->pemilik_rumah,
                'desa' => Request()->desa,
                'rtrw' => Request()->rtrw,
                'kecamatan' => Request()->kecamatan,
                'kabupaten' => Request()->kabupaten,
                'tanggal_surat' => Request()->tanggal_surat,
            ]
        );

        header("Content-Disposition: attachment; filename=surat_pernyataan_sktm.docx");
        $templateProcessor->saveAs('php://output');
    }
}

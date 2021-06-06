<?php

namespace App\Http\Controllers;

use Request;
use App\Models\PermintaanSuratModel;

class PermintaanSuratController extends Controller
{
    public function __construct()
    {
        $this->PermintaanSuratModel = new PermintaanSuratModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'permintaan_surat' => $this->PermintaanSuratModel->allData(),
        ];
        return view('permintaan_surat.v_permintaan_surat', $data);
    }

    public function detail($id_permintaan_surat)
    {
        if (!$this->PermintaanSuratModel->detailData($id_permintaan_surat)) {
            abort(404);
        }
        $data = [
            'permintaan_surat' => $this->PermintaanSuratModel->detailData($id_permintaan_surat),
        ];
        return view('permintaan_surat.v_detail_permintaan_surat', $data);
    }

    public function hapus($id_permintaan_surat)
    {
        $this->PermintaanSuratModel->deleteData($id_permintaan_surat);
        return redirect()->route('permintaan_surat')->with('pesan', 'Data berhasil dihapus');
    }

    public function hapusTerpilih(Request $request)
    {
        $checked = Request::input('checked',[]);
        if($checked == null) {
            return redirect()->route('permintaan_surat')->with('pesan', 'Tidak ada data yg dihapus');
        }else{
            $this->PermintaanSuratModel->deleteSelectData($checked);
            return redirect()->route('permintaan_surat')->with('pesan', 'Data berhasil dihapus');
        }
    }

    public function ubah_aksi($id_permintaan_surat)
    {

            $data = [
                'status' => Request()->status
            ];
            // $this->PermintaanSuratModel->editData($id_permintaan_surat,$data);
        

        $this->PermintaanSuratModel->editData($id_permintaan_surat, $data);
        $data = [
            'permintaan_surat' => $this->PermintaanSuratModel->allData(),
        ];
        return view('permintaan_surat.v_permintaan_surat', $data);
    }
}

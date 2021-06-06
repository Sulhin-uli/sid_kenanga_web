<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisiMisiModel;

class VisiMisiController extends Controller
{
    public function __construct()
    {
        $this->VisiMisiModel = new VisiMisiModel();
        $this->middleware('auth');
    }
    public function index()
    {
        $data = [
            'visimisi' => $this->VisiMisiModel->allData(),
        ];
        return view('data_master.visi_misi.v_visimisi', $data);
    }
    public function tambah()
    {
        return view('data_master.visi_misi.v_tambah');
    }
    
    public function detail($id_visimisi)
    {
        if (!$this->VisiMisiModel->detailData($id_visimisi)) {
            abort(404);
        }
        $data = [
            'visimisi' => $this->VisiMisiModel->detailData($id_visimisi),
        ];
        return view('data_master.visi_misi.v_detail', $data);
    }

    public function ubah($id_visimisi)
    {
        if (!$this->VisiMisiModel->detailData($id_visimisi)) {
            abort(404);
        }
        $data = [
            'visimisi' => $this->VisiMisiModel->detailData($id_visimisi),
        ];
        return view('data_master.visi_misi.v_ubah', $data);
    }

    public function ubah_aksi($id_visimisi)
    {
        Request()->validate([
            'visi' => 'required',
            'misi' => 'required',
        ], [
            'visi.required' => 'Wajib diisi !',
            'misi.required' => 'Wajib diisi !',
        ]);
        $data = [
            'visi' => Request()->visi,
            'misi' => Request()->misi,
        ];
        $this->VisiMisiModel->editData($id_visimisi, $data);
        return redirect()->route('visimisi')->with('pesan', 'Data Berhasil Ubah');
    }
}
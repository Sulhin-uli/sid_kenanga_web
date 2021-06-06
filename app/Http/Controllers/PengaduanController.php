<?php

namespace App\Http\Controllers;

use App\Models\PengaduanModel;
use Request;

class PengaduanController extends Controller
{
    public function __construct()
    {
        $this->PengaduanModel = new PengaduanModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'pengaduan' => $this->PengaduanModel->allData(),
        ];
        return view('pengaduan.v_pengaduan', $data);
    }

    public function detail($id_pengaduan)
    {
        if (!$this->PengaduanModel->detailData($id_pengaduan)) {
            abort(404);
        }
        $data = [
            'pengaduan' => $this->PengaduanModel->detailData($id_pengaduan),
        ];
        return view('pengaduan.v_detail_pengaduan', $data);
    }

    public function hapus($id_pengaduan)
    {
        $this->PengaduanModel->deleteData($id_pengaduan);
        return redirect()->route('pengaduan')->with('pesan', 'Data berhasil dihapus');
    }

    public function hapusTerpilih(Request $request)
    {
        $checked = Request::input('checked',[]);
        if($checked == null) {
            return redirect()->route('pengaduan')->with('pesan', 'Tidak ada data yg dihapus');
        }else{
            $this->PengaduanModel->deleteSelectData($checked);
            return redirect()->route('pengaduan')->with('pesan', 'Data berhasil dihapus');
        }
    }

    public function ubah_aksi($id_pengaduan)
    {

            $data = [
                'status' => Request()->status
            ];
            // $this->PengaduanModel->editData($id_pengaduan,$data);
        

        $this->PengaduanModel->editData($id_pengaduan, $data);
        // return redirect()->route('pengaduan/detail/$id_pengaduan ');
        $data = [
            'pengaduan' => $this->PengaduanModel->detailData($id_pengaduan),
        ];
        return view('pengaduan.v_detail_pengaduan', $data);

    }
}

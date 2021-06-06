<?php

namespace App\Http\Controllers;
use DB;
use Request;
use App\Models\NotifikasiModel;

class NotifikasiController extends Controller
{
    public function __construct()
    {
        $this->NotifikasiModel = new NotifikasiModel();
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = [
            'notifikasi' => $this->NotifikasiModel->allData(),
        ];
        return view('notifikasi.v_notifikasi', $data);
    }

    public function ubah_aksi($id_notifikasi)
    {

            $data = [
                'status' => Request()->status
            ];
            $this->NotifikasiModel->editData($id_notifikasi, $data);
        

        $this->NotifikasiModel->editData($id_notifikasi, $data);
        return redirect()->route('notifikasi')->with('pesan', 'Data Berhasil Dilihat');
    }

    public function detail($id_notifikasi)
    {
        if (!$this->NotifikasiModel->detailData($id_notifikasi)) {
            abort(404);
        }
        $data = [
            'notifikasi' => $this->NotifikasiModel->detailData($id_notifikasi),
        ];
        return view('notifikasi.v_detail_notifikasi', $data);
    }

    public function hapus($id_notifikasi)
    {

        $this->NotifikasiModel->deleteData($id_notifikasi);
        return redirect()->route('notifikasi')->with('pesan', 'Data berhasil dihapus');
    }

    public function hapus_notif()
    {
        $hapus_notif = DB::table('jumlah_notif')->truncate();
        $data = [
            'notifikasi' => $this->NotifikasiModel->allData(),
        ];
        return view('notifikasi.v_notifikasi', $data);

    }

    public function hapusTerpilih(Request $request)
    {
        $checked = Request::input('checked',[]);
        if($checked == null) {
            return redirect()->route('notifikasi')->with('pesan', 'Tidak ada data yg dihapus');
        }else{
            $this->NotifikasiModel->deleteSelectData($checked);
            return redirect()->route('notifikasi')->with('pesan', 'Data berhasil dihapus');
        }
    }
}

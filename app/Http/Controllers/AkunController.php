<?php

namespace App\Http\Controllers;
use App\Models\AkunModel;

use Request;


class AkunController extends Controller
{
    public function __construct()
    {
        $this->AkunModel = new AkunModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'akun' => $this->AkunModel->allData(),
        ];
        return view('akun.v_akun', $data);
    }

    public function detail($id)
    {
        if (!$this->AkunModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'akun' => $this->AkunModel->detailData($id),
        ];
        return view('akun.v_detail_akun', $data);
    }

    public function tambah()
    {
        return view('akun.v_tambah_akun');
    }

    public function tambah_aksi()
    {
        Request()->validate([
            'nik' => 'required|unique:penduduk,nik|max:20|min:10',
            'name' => 'required',
            'pin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ], [
            'nik.required' => 'wajib diisi !',
            'name.required' => 'wajib diisi !',
            'pin' => 'required',
            'alamat.required' => 'wajib diisi !',
            'no_hp.required' => 'wajib diisi !',
        ]);

        //jika validasi tidak ada maka lakukan simpan data

        $data = [
            'nik' => Request()->nik,
            'name' => Request()->name,
            'pin' => Request()->pin,
            'alamat' => Request()->alamat,
            'no_hp' => Request()->no_hp,
            'is_admin' => Request()->is_admin,
        ];

        $this->AkunModel->addData($data);
        return redirect()->route('akun')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    public function ubah($id)
    {
        if (!$this->AkunModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'akun' => $this->AkunModel->detailData($id),
        ];
        return view('akun.v_ubah_akun', $data);
    }

    public function ubah_aksi($id)
    {
        Request()->validate([
            'name' => 'required',
            'nik' => 'required',
            'pin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            // 'gambar' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ], [
            'name.required' => 'wajib diisi !',
            'nik.required' => 'wajib diisi !',
            'pin' => 'required',
            'alamat.required' => 'wajib diisi !',
            'no_hp.required' => 'wajib diisi !',
        ]);

       
            $data = [
                'name' => Request()->name,
                'nik' => Request()->nik,
                'pin' => Request()->pin,
                'alamat' => Request()->alamat,
                'no_hp' => Request()->no_hp,
            ];
            $this->AkunModel->editData($id, $data);
        

        $this->AkunModel->editData($id, $data);
        return redirect()->route('akun')->with('pesan', 'Data Berhasil Ubah');
    }

    public function hapus($id)
    {
        $this->AkunModel->deleteData($id);
        return redirect()->route('akun')->with('pesan', 'Data berhasil dihapus');
    }

    public function hapusTerpilih(Request $request)
    {
        $checked = Request::input('checked',[]);
        if($checked == null) {
            return redirect()->route('akun')->with('pesan', 'Tidak ada data yg dihapus');
        }else{
            $this->AkunModel->deleteSelectData($checked);
            return redirect()->route('akun')->with('pesan', 'Data berhasil dihapus');
        }
    }
}

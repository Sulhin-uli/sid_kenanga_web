<?php

namespace App\Http\Controllers;

use Request;
use App\Models\AparaturDesaModel;

class AparaturDesaController extends Controller
{
    public function __construct()
    {
        $this->AparaturDesaModel = new AparaturDesaModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'aparaturdesa' => $this->AparaturDesaModel->allData(),
        ];
        return view('data_master.aparatur_desa.v_aparaturdesa', $data);
    }

    public function tambah()
    {
        return view('data_master.aparatur_desa.v_tambah');
    }
    
    public function tambah_aksi()
    {
        Request()->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ], [
            'nama.required' => 'wajib diisi !',
            'jabatan.required' => 'wajib diisi !',
        ]);

        //jika validasi tidak ada maka lakukan simpan data
        //upload foto
        $file = Request()->foto;
        $fileName = Request()->nama . '.' . $file->extension();
        $file->move(public_path('img-aparaturdesa'), $fileName);

        $data = [
            'foto' => $fileName,
            'nama' => Request()->nama,
            'jabatan' => Request()->jabatan,
        ];

        $this->AparaturDesaModel->addData($data);
        return redirect()->route('aparaturdesa')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    public function detail($id_aparaturdesa)
    {
        if (!$this->AparaturDesaModel->detailData($id_aparaturdesa)) {
            abort(404);
        }
        $data = [
            'aparaturdesa' => $this->AparaturDesaModel->detailData($id_aparaturdesa),
        ];
        return view('data_master.aparatur_desa.v_detail', $data);
    }

    public function ubah($id_aparaturdesa)
    {
        if (!$this->AparaturDesaModel->detailData($id_aparaturdesa)) {
            abort(404);
        }
        $data = [
            'aparaturdesa' => $this->AparaturDesaModel->detailData($id_aparaturdesa),
        ];
        return view('data_master.aparatur_desa.v_ubah', $data);
    }

    public function ubah_aksi($id_aparaturdesa)
    {
        Request()->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ], [
            'nama.required' => 'wajib diisi !',
            'jabatan.required' => 'wajib diisi !',
        ]);

        //jika validasi tidak ada maka lakukan simpan data

        if (Request()->foto <> "") {
            //jika akan mengganti foto
            //upload foto
            $file = Request()->foto;
            $fileName = Request()->nama . '.' . $file->extension();
            $file->move(public_path('img-aparaturdesa'), $fileName);

            $data = [
                'foto' => $fileName,
                'nama' => Request()->nama,
                'jabatan' => Request()->jabatan,
            ];
            $this->AparaturDesaModel->editData($id_aparaturdesa, $data);
        } else {
            //jika tdk akan mengganti foto
            $data = [
                'nama' => Request()->nama,
                'jabatan' => Request()->jabatan,
            ];
            $this->AparaturDesaModel->editData($id_aparaturdesa, $data);
        }

        $this->AparaturDesaModel->editData($id_aparaturdesa, $data);
        return redirect()->route('aparaturdesa')->with('pesan', 'Data Berhasil Ubah');
    }

    public function hapus($id_aparaturdesa)
    {
        //hapus atau delete foto
        $aparaturdesa = $this->AparaturDesaModel->detailData($id_aparaturdesa);
        if ($aparaturdesa->foto <> "") {
            unlink(public_path('img-aparaturdesa') . '/' . $aparaturdesa->foto);
        }
        $this->AparaturDesaModel->deleteData($id_aparaturdesa);
        return redirect()->route('aparaturdesa')->with('pesan', 'Data berhasil dihapus');
    }

    public function hapusTerpilih(Request $request)
    {
        $checked = Request::input('checked',[]);
        if($checked == null) {
            return redirect()->route('aparaturdesa')->with('pesan', 'Tidak ada data yg dihapus');
        }else{
            $this->AparaturDesaModel->deleteSelectData($checked);
            return redirect()->route('aparaturdesa')->with('pesan', 'Data berhasil dihapus');
        }
    }
}

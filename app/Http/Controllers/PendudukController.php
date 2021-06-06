<?php

namespace App\Http\Controllers;

use App\Models\PendudukModel;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function __construct()
    {
        $this->PendudukModel = new PendudukModel();
        $this->middleware('auth');
    }
    public function index()
    {
        $data = [
            'penduduk' => $this->PendudukModel->allData(),
        ];
        return view('penduduk.v_penduduk', $data);
    }
    public function detail($id_penduduk)
    {
        if (!$this->PendudukModel->detailData($id_penduduk)) {
            abort(404);
        }
        $data = [
            'penduduk' => $this->PendudukModel->detailData($id_penduduk),
        ];
        return view('penduduk.v_detail_penduduk', $data);
    }
    public function tambah()
    {
        return view('penduduk.v_tambah_penduduk');
    }
    public function tambah_aksi()
    {
        Request()->validate([
            'nik' => 'required|unique:penduduk,nik|max:20|min:10',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'foto_penduduk' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ], [
            'nik.required' => 'wajib diisi !',
            'nik.unique' => 'NIK sudah ada !',
            'nik.min' => 'min 10 karaker',
            'nik.max' => 'max 20 karakter',
            'nama.required' => 'wajib diisi !',
            'tempat_lahir.required' => 'wajib diisi !',
            'foto_penduduk.required' => 'wajib diisi !',
        ]);

        //jika validasi tidak ada maka lakukan simpan data
        //upload foto
        $file = Request()->foto_penduduk;
        $fileName = Request()->nik . '.' . $file->extension();
        $file->move(public_path('img-profil'), $fileName);

        $data = [
            'foto_penduduk' => $fileName,
            'nik' => Request()->nik,
            'nama' => Request()->nama,
            'tempat_lahir' => Request()->tempat_lahir,
        ];

        $this->PendudukModel->addData($data);
        return redirect()->route('penduduk')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    public function ubah($id_penduduk)
    {
        if (!$this->PendudukModel->detailData($id_penduduk)) {
            abort(404);
        }
        $data = [
            'penduduk' => $this->PendudukModel->detailData($id_penduduk),
        ];
        return view('penduduk.v_ubah_penduduk', $data);
    }
    public function ubah_aksi($id_penduduk)
    {
        Request()->validate([
            'nik' => 'required|max:20|min:10',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'foto_penduduk' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ], [
            'nik.required' => 'wajib diisi !',
            'nik.min' => 'min 10 karaker',
            'nik.max' => 'max 20 karakter',
            'nama.required' => 'wajib diisi !',
            'tempat_lahir.required' => 'wajib diisi !',
        ]);

        //jika validasi tidak ada maka lakukan simpan data

        if (Request()->foto_penduduk <> "") {
            //jika akan mengganti foto
            //upload foto
            $file = Request()->foto_penduduk;
            $fileName = Request()->nik . '.' . $file->extension();
            $file->move(public_path('img-profil'), $fileName);

            $data = [
                'foto_penduduk' => $fileName,
                'nik' => Request()->nik,
                'nama' => Request()->nama,
                'tempat_lahir' => Request()->tempat_lahir,
            ];
            $this->PendudukModel->editData($id_penduduk, $data);
        } else {
            //jika tdk akan mengganti foto
            $data = [
                'nik' => Request()->nik,
                'nama' => Request()->nama,
                'tempat_lahir' => Request()->tempat_lahir,
            ];
            $this->PendudukModel->editData($id_penduduk, $data);
        }

        $this->PendudukModel->editData($id_penduduk, $data);
        return redirect()->route('penduduk')->with('pesan', 'Data Berhasil Ubah');
    }

    public function hapus($id_penduduk)
    {
        //hapus atau delete foto
        $penduduk = $this->PendudukModel->detailData($id_penduduk);
        if ($penduduk->foto_penduduk <> "") {
            unlink(public_path('img-profil') . '/' . $penduduk->foto_penduduk);
        }
        $this->PendudukModel->deleteData($id_penduduk);
        return redirect()->route('penduduk')->with('pesan', 'Data berhasil dihapus');
    }

    public function print()
    {
        $data = [
            'penduduk' => $this->PendudukModel->allData(),
        ];
        return view('v_print', $data);
    }
}

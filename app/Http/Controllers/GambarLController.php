<?php

namespace App\Http\Controllers;

use App\Models\GambarLModel;
use Illuminate\Http\Request;

class GambarLController extends Controller
{
    public function __construct()
    {
        $this->GambarLModel = new GambarLModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'gambar_lp' => $this->GambarLModel->allData(),
        ];
        return view('gambar_lp.v_gambar_lp', $data);
    }

    public function ubah($id)
    {
        if (!$this->GambarLModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'gambar_lp' => $this->GambarLModel->detailData($id),
        ];
        return view('gambar_lp.v_ubah_gambar_lp', $data);
    }

    public function ubah_aksi($id)
    {
        Request()->validate([
            'gambar' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ]);

        //jika validasi tidak ada maka lakukan simpan data

            //jika akan mengganti foto
            //upload foto
            $file = Request()->gambar;
            $fileName = Request()->judul . '.' . $file->extension();
            $file->move(public_path('img-gambar_lp'), $fileName);

            $data = [
                'gambar' => $fileName,
            ];
            $this->GambarLModel->editData($id, $data);
        

        $this->GambarLModel->editData($id, $data);
        return redirect()->route('gambar_lp')->with('pesan', 'Data Berhasil Ubah');
    }
}

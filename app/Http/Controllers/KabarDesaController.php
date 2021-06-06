<?php

namespace App\Http\Controllers;

use App\Models\KabarDesaModel;
use App\Models\Kabar_desa;
use Request;

class KabarDesaController extends Controller
{
    public function __construct()
    {
        $this->KabarDesaModel = new KabarDesaModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'kabar_desa' => $this->KabarDesaModel->allData(),
        ];
        return view('kabar_desa.v_kabar_desa', $data);
    }

    public function tambah()
    {
        return view('kabar_desa.v_tambah_kabar_desa');
    }
    
    public function tambah_aksi()
    {
        Request()->validate([
            'judul' => 'required',
            'tanggal' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,bmp,png',
            'isi' => 'required',
        ], [
            'judul.required' => 'wajib diisi !',
            'tanggal.required' => 'wajib diisi !',
            'isi.required' => 'wajib diisi !',
        ]);

        //jika validasi tidak ada maka lakukan simpan data
        //upload foto
        $file = Request()->gambar;
        $fileName = Request()->judul . '.' . $file->extension();
        $file->move(public_path('img-kabar_desa'), $fileName);

        $data = [
            'gambar' => $fileName,
            'judul' => Request()->judul,
            'tanggal' => Request()->tanggal,
            'isi' => Request()->isi,
        ];

        $this->KabarDesaModel->addData($data);
        return redirect()->route('kabar_desa')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    public function detail($id_kabar_desa)
    {
        if (!$this->KabarDesaModel->detailData($id_kabar_desa)) {
            abort(404);
        }
        $data = [
            'kabar_desa' => $this->KabarDesaModel->detailData($id_kabar_desa),
        ];
        return view('kabar_desa.v_detail_kabar_desa', $data);
    }

    public function ubah($id_kabar_desa)
    {
        if (!$this->KabarDesaModel->detailData($id_kabar_desa)) {
            abort(404);
        }
        $data = [
            'kabar_desa' => $this->KabarDesaModel->detailData($id_kabar_desa),
        ];
        return view('kabar_desa.v_ubah_kabar_desa', $data);
    }

    public function ubah_aksi($id_kabar_desa)
    {
        Request()->validate([
            'judul' => 'required',
            'tanggal' => 'required',
            'gambar' => 'mimes:jpg,jpeg,bmp,png',
            'isi' => 'required',
        ], [
            'judul.required' => 'wajib diisi !',
            'tanggal.required' => 'wajib diisi !',
            'isi.required' => 'wajib diisi !',
        ]);

        //jika validasi tidak ada maka lakukan simpan data

        if (Request()->gambar <> "") {
            //jika akan mengganti foto
            //upload foto
            $file = Request()->gambar;
            $fileName = Request()->judul . '.' . $file->extension();
            $file->move(public_path('img-kabar_desa'), $fileName);

            $data = [
                'gambar' => $fileName,
                'judul' => Request()->judul,
                'tanggal' => Request()->tanggal,
                'isi' => Request()->isi,
            ];
            $this->KabarDesaModel->editData($id_kabar_desa, $data);
        } else {
            //jika tdk akan mengganti foto
            $data = [
                'judul' => Request()->judul,
                'tanggal' => Request()->tanggal,
                'isi' => Request()->isi,
            ];
            $this->KabarDesaModel->editData($id_kabar_desa, $data);
        }

        $this->KabarDesaModel->editData($id_kabar_desa, $data);
        return redirect()->route('kabar_desa')->with('pesan', 'Data Berhasil Ubah');
    }

    public function hapus($id_kabar_desa)
    {
        //hapus atau delete foto
        $kabar_desa = $this->KabarDesaModel->detailData($id_kabar_desa);
        if ($kabar_desa->gambar <> "") {
            unlink(public_path('img-kabar_desa') . '/' . $kabar_desa->gambar);
        }
        $this->KabarDesaModel->deleteData($id_kabar_desa);
        return redirect()->route('kabar_desa')->with('pesan', 'Data berhasil dihapus');
    }

    public function hapusTerpilih(Request $request)
    {
        $checked = Request::input('checked',[]);
        if($checked == null) {
            return redirect()->route('kabar_desa')->with('pesan', 'Tidak ada data yg dihapus');
        }else{
            $this->KabarDesaModel->deleteSelectData($checked);
            return redirect()->route('kabar_desa')->with('pesan', 'Data berhasil dihapus');
        }
    }

    public function get($id = null)
    {
        if ($id) {
            $kabar_desa = KabarDesaModel::find($id);
            return response()->json(
                [

                    'statusCode' => 200,
                    'message' => 'succes',
                    'data' => $kabar_desa
                ]
            );
        }

        $kabar_desa = KabarDesaModel::all();
        return response()->json(
            [
                'statusCode' => 200,
                'message' => 'succes',
                'data' => $kabar_desa
            ]
        );
    }
}

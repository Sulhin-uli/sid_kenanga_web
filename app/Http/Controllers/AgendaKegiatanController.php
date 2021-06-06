<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgendaKegiatanModel;

class AgendaKegiatanController extends Controller
{
    public function __construct()
    {
        $this->AgendaKegiatanModel = new AgendaKegiatanModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'agendakegiatan' => $this->AgendaKegiatanModel->allData(),
        ];
        return view('data_master.agenda_kegiatan.v_agendakegiatan', $data);
    }

    public function tambah()
    {
        return view('data_master.agenda_kegiatan.v_tambah');
    }
    
    public function tambah_aksi()
    {
        Request()->validate([
            'judul' => 'required',
            'keterangan' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ], [
            'judul.required' => 'wajib diisi !',
            'keterangan.required' => 'wajib diisi !',
        ]);

        //jika validasi tidak ada maka lakukan simpan data
        //upload foto
        $file = Request()->foto;
        $fileName = Request()->judul . '.' . $file->extension();
        $file->move(public_path('img-agendakegiatan'), $fileName);

        $data = [
            'foto' => $fileName,
            'judul' => Request()->judul,
            'keterangan' => Request()->keterangan,
        ];

        $this->AgendaKegiatanModel->addData($data);
        return redirect()->route('agendakegiatan')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    public function detail($id_agendakegiatan)
    {
        if (!$this->AgendaKegiatanModel->detailData($id_agendakegiatan)) {
            abort(404);
        }
        $data = [
            'agendakegiatan' => $this->AgendaKegiatanModel->detailData($id_agendakegiatan),
        ];
        return view('data_master.agenda_kegiatan.v_detail', $data);
    }

    public function ubah($id_agendakegiatan)
    {
        if (!$this->AgendaKegiatanModel->detailData($id_agendakegiatan)) {
            abort(404);
        }
        $data = [
            'agendakegiatan' => $this->AgendaKegiatanModel->detailData($id_agendakegiatan),
        ];
        return view('data_master.agenda_kegiatan.v_ubah', $data);
    }

    public function ubah_aksi($id_agendakegiatan)
    {
        Request()->validate([
            'judul' => 'required',
            'keterangan' => 'required',
            'foto' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ], [
            'judul.required' => 'wajib diisi !',
            'keterangan.required' => 'wajib diisi !',
        ]);

        //jika validasi tidak ada maka lakukan simpan data

        if (Request()->foto <> "") {
            //jika akan mengganti foto
            //upload foto
            $file = Request()->foto;
            $fileName = Request()->judul . '.' . $file->extension();
            $file->move(public_path('img-agendakegiatan'), $fileName);

            $data = [
                'foto' => $fileName,
                'judul' => Request()->judul,
                'keterangan' => Request()->keterangan,
            ];
            $this->AgendaKegiatanModel->editData($id_agendakegiatan, $data);
        } else {
            //jika tdk akan mengganti foto
            $data = [
                'judul' => Request()->judul,
                'keterangan' => Request()->keterangan,
            ];
            $this->AgendaKegiatanModel->editData($id_agendakegiatan, $data);
        }

        $this->AgendaKegiatanModel->editData($id_agendakegiatan, $data);
        return redirect()->route('agendakegiatan')->with('pesan', 'Data Berhasil Ubah');
    }

    public function hapus($id_agendakegiatan)
    {
        //hapus atau delete foto
        $agendakegiatan = $this->AgendaKegiatanModel->detailData($id_agendakegiatan);
        if ($agendakegiatan->foto <> "") {
            unlink(public_path('img-agendakegiatan') . '/' . $agendakegiatan->foto);
        }
        $this->AgendaKegiatanModel->deleteData($id_agendakegiatan);
        return redirect()->route('agendakegiatan')->with('pesan', 'Data berhasil dihapus');
    }
}

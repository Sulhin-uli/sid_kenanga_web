<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisiMisiModel;
use App\Models\VisiMisiApiModel;

class VisiMisiApiController extends Controller
{
    public function index()
    {
        $visi_misi = VisiMisiModel::all();
        return response()->json([
            'message' => 'success',
            'data' => $visi_misi
        ]);
    }
    public function show($id_visimisi)
    {
        $visi_misi = VisiMisiApiModel::where('id_visimisi', $id_visimisi)->get();
        // $this->PengaduanModel = new PengaduanModel();
        // $pengaduan = $this->PengaduanModel->detailDataNIK($nik);
        return response()->json([
            'message' => 'success',
            'data' => $visi_misi
        ]);
    }
}

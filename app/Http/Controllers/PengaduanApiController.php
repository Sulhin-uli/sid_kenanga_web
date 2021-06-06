<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengaduanModel;
use App\Models\Pengaduan;

class PengaduanApiController extends Controller
{
    public function index()
    {

        $this->PengaduanModel = new PengaduanModel();
        $pengaduan = $this->PengaduanModel->allData();

        // $pengaduan = Pengaduan::all();
        return response()->json([
            'message' => 'success',
            'data' => $pengaduan
        ]);
    }

    public function store(Request $request)
    {
        Pengaduan::create($request->all());
        return response()->json([
            'status' => 'ok',
            'message' => 'Member was created!'
        ], 200);
    }

    public function show($nik)
    {
        $pengaduan = Pengaduan::where('nik', $nik)->get();
        return response()->json([
            'message' => 'success',
            'data' => $pengaduan
        ]);
    }
}

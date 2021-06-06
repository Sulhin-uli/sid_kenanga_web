<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PermintaanSuratApiModel;

class PermintaanSuratApiController extends Controller
{
    public function index()
    {
        $permintaanSurat = PermintaanSuratApiModel::all();
        return response()->json([
            'message' => 'success',
            'data' => $permintaanSurat
        ]);
    }

    public function store(Request $request)
    {
        PermintaanSuratApiModel::create($request->all());
        return response()->json([
            'status' => 'ok',
            'message' => 'Member was created!'
        ], 200);
    }

    public function show($nik)
    {
        $permintaanSurat = PermintaanSuratApiModel::where('nik', $nik)->get();
        return response()->json([
            'message' => 'success',
            'data' => $permintaanSurat
        ]);
    }
}

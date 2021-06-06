<?php

namespace App\Http\Controllers;

use App\Models\KabarDesaApiModel;
use App\Models\KabarDesaModel;
use Illuminate\Http\Request;

class KabarDesaApiController extends Controller
{
    public function index()
    {
        $this->KabarDesaModel = new KabarDesaModel();
        $kabar_desa = $this->KabarDesaModel->allData();
        return response()->json([
            'message' => 'success',
            'data' => $kabar_desa
        ]);
    }
    
    public function show($id_kabar_desa)
    {
        $kabar_desa = KabarDesaApiModel::where('id_kabar_desa', $id_kabar_desa)->first();
        return response()->json([
            'message' => 'success',
            'data' => $kabar_desa
        ]);
    }
}

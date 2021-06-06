<?php

namespace App\Http\Controllers;
use App\Models\UserApiModel;;

use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function show($nik)
    {
        $user = UserApiModel::where('nik', $nik)->first();
        // $this->PengaduanModel = new PengaduanModel();
        // $pengaduan = $this->PengaduanModel->detailDataNIK($nik);
        return response()->json([
            'message' => 'success',
            'data' => $user
        ]);
    }

    public function update(Request $request, $nik)
    {
        $pin = $request->pin;
        
        $user = UserApiModel::where('nik', $nik)->first();
        $user->pin = $pin;
        $user->save();
        return response()->json([
            'status' => 'ok',
            'message' => 'Member was Updated!'
        ], 200);
    }
}

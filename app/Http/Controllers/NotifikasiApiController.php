<?php

namespace App\Http\Controllers;
use App\Models\NotifikasiApiModel;

use Illuminate\Http\Request;

class NotifikasiApiController extends Controller
{
    public function store(Request $request)
    {
        NotifikasiApiModel::create($request->all());
        return response()->json([
            'status' => 'ok',
            'message' => 'Member was created!'
        ], 200);
    }
}

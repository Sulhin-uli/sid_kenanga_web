<?php

namespace App\Http\Controllers;
use App\Models\JNApiModel;

use Illuminate\Http\Request;

class JNApiController extends Controller
{
    public function store(Request $request)
    {
        JNApiModel::create($request->all());
        return response()->json([
            'status' => 'ok',
            'message' => 'Member was created!'
        ], 200);
    }
}

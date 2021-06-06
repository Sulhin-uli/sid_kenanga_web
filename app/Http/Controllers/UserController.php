<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function index(Request $request)
    {
        $user= User::where('nik', $request->nik)->first();
        // print_r($data);
            if (!$user || $request->pin != $user->pin) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            } if (!$user || $request->is_admin != $user->is_admin) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
        
             $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'user' => $user,
                'token' => $token
            ];
        
             return response($response, 201);
    }
}

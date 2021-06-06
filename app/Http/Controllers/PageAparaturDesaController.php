<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageAparaturDesaModel;

class PageAparaturDesaController extends Controller
{
    public function __construct()
    {
        $this->PageAparaturDesaModel = new PageAparaturDesaModel();
        // $this->middleware('auth');
    }

    public function index()
    {   
        $data = [
            'aparaturdesa' => $this->PageAparaturDesaModel->allData(),
        ];
        
        return view('aparatur_desa', $data);
    }   

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageVisiMisiModel;

class PageVisiMisiController extends Controller
{
    public function __construct()
    {
        $this->PageVisiMisiModel = new PageVisiMisiModel();
        // $this->middleware('auth');
    }

    public function index()
    {   
        $data = [
            'visimisi' => $this->PageVisiMisiModel->allData(),
        ];
        
        return view('tentang', $data);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NotifModel;

class NotifController extends Controller
{
    public function __construct()
    {
        $this->NotifModel = new NotifModel();
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = [
            'notif' => $this->NotifModel->allData(),
        ];
        return view('notif.v_notif', $data);
    }
}

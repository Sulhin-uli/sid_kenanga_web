<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $apdesa = DB::table('aparaturdesa')->count();
        $agk = DB::table('agendakegiatan')->count();
        $akunpenduduk = DB::table('users')->count();
        $kbrdesa = DB::table('kabar_desa')->count();
        $notif = DB::table('notifikasi')->count();
        $pmntsurat = DB::table('permintaan_surat')->count();
        return view('dashboard.v_dashboard',compact(
            'apdesa', 
            'agk', 
            'akunpenduduk', 
            'kbrdesa', 
            'notif',
            'pmntsurat'
        ));
    }
}

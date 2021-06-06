<?php

namespace App\Http\Controllers;
use App\Models\NotifikasiModel;
use DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->NotifikasiModel = new NotifikasiModel();
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
        $pengaduan = DB::table('pengaduan')->count();
        $kbrdesa = DB::table('kabar_desa')->count();
        $notif = DB::table('notifikasi')->count();
        $notif_terkirim = DB::table('notifikasi')->where('status', "Terkirim")->count();
        $notif_dilihat = DB::table('notifikasi')->where('status', "Dilihat")->count();
        $notif = DB::table('notifikasi')->where('status', "Dilihat")->count();
        $pmntsurat = DB::table('permintaan_surat')->count();
        $jumlah_notif = DB::table('jumlah_notif')->count();
        
        return view('v_home',compact(
            'apdesa', 
            'agk', 
            'pengaduan', 
            'kbrdesa', 
            'notif',
            'notif_terkirim',
            'notif_dilihat',
            'pmntsurat',
            'jumlah_notif'
        ));
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PageBerandaModel extends Model
{
    protected $table = 'visimisi';
    public function allData()
    {
        return DB::table('visimisi')->get();
    }

    public function aptDesa()
    {
        return DB::table('aparaturdesa')->get();
    }

    public function agdkegiatan()
    {
        return DB::table('agendakegiatan')->get();
    }

    public function kbrds()
    {
        return DB::table('kabar_desa')->paginate(3);
    }

    public function informasi($id_kabar_desa)
    {
        return DB::table('kabar_desa')->where('id_kabar_desa', $id_kabar_desa)->first();
    }

    public function show()
    {
        return DB::table('kabar_desa')->get();
    }
    
}

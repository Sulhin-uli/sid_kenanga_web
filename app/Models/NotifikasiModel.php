<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NotifikasiModel extends Model
{
    use HasFactory;
    public function allData()
    {
        return DB::select('select * from notifikasi ORDER BY id_notifikasi DESC');
    }

    public function editData($id_notifikasi, $data)
    {
        return DB::table('notifikasi')
            ->where('id_notifikasi', $id_notifikasi)
            ->update($data);
    }

    public function hapusNotif()
    {
        return DB::table('jumlah_notif')->truncate();
    }

    public function detailData($id_notifikasi)
    {
        return DB::table('notifikasi')->where('id_notifikasi', $id_notifikasi)->first();
    }

    public function deleteData($id_notifikasi)
    {
        return DB::table('notifikasi')
            ->where('id_notifikasi', $id_notifikasi)
            ->delete();
    }

    public function deleteSelectData($data)
    {
        return DB::table('notifikasi')
            ->whereIn('id_notifikasi', $data)
            ->delete();
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AgendaKegiatanModel extends Model
{
    protected $table = 'agendakegiatan';
    public function allData()
    {
        return DB::table('agendakegiatan')->get();
    }

    // Detail
    public function detailData($id_agendakegiatan)
    {
        return DB::table('agendakegiatan')->where('id_agendakegiatan', $id_agendakegiatan)->first();
    }

    // Tambah
    public function addData($data)
    {
        return DB::table('agendakegiatan')->insert($data);
    }

    // Edit
    public function editData($id_agendakegiatan, $data)
    {
        return DB::table('agendakegiatan')
            ->where('id_agendakegiatan', $id_agendakegiatan)
            ->update($data);
    }

    // Hapus
    public function deleteData($id_agendakegiatan)
    {
        return DB::table('agendakegiatan')
            ->where('id_agendakegiatan', $id_agendakegiatan)
            ->delete();
    }

}

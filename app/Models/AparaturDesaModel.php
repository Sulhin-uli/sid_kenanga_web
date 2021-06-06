<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AparaturDesaModel extends Model
{
    protected $table = 'aparaturdesa';
    public function allData()
    {
        // return DB::table('aparaturdesa')->get();
        return DB::select('select * from aparaturdesa ORDER BY id_aparaturdesa DESC');
    }

    // Detail
    public function detailData($id_aparaturdesa)
    {
        return DB::table('aparaturdesa')->where('id_aparaturdesa', $id_aparaturdesa)->first();
    }

    // Tambah
    public function addData($data)
    {
        return DB::table('aparaturdesa')->insert($data);
    }

    // Edit
    public function editData($id_aparaturdesa, $data)
    {
        return DB::table('aparaturdesa')
            ->where('id_aparaturdesa', $id_aparaturdesa)
            ->update($data);
    }

    // Hapus
    public function deleteData($id_aparaturdesa)
    {
        return DB::table('aparaturdesa')
            ->where('id_aparaturdesa', $id_aparaturdesa)
            ->delete();
    }

    public function deleteSelectData($data)
    {
        return DB::table('aparaturdesa')
            ->whereIn('id_aparaturdesa', $data)
            ->delete();
    }

}

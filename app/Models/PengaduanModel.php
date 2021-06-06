<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PengaduanModel extends Model
{
    public function allData()
    {
        return DB::select('select * from pengaduan ORDER BY id_pengaduan DESC');

    }

    public function detailData($id_pengaduan)
    {
        return DB::table('pengaduan')->where('id_pengaduan', $id_pengaduan)->first();
    }

    public function detailDataNIK($nik)
    {
        return DB::table('pengaduan')->where('nik', $nik)->first();
    }

    public function deleteData($id_pengaduan)
    {
        return DB::table('pengaduan')
            ->where('id_pengaduan', $id_pengaduan)
            ->delete();
    }

    public function editData($id_pengaduan, $data)
    {
        return DB::table('pengaduan')
            ->where('id_pengaduan', $id_pengaduan)
            ->update($data);
    }

    public function deleteSelectData($data)
    {
        return DB::table('pengaduan')
            ->whereIn('id_pengaduan', $data)
            ->delete();
    }
}

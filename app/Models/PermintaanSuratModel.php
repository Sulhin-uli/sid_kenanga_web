<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PermintaanSuratModel extends Model
{
    use HasFactory;
    protected $table = 'permintaan_surat';
    public function allData()
    {
        return DB::select('select * from permintaan_surat ORDER BY id_permintaan_surat DESC');
    }

    public function detailData($id_permintaan_surat)
    {
        return DB::table('permintaan_surat')->where('id_permintaan_surat', $id_permintaan_surat)->first();
    }

    public function deleteData($id_permintaan_surat)
    {
        return DB::table('permintaan_surat')
            ->where('id_permintaan_surat', $id_permintaan_surat)
            ->delete();
    }

    public function editData($id_permintaan_surat, $data)
    {
        return DB::table('permintaan_surat')
            ->where('id_permintaan_surat', $id_permintaan_surat)
            ->update($data);
    }

    public function deleteSelectData($data)
    {
        return DB::table('permintaan_surat')
            ->whereIn('id_permintaan_surat', $data)
            ->delete();
    }
}

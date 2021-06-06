<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PendudukModel extends Model
{
    protected $table = 'penduduk';
    public function allData()
    {
        // return DB::table('penduduk')->get();
        return DB::select('select * from penduduk ORDER BY id_penduduk DESC');
    }

    public function detailData($id_penduduk)
    {
        return DB::table('penduduk')->where('id_penduduk', $id_penduduk)->first();
    }

    public function addData($data)
    {
        return DB::table('penduduk')->insert($data);
    }
    public function editData($id_penduduk, $data)
    {
        return DB::table('penduduk')
            ->where('id_penduduk', $id_penduduk)
            ->update($data);
    }
    public function deleteData($id_penduduk)
    {
        return DB::table('penduduk')
            ->where('id_penduduk', $id_penduduk)
            ->delete();
    }
}

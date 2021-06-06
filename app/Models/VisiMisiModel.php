<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class VisiMisiModel extends Model
{
    protected $table = 'visimisi';
    public function allData()
    {
        return DB::table('visimisi')->get();
    }

    public function detailData($id)
    {
        return DB::table('visimisi')->where('id_visimisi', $id)->first();
    }

    public function addData($data)
    {
        return DB::table('visimisi')->insert($data);
    }

    public function editData($id, $data)
    {
        return DB::table('visimisi')
            ->where('id_visimisi', $id)
            ->update($data);
    }
    public function deleteData($id)
    {
        return DB::table('kabar_desa')
            ->where('id_visimisi', $id)
            ->delete();
    }
}

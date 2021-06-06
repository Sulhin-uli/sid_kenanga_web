<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GambarLModel extends Model
{
    use HasFactory;
    protected $table = 'gambar_lp';

    public function allData()
    {
        return DB::select('select * from gambar_lp');
    }

    public function detailData($id)
    {
        return DB::table('gambar_lp')->where('id', $id)->first();
    }

    public function editData($id, $data)
    {
        return DB::table('gambar_lp')
            ->where('id', $id)
            ->update($data);
    }
}
